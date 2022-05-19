<?php

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'volunteer');
$Name=$_POST['Name'];
$Email_Id =$_POST['Email_Id'];
$Mobile_Number=$_POST['Mobile_Number'];
$Address=$_POST['Address'];
$State=$_POST['State'];
$Donate=$_POST['Donate'];
$Describe=$_POST['Describe'];
$q="insert into donate (NAME,EMAIL_ID,MOBILE_NUMBER,ADDRESS,STATE,TYPE,DESCRIPTION) values ('$Name','$Email_Id',$Mobile_Number,'$Address','$State','$Donate','$Describe')";
mysqli_query($con,$q);
mysqli_close($con);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="thnx.css">
    <link rel="stylesheet" href="table.css">
	

</head>
<body>
    
        <nav class="navbar navbar-expand-lg " id="head1">
            <div class="container" id="head2">
                <a class="navbar-brand" href="#"><img src="logo.png" alt="" style="width: 100px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="#"> Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
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

                        <li><a class="don" href="DonateNow.html"> <button id="donatebt" type="button" class="btn btn-default navbar-btn" name="button"> <b>Donate</b></button> </a></li>
                        <li><a class="don" href="#"> <button id="volbt" type="button" class="btn btn-default navbar-btn" name="button"> <b>Volunteer</b> </button> </a></li>
                
                      </ul>
                </div>
            </div>
            </nav>
            <br>
			<br>
			<br>
			<br>
			
			

			<h1 style="text-align:center;"><b>Thank You For Donation </b><h1>
			<br>
			<div class=container>
      <h2>Reciept</h2>
      <hr>
      <table>
  <tr>
    <th>NAME</th>
    <th>TYPE OF DONATION</th>
    <th>DESCRIPTION</th>
  </tr>
<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'volunteer');
$s="SELECT NAME,TYPE,DESCRIPTION  FROM donate  ORDER BY TIME DESC  LIMIT 1";  
$result=mysqli_query($con,$s);
while($record=mysqli_fetch_assoc($result))
{
  echo "<tr>";

  echo "<td>".$record['NAME']."</td>";
  echo "<td>".$record['TYPE']."</td>";
  echo "<td>".$record['DESCRIPTION']."</td>";

  echo "</tr>";
}
mysqli_close($con);
?>
</table>
</div>
<br>
			<br>
			<br><br>
			<br>
			
			



                    <footer>
                      <div class="footer" id="footer">
                          <div class="container">
                              <div class="row">
                                  <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                                     
                                  </div>
                                  <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                                      <h3> About Us</h3>
                                      <ul>
                                          <li> <a href="#"> Our Company </a> </li>
                                          <li> <a href="#"> About Us </a> </li>
                                          <li> <a href="#"> Terms of Services </a> </li>
                                          <li> <a href="#"> Our Team </a> </li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                                      <h3> Contact Us</h3>
                                      <ul>
                                          <li> <a href="#"> Contact Marketing </a> </li>
                                          <li> <a href="#"> Contact Sales </a> </li>
                                          <li> <a href="#"> Contact HR </a> </li>
                                          <li> <a href="#"> Contact Admin </a> </li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                                      <h3> Subscribe Us </h3>
                                      <ul>
                                          <li>
                                              <div class="input-append subscribe-btn text-center">
                                                  <input type="text" class="full text-center" placeholder="Email ">
                                                  <button class="btn  btn-success" type="button"> Subscribe <i class="fa fa-save"> </i> </button>
                                              </div>
                                          </li>
                                      </ul>
                                      <ul class="social">
                                          <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                                          <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                                          <li> <a href="#"> <i class="fa fa-google">   </i> </a> </li>
                                          <li> <a href="#"> <i class="fa fa-instagram">   </i> </a> </li>
                                          <li> <a href="#"> <i class="fa fa-whatsapp">   </i> </a> </li>
                                          
                                      </ul>
                                  </div>
                              </div>
                              <!--/.row--> 
                          </div>
                          <!--/.container--> 
                      </div>
                      <!--/.footer-->
                      
                      
                              
                          </div>
                      </div>
                      <!--/.footer-bottom--> 
                  </footer>


          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>                  

        
</body>                
</html>