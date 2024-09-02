<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MY LOGIN PHP</title>
<style>
  .format{
    background-color: yellow;
    width:40%;
    margin-top:8%;
    margin-left:27%;
    color:black;
    font-size: 25px;
    padding: 3% 3% 3% 3%;
    border-style:dotted;
    border-color: blue;
    border-width:4% 4% 4% 4%;
  }
  .form{
    height:3%;
    width:45%;
    font-size:25px;
    color:green;
  
  }
</style>
</head>

<body>

   <div class="format">
<php echo (int) $sumitted; ?> </p>
<p> you are highly welcome</p>
<p> here is your login info is </p>

<ul>
   <li class="form"><b>USERNAME:</b>:  <?php echo $_POST["username"]; ?></li>
      <li class="form"><b> PASSWORD:</b>: <?php echo $_POST["password"]; ?></li>
	  <li class="form"><b> EMAIL:</b>: <?php echo $_POST["Email"]; ?></li>
		<li class="form"><b> School</b>: <?php echo $_POST["school"]; ?></li>
		<li class="form"><b> PHONE NO</b>: <?php echo $_POST["phone no"]; ?></li>
		
      <a href="index.html"> login</a>
   </ul></div>


   <?php
setcookie('username', $_POST['username']);
$submitted = !empty($_POST);
?>

   
</body>
</html>
