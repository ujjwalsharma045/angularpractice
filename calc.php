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
        <div ng-app="calculator">
		    <div ng-controller="calculation">
			    <input type="text" name="num1" id="num1" ng-model="firstno" />
				<input type="text" name="num2" id="num2" ng-model="secondno" />
				<div>{{output}}</div>
				<input type="button" name="sum" id="sum" value="{{sum}}" ng-click="operation(1)"/>
				<input type="button" name="subs" id="subs" value="{{subs}}" ng-click="operation(2)"/>
				<input type="button" name="mul" id="mul" value="{{mul}}" ng-click="operation(3)"/>
				<input type="button" name="divide" id="divide" value="{{divide}}" ng-click="operation(4)"/>
			</div>
		</div>
    </body>
</html>  

<script type="text/javascript">
var module = angular.module("calculator" , []);
module.controller("calculation", function($scope){
    $scope.sum = "SUM";
	$scope.subs = "SUBSTRACTION";
	$scope.mul = "MULTIPLICATION";
	$scope.divide = "DIVIDATION";
	$scope.operation = function(type){
	    if(type=="1"){
		   $scope.output = parseInt($scope.firstno)+parseInt($scope.secondno);  
	    }
		else if(type=="2"){
		   $scope.output = parseInt($scope.firstno)-parseInt($scope.secondno);  
	    }
		else if(type=="3"){
		   $scope.output = parseInt($scope.firstno)*parseInt($scope.secondno);  
	    }
		else if(type=="4"){
		   $scope.output = parseInt($scope.firstno)/parseInt($scope.secondno);  
	    }
	};
});
</script>