<?php   session_start(); 
		require_once "../../service/person_service(reza).php";
		require_once "../../data/person_data_access(reza).php";
		if(empty($_SESSION['username']))
		{
			//echo "<script>alert('Please Login first');document.location='../SignUp1.php'</script>";
			header("location:../SignIn.php");
		}
?>
<?php 
     
     $username = $_SESSION['username'];
	 //var_dump($username);
	 //$sellerid=selleridaccess($username);
      $person=getNameFromDb($username);
	 //var_dump($languages[1]['language']);
?>







<html>
	<head>
		<title>HireFire</title>
	</head>
	<body>
	    <table border="0" width="100%" height="100%">
		    <tr height="10%">
			    <td colspan="3">
				    <table  border="0" width="100%" border="1">
				        <tr>
							<td><a href="../Categories/programing.php"><img src="../image/image.png" width="150"></a></td>
							<td>
							</td>
							<td align="right">
								<font size="4"><a href="inbox.php">Messages&nbsp;</a>
								<a href="Orders_pending.php">Orders&nbsp</a>
								<a href="dashboard.php">Dashboard&nbsp;</a>
								<a href="logout_handler.php">LogOut</a></font>
							</td>
							<td width="5"><a href="profile.php"><img src="../image/b.png" width="50"></a></td>
				        </tr>		
				    </table>
							
				</td>
			</tr>
			<tr >
				<td colspan="3"><hr/></td>
			</tr>
			<tr height="5%">  
			    <td width="25%"></td>
				<td width="30%">	
						  <a>Dashboard&nbsp;</a>
						  <a href="../gig/gigs.php">Gigs</a>
						  <a href="earnings.php">Earning&nbsp;</a>
				</td>
				<td width="45%"></td>
            </tr>					
			<tr height="50%">	
                <td width="25%" height="100%"></td>			
				<td width="30%" height="100%">
					<table width="100%" height="100%" border="0">
						<tr width="40%">
							<td width="30%" align="center"><img src="../image/user-avatar.jpg" width="100"><br/><a><?php echo $person['name']?></a></td>
							<td width="70%">
								    Positive Rating<br/>0%<br/>Response Time <br/>1 Hr.	
							</td>
						</tr>
						<tr  width="60%">
							<td colspan="2">
								<table width="100%">
									<tr>
									    <td>
											Response Rate &nbsp; &nbsp;90%<br/><progress value="90" max="100"></progress><br/>
										    Orders Completed &nbsp;&nbsp;80%<br/><progress value="80" max="100"></progress><br/>
											Delivered on Time &nbsp;100%<br/><progress value="100" max="100"></progress>
													
										</td>	
									</tr>	
								</table>
							</td>
						</tr>
					</table>
				</td>
				
				<td width="100%" height="50%">
					    <table border="1" cellspacing="0" width="60%" height="30%">
						    <tr>
								 <th>Sales in Queue</th>
								 <th>Open Purchases</th>
								 <th>Balance</th>
								 <th>Earned in November</th>
							</tr>
							<tr align="center">
								 <td>7</td>
								 <td>2</td>
								 <td>$400</td>
								 <td>$300</td>
							</tr>
					</table>
				</td>
				</td>
			</tr>
			<tr colspan="3" height="20%">
			    <table border="0" width="100%">
				      <hr>
					    
					   <tr>
						<th align="left">CATEGORIES</th>
					   <th align="left">ABOUT</th>
					   <th align="left">COMMUNITY</th>
					   <th align="left">SUPPORT</th>
					   <th align="left">FOLLOW US</th>
				   </tr>
				  
				   <<tr>
						 <th align="left">CATEGORIES</th>
					   <th align="left">ABOUT</th>
					   <th align="left">COMMUNITY</th>
					   <th align="left">SUPPORT</th>
					   <th align="left">FOLLOW US</th>
				   </tr>
				  
				   <<tr>
						<td> <a href="../categories/Graphics.php">Graphics & Design</a></td>
						<td>Careers</td>
						<td>Blog</td>
						<td>Contact Support</td>
						<td> <a href="www.google.com">Google</a></td>
					</tr>
					<tr>
						<td><a href="../categories/digital.php">Digital Marketing</a></td>
						<td>Press & News</td>
						<td>Forum</td>
						<td>Help & Education</td>
						<td>  <a href="www.Twitter.com">Twitter</a></td>
					
					</tr>
					<tr>
						<td><a href="../categories/writing.php">Writing & Translation</a></td>
						<td>Partnerships</td>
						<td>Podcast</td>
						<td>Trust & Safety</td>
						<td> <a href="www.Youtube.com">Youtube</a></td>
					
					</tr>
					<tr>
						<td><a href="../categories/video.php"> Video & Animation</a></td>
						<td>Privacy Policy</td>
						<td>Affiliates</td>
						<td>Selling on Freelance</td>
						<td> <a href="www.facebook.com">Facebook</a></td>
					
					</tr>
					<tr>
						<td><a href="../categories/music.php"> Music & Audio</a></td>
						<td>Terms of Service</td>
						<td></td>
						<td>Buying on freelance</td>
						<td></td>
					</tr>
					<tr>
						<td> <a href="../categories/programing.php">Programming & Tech</a></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><a href="../categories/business.php">Business</a></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
				   </tr>
				   </tr>
				</table>
				   
			</tr>
				
				
			<tr height="5%">
						<td><hr><p align="center">COPYRIGHT @ 2017</p></td>	  
			</tr>
		</table>
	</body>	
</html>