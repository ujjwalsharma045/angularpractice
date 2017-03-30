<html>
    <head>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
	    <style type="text/css">
	    .clrs{
		   clear:both;
		   padding-top:10px;
		   padding-bottom:10px;
		}			
	    </style>
    </head>
    <body>
        <div ng-app="repeations">
		    <div ng-controller="example">
     		   	<ul>
				  <li ng-repeat="x in Details">
				     {{x.name +', '+x.email}}
				  </li>
				<ul>
				<input type="button" ng-click="get()" name="getl" id="getl" value="Get"/>
			</div>
		</div>
    </body>
</html>  

<script type="text/javascript">
 var module = angular.module("repeations", []);
 module.controller("example" ,  function($scope , $http){
	$http.get("folder/response2.php").then(function(response){
		$scope.Details = response.data;
	},
	function (response){
		$scope.Details = response.statusText;
	});
	
	$scope.get = function(){
		$http.get("folder/response7.php").then(function(response){
		  $scope.Details = response.data;
	    },
	    function (response){
		  $scope.Details = response.statusText;
	    });
	};
 }); 
</script>