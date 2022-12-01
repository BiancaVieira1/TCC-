/**
 * @file pubsub.js Implementación del patrón Publish/Subscribe
 * @author José Luis Molina Soria
 * @version 20130227
 */

if ( typeof module !== 'undefined' ) {
    var MM = require('./MindMapJS.js');
    MM.Class = require('./klass.js');
}

/**
 * @class MM.PubSub
 * @classdesc Implementación del patrón Publish/Subscribe
 * @constructor MM.PubSub
 */
MM.PubSub = MM.Class.extend(/** @lends MM.PubSub.prototype */{

    eventos : {},

    idSus : 1,

    init : function () {
	this.eventos = {};
	this.idSus = 1;
    },

    /**
     * @desc Realiza la notificación a los suscriptores de que se a producido
     * una publicación o evento.
     * @param evento {string}    nombre del evento o publicación a notificar
     * @param args   {*}         argumentos para la función callback
     * @return {boolean} Si el evento no es un nombre valido retorna false en
     * otro caso retorna true
     */
    on : function( evento ) {
        if (!this.eventos[evento]) {
            return false;
        }
        var args = Array.prototype.slice.call(arguments, 1);
        this.eventos[evento].forEach(function (evt){
            evt.funcion.apply(evt.contexto, args);
        });
        args = null;

        return true;
    },

    /**
     * @desc Pemite la suscripción a una publicación o evento. Donde el parametro func es
     * la función a ejecutar en el caso de que se produzca la notificación y contexto el
     * contexto de ejecución para la función callback
     * @param evento   {string}   nombre del evento o publicación en la que deseamos suscribirnos
     * @param func     {function} función callback
     * @param contexto {object}   contexto de ejecución de la función callback
     * @return {null|number} null en caso de fallo o *idSus* el identificador de suscripción
     */
    suscribir : function( evento, func, contexto ) {
        if ( !evento || !func ) {
            return null;
        }

        if (!this.eventos[evento]) {
            this.eventos[evento] = [];
        }

        contexto = contexto || this;
        this.eventos[evento].push({ id : this.idSus, contexto: contexto, funcion: func });
        return this.idSus++;
    },

    /**
     * @desc realiza una dessuscripción a un evento o notificación
     * @param id   {number} identificador de suscripción
     * @return {null|number} null si no se ha podido realizar la dessuscripción
     */
    desSuscribir : function (id) {
        for (var evento in this.eventos) {
            if ( this.eventos[evento] ) {
                for (var i = 0, len = this.eventos[evento].length; i < len; i++) {
                    if (this.eventos[evento][i].id === id) {
                        this.eventos[evento].splice(i, 1);
                        return id;
                    }
                }
            }
        }
        return null;
    }
    
});

if ( typeof module !== 'undefined' ) {
    module.exports = MM.PubSub;
}
