app.controller('brandsearch', function($scope,$http) {
       $scope.searchInitialised = 0;
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
        $scope.searchInitialised = 1;
       return $http.get('api/brand/'+$scope.type+'/'+$scope.asyncSelected+'/'+$scope.category)
       .then(function(response) {
            console.log("Brand Response: ",response);
            console.log("Brand Data: ", response.data);    

                if(response.data.id){
                    //Search matched
                    console.log("Search Matched");
                    $scope.brandData = response.data;
                    return response.data;
                }else{
                    //Search didn't match
                    console.log("Search didn't match");
                    $scope.brandData = 0;
                    return 0;
                }
        });

    	


 


    };
});

