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
        <div ng-app="cusdirec">
		    <student></student>
		</div>
    </body>
</html>  

<script type="text/javascript">
  var module = angular.module("cusdirec" , []);
  module.directive('student' , function(){
       var directive = {};
	   directive.restrict = 'E';
	   directive.template = "dd";
	   directive.scope = {
		   student:'fghf'
	   }
	   directive.compile = function (element, attributes){
		   return ;
	   }
	   return directive;
  }); 
</script>