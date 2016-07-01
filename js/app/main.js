// Creación del módulo
var MyApp = angular.module('MyApp', ['ngRoute','ngValidate','ngAnimate','ngTouch','ui.bootstrap','angular-loading-bar']);
angular.module('MyApp')
    /*.config(['cfpLoadingBarProvider', function(cfpLoadingBarProvider) {
        // true is the default, but I left this here as an example:
        cfpLoadingBarProvider.includeSpinner = true;
      })*/
    .config(function ($validatorProvider,cfpLoadingBarProvider) {
        cfpLoadingBarProvider.includeSpinner = true;
        cfpLoadingBarProvider.includeBar = true;        
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



