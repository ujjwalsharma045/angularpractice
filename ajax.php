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
        <div ng-app="mains">
		    <div ng-controller="childs">
			    {{message}}	
				<div>
			      <a href="#" ng-click="send()">Get Response</a>
			    </div>
			</div>
            <div ng-controller="cousins">
			   
            </div>			
		</div>
    </body>
</html>  

<script type="text/javascript">
   var module = angular.module("mains" , []);
   module.controller("childs" , function($scope , $http){
        $scope.send = function(){
		    $http({
			    method:"GET",
				url:"folder/response.php"
		    }).then(
			function mySuccess(response){
			   console.log(response); 	
			   $scope.message = response.data;
			},	
			function myError(response){
			   $scope.message = response.statusText;
			});
	    }
   });
</script>