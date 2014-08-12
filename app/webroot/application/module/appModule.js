var appModule = angular.module('aboitizCareer', ['ngRoute', 'ngCookies', 'ngAnimate'])
       .config(function($routeProvider, $locationProvider){
           $locationProvider.html5Mode(true);
           $routeProvider
           .when('/',
            {
                controller: 'indexController',
                templateUrl: 'partials/indexPage.html'
            })            
            .when('/about_us', 
            {
                controller: 'registerController',
                templateUrl: 'partials/aboutUsPage.html'
            })
            .when('/contact_us', 
            {
                controller: 'registerController',
                templateUrl: 'partials/contactUsPage.html'
            })
            .when('/register', 
            {
                controller: 'registerController',
                templateUrl: 'partials/userRegistrationPage.html'
            })
            .when('/login',
            {
                controller: 'loginController',
                templateUrl: 'partials/login.html'
            })
            .otherwise({redirectTo: '/'});
       });

