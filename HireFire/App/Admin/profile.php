<?php   session_start(); 
        require_once "../../data/person_data_access(reza).php";
?>
<?php 
     
     $username = $_SESSION['username']; 
	 $person=getNameFromDb($username);
?>


<table width="100%">
	<tr>
		<td colspan="4">
			<table  width="100%" border="1">
				<tr>

					<td><a href="admin.html"><img src="../image/image.png" width="150"/></a></td>
					
					<td align="right">
						<font size="4"><a href="inbox.html">Messages&nbsp;</a>
						<a href="admin.php">Dashboard&nbsp;</a>
						<a href="../PublicHome.html">LogOut</a></font>
					</td>
					<td width="4%"><img src="../image/b.png" width="50"></td>
				</tr>		
			</table>
		</td>
	</tr>
	<tr >
				<td colspan="4"><hr/></td>
			</tr>
	<tr height="600">
		<td width="1%"></td>
		<td valign="top" align="center" width="20%">
			<img src="../image/b.png" width="30%" alt="TANIM"/>
			<br/><?php echo $person['name']?><hr/>
			
			<table width="100%">
			
			<tr align="center">
				<td colspan="3">
				</td>
			</tr>
			
			
			<tr>
				<td width="5%"><img src="../image/member1.png"/></td>
				<td>Member since</td>
				<td align="right">April 2017</td>
			</tr>
			
			<tr>
				<td width="5%"><img src="../image/time.png"/></td>
				<td>Average Response Time</td>
				<td align="right">1Hrs.</td>
			</tr>
			
			<tr height="10">
				<td colspan="3"><hr/></td>
			</tr>
			<tr>
				<td colspan="2"><font size="4"><b>Languages</font></b>
				<br/>English</td>
				<td valign="top" align="right">Add new</td>
			</tr>
			<tr height="10">
				<td colspan="3"><hr/></td>
			</tr>
			
			<tr>
				<td colspan="2"><font size="4"><b>Linked accounts</font></b>
				<ul>
					<li>Google</li>
					<li>Facebook</li>
					<li>Linkedin</li>
				</ul>				
				</td>
			</tr>
			</table>
			
		</td>
		<td width="5%"></td>
		<td width="60%" valign="top">
		<h1></h1><br/><br/>
		<table cellspacing="40">
		<tr>
			<td>
				<h3></h3>
			</td>
		</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td colspan="4"><iframe src="footer.html" width="100%" height="200%" frameborder="0"  scrolling="yes"></iframe></td>
	</tr>
</table>