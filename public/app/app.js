var app = angular.module('knoll', ['ui.bootstrap'], function($interpolateProvider) {
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});
 
 
