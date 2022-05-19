<?php
define('CSS_PATH', '');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Volunteer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="volunteer.css">
    
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
                        <li><a class="don" href="#"> <button id="loginbt" type="button" class="btn btn-default navbar-btn" name="button">Login</button> </a></li>
                      </ul>
                </div>
            </div>
            </nav>
            
            <div  style="margin-right: 750px"> 

              
            <form action="register.php" method="POST">  
                
            <table id="trans" align="center" cellpadding = "10">
              
 
                <!----- First Name ---------------------------------------------------------->
                <tr>
                <td>FIRST NAME</td>
                <td><input type="text" name="First_Name" maxlength="30" required/>
               
                </td>
                </tr>
                 
                <!----- Last Name ---------------------------------------------------------->
                <tr>
                <td>LAST NAME</td>
                <td><input type="text" name="Last_Name" maxlength="30" required/>
               
                </td>
                </tr>
                 
                <!----- Date Of Birth -------------------------------------------------------->
                <tr>
                  <td>DATE OF BIRTH</td>
                  <td><input type="date" name="DOB" required>
                 
                  </td>
                  </tr>
                <!----- Email Id ---------------------------------------------------------->
                <tr>
                <td>EMAIL ID</td>
                <td><input type="email" name="Email_Id" maxlength="100" required /></td>
                </tr>

                <tr>
                  <td>PASSWORD</td>
                  <td><input type="password" name="password" maxlength="100" required/></td>
                </tr>

               
             
                 
                <!----- Mobile Number ---------------------------------------------------------->
                <tr>
                <td>MOBILE NUMBER</td>
                <td>
                <input type="text" name="Mobile_Number" maxlength="10" required />
                
                </td>
                </tr>
                 
                <!----- Gender ----------------------------------------------------------->
                <tr>
                <td>GENDER</td>
                <td>
                Male <input type="radio" name="Gender" value="Male" required />
                Female <input type="radio" name="Gender" value="Female" required />
                </td>
                </tr>
                 
                <!----- Address ---------------------------------------------------------->
                <tr>
                <td>ADDRESS <br /><br /><br /></td>
                <td><textarea name="Address" rows="4" cols="30" required></textarea></td>
                </tr>
                 
                <!----- City ---------------------------------------------------------->
                <tr>
                <td>CITY</td>
                <td><input type="text" name="City" maxlength="30" required />
               
                </td>
                </tr>
                 
                <!----- Pin Code ---------------------------------------------------------->
                <tr>
                <td>PIN CODE</td>
                <td><input type="text" name="Pin_Code" maxlength="6" required />
                
                </td>
                </tr>
                 
                <!----- State ---------------------------------------------------------->
                <tr>
                <td>STATE</td>
                <td><input type="text" name="State" maxlength="30" required />
                
                </td>
                </tr>
                 
                <!----- Country ---------------------------------------------------------->
                <!-- <tr>
                <td>COUNTRY</td>
                <td><input type="text" name="Country" value="India" readonly="readonly" /></td>
                </tr> -->
                 
      
                 
                <!-- <tr>
                <td>TYPE OF DONATION <br /><br /><br /></td>
                 
                <td>
                Clothing
                <input type="checkbox" name="Donate_Clothing" value="Clothing" />
                Food
                <input type="checkbox" name="Donate_Food" value="Food" />
                Stationary
                <input type="checkbox" name="Donate_Stationary" value="Stationary" />
                Medical Supplies
                <input type="checkbox" name="Donate_Medics" value="Medics" />
                <br />
                Others
                <input type="checkbox" name="Hobby_Other" value="Other">
                 </td>
                </tr> -->
                <tr>
                   <!-- <tr>
                <td>Description of items<br /><br /><br /></td>
                <td><textarea name="" rows="4" cols="30"></textarea></td>
                </tr> -->
                    <tr>
                        <td colspan="2" align="center">
                        <input type="submit" value="register">
                        <!-- <input type="reset" value="Reset"> -->
                        </td>
                        </tr>
                        </table>
                         
               
                </form>
              </div>
              
            
                   
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