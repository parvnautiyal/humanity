<?php
session_start();
if( isset(  $_SESSION['name']  ) )
header("Location: dash.php");

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
    <link rel="stylesheet" href="main.css">
   
  

</head>
<body>
    
        <nav class="navbar navbar-expand-lg" id="head1">
            <div class="container">
                <a class="navbar-brand" href="#" id="logo1" ><img src="logo.png" alt="" style="width: 100px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="#">Home</a>
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
                         
                   
                        <li><a class="don" href="DonateNow.html"> <button id="donatebt" type="button" class="btn btn-default navbar-btn" name="button">Donate</button> </a></li>
                        <li><a class="don" href="vol.html"> <button id="volbt" type="button" class="btn btn-default navbar-btn" name="button">Volunteer</button> </a></li>
                        <li><a class="don" href="login1.html"> <button id="loginbt" type="button" class="btn btn-default navbar-btn" name="button">Login</button> </a></li>
                      </ul>
                </div>
            </div>
            </nav>
    

              
            <div style="padding:0px;margin-top:0px;background-color:white;" class="w3-content w3-section">
              <img class="mySlides" src="5.jpg" style="width:100%;height:700px">
              <img class="mySlides" src="4.jpg" style="width:100%;height:700px">
              <img class="mySlides" src="6.jpg" style="width:100%;height:700px"></div>
                    <br>
                    
    
                    
                    <script>
                    
                    </script> <br> <br>

                    <h1 style="text-align: center;"><b>Our Motto</b></h1> <br> <br>

                    
                    <div class="container">
                            
                            <div class="row">
                              <div class="col-sm">
                                <p id="para1" style="text-align: center;"> <b> "An effort made for the happiness of others lifes us above ourselves. Be a part of the breakthrough and make someone's dream come true. Be part of a change in the World. Humanity is a simple method to prove kindness" </b> </p>
                              </div>
                              <div class="col-sm">
                                <p id="para2" style="text-align: center;"><b>"Our aim is to add more and more Volunteer from every place. Our Volunteer's try to help out people or they provide some essential things to people. "</b></p>
                              </div>
                            </div>
                        
                    </div> <br> <br> <br> <br>

                    <h1 style="text-align: center;"><b>We Are Currently In These Cities</b></h1> <br> <br>

                    <!-- <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <a href=""><img src="https://cdn.vox-cdn.com/thumbor/UKEiZl3hyDl-mQ2m9u09f4iFU3A=/0x0:6000x4004/1200x800/filters:focal(2520x1522:3480x2482)/cdn.vox-cdn.com/uploads/chorus_image/image/59590385/shutterstock_773796256.0.jpg" style="width: 100px;" height="100px" alt=""> <br> <br> Ghaziabad</a>
                            </div>

                            <div class="col-sm">
                                    <a href=""><img src="https://cdn.vox-cdn.com/thumbor/UKEiZl3hyDl-mQ2m9u09f4iFU3A=/0x0:6000x4004/1200x800/filters:focal(2520x1522:3480x2482)/cdn.vox-cdn.com/uploads/chorus_image/image/59590385/shutterstock_773796256.0.jpg" style="width: 100px;" height="100px" alt=""> <br> <br> Ghaziabad</a>
                            </div>
                            <div class="col-sm">
                                    <a href=""><img src="https://cdn.vox-cdn.com/thumbor/UKEiZl3hyDl-mQ2m9u09f4iFU3A=/0x0:6000x4004/1200x800/filters:focal(2520x1522:3480x2482)/cdn.vox-cdn.com/uploads/chorus_image/image/59590385/shutterstock_773796256.0.jpg" style="width: 100px;" height="100px" alt=""> <br> <br> Ghaziabad</a>
                            </div>

                        </div>

                    </div> <br> <br> -->
                    
                    <!-- this is table of Currently Cities -->

                    <table class="table">

                      <thead>
                        <tr>
                          <!-- <th scope="col">#</th> -->
                          <th scope="col-lg-4 col-xs-6 thumbnail"><a href="#">Delhi</a></th>
                          <th scope="col-lg-4 col-xs-6 thumbnail"><a href="#">Noida</a></th>
                          <th scope="col-lg-4 col-xs-6 thumbnail"><a href="#">Ghaziabad</a></th>
                        </tr>
                      </thead>

                      <thead>
                        <tr>
                          <!-- <th scope="col">#</th> -->
                          <th scope="col-lg-4 col-xs-6 thumbnail"><a href="#">Modi Nagar</a></th>
                          <th scope="col-lg-4 col-xs-6 thumbnail"><a href="#">Muradnagar</a></th>
                          <th scope="col-lg-4 col-xs-6 thumbnail"><a href="#">Greater Noida</a></th>
                        </tr>
                      </thead>

                    </table>
                   
                      
                      <!-- <tr style="align-content: center"> 
                        <th style="margin-left: 500px"> <a href="#"> <img src="5.jpg" alt="" width="100px" height="100px"> <br> Ghaziabad</a> </th>
                        <th style="margin-left: "> <a href="#"> <img src="4.jpg" alt="" width="100px" height="100px"> <br> Ghaziabad</a> </th>
                      </tr>

                      <tr>
                        <td>Jill</td>
                        <td>Smith</td>
                        <td>50</td>
                      </tr> -->
                      <br> <br> <br>
                  

                  
                  

                    <div class="container">
                            <h1 style="text-align: center;">Some Pictures</h1> <br>
                            <div class="row">
                                    <div class="col-lg-4 col-xs-6 thumbnail"><img src="https://d2lm6fxwu08ot6.cloudfront.net/img-thumbs/960w/04LDEYRW59.jpg" style="width: 365;" height="220" alt=""></div> 
                                    <div class="col-lg-4 col-xs-6 thumbnail"><img src="https://d2lm6fxwu08ot6.cloudfront.net/img-thumbs/960w/90V03Q5Y60.jpg" style="width: 365;" height="220"  alt=""></div>
                                    <div class="col-lg-4 col-xs-6 thumbnail"><img src="https://d2lm6fxwu08ot6.cloudfront.net/img-thumbs/960w/O83SF2RB6D.jpg" style="width: 365;" height="220"  alt=""></div>
                                    <div class="col-lg-4 col-xs-6 thumbnail"><img src="https://d2lm6fxwu08ot6.cloudfront.net/img-thumbs/960w/5JVPSVP7EI.jpg" style="width: 365;" height="220"  alt=""></div>
                                    <div class="col-lg-4 col-xs-6 thumbnail"><img src="https://d2lm6fxwu08ot6.cloudfront.net/img-thumbs/960w/C5Y10KIIHA.jpg" style="width: 365;" height="220"  alt=""></div>
                                    <div class="col-lg-4 col-xs-6 thumbnail"><img src="https://d2lm6fxwu08ot6.cloudfront.net/img-thumbs/960w/YSSFRY5B25.jpg" style="width: 365;" height="220"  alt=""></div> 
                            </div>
                      
                    </div> <br> <br>

                   
                    <footer>
                      <div class="footer" id="footer">
                          <div class="container">
                              <div class="row">
                                  <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                                     
                                  </div>
                                  <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                                      <h3> About Us </h3>
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
    <!-- <script src="main.js"></script>   -->
    
    <script>
     var myIndex = 0;
                  carousel();
                  
                  function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) {
                      x[i].style.display = "none";  
                    }
                    myIndex++;
                    if (myIndex > x.length) {myIndex = 1}    
                    x[myIndex-1].style.display = "block";  
                    setTimeout(carousel, 2000); // Change image every 2 seconds
                  }
    </script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>                  


</body>                
</html>