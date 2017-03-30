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
        <div ng-app="table">
		    <div ng-controller="details">
				<input type="text" name="fname" id= "fname" value="" ng-model="student.firstname" />
				</br>
				</br>
                <input type="text" name="lname" id= "lname" value="" ng-model="student.lastname" />
				</br>
				</br>
				<textarea name="desc" id= "desc" ng-model="student.description"></textarea>	
                </br>
                </br>				
				<table border="1" style="width:100%;border:1px solid #000000;border-collapse:collapse">
				    <tr>
					    <th>
					       First Name 
						</th>
					    <td ng-bind="student.firstname">						    
						</td>					   
					</tr>
					<tr>
					    <th>
					        Last Name
						</th>
					    <td>
						    {{student.lastname}}
						</td>					   
					</tr>
					<tr>
					    <th>
					        Name
						</th>
					    <td>
						    {{student.firstname+' '+student.lastname | uppercase}}
						</td>					   
					</tr>
					<tr>
					   <th>Description</th>
					   <td ng-bind="student.description"></td>
					</tr>
					<tr>
					    <td>Subject</td>
					    <td>
					        <table border="1" style="width:100%;border:1px solid #000000;border-collapse:collapse">
                                <tr ng-repeat="val in student.details"> 
								   <td>{{val.subject}}</td>
								   <td>{{val.marks}}</td>
                                </tr>								
						    </table>
					    </td>					   
					</tr>
				</table>
			</div>
		</div>
    </body>
</html>  

<script type="text/javascript">
var module = angular.module("table" , []);
module.controller("details" ,  function($scope){
    $scope.student = {
		firstname:'dev',
		lastname:'d',
		description:'',
		details:[
		   {subject:'Maths', marks:''},
		   {subject:'English', marks:''},
		   {subject:'Hindi', marks:''},
		   {subject:'Science', marks:''}		  
		]
	}
});
</script> 