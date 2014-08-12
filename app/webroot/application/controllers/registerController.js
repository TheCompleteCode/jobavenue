appModule.controller('registerController', function($scope, $cookieStore, registerFactory){
    $scope.register = function() {
            $cookieStore.put('mycookie', 'cookie value');
            console.log($cookieStore.get('mycookie'));
        if($scope.registerForm.$valid == true) {
            $scope.url = 'ajax.php';
            
            registerFactory.registerUser($scope).then(
                function(data){
                    if(data == 'success') {
                        $scope.registerForm.$setPristine();
                        $scope.registrationResponse = 'You are registered successfully';
                        $scope.user.email='';
                        $scope.user.pword='';
                        $scope.user.rpword='';
                        $scope.user.fname='';
                        $scope.user.lname='';
                        $scope.user.address='';
                        $scope.user.skills='';
                        $scope.user.course='';
                        $scope.user.phoneNum='';
                        $scope.user.school='';
                    }
                },
                function(errorMessage){
                    $scope.registrationResponse = errorMessage;
                }
            );
        } else {
            $scope.registrationResponse = 'Please fill up the form properly.';
            event.preventDefault();
        }
        
    } 
});