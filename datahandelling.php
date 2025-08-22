<?php
 if(isset($_POST['submit'])) 
 { 
	 $name =$_POST['name'];
	 $age =$_POST['age'];
	 $sex =$_POST['gender'];
	 $mail =$_POST['email'];
	 $pw =$_POST['pwd'];
	 $date =$_POST['date'];
	 $toc =$_POST['toc'] ?? 'Not Agreed';
	 if(strlen($pw)<8){
	 $disp_pw = str_repeat('*', strlen($pw)); }
	 else {
	 $disp_pw = '********';}
	 
	 if($toc === 'Not Agreed'){
	 echo("Not Agreed re <br><br> -_- <br><br>");
	 echo("Agree to the TOC<br>");
	 echo('<a class="back-link" href="javascript:history.back()">Go Back</a>');
	 }
	 else { 
	 if(strlen($pw)<8){
	 echo("Password must be atlest 8 Characters long  <br><br> -_- <br><br>");
	 echo("tsk tsk tsk Change it <br>");
	 echo('<a class="back-link" href="javascript:history.back()">Go Back</a>');
		 
	 }else{
	 echo("User Name: " . $name . "<br>");
	 echo("User Age: " . $age . "<br>");
	 echo("User Gender: " . $sex . "<br>");
	 echo("User Email: " . $mail . "<br>");
	 echo("User Password: " . $disp_pw . "<br>");
	 echo("Joined Date: " . $date . "<br>");
	 echo("TOC Status: " . $toc . "<br>");}}
 }
?>