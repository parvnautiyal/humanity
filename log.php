<?php
 session_start();
  if(isset($_SESSION['name']))
        
?>

<?php 
$mysql_host='localhost';
$mysql_user='root';
$conn = @mysqli_connect($mysql_host,$mysql_user);
if(!$conn)
{
	die ("connection failed");
}
if( !@mysqli_select_db($conn,'volunteer'))
{
	echo "databse not selected";
}

  $nam = $_POST['name'];
  $pass = $_POST['psw'];
  $query = " SELECT Email_Id ,  password FROM vol WHERE Email_Id='$nam' AND password='$pass'";
  $result = @mysqli_query($conn,$query);
  
  $rowcount = @mysqli_num_rows($result);
  if($rowcount == 1 )
  {
    $_SESSION['name'] = $nam; 
    $x= $_SESSION['name'];   
    header("Location: dash.php");
         
	//   echo "your username and password is correct";
  }
  else{
      $msg = '<p style="margin-top:300px;margin-left:380px;color:red;cursor:pointer;font-size:60px;"> Invalid username or password </p>';
      echo $msg; 
      }
  ?>