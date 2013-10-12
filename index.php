<?php include 'header.php'; ?>
<div class="is"> <!-- Start IS (isaac's code starts here) -->
	<div class="container container_style">
	    <center>
			<div class="main_pitch">One stop platform for your day to day tasks.</div>
			<div class="sub_pitch">taskDaemon helps you get all you errands, chores, deliveries, tasks done on time very easily. </div>
			
			<div id="rotating-item-wrapper">
			<img src="img/cover.jpg" alt="a person entering a building" class="rotating-item" width="980" height="347" />
      <img src="img/2.jpg" alt="photo of building across from our office" class="rotating-item" width="980" height="347" />
      <img src="img/3.jpg" alt="building entrance with neon backlit walls" class="rotating-item" width="980" height="347" />
      <img src="img/4.jpg" alt="building lobby window reflections" class="rotating-item" width="980" height="347" />
      <img src="img/5.jpg" alt="reflection on building windows" class="rotating-item" width="980" height="347" />
      <img src="img/6.jpg" alt="two manequines in window" class="rotating-item" width="980" height="347" />    
			<p style="display:none;">Source code and instructions at: <a href="http://trendmedia.com/news/infinite-rotating-images-using-jquery-javascript/">Infinite Loop: Rotating Images Using jQuery (JavaScript)</a><br/>by <a href="http://trendmedia.com/">San Francisco WordPress website designers and developers - TrendMedia</a></p>
		</div>
			
			
			
		</center>
		<br/>
		
			<div class="container" style="width:100%;>
				<div class="lead text-center panel";>
					<div class="panel-body" style="float:left; width:33%;">
						<center>
						<a href="request_service.php" class="button-green big_button_padding">Request a service</a> <br/><br/>  
						<div class="sub_pitch" style="font-size: 1.2em;">Request a taskDaemon service. Book your time. Get the service delivered.</div>
						</center>
					</div>		
					<div class="panel-body" style="float:left; width:33%;">
						<center>
						<a href="post_task.php" class="button-green big_button_padding">Post a task</a> <br/><br/>  
							<div class="sub_pitch" style="font-size: 1.2em;">You can also post task on the task portal and get freelancers quote for it.</div>
						</center>
					</div>
					<div class="panel-body" style="float:left; width:33%;">
						<center>
						<a href="#join_form1" class="button-green big_button_padding" id="join_pop">Signup as freelancer</a> <br/><br/>
                            <!-- popup form -->
                            <a href="#x" class="overlay" id="join_form1"></a>
        						<div class="popup"> 
                                	
              									<h2>Signup for Freelancer</h2>
            									
                                                	<p>Please enter your details here</p>
														<form name="signup" action="db.php"  method="post">
															<div>
                												<label for="email">Login (Email)</label>
                												<input class="glowing-border" type="text" id="email" name="email"/>
            												</div>
            						
                                    						<div>
                												<label for="password">Password</label>
                												<input class="glowing-border" type="password" id="password" name="password"/>
            												</div>
            						
                                						    <div>
                												<label for="fullname">FullName</label>
                												<input class="glowing-border" type="text" id="name" name="name"/>
            												</div>
            						
                                						    <div>
                												<label for="address">Address</label>
                												<input class="glowing-border" type="text" id="address" name="address"/>
            												</div>
                                    
                                   							 <div>
                												<label for="mobile">Moblie</label>
                												<input class="glowing-border" type="text" id="mobile" name="mobile"/>
            												</div>
 
                                						    <div>
                												<label for="state">State</label>
                												<input class="glowing-border" type="text" id="state" name="state"/>
            												</div>

 	                              						    <div>
                												<label for="account_number">Account Number</label>
                												<input class="glowing-border" type="text" id="account_number" name="account_number"/>
            												</div>
                                						    <div>
                												<label for="country">Country</label>
                												<input class="glowing-border" type="text" id="country" name="country"/>
            												</div>
                                						    <div>
                												<label for="continent">Continent</label>
                												<input class="glowing-border" type="text" id="continent" name="continent"/>
            												</div>
															<br>
		<button class="button-green big_button_padding rcorners_mid" type="submit" name="submit" id="submit" onClick="return validateForm()">SIGNUP</button>							                                               
&nbsp;&nbsp;&nbsp;OR&nbsp;&nbsp;&nbsp;     
	 <a class="button-green big_button_padding rcorners_mid" href="#login_form" id="login_pop">LOGIN</a>
																</form>
                                        <a class="close" href="#close"></a>
       
       							
                        
                     
						</center>
				   <div class="sub_pitch" style="font-size: 1.2em;">&nbsp;&nbsp;&nbsp;Register as freelancer and make money.</div>
                	</div>
				
			</div>
<br>
			</div>

<div class="container container_style">
	<br>
	<center>
		<div class="main_pitch">taskDaemon Services</div>
        <br>
        <div class="sub_pitch" style="width: 1000px; font-size: 1.3em" >taskDaemon offers you a wide range of services from as simple as to run you errands to as specialized as developing mobile or web applicaitons, financial advisory and much more.. </div>
		<br>	 		    
				<table border="0" cellpadding="2" cellspacing="1" height="100%" width="100%" id="">
					<tr>
						<td align="center" valign="top">
							<table border="0" cellpadding="0" cellspacing="0" width="388" height="500" id="" align="left">
								<tr>
									<td align="center" valign="top">
										
                                        <h2 class="sub_pitch">Unskilled Services</h2>
										
											<table border="0" cellpadding="0" cellspacing="0" width="360" height="400" id="" align="center">
												
                                                <tr class="service_image">
													<td >
                										<ul > 
															<li >
																<a  href="plumber.php">
																	<img class="service_image_size" src="img/plumber.jpg" alt="image" />
																</a>
															</li>
               											</ul>
                                                    </td>
													
                                                    	<td >
                											<ul> 
																<li>
																	<a href="gardener.php">
																		<img class="service_image_size" src="img/gardener.jpg" alt="image" />
																	</a>
																</li>
                 											</ul>
                                                    </td>

                                                   	<td >
                											<ul> 
																<li>
																	<a href="driver.php">
																		<img class="service_image_size" src="img/driver.jpg" alt="image" />
																	</a>
																</li>
                 											</ul>
                                                    </td>

                                                </tr>
                                                <tr class="service_image">
													<td >
                											<ul> 
																<li>
																	<a href="plumber.php">
																		<img class="service_image_size" src="img/plumber.jpg" alt="image" />
																	</a>
																</li>
                 											</ul>
                                                    </td>
													
                                                    	<td >
                											<ul> 
																<li>
																	<a href="gardener.php">
																		<img class="service_image_size" src="img/gardener.jpg" alt="image" />
																	</a>
																</li>
                 											</ul>
                                                    </td>

                                                   	<td >
                											<ul> 
																<li>
																	<a href="driver.php">
																		<img class="service_image_size" src="img/driver.jpg" alt="image" />
																	</a>
																</li>
                 											</ul>
                                                    </td>

                                                </tr>
                                                <tr class="service_image">
													<td >
                											<ul> 
																<li>
																	<a href="plumber.php">
																		<img class="service_image_size" src="img/plumber.jpg" alt="image" />
																	</a>
																</li>
                 											</ul>
                                                    </td>
													
                                                    	<td >
                											<ul> 
																<li>
																	<a href="gardener.php">
																		<img class="service_image_size" src="img/gardener.jpg" alt="image" />
																	</a>
																</li>
                 											</ul>
                                                    </td>

                                                   	<td >
                											<ul> 
																<li>
																	<a href="driver.php">
																		<img class="service_image_size" src="img/driver.jpg" alt="image" />
																	</a>
																</li>
                 											</ul>
                                                    </td>
                                                	
                                                    </tr>
                                                      	<td align="right">
                											<ul> 
																<li class="service_button">
																	<a href="view_all.php" class="button-green big_button_padding">View all</a> 
																</li>
                   											</ul>
  	                                                  </td>                                            
											</table>                                        
										</td>
									</tr>
								</table>
                              
                              <table border="0" cellpadding="0" cellspacing="0" width="388" height="500" id="" align="left">
								<tr>
									<td align="center" valign="top">
										<h2  class="sub_pitch">Skilled Services</h2>	
                                			<table border="0" cellpadding="0" cellspacing="0" width="360" height="400" id="" align="center">
												<tr class="service_image">
													<td >
                										<ul> 
															<li>
																<a href="plumber.php">
																	<img class="service_image_size" src="img/plumber.jpg" alt="image" />
																</a>
															</li>
                 										</ul>
                                                    </td>
													
                                                   	<td >
                										<ul> 
															<li>
																<a href="gardener.php">
																	<img class="service_image_size" src="img/gardener.jpg" alt="image" />
																</a>
															</li>
                 										</ul>
                                                    </td>

                                                   	<td >
                										<ul> 
															<li>
																<a href="driver.php">
																	<img class="service_image_size" src="img/driver.jpg" alt="image" />
																</a>
															</li>
                 										</ul>
                                                    </td>

                                                </tr>
                                                	<tr class="service_image">
														<td >
                											<ul> 
																<li>
																	<a href="plumber.php">
																		<img class="service_image_size" src="img/plumber.jpg" alt="image" />
																	</a>
																</li>
                 											</ul>
                                                    	</td>

                                                    	<td >
                											<ul> 
																<li>
																	<a href="gardener.php">
																		<img class="service_image_size" src="img/gardener.jpg" alt="image" />
																	</a>
																</li>
                 											</ul>
                                                    	</td>
	
    	                                               	<td >
                											<ul> 
																<li>
																	<a href="driver.php">
																		<img class="service_image_size" src="img/driver.jpg" alt="image" />
																	</a>
																</li>
                 											</ul>
        	                                            </td>

                                                </tr>
            	                                    <tr class="service_image">
														<td >
                											<ul> 
																<li>
																	<a href="plumber.php">
																		<img class="service_image_size" src="img/plumber.jpg" alt="image" />
																	</a>
																</li>
                 											</ul>
                    	                                </td>
													
                                                    	<td >
                											<ul> 
																<li>
																	<a href="gardener.php">
																		<img class="service_image_size" src="img/gardener.jpg" alt="image" />
																	</a>
																</li>
                 											</ul>
                        	                            </td>

                                	                   	<td >
                											<ul> 
																<li>
																	<a href="driver.php">
																		<img class="service_image_size" src="img/driver.jpg" alt="image" />
																	</a>
																</li>
                 											</ul>
                                                    	</td>

                                                	</tr>
                                                    
                                                       	<td align="right" >
                											<ul> 
																<li class="service_button">
																	<a href="view_all.php" class="button-green big_button_padding">View all</a> 
																</li>
                 											</ul>
    	                                                </td>

												</table>
		                                	</td>
										</tr>
								</table>

							<table border="0" cellpadding="0" cellspacing="0" width="388" height="500" id="" align="left">
								<tr>
									<td align="center" valign="top">
										<h2 class="sub_pitch">Highly Skilled Services</h2>
									
                                		    <table border="0" cellpadding="0" cellspacing="0" width="360" height="400" id="" align="center">
												 <tr class="service_image">
													<td >
                										<ul> 
															<li>
																<a href="plumber.php">
																		<img class="service_image_size" src="img/plumber.jpg" alt="image" />
																</a>
															</li>
                 										</ul>
                                                    </td>
												
                                                   	<td >
                										<ul> 
															<li>
																<a href="gardener.php">
																	<img class="service_image_size" src="img/gardener.jpg" alt="image" />
																</a>
															</li>
                 										</ul>
                                                    </td>

                                                   	<td >
                										<ul> 
															<li>
																<a href="driver.php">
																	<img class="service_image_size" src="img/driver.jpg" alt="image" />
																</a>
                                                          	</li>
                 										</ul>
                                                    </td>

                                               </tr>

                                                <tr class="service_image">
                                                	<td >
                										<ul> 
															<li>
																<a href="plumber.php">
																	<img class="service_image_size" src="img/plumber.jpg" alt="image" />
																</a>
															</li>
                 										</ul>
                                                    </td>
													
                                                   	<td >
                										<ul> 
															<li>
																<a href="gardener.php">
																	<img class="service_image_size" src="img/gardener.jpg" alt="image" />
																</a>
															</li>
                 										</ul>
                                                    </td>

                                                   	<td >
                										<ul> 
															<li>
																<a href="driver.php">
																	<img class="service_image_size" src="img/driver.jpg" alt="image" />
																</a>
															</li>
               											</ul>
                                                    </td>
													
                                                </tr>
            
                                                <tr class="service_image">
													<td >
               											<ul> 
															<li>
																<a href="plumber.php">
                                                                	<img class="service_image_size" src="img/plumber.jpg" alt="image" />
																</a>
															</li>
                 										</ul>
                                                    </td>
													
                                                    <td >
                										<ul> 
															<li>
																<a href="gardener.php">
																	<img class="service_image_size" src="img/gardener.jpg" alt="image" />
																</a>
															</li>
                 										</ul>
                                                    </td>

                                                   	<td >
                										<ul> 
															<li>
																<a href="driver.php">
																	<img class="service_image_size" src="img/driver.jpg" alt="image" />
																</a>
															</li>
                 										</ul>
                                                    </td>

                                                </tr>                    
        	                                       	<td  align="right" >
               											<ul > 
															<li class="service_button">
																<a href="view_all.php" class="button-green big_button_padding">View all</a> 
															</li>
               											</ul>
                                                   </td>

											</table>
     				                    </td>
									</tr>
							</table>
						</td>
					</tr>
				</table> 
			</div>
		</center>
</div>    

<div class="container container_style">
<br>
<table border="0" cellpadding="0" cellspacing="5" height="100%" width="100%" id="">
<tr>
<td >
<center>
<!--  <video width="320" height="240" controls class="homevideo1">
<source src="videos/1.mp4" type="video/mp4">
<!--<source src="movie.ogg" type="video/ogg">-->
<!-- Your browser does not support the video tag. 
</video> -->
<iframe width="480" height="320" src="http://www.youtube.com/embed/DsRMaVw41DA" frameborder="0" allowfullscreen></iframe>
</center>
</td>
<td>
<center>
<div class="sub_pitch" style="width: 480px">taskDaemon helps you get all you errands, chores, deliveries, tasks done on time very easily. </div>
</center>
</td>
</tr>
</table>
</br>
</div>

	
<?php include 'footer.php'; ?>
 