<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="donate.css">

</head>
<body>
    
        <nav class="navbar navbar-expand-lg" id="head1">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="logo.png" alt="" style="width: 100px;"></a>
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

                        <li><a class="don" href="#"> <button id="donatebt" type="button" class="btn btn-default navbar-btn" name="button"> <b>Donate</b></button> </a></li>
                        <li><a class="don" href="vol.html"> <button id="volbt" type="button" class="btn btn-default navbar-btn" name="button"><b>Volunteer</b></button> </a></li>
                
                      </ul>
                </div>
            </div>
            </nav>

            <div style="margin-right: 750px"> 
            <form action="donate.php" method="POST">
            <table align="center" cellpadding = "10">
 
                <!----- First Name ---------------------------------------------------------->
                <tr>
                <td>NAME</td>
                <td><input type="text" name="Name" maxlength="30" required/>
               
                </td>
                </tr>
                 
                <!----- Last Name ---------------------------------------------------------->
                <!-- <tr>
                <td>LAST NAME</td>
                <td><input type="text" name="Last_Name" maxlength="30"/>
               
                </td>
                </tr> -->
                 
                <!----- Date Of Birth -------------------------------------------------------->
                <tr>
                <!-- <td>DATE OF BIRTH</td> -->
                 
                <!-- <td>
                <select name="Birthday_day" id="Birthday_Day">
                <option value="-1">Day:</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                 
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                 
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                 
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                 
                <option value="31">31</option>
                </select>
                 
                <select id="Birthday_Month" name="Birthday_Month">
                <option value="-1">Month:</option>
                <option value="January">Jan</option>
                <option value="February">Feb</option>
                <option value="March">Mar</option>
                <option value="April">Apr</option>
                <option value="May">May</option>
                <option value="June">Jun</option>
                <option value="July">Jul</option>
                <option value="August">Aug</option>
                <option value="September">Sep</option>
                <option value="October">Oct</option>
                <option value="November">Nov</option>
                <option value="December">Dec</option>
                </select>
                 
                <select name="Birthday_Year" id="Birthday_Year">
                 
                <option value="-1">Year:</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                 
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                 
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                </select>
                </td> -->
                </tr>
                 
                <!----- Email Id ---------------------------------------------------------->
                <tr>
                <td>EMAIL ID</td>
                <td><input type="text" name="Email_Id" maxlength="100" required/></td>
                </tr>
                 
                <!----- Mobile Number ---------------------------------------------------------->
                <tr>
                <td>MOBILE NUMBER</td>
                <td>
                <input type="text" name="Mobile_Number" maxlength="10" required />
                
                </td>
                </tr>
                 
                <!----- Gender ----------------------------------------------------------->
                <!-- <tr>
                <td>GENDER</td>
                <td>
                Male <input type="radio" name="Gender" value="Male" />
                Female <input type="radio" name="Gender" value="Female" />
                </td>
                </tr> -->
                 
                <!----- Address ---------------------------------------------------------->
                <tr>
                <td>ADDRESS <br /><br /><br /></td>
                <td><textarea name="Address" rows="4" cols="30" placeholder="Full Address" required></textarea></td>
                </tr>
                 
                <!----- City ---------------------------------------------------------->
                <!-- <tr>
                <td>CITY</td>
                <td><input type="text" name="City" maxlength="30" />
               
                </td>
                </tr> -->
                 
                <!----- Pin Code ---------------------------------------------------------->
                <!-- <tr>
                <td>PIN CODE</td>
                <td><input type="text" name="Pin_Code" maxlength="6" />
                
                </td>
                </tr> -->
                 
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
                </tr>
                  -->
                <!----- Hobbies ---------------------------------------------------------->
                 
                <tr>
                <td>TYPE OF DONATION</td>
                <td>
                Clothing <input type="radio" name="Donate" value="Clothing" required />
                Food<input type="radio" name="Donate" value="Food" required />
                Stationary<input type="radio" name="Donate" value="Stationary" required />
                Medical Supplies<input type="radio" name="Donate" value="Medical Supplies" required />
                Others<input type="radio" name="" value="Donate" required />
                </td>
                </tr>
                <tr>
                   <tr>
                <td>Description of items<br /><br /><br /></td>
                <td><textarea name="Describe" rows="4" cols="30" required></textarea></td>
                </tr>
                    <tr>
                        <td colspan="2" align="center">
                        <input type="submit" value="Donate Now">
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
                                      <h3> About </h3>
                                      <ul>
                                          <li> <a href="#"> Our Company </a> </li>
                                          <li> <a href="#"> About Us </a> </li>
                                          <li> <a href="#"> Terms of Services </a> </li>
                                          <li> <a href="#"> Our Team </a> </li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                                      <h3> Contact </h3>
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