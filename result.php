<?php


if(isset($_POST['username'],$_POST['password'])){
	$uname = $_POST['username'];
	$pwd = $_POST['password'];
	if($uname == 'ivol' && $pwd == 'ivol'){
		echo "<div class=header>Cross Site Request Forgery - Synchronizer Token Pattern</div>";
		echo '<br><br><br><br><br><br><br><br><h3><center>Successfully logged</h3>';
	}
	else{
		echo "<h1><center>Invalid Credentials<br> Try again </h1>";
		echo "<script type='text/javascript'>alert('Invalid Credentials');</script>";
		exit();
	}
}
?>


<!DOCTYPE html>
<html>
	<head>
	<title>Cross Site Request Forgery Protection</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link href="style.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link href="style.css" rel="stylesheet" id="bootstrap-css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script>
	
	$(document).ready(function(){
	
	var xhttp;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("token_to_be_added").setAttribute('value', this.responseText) ;
		}
	
	
	};
	
	xhttp.open("GET", "csrf_token_generator.php", true);
	xhttp.send();
	
	});
</script>
	</head>
	<body>
		<div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div class="box">
                      <form class="form" action="home.php" method="post">
                            <div class="container">
                                <label for="username"><center><h4><b>Write Something Here<h4></b></label><br>
                                <input type="text" name="updatepost" class="form-control">
				<input type="hidden" name="token" value="" id="token_to_be_added"/>
                                <input type="submit" class="button" value="Update Post">
                            </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<footer>
 <div class="container">
   <div class="row">
   
            <div class="col-md-4 col-sm-6 col-xs-12">
              <span class="logo">Web Security Project</span>

		  <p class="lg"> username = ivol || password = ivol</p>
		<p class="lg">Copyright <i class="fa fa-copyright" aria-hidden="true"> 2020 Ivol || Powered by Ivol </i></p><br>
            </div>
            
            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="menu">
                     <span>Project Info</span>    
                     <li>
                        <a href="https://github.com/Sachinishihara/Cross-Site-Request-Forgery">Code</a>
                      </li>
                           
                      <li>
                         <a href="https://medium.com/@nadeeshihara8/preventing-csrf-attack-using-synchronizer-token-pattern-bdc03126b5a9?sk=d038267ae0569f9deb4aa03f18dd62a0">Blog </a>
                      </li>
                     
                 </ul>
            </div>
       
            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="address">
                    <span>Done by Ivol</span>       
                    <li>
                       <i class="fa fa-address-card-o"></i><a href="#">IT18209976</a>
                    </li>
                    <li>
                       <i class="fa fa-user-circle"></i><a href="#">DNS Shihara</a>
                    </li> 
                    <li>
                       <i class="fa fa-envelope" aria-hidden="true"></i> <a href="#">nadeeshihara8@gmail.com</a>
                    </li> 
               </ul>
           </div>
       
       
       </div> 
    </div>
</div>
	</body> 
</html>
