<?php include 'inc/header.php'; ?>
<?php
Session::checkLogin();
?>
<div class="main" >
<h1 >User Login</h1>

	<div class="segment">
	<form action="" method="post">
		<table class="tbl" align="center">
			 <tr>
			   <td>Email</td>
			   <td><input name="email" type="text" id="email"></td>
			 </tr>
			 <tr>
			   <td>Password </td>
			   <td><input name="password" type="password" id="password"></td>
			 </tr>

			  <tr>
			  <td></td>
			   <td><input type="submit" id="loginsubmit" value="Login">
			   </td>
			 </tr>
       </table>
	   </form>


<form action="index.php" name="form1" id="form1">
	   <span class="empty" style="display: none;">Field must not be empty !</span>
	   <span class="error" style="display: none;">Email or Password not matched !</span>
	   <span class="disable" style="display: none;">User Id disabled !</span>
	</div>



</div>
<?php include 'inc/footer.php'; ?>
