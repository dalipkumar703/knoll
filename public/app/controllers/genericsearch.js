app.controller('genericsearch', function($scope,$http) {
    
    $scope.generic = function(term) {
    	console.log(term);
        return $http.get('api/search/'+term).then(function(response) {
            console.log(response.data);
            $scope.data=response.data;
            
            return response.data.map(function(item){
                return item.constituent;
            });

        });
    };
});

