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
		    <div ng-controller="documents" ng-init ="countries = [{'name':'india'},{'name':'us'},{'name':'pakisthan'},{'name':'australia'}]">
     		    <table>
				    <tr ng-repeat="val in countries">
					   <td>{{val.name}}</td>
					</tr>
				</table>
     		    
			</div>
		</div>
    </body>
</html>  

<script type="text/javascript">
 var module = angular.module("includes" , []);
 module.controller("documents",function($scope){
 
 });
</script>