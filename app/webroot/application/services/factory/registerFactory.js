appModule.factory('registerFactory', function($http, $q, $timeout){
    return {
        registerUser: function($scope){
            var deferred = $q.defer();
            $http.post($scope.url, $scope.user)
                 .success(function(data){
                     $timeout(function(){deferred.resolve(data)},3000);
                 })
                 .error(function(){
                     deferred.reject('Network error. Unable to contact the sever.');
                 });
            return deferred.promise;
        }
    };
    
});