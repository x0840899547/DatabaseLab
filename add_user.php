<!DOCTYPE html>
<html>
<head>
<title>DOC-19 System</title>
<link rel="stylesheet" href="default.css">
</head>

<body>

<div id="wrapper"> 
	<div id="div_header">
		DOC-19 System 
	</div>
	<div id="div_subhead">
		<ul id="menu">
			<li><a href="user.php">User Profile</a></li>
			<li><a href="add_user.php">Add User</a></li>
			<li><a href="group.php">User Group</a></li>
			<li><a href="add_group.html">Add User Group</a></li>
		</ul>		
	</div>
	<div id="div_main">
		<div id="div_left">
				
		</div>
		<div id="div_content" class="form">
			<!--%%%%% Main block %%%%-->
			<!--Form -->
			
			<form action="user.php" method="post">
					<h2>User Profile</h2>
					<label>Title</label>
					<select name="title">
						<option value="Mr.">Mr.</option>
						<option value="Mrs.">Mrs.</option>
						<option value="Ms.">Ms.</option>
					</select>
					
					<label>First name</label>
					<input type="text" name="firstname">
						
					<label>Last name</label>
					<input type="text" name="lastname">

					<label>Gender</label>
					<input type="radio" name="gender" value="male" checked>Male
					<input type="radio" name="gender" value="female">
					Female
					<div></div>
					
					<label>Email</label>
					<input type="text" name="email">
					
					<h2> Account Profile</h2>
					<label>Username</label>
					<input type="text" name="username">
					
					<label>Password</label>
					<input type="password" name="passwd">
					
					<label>Confirmed password</label>
					<input type="password" name="cpasswd">
					
					<label>User group</label>
					<select name="usergroup">
						<option value="Instructor">Instructor</option>
						<option value="Student">Student</option>
						<option value="TA">TA</option>
					</select>
					
					
					<div class="center">
						<input type="submit" value="Submit" name="submit" >			
					</div>
				</form>
		</div> <!-- end div_content -->
		
	</div> <!-- end div_main -->
	
	<div id="div_footer">  
		
	</div>

</div>
</body>
</html>


