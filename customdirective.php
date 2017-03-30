<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
		
	    <style type="text/css">
	    .clrs{
		   clear:both;
		   padding-top:10px;
		   padding-bottom:10px;
		}			
	    </style>
    </head>
    <body>
        <div ng-app="cusdirec" ng-controller="Test">
		    <student name="first"></student>
		</div>
    </body>
</html>  

<script type="text/javascript">
  var module = angular.module("cusdirec" , []);
  module.directive('student' , function(){
       var directive = {};
	   directive.restrict = 'E';
	   directive.template = "Student: <b>{{student.name}}</b> , Roll No: <b>{{student.rollno}}</b>";
	   directive.scope = {
               student : "=name"
       }
            
	   directive.compile = function(element, attributes) {
           element.css("border", "1px solid #cccccc");
		   element.html("Student: <b>"+$scope.student.name +"</b> , Roll No: <b>"+$scope.student.rollno+"</b><br/>");
		   var linkFunction = function($scope, element, attributes) {
                  
                  element.css("background-color", "#ff00ff");
           }
           return linkFunction;
       }
	   return directive;
  });
  
  module.controller('Test', function($scope){
	   $scope.first = {};
	   $scope.first.name = 'Test';
	   $scope.first.rollno = 'address';	   	  
  });  
</script>