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
				<input type="button" name="sum" id="sum" value="{{sum}}" ng-click="operation('add')"/>
				<input type="button" name="subs" id="subs" value="{{subs}}" ng-click="operation('sub')"/>
				<input type="button" name="mul" id="mul" value="{{mul}}" ng-click="operation('mul')"/>
				<input type="button" name="divide" id="divide" value="{{divide}}" ng-click="operation('divide')"/>
			</div>
		</div>
    </body>
</html>  

<script type="text/javascript">
var module = angular.module("calculator" , []);
module.controller("calculation", function($scope , Cal){
    $scope.sum = "SUM";
	$scope.subs = "SUBSTRACTION";
	$scope.mul = "MULTIPLICATION";
	$scope.divide = "DIVIDATION";
	$scope.operation = function(type){
	   $scope.output = Cal.operation($scope.firstno , $scope.secondno , type);
	};
});

module.service('Cal' , function(Myservice){
	this.operation = function(a , b , mode){
		if(mode=="add"){
	       return Myservice.add(a, b);	
		}
		else if(mode=="sub"){
	       return Myservice.subs(a, b);	
		}
		else if(mode=="mul"){
	       return Myservice.mul(a, b);	
		}
		else if(mode=="divide"){
	       return Myservice.divide(a, b);	
		}
	}
});

module.factory('Myservice' , function(){
	var cntainer = {};
	cntainer.add = function(a,b){
		return parseInt(a)+parseInt(b);
	};
	
	cntainer.subs = function(a,b){
		return parseInt(a)-parseInt(b);
	};
	
	cntainer.mul = function(a,b){
		return parseInt(a)*parseInt(b);
	};
	
	cntainer.divide = function(a,b){
		return parseInt(a)/parseInt(b);
	};
	return cntainer;
});
</script>