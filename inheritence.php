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
        <div ng-app="relations">
		    <div ng-controller="parents">
					<div>
					   <b>Type</b>
					   {{type}}
					</div>
					<div ng-controller="son">
						<div>
							<b>Type</b>
							{{type}}
						</div>
						<div ng-controller="grandson">
							<b>Type</b> 
							<div>
								{{type}}
							</div>
						</div>
					</div>
				
					<div ng-controller="daughter">
						<b>Type</b>
						<div>
						  {{type}}
						</div>
						<div ng-controller="granddaughter">
							<b>Type</b> 
							<div>
								{{type}}
							</div>
						</div>
					</div>
			</div>
		</div>
    </body>
</html>  

<script type="text/javascript">
   var module = angular.module("relations" , []);
   module.controller("parents", function($scope){
	   $scope.type = "Parents";
   });
   
   module.controller("son", function($scope){
   });
   
   module.controller("grandson", function($scope){
	    $scope.type = "Grandson";
   });
   
   module.controller("daughter", function($scope){
	   $scope.type = "Daughter";
   });
   
   module.controller("granddaughter", function($scope){
   });
</script>