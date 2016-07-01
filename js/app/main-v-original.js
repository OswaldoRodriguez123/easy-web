// Creación del módulo
var MyApp = angular.module('MyApp', ['ngRoute','ngValidate','ui.bootstrap']);
angular.module('MyApp')
    .config(function ($validatorProvider) {
        $validatorProvider.setDefaults({
            errorElement: 'span',
            errorClass: 'error',
            highlight: function (element) {                    
            $(element).closest('.input').removeClass('has-success has-feedback').addClass('has-error has-feedback');
            },
            unhighlight: function (element) {
            $(element).closest('.input').removeClass('has-error has-feedback').addClass('has-success has-feedback');
            }
        });
    });


