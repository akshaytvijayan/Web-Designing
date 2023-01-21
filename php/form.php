
<html><head>
<title>registration form</title>
</head>
<body>

<h2 style="color:lightseagreen;text-align:center;font-style:oblique">REGISTRATION FORM</h2>

<form name="form" action=""  method="POST">
<table align="center">
<tr>
<td>username</td>
<td><input type="text" name="name"></td>
</tr>
<tr>
<td>password</td> 
<td><input type="password" name="fps"></td>
</tr>
<tr>
<td>email</td>
<td>
<input type="email" name="email"></td>
</tr>

<td><input type="submit" value="Submit" name="submit" style="background-color:plum;"></td>

</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
$username=$_POST['name'];
$password=$_POST['fps'];
$email=$_POST['email'];
if(empty($username))
{
 echo "<script>alert('enter username')</script>";
}
else if(empty($email))
{
 echo "<script>alert('enter email')</script>";
}
else if(empty($password))
{
 echo "<script>alert('enter password')</script>";
}
else if(strlen($password)<8)
{
 echo "<script>alert('your password must contain atleat 8 character')</script>";
}
else
{
 echo "<script>alert('registration successful')</script>";
}
}
?>
</body>
</html>

