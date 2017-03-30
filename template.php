<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>

	    <style type="text/css">
	    .clrs{
		   clear:both;
		   padding-top:10px;
		   padding-bottom:10px;
		}			
	    </style>
    </head>
    <body>
        <div ng-app="views">
		    <div>
			   <a href="#first">First</a>
			   <a href="#second">Second</a>			   
			</div>
		    <span ng-view></span>
		</div>
    </body>
</html>  

<script type="text/javascript">
   var module = angular.module("views" , ["ngRoute"]);
   module.config(function($routeProvider){
	   $routeProvider.when("/" , {
		   templateUrl:"folder/page.php"
	   }).when("/first" , {
		   templateUrl:"folder/first.php"
	   }).when("/second" , {
		   templateUrl:"folder/second.php"
	   }); 
   });
</script>