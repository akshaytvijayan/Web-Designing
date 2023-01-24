
<html><head>
<title>registration form</title>
</head>
<body>

<h2 style="color:lightseagreen;text-align:center;font-style:oblique">REGISTRATION FORM</h2>

<form name="form" action=""  method="POST">
<table align="center">
<tr>
<td>Firstname : </td>
<td><input type="text" name="name1"></td>
</tr>
<tr>
<td>Lastname : </td>
<td><input type="text" name="name2"></td>
</tr>

<tr>
<td>Mobile No : </td> 
<td><input type="text" name="fpone"></td>
</tr>

<tr>
<td>Username</td>
<td><input type="text" name="name"></td>
</tr>

<tr>
<td>Password</td> 
<td><input type="password" name="fps"></td>
</tr>

<tr>
<td>Email</td>
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
$firstname=$_POST['name1'];
$lastname=$_POST['name2'];
$mobile=$_POST['fpone'];
$username=$_POST['name'];
$password=$_POST['fps'];
$email=$_POST['email'];
if(empty($username))
{
 echo "<script>alert('enter username')</script>";
}
else if(empty($firstname))
{
 echo "<script>alert('enter firstname')</script>";
}
else if(empty($lastname))
{
 echo "<script>alert('enter lastname')</script>";
}
else if(empty($mobile))
{
 echo "<script>alert('enter number')</script>";
}
else if(strlen($mobile)<10)
{
 echo "<script>alert('your number must contain atleast 9 character')</script>";
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

