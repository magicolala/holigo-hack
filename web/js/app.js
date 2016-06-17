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
		.otherwise({
			redirectTo: '/'
		});
}
angular.module('app', ['ngRoute', 'ngAutocomplete'])
    .config(config)
    .controller('mainController', mainController)
    .controller('registerController', registerController)
    .controller('holidayController', holidayController)
		.service('registerService', registerService);
