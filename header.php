<?php
	require_once("session.php");
?>
<!DOCTYPE html>
<html>
<head>

    <title>taskdaemon | Outsource Your Tasks | Earn Money</title>
    <base href="http://localhost/" /> 
    <link rel="icon" href="img/icon.jpg" type="image/jpg" />	
    
    <link rel="stylesheet" type="text/css" href="stylesheets/homepage.css"/>
	<link rel="stylesheet" type="text/css" href="stylesheets/modal.css"/>
	<script src="javascript/javascript.js"></script>
	
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=3.0.1'></script>    
		<script type='text/javascript' src='javascript/infinite-rotator.js'></script>		
    <link rel="stylesheet" href="stylesheets/style.css" type="text/css" media="screen" />
	
	<script type='text/javascript'>
$(document).ready(function(){

// Your existing code

    $(document).keyup(function(e) { 
        if (e.keyCode == 27) { // esc keycode
            $('#login_form').hide();
            $('#popup_box').hide();
        }
    });
});
</script>    
</head>
<div class="container1">
	<div class="topdiv" align="right"><div class="topdiv" align="right">
		<img src="img/call.jpg"/>Call us for immediate assistance: +91 9743-442296 &nbsp;&nbsp;
			<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.taskdaemon.com&layout=button_count&show_faces=true&width=450&action=like&colorscheme=light&heig				ht=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:80px; height:20px;" allowTransparency="true">
            </iframe>

			<a href="https://twitter.com/TaskDaemon" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false"></a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
            </script>

	</div> 
</div>
	
<div class="container">    
	<div class="navbar-inner"> 
		<a  href="http://localhost/"><img style="margin-top:5px; margin-left:5px; border:none" src="img/icon_test.jpg"/></a>
        	<div class="nav_margin">	
				<ul class="nav">
					<li class="nav_active"><a href="index.php">HOME</a></li>
                    <li class="nav_active"><a href="how_it_work.php">HOW IT WORKS</a></li>
					<li class="nav_active"><a href="taskdaemon_services.php">TASKDAEMON SERVICES</a></li>
                    <li class="nav_active"><a href="task_portal.php">TASK PORTAL</a></li>
                    <li class="nav_active"><a href="#join_form">TASKDAEMON FOR BUSINESS</a></li>
                   

<?php 
    if(!isset($_SESSION['email']))
      {

                    echo ' <li class="button-white rcorners_left"><a href="#login_form" id="login_pop">LOGIN</a> </li>
 				    <!-- popup form #1 -->
        				<a href="#x" class="overlay" id="login_form"></a>
        					<div class="popup" id="popup_box">
            					<h2>Welcome User!</h2>
            					<p>Please enter your login and password here</p>
        							<form name="login" action="verify_user.php" method="post">    
						    	<div >
                				
                				<center><input class="glowing-border" type="text" id="email" name="email" placeholder="E-mail Address"; onblur="login_page()" /></center>
            					</div>	
								
                                <div>
                			
                				<center>	<input class="glowing-border" type="password" id="password" name="password" placeholder="Password" onblur="passid_validation(7,12)"/></center>
            					</div>
<div >
                				
                				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="remind_me" name="remind_me"/>&nbsp;&nbsp;Remember me next time </input>
            					</div>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;
		<button class="button-green big_button_padding" type="submit" name="login" id="login" onClick="return login_page()">LOGIN</button>&nbsp;&nbsp;
		<a  href="recover_password.php">Forgotten your password?</a>
									</form>
            					<a class="close" href="#close"></a>
							</div>
					<li class="button-green rcorners_right"><a href="#join_form" id="join_pop">SIGNUP</a></li>
                    <!-- popup form -->
						<a href="#x" class="overlay" id="join_form"></a>
        					<div class="popup"> 
								<table>
        							<tr>
        								<td>
              								<h2>Signup for User</h2>
                                            <p>Please enter your details here</p>
												<form name="signup" action="db.php"  method="post">
													<div>
                										
                						<center>	<input class="glowing-border" type="text" id="email" name="email" placeholder="E-Mail Address" required pattern="[a-zA-Z]+"/></center>
            										</div>
            						
                                    				<div>
 
                						<center>	<input class="glowing-border" type="password" id="password" name="password" placeholder="Password"/> </center>
            										</div>
            						
                                					<div>
 
										<center>	<input class="glowing-border" type="text" id="name" name="name" placeholder="Fullname" /><center>
            										</div>
            						
                               					    <div>
 
										<center>	<input class="glowing-border" type="text" id="address" name="address" placeholder="Address" /><center>
           											</div>
                                    
													<div>
 
                						<center>	<input class="glowing-border" type="text" id="mobile" name="mobile" placeholder="Mobile"/><center>
            										</div>                
         				<br>								
              			<button class="button-green big_button_padding signup_button" type="submit" name="submit" id="submit" onClick="return signup_page()">SIGNUP</button>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OR&nbsp;&nbsp;&nbsp;&nbsp
      
						<a class="button-green big_button_padding" href="#login_form" id="login_pop">LOGIN</a>							                            						</form>
						
						
						<a class="close" href="#close"></a>
			 						
                                        </td>
									</tr>


<br>
										<table>
									<br>
										</table>

        						</table>

	        			</div>';}
	else
	  {
	      echo '<a href="logout.php" class="button-green big_button_padding">SIGNOUT</a>';
	  }
?>

			</ul>					
			</div>
    </div>
</div>
<body>