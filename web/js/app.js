function config($routeProvider) {
	$routeProvider
		.when('/', {
			templateUrl: '../views/main.html',
			controller: 'mainController'
		})
		.when('/register', {
			templateUrl: '../views/register.html',
			controller: 'registerController'
		})
		.when('/holiday', {
			templateUrl: '../views/holiday.html',
			controller: 'holidayController'
		})
		.when('/amis', {
			templateUrl: '../views/amis.html',
			controller: 'holidayController'
		})
		.when('/dashboard', {
			templateUrl: '../views/dashboard.html'
		})
		.when('/destination', {
			templateUrl: '../views/destination.html'
		})
		.when('/dispo', {
			templateUrl: '../views/dispo.html'
		})
		.when('/hebergement', {
			templateUrl: '../views/hebergement.html'
		})
		.otherwise({
			redirectTo: '/'
		});
}
angular.module('app', ['ngRoute', 'ngAutocomplete'])
    .config(config)
    .controller('mainController', mainController)
    .controller('registerController', registerController)
    .controller('holidayController', holidayController)
	.service('registerService', registerService)
	.service('holidayService', holidayService);
