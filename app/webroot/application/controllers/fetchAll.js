
angular.module('mainModule', ['ngRoute', 'ngAnimate'])

.config(function($routeProvider) {
	$routeProvider
		.when('/',
			{
				controller: 'fetchController',
				templateUrl: 'partials/viewAllJobs.html'
			})
		.when('/register', {
				controller: 'registerController',
				templateUrl: 'partials/registerForm.html',
			})
		.otherwise({redirectTo: '/'});

	})

.controller('fetchController', function($scope, $http){
	$scope.method = 'GET';
	$scope.url = 'ajax.php';
	$scope.data = [{name:'hello world'}];
	$http.post($scope.url, $scope.data )
	//$http({method: $scope.method, url: $scope.url})
		 .success(function(data){
			console.log(data);
		});	
})

.controller('registerController', function($scope){
	function check()
	{
		$scope.response = 'yes';
	}
});