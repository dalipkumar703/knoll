app.controller('brandsearch', function($scope,$http) {

    $scope.brand = function(term) {
    	console.log(term);
        return $http.get('api/brand/'+term).then(function(response) {
            console.log(response.data);
            
            
            return response.data.map(function(item){
                return item.brand;
            });

        });
    };
    $scope.brandSubmit = function() {
       return $http.get('api/brand/'+$scope.type+'/'+$scope.asyncSelected+'/'+$scope.category)
       .then(function(response) {
            console.log("apac",response);    

 
        });

    	





    };
});

