<?php
  session_start();
  if(!isset(   $_SESSION['name']   )  )
          header('location:http://localhost/dash.php');
   ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=PT+Serif+Caption&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="dash.css">

    <style>
            
           
            
            input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

            
            
            body {
              font-family: "Lato", sans-serif;
            }
            
            .sidenav {
              height: 100%;
              width: 0;
              position: fixed;
              z-index: 1;
              top: 0;
              left: 0;
              background-color: #111;
              overflow-x: hidden;
              transition: 0.5s;
              padding-top: 60px;
            }
            
            .sidenav a {
              padding: 8px 8px 8px 32px;
              text-decoration: none;
              font-size: 25px;
              color: #818181;
              display: block;
              transition: 0.3s;
            }
            
            .sidenav a:hover {
              color: #f1f1f1;
            }
            
            .sidenav .closebtn {
              position: absolute;
              top: 0;
              right: 25px;
              font-size: 36px;
              margin-left: 50px;
            }
            
            @media screen and (max-height: 450px) {
              .sidenav {padding-top: 15px;}
              .sidenav a {font-size: 18px;}
            }

    
table, th, td {
  border: 1px solid black;
  padding-left: 20%;
  margin-left: 20px;
  margin-right: 100px;
}
table {
  border-spacing: 15px;
}

            </style>
            
</head>
<body>
       
      

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
              
         
          <div class="container">
                  
                    <a class="navbar-brand" href="#"><img src="logo.png" alt="" style="width: 100px;"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                          <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#"><b>DASHBOARD</b></a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </li> -->
                        <!-- <li class="nav-item">
                          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li> -->
                      </ul>
                      <!-- <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form> -->
                      <ul class="nav navbar-nav navbar-right">

                      <li style="float:right;"><form action="logout.php" method="post"> <button style=" background-color:rgb(0,193,193); color:white; font-size:18px; font-family: 'PT Serif Caption', serif;" name="sub">Sign Out</button></form>
                          </ul>
                    </div>
                </div>
                </nav>
        
                <h1 style="text-align:center;"><b>Reported Issues </b><h1>
			<br>
			<div class=container>
      <a href="#prob"><h2>Report an Issue</h2></a>
      <hr>
      <table width="100%">
  <tr>
    
    <th>Location</th>
    <th>Issue</th>
  </tr>
<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'volunteer');
$s="SELECT Address,Issue  FROM prob";  
$result=mysqli_query($con,$s);
while($record=mysqli_fetch_assoc($result))
{
  echo "<tr>";

  echo "<td>".$record['Address']."</td>";
  echo "<td>".$record['Issue']."</td>";

  echo "</tr>";
}
mysqli_close($con);
?>
</table>
</div>
<br> 
<br>
<br>
<br>
<br>
<br>
<br>    
<h3 align="center">Report an issue</h3>

<div class="container" id="prob">
  <form action="issue.php" method="POST">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name..">

    <label for="subject">Address of the problem faced</label>
    <textarea id="subject" name="address" placeholder="Write something.." style="height:200px"></textarea>

    
    <label for="subject">Describe the issue</label>
    <textarea id="subject" name="desc" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

        
        <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
        }
        
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
        </script>
           
           <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
           <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>                  
 

</body>
</html>