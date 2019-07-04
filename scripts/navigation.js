var app = angular.module("myNav", ['ngAnimate']);

app.directive("navigate", function(){
	return{
		restrict: "E",
		controller: function ($scope, $element,$compile){
			$scope.test = "hello world";
			$scope.hidden = true;
			

			$scope.toggle = function(){
				if($scope.hidden){
					$scope.hidden = false;
				}else{
					$scope.hidden = true;
				}
			}
		}
	};
});