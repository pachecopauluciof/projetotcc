/**
 * **************************************************
 * ******* Name: drora
 * ******* Description: Bootstrap 4 Admin Dashboard
 * ******* Version: 1.0.0
 * ******* Released on 2019-02-08 15:41:24
 * ******* Support Email : quixlab.com@gmail.com
 * ******* Support Skype : sporsho9
 * ******* Author: Quixlab
 * ******* URL: https://quixlab.com
 * ******* Themeforest Profile : https://themeforest.net/user/quixlab
 * ******* License: ISC
 * ***************************************************
 */

 const BASE_URL = "http://localhost/";

(function($){
    'use strict'

    var mesasDados;

    $.ajax({
        url: BASE_URL + 'mesas/get_mesas_ajax',
        async: false,
        success: function(result){
            mesasDados = result;
        }
    });

    let mesa = JSON.parse(mesasDados);




    


    $("#tabela-mesa").jsGrid({
        width: "100%",
        height: "400px",

        inserting: true,
        editing: true,
        sorting: true,
        paging: true,
        deleteConfirm: "Deseja mesmo excluir essa mesa ?",

        data: mesa,

    controller: {
      
      insertItem: function(item){
         $.ajax({
        type: "POST",
        url: "mesas/ajax_save_mesa",
        data:item
       });
      },
      updateItem: function(item){
        $.ajax({
        type: "POST",
        url: "mesas/ajax_update_mesa",
        data: item
       });
      },
      deleteItem: function(item){
        $.ajax({
        type: "POST",
        url: "mesas/ajax_delete_mesa",
        data: item
       });
      },
     },


        fields: [
            {
                name: "idmesa", 
                type: "text", 
                css: "hide"
            },
            {
                name: "mesa", 
                title: "Numero mesa", 
                type: "number", 
                width: 150, 
                validate: "required", 
                css:"text-center" },
            {
                name: "senhamesa", 
                title: "Senha", 
                type: "text",
                width: 150, 
                css:"text-center" 
            },
            {
                name: "descricao", 
                title: "Descricao", 
                type: "text", 
                width: 150, 
                css:"text-center" 
            },
            { 
                type: "control" 
            }
        ]
    });

})(jQuery);

