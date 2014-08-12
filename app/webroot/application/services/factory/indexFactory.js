appModule.factory('indexFactory', function($http){
    return {
        fetchAllJobs: function($scope) {
            /*$http({method: $scope.method, url: $scope.url})
                .success(function(data){
                    $scope.response = data;
		});*/
            $http.post($scope.url, $scope.sql)
                .then(function(restData){
                $scope.response = restData.data;
            });
        }
    }      
   
});