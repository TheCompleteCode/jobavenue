appModule.controller('indexController', function($scope,indexFactory){
    
    $scope.url = 'ajax.php';
    $scope.response = '';
    $scope.sql = 'fetchAll';
    indexFactory.fetchAllJobs($scope);
});