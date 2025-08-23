<?php
 if(isset($_POST['submit'])) 
 { 
	 $name =$_POST['name'];
	 $age =$_POST['age'];
	 $sex =$_POST['gender'];
	 $mail =$_POST['email'];
	 $pw =$_POST['pwd'];
	 $rpw =$_POST['repwd'];
	 $date = date('Y-m-d');
	 $toc =$_POST['toc'] ?? 'Not Agreed';
	 $hash_pw=password_hash($pw, PASSWORD_DEFAULT);
	 $hash_rpw=password_hash($rpw, PASSWORD_DEFAULT);

	 
	 if(strlen($pw)<8){
	 $disp_pw = str_repeat('*', strlen($pw)); }
	 else {
	 $disp_pw = '********';}
	 
	 if($toc === 'Not Agreed'){
	 echo("Not Agreed to TOC <br><br> -_- <br><br>");
	 echo("Agree to the TOC<br>");
	 echo('<a class="back-link" href="javascript:history.back()">Go Back</a>');
	 }
	 else { 
	 if(strlen($pw)<8){
	 echo("Password must be atlest 8 Characters long  <br><br> -_- <br><br>");
	 echo('<a class="back-link" href="javascript:history.back()">Go Back</a>');
		 
	 }else{
	 echo("User Name: " . $name . "<br>");
	 echo("User Age: " . $age . "<br>");
	 echo("User Gender: " . $sex . "<br>");
	 echo("User Email: " . $mail . "<br>");
	 echo("User Password: " . $disp_pw . "<br>");
	 echo("User Password(hashed): " . $hash_pw . "<br>");
	 if (password_verify($rpw, $hash_rpw)) {
		 echo "Login successful!<br>";}
		else {
		 echo "Invalid password.<br>";
}
	 echo("Joined Date: " . $date . "<br>");
	 echo("TOC Status: " . $toc . "<br>");}}
 }
?>
