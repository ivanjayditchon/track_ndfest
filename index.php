<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="bootstrap/css/css_koto.css"/>
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="private_image/track.png">
    <script src="js/jquery2.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
    	var index = 1;

    	function plusIndex(n)
    	{
    		index = index + 1;
    		showImage(index);
    	}

    	showImage(1);

    	function showImage(n) 
    	{
    		var i;
    			var x = document.getElementsByClassName("slides");
    				if(n > x.length){index = 1};
    					if(n < 1){index = x.length};
    						for(i = 0; i < x.length; i++)
    						{
    							x[i].style.display = "none";
    						}
    						x[index-1].style.display = "block";
    	}
    </script>

</head>
<!--Content-->
<body>
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <img src="private_image/track.png" width="80" height="80">
        <span class="text">TrackNDFest</span>
      </div>
        <div class="collapse navbar-collapse" id="collapse" style="padding-top: 10px;">
          <ul class="nav navbar-nav align">
            <li><a href="index.php" style="font-size:20px;"><span class="fa fa-home"></span>Home</a></li>
            <li><a href="index.php" class="dropdown-toggle" data-toggle="dropdown"><button class="btn2"><span class="fa fa-bolt"></span>&nbspSports&nbsp</button></a>
              <ul class="dropdown-menu" style="width:400%;">
                <div class="panel">
                  <div class="panel-heading panelcolor">Categories:</div>
                  <div class="panel-body">
                    <table class="table table-striped">
                      <tr>
                        <td><a href="">BASKETBALL</a></td>
                        <td><a href="">BASEBALL</a></td>
                        <td><a href="">FOOTBALL</a></td>
                        <td><a href="">SOFTBALL</a></td>
                      </tr>
                      <tr>
                        <td><a href="">TABLE TENNIS</a></td>
                        <td><a href="">VOLLEYBALL</a></td>
                        <td><a href="">LAWN TENNIS</a></td>
                        <td><a href="">SEPAK TAKRAW</a></td>
                      </tr>
                    </table>
                  </div>
                  <div class="panel-footer"></div>
                </div>
              </ul>
            </li>
            <li><a href="index.php" class="dropdown-toggle" data-toggle="dropdown"><button class="btn5"><span class="fa fa-star"></span>&nbspSocioCultural&nbsp</button></a>
              <ul class="dropdown-menu" style="width: 260%;">
                <div class="panel">
                  <div class="panel-heading panelcolor">Categories:</div>
                  <div class="panel-body">
                    <table class="table table-striped">
                      <tr>
                        <td><a href="">DANCE SPORT</a></td>
                        <td><a href="">BATTLE OF THE BAND</a></td>
                        <td><a href="">SINGING CONTEST</a></td>
                      </tr>
                      <tr> 
                        <td><a href="">DANCE CONTEST</a></td>
                        <td><a href="">IMPERSONATION</a></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </ul>
            </li>
            <li><a href="index.php" class="dropdown-toggle" data-toggle="dropdown"><button class="btn3"><span class="fa fa-book"></span>&nbspAcademic</button></a>
              <ul class="dropdown-menu" style="width: 200%;">
                <div class="panel">
                  <div class="panel-heading panelcolor">Categories:</div>
                  <div class="panel-body">
                    <table class="table table-striped">
                      <tr>
                        <td><a href="">DEBATE</a></td>
                        <td><a href="">QUIZ BOWL</a></td>
                        <td><a href=""></a></td>
                      </tr>
                      <tr> 
                        <td><a href=""></a></td>
                        <td><a href=""></a></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </ul>
            </li>
            <li><a href="index.php" class="dropdown-toggle" data-toggle="dropdown"><button class="btn6"><span class="fa fa-play-circle"></span>&nbspPinoyGames</button></a>
              <ul class="dropdown-menu" style="width: 200%;">
                <div class="panel">
                  <div class="panel-heading panelcolor">Categories:</div>
                  <div class="panel-body">
                    <table class="table table-striped">
                      <tr>
                        <td><a href="">PATINTERO</a></td>
                        <td><a href="">TAPON BOLA</a></td>
                        <td><a href=""></a></td>
                      </tr>
                      <tr> 
                        <td><a href=""></a></td>
                        <td><a href=""></a></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </ul>
            </li>
            <li><a href=""><button class="btn4"><span class="fa fa-intersex"></span>&nbspPageant</button></a></li>
          </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="signup.php"><span class="fa fa-user-plus" style="font-size: 20px; color:orange"></span>&nbspSignup</a></li>
          <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user" style="font-size: 20px; color:orange"></span>&nbspSignin<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <div style="width:250px;">
                  <div class="panel">
                    <div class="panel-heading" style="background-color: #5b5d60; color: white;"><b>Signin:</b></div>
                  </div>
                  <div class="panel-body">
                  <form action="login.php" method="POST">
                      <label for="email">Email:</label>
                      <input type="email" id="email" class="form-control" name="email" required>
                      <label for="password">Password:</label>
                      <input type="password" id="password" class="form-control" name="password" required>
                      <p></br></p>
                      <div class="row" style="text-align:center; font-family:fira code;">
                      <button class="btn btn-danger" name="submit">Login</button>
                      </div>
                   </form>   
                  </div>
              </div>
            </ul>
          </li>
        </ul>
        </div>
    </div>
  </div>

  <p><br></p>
  <p><br></p>
  <br>

  <div id="container">
  	<img class="slides" src="./private_image/5.jpg">
  	<img class="slides" src="./private_image/3.jpg">
  	<img class="slides" src="./private_image/1.jpg">
    <h2>MOVE</h2>
    <p>Form healthy habits to take your fitness to the next level.</p>
	<button class="btn" id="btn1" onclick="plusIndex(-1)">&#10094</button>
	<button class="btn" id="btn2" onclick="plusIndex(1)">&#10095</button>
  </div>
  
  <!--Footer-->
  <div class="footer">
  	<strong style="color:#b4bab9"><p>Like us on:</strong>&nbsp
  	<a href="#"><span class="fa fa-facebook"></span></a>&nbsp
  	<a href="#"><span class="fa fa-twitter"></span></a>&nbsp
  	<a href="#"><span class="fa fa-instagram"></span></a>&nbsp
  	<a href="#"><span class="fa fa-google-plus"></span></a>&nbsp
  	<a href="#"><span class="fa fa-steam"></span></a></p>
  	<a href="#">FAQ's</a>|<a href="about">About</a>|<a href="VissionMission">Vission-Mission</a>
  	<p><i>Notre Dame Festival 2k18</i></p>
  </div>
</body>
</html>