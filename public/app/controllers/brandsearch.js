app.controller('brandsearch', function($scope,$http) {
       $scope.searchInitialised = 0;
       $scope.brandData = [];
       $scope.searchSuccessfull = 0;
    $scope.brand = function(term) {
    	console.log(term);
        return $http.get('http://localhost:8000/api/brand/'+term).then(function(response) {
            console.log(response.data);
            
            
            return response.data.map(function(item){
                return item.productname;
            });

        });
    }; 
    $scope.brandSubmit = function() {
        $scope.searchInitialised = 1;
        $scope.brandData = [];
       return $http.get('http://localhost:8000/api/brand/'+$scope.asyncSelected+'/'+$scope.category)
       .then(function(response) {
            console.log("Brand Response: ",response);
            console.log("Brand Data: ", response.data);    


            return response.data.map(function(item){
                if(item.id){
                    //Search matched
                    console.log("Search Matched");
                    $scope.brandData.push(item);
                    console.log("brandData is here ",$scope.brandData);
                    $scope.searchSuccessfull = 1;
                    return 1;
                }else{
                    //Search didn't match
                    console.log("Search didn't match");
                    
                    $scope.searchSuccessfull = 0;
                    return 0;
                }
                
            });
                
        });

    	


 


    };
    
});

