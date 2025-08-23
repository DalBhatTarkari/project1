<html>
<head>
  <title>Registration Form</title>
  <style>
    h1 {
	  background-color:#104778;
      color: #13BA1F;
	  border-top-left-radius: 50px;
	  border-top-right-radius: 50px;
	  position:relative;
	  height:50px;
	  top:-20px;
	  padding:15px;
    }
    body {
      color: black;
      text-align: center;
    }

    th {
      text-align: right;
    }
    div {
	  position:relative;
	  top:10%;

      background-color: #2388DE;
	  width: 90%;
	  max-width: 500px;
      border-radius: 50px;
	  padding:20px;
	  margin:20px auto;
    }
	form{
	 margin:0;
	}
  </style>
 </head>
 <body> 
  <?php
    echo'<div>
			<h1>Registration Form</h1>
			<form method="POST" name="redg">
			 <table style="margin: auto;"> 
				<tr><th>Name:</th><td><input type="text" name="name" placeholder="Abhinav" value="Abhinav Upadhyaya"></td></tr>
				<tr><th>Age:</th><td><input type="number" name="age" placeholder="17" value="17"></td></tr>
				<tr>
				<th>Gender:</th>
				<td>
					Male: <input type="radio" name="gender" value="Male" checked>
					Female: <input type="radio" name="gender" value="Female">
					Other: <input type="radio" name="gender" value="Other">
				</td>
				</tr>
				<tr><th>Email ID:</th><td><input type="email" name="email" placeholder="xyz@gmail.com" value="upadhyayaabhinav10@gmail.cpm"></td></tr>
				<tr><th>Password:</th><td><input type="password" name="pwd" placeholder="12345678" value="12345678"></td></tr>
				<tr><th>Re-Password:</th><td><input type="password" name="repwd" placeholder="12345678" value="12345678"></td></tr>
				<tr><th>Join Date:</th><td><input type="date" name="date" required value="2025-08-30"></td></tr>
			 </table>
			 <p>Do you agree to our <b>TERMS AND CONDITIONS</b>? 
			 <input type="checkbox" name="toc" value="Agreed"></p>
			 <button name="submit">Register</button>
			</form>
			
			</div>
			<br><br><br>			
			<p id="message"></p>';
			
			
			?>
			
<?php if(isset($_POST['submit'])) 
 { 
	 require 'datahandelling.php';
	 
 }
  ?> 
 </body>
</html>
