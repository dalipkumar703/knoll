app.controller('genericsearch', function($scope,$http) {
    $scope.genericSearchSuccessfull = 0;
    $scope.generic = function(term) {
    	console.log(term);
        return $http.get('http://localhost:8000/api/search/'+term).then(function(response) {
            console.log(response.data);
                        
            return response.data.map(function(item){
                return item.composition;
            });

        });
    };
 /* 
    $scope.enterPressedOnSearch = function(term){
        console.log('Inside function' , term);
        document.getElementById('searchGeneric').onkeydown = function(event) {
    if (event.keyCode == 13) {
        console.log('Inside if', term);
        $http.get('http://localhost:8000/api/search/' + term).then(function(response) {
            console.log('Inside $http.get' , response.data);
            $scope.data=response.data;
            
        });
        }
    }
    };
*/
    $scope.clickedOnSearch = function(term){
        $scope.genericData = [];
        console.log('Inside function clicked' , term);
        
    
        console.log('Inside if', term);
        $http.get('http://localhost:8000/api/search/' + term).then(function(response) {
            console.log('Inside $http.get' , response.data);
            
            if(response.data.length != 0){
                return response.data.map(function(item){
                
                    //Search matched
                    console.log("Search Matched");
                    $scope.genericData.push(item);
                    console.log("genericData is here ",$scope.genericData);
                    $scope.genericSearchSuccessfull = 1;
                    return 1;
                });
            }else{
                console.log("Search didn't match");
                    
                    $scope.genericSearchSuccessfull = 0;
                    return 0;
            }

        });
        
    
    };
});

