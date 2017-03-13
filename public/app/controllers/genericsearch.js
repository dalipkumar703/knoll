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

    $scope.enterPressedOnSearch = function(term){
        console.log('Inside function' , term);
        document.getElementById('searchGeneric').onkeydown = function(event) {
    if (event.keyCode == 13) {
        console.log('Inside if', term);
        $http.get('api/search/' + term).then(function(response) {
            console.log('Inside $http.get' , response.data);
            $scope.data=response.data;
            
        });
        }
    }
    };

    $scope.clickedOnSearch = function(term){
        console.log('Inside function clicked' , term);
        
    
        console.log('Inside if', term);
        $http.get('api/search/' + term).then(function(response) {
            console.log('Inside $http.get' , response.data);
            $scope.data=response.data;
            
        });
        
    
    };
});

