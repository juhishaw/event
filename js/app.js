	// create the module and name it scotchApp
	var scotchApp = angular.module('scotchApp', ['ngRoute']);

	// configure our routes
	scotchApp.config(function ($routeProvider) {
	    

	        // route for the home page
	        $routeProvider.when('/', {
	            templateUrl: 'views/main.html',
	            controller: 'mainController'
    })

	        .when('/literary', {
	            templateUrl: 'views/literary.html',
	            controller: 'literaryController'
	        })
        
	        .when('/cultural', {
	            templateUrl: 'views/cultural.html',
	            controller: 'culturalController'
	        })
        
	        .when('/gaming', {
	            templateUrl: 'views/gaming.html',
	            controller: 'gamingController'
	        })
	        .when('/tech', {
	            templateUrl: 'views/tech.html',
	            controller: 'techController'
	        })
         .when('/artistic', {
	            templateUrl: 'views/artistic.html',
	            controller: 'artisticController'
            })
	        .when('/quiz', {
	            templateUrl: 'views/quiz.html',
	            controller: 'quizController'
	        })
	        .when('/login', {
	            templateUrl: 'views/login.html',
	            controller: 'loginController'
	        })
	        .when('/tos', {
	            templateUrl: 'views/tos.html',
	            controller: 'tosController'
	        })
	        .when('/privacy', {
	            templateUrl: 'views/privacy.html',
	            controller: 'privacyController'
	        })
	        .when('/join', {
	            templateUrl: 'views/join.html',
	            controller: 'joinController'
	        })
	        
	});

	// create the controller and inject Angular's $scope
	scotchApp.controller('mainController', function ($scope) {
	    // create a message to display in our view
	    $scope.message = 'Everyone come and see how good I look!';
	});

	scotchApp.controller('literaryController', function ($scope) {
	    $scope.message = 'literary';
	});

	scotchApp.controller('culturalController', function ($scope) {
	    $scope.message = 'cultural';
	});

	scotchApp.controller('gamingController', function ($scope) {
	    $scope.message = 'gaming';
	});
	scotchApp.controller('artisticController', function ($scope) {
	    $scope.message = 'artistic';
	});
	scotchApp.controller('techController', function ($scope) {
	    $scope.message = 'tech';
	});
	scotchApp.controller('quizController', function ($scope) {
	    $scope.message = 'quiz';
	});
	scotchApp.controller('loginController', function ($scope) {
	    $scope.message = 'login';
	});
	scotchApp.controller('tosController', function ($scope) {
	    $scope.message = 'tos';
	});
	scotchApp.controller('privacyController', function ($scope) {
	    $scope.message = 'privacy';
	});
	scotchApp.controller('joinController', function ($scope) {
	    $scope.message = 'join';
	});
