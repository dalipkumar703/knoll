app.controller('admincontroller', function($scope,$http,$window) {
    
    $scope.adminLogin = function(){
    	$scope.initialize=true;
     return $http.get('http://localhost:8000/api/admin/'+$scope.username+'/'+$scope.password).then(function(response) {
            $scope.flag= response.data;
            if(response.data)
            {
            	$window.location.href="http://localhost:8000/admin/index";
            }
             return response.data;
            
        });
    }
});

