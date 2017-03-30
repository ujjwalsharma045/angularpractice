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
        <div ng-app="tabs">
		    <div ng-controller="showhide">
				<div>
					<a href="#" ng-click="toggle(1)">Tab1</a>
					<a href="#" ng-click="toggle(2)">Tab2</a>
					<a href="#" ng-click="toggle(3)">Tab3</a>				
				</div>
					    
			    <div  ng-hide="block1">
	               	BLOCK 1		
				</div>
				<div  ng-hide="block2">
	               	BLOCK 2		
				</div>
				<div  ng-hide="block3">
	               	BLOCK 3		
				</div>
			</div>
		</div>
    </body>
</html>  

<script type="text/javascript">
var module = angular.module("tabs", []);
module.controller("showhide", function($scope){
	$scope.block1 = false;
	$scope.block2 = true;
	$scope.block3 = true;
	$scope.toggle = function(type){ 
	    if(type=="1"){
			$scope.block1 = false;
	        $scope.block2 = true;
	        $scope.block3 = true;
		}
        else if(type=="2"){
			$scope.block1 = true;
	        $scope.block2 = false;
	        $scope.block3 = true;
		}
        else if(type=="3"){
			$scope.block1 = true;
	        $scope.block2 = true;
	        $scope.block3 = false;
		}       	
	}	
});
</script>