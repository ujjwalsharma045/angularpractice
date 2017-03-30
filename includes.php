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
        <div ng-app="includes">
		    <div ng-controller="documents">
     		    <div ng-include="'folder/firstfile.php'"></div>
                <div ng-include="'folder/secondfile.php'"></div>				
			</div>
		</div>
    </body>
</html>  

<script type="text/javascript">
 var module = angular.module("includes" , []); 
 module.controller("documents" , function($scope){
	$scope.user = {
		fname:'raju',
		lname:'natharanjan'
	},

    $scope.details = [
	  {name:'first'},
	  {name:'second'},
	  {name:'third'},
	  {name:'fourth'}
	] 	
 });
</script>