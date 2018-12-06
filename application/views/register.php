<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .sample{background: #fff;  padding: 50px;width: 780px;border: 2px solid red;}
    .error{color:red;}
    .main{border: 1px solid #ddd;border-radius: 5px;padding: 20px;margin-top: 20px;}
    </style>
</head>
<body style="background-color: aquamarine;">    
    <div class="container sample">
    	<div class="row">
    		<div class="col-md-3">
    			<img src="<?php echo base_url();?>assets/image/TED.jpg" alt="logo" height="65px">
    		</div>
    		<div class="col-md-9">
                <h2>Application for Ted Consulting</h2>
    		</div>
    	</div>
        <form method="post">
        	<div class="row main">
	        	<div class="col-md-12">
	            	<div class="col-md-4">            
						<div class="form-group">
						    <label for="user">First Name:<span class="error">*</span></label>
						    <input type="text" class="form-control" id="name">
						</div>
					</div>
					<div class="col-md-4"> 
		                <div class="form-group">
		                    <label for="user">Middlename:</label>
		                    <input type="text" class="form-control" id="user">
		                </div>
		            </div>
	                <div class="col-md-4"> 
		                <div class="form-group">
		                    <label for="pwd">Lastname:<span class="error">*</span></label>
		                    <input type="Passwordord" class="form-control" id="pwd">
		                </div>
		            </div>
		        </div>
		        <div class="col-md-12"> 
		            <div class="col-md-6"> 
			            <div class="form-group">
		                    <label for="pwd">Username:</label>
		                    <input type="user" class="form-control" id="user">
		                </div>
		            </div>
	                <div class="col-md-6"> 
		             	<div class="form-group">
		                    <label for="pwd">Email:</label>
		                    <input type="Email" class="form-control" id="Email">
		                </div>
		            </div>
		        </div>
		        <div class="col-md-12"> 
                    <div class="col-md-6"> 
		             	<div class="form-group">
		                    <label for="pwd">Password:</label>
		                    <input type="pass" class="form-control" id="pass">
		                </div>
		            </div>
		            <div class="col-md-6"> 
		             	<div class="form-group">
		                    <label for="pwd">Confirm Password:</label>
		                    <input type="cnfpass" class="form-control" id="cnfp">
		                </div>
		            </div>
		        </div>
		        <div class="col-md-12"> 
	              	<div class="col-md-6"> 
	                 	<div class="form-group">
		                    <label for="pwd">Mobile Number:</label>
		                    <input type="mobile" class="form-control" id="mobile">
		               	</div>
		           	</div>
		          	<div class="col-md-6">
		    			<div class="form-group">
			                <label for="sel1">Select City (select one):</label>
		                    <select class="form-control" id="sel1">
		                        <option>Select any one</option>
		                        <option>Delhi</option>
		                        <option>Kanpur</option>
		                        <option>Agara</option>
		                    </select>
			            </div>
		          	</div> 
		       	</div>
		       	<div class="col-md-12">
		            <div class="col-md-6">
		                <div class="form-group">
			                <label for="Address">Address:</label>
			                <textarea class="form-control" rows="3" id="Address"></textarea>
		                </div>
		            </div>
	              	<div class="col-md-6">
	               		<div class="form-group">
		                    <label for="area">Area of Interests</label>
			             	<select class="form-control  select2-multiple" multiple name="area">
							  	<option value="">Select</option>
							  	<option value="1">Web Desining</option>
							  	<option value="2">Software Development</option>
							  	<option value="3">Ionic</option>
							</select>
						</div>
					</div>
		       	</div>
	 			<div class="col-md-12">
		            <div class="col-md-6">
		                <div class="form-group">
		                    <label for="sel1">Country</label>
			             	<select class="form-control">
							  	<option value="" disabled selected>Choose your country</option>
							  	<option value="1">USA</option>
							  	<option value="2">Germany</option>
							  	<option value="3">France</option>
							  	<option value="4">Poland</option>
							  	<option value="5">Japan</option>
							</select>
						</div>
					</div>
					<div class="col-md-6"> 
	                 	<div class="form-group">
		                    <label for="pwd">Pincode:</label>
		                    <input type="pin" class="form-control" id="pin">
		               	</div>
		           	</div>
			     </div>
		         <div class="col-md-12">
		            <div class="col-md-6">
		                <div class="form-group">
		                	<label for="gen">Course:</label>
			                <div class="checkbox">
						       	<label><input type="checkbox" value="">B.tech</label>
								<label><input type="checkbox" value="">M.tech</label>
								<label><input type="checkbox" value="">MCA</label>
						    </div>
						</div>
					</div>
				  	<div class="col-md-6">
	                	<div class="form-group">
		                	<label for="gen">Gender:</label></br>
		                    <input type="radio" name="gender" value="male"> Male
		                    <input type="radio" 	name="gender" value="female"> Female
		                    <input type="radio" name="gender" value="other"> Other
	                   </div>  
	               </div>
	            </div>	
	            <div class="row"> 
	                <center>
	                	<button type="Reset" class="btn btn-default">Reset</button>
	                	<button type="Submit" class="btn btn-primary">Submit</button>
	                </center>
	                <p><a href="http://localhost/demo/index.php/register">Link</a></p>
	           	</div>
	        </div>
        </form>
    </div>                     
</body>
</html>