app.controller('genericsearch', function($scope,$http) {
    
    $scope.generic = function(term) {
    	console.log(term);
        return $http.get('api/search/'+term).then(function(data) {
            console.log(data.data);
            $scope.data=data.data;
            return data.data;
        });
    };
});