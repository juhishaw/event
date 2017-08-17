<!DOCTYPE html>
<html lang="en">
<head>
  <title>FestClub</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60"></body>
    <!-- login-->
    <!-- top nav bar-->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">FeStClUb</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="main.html">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Events <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="literary.html">Literary</a></li>
            <li><a href="cultural.html">Cultural</a></li>
            <li><a href="gaming.html">Gaming</a></li>
              <li><a href="Artistic.html">Artistic</a></li>
              <li><a href="tech.html">Technical</a></li>
              <li><a href="quiz.html">Quiz UP</a></li>
                       </ul>
        </li>
         
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
    </div>
  </div>
</nav>

    <!-- down nav bar-->
    <nav class="navbar navbar-inverse navbar-fixed-bottom">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FeStClUb</a>
    </div>
     <ul class="nav navbar-nav navbar-right">
            <li><a href="tos.html">Terms of Service</a></li>
      <li><a href="privacy.html">privacy Policy</a></li>
      <li><a href="join.html">Join Us</a></li>
    </ul>
  </div>
</nav>
<!-- jumbotron box-->
    <div class="jumbotron" style="background-color:orange">
  <h1 class="text-center">Login</h1>      
</div>
<!--Login/SingUp-->
<div class="container">    
<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
<div class="panel panel-info" >
<div class="panel-heading">
<div class="panel-title">Sign In
</div>
<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="forgot.html">Forgot password?</a>
</div>
</div>             
<div style="padding-top:30px" class="panel-body" >
<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>                            
<form id="loginform" class="form-horizontal" role="form">
<div style="margin-bottom: 25px" class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                              </div>
<div style="margin-bottom: 25px" class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
<input id="login-password" type="password" class="form-control" name="password" placeholder="password">
</div>
<div class="input-group">
<div class="checkbox">
<label>
<input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
</label>
</div>
</div>
<div style="margin-top:10px" class="form-group">
<!-- Button -->
<div class="col-sm-12 controls">
<a id="btn-login" href="#" class="btn btn-success">Login  </a>                                      
<a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>
</div>
</div>
<div class="form-group">
<div class="col-md-12 control">
<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >Don't have an account! <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">Sign Up Here</a>
</div>
</div>
</div>    
</form>     
</div>
</div>
</div>
<div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
<div class="panel panel-info">                    
<div class="panel-heading">                        
<div class="panel-title">Sign Up</div>
<div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>                            
</div>  
<div class="panel-body" >
<form id="signupform" class="form-horizontal" role="form">
<div id="signupalert" style="display:none" class="alert alert-danger">
<p>Error:</p>
<span></span>                                    
</div>
<div class="form-group">
<label for="email" class="col-md-3 control-label">Email</label>
<div class="col-md-9">
<input type="text" class="form-control" name="email" placeholder="Email Address">
</div>
</div>
<div class="form-group">
<label for="firstname" class="col-md-3 control-label">First Name</label>
<div class="col-md-9">
<input type="text" class="form-control" name="firstname" placeholder="First Name">
</div>
</div>
<div class="form-group">
<label for="lastname" class="col-md-3 control-label">Last Name</label>
<div class="col-md-9">
<input type="text" class="form-control" name="lastname" placeholder="Last Name">
</div>
</div>
<div class="form-group">
<label for="password" class="col-md-3 control-label">Password</label>
<div class="col-md-9">
<input type="password" class="form-control" name="passwd" placeholder="Password">
</div>
</div>
<div class="form-group">
<label for="icode" class="col-md-3 control-label">Invitation Code</label>
<div class="col-md-9">
<input type="text" class="form-control" name="icode" placeholder="">
</div>
</div>
<div class="form-group">
<!-- Button -->                                        
<div class="col-md-offset-3 col-md-9">
<button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
<span style="margin-left:8px;">or</span>  
</div>
</div>
<div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
<div class="col-md-offset-3 col-md-9">
<button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
</div>                                           
</div>                            
</form>
</div>
</div>            
</div> 
</div>    
</html>                                             
                      
        
        