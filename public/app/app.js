var app = angular.module('knoll', ['ui.bootstrap','ngRoute','ui.bootstrap.typeahead'], function($interpolateProvider) {
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});
 
 
