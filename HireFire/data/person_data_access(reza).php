<?php require_once "data_access.php";?>
<?php
    
	//print all user
	/*<?php foreach($Users as $user) {?>
               <li><?php echo $user; ?></li>
            <?php } ?>
	
	*/
	function gigTitleaccessToDb($key)
	{
		$gId=$key;
		//echo "$name";
		$sql = "SELECT * FROM gigs WHERE gigId LIKE '$gId' ";
		$result = executeSQL($sql);
		//var_dump($result);
		$person = mysqli_fetch_assoc($result);
         //var_dump($person);
		return $person;
	}
	
	
	function buyernameaccessToDb($key)
	{
		$bid=$key;
		//echo "$name";
		$sql = "SELECT * FROM users WHERE uName LIKE '$bid' ";
		$result = executeSQL($sql);
		//var_dump($result);
		$persons = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
				$persons[$i] = $row;
				//var_dump($persons[$i]['type']);
			}
		
		return $persons;
		
		
	}
	
	function sellerorderaccessToDb($key)
	{
		$sid=$key;
		//echo "$name";
		$sql = "SELECT * FROM orders WHERE sId LIKE '$sid' ";
		$result = executeSQL($sql);
		//var_dump($result);
		$persons = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
				$persons[$i] = $row;
				//var_dump($persons[$i]['type']);
			}
		
		return $persons;
		
	}
	
	
	function selleridaccessToDb($key)
	{
		$name=$key;
		//echo "$name";
		$sql = "SELECT * FROM sellers WHERE uName LIKE '$name' ";
		$result = executeSQL($sql);
		//var_dump($result);
		$persons = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
				$persons[$i] = $row;
				//var_dump($persons[$i]['type']);
			}
		$id=$persons['0']['sellerId'];
		return $id; 
	}
	
	
	
	function getMaxGigId(){

		$sql = "SELECT MAX(gigId) FROM gigs";        
        $result = executeSQL($sql);
        //var_dump($result);
        $maxGigId = mysqli_fetch_assoc($result);
        //var_dump($person);
       return $maxGigId;
	}
	function addGigToDb($person)
	{
		$gigtitle=$person["gigtitle"];
		$gigprice=$person["gigprice"];
		$gigdescription=$person["gigdescription"];
		$category=$person["category"];
		$date= date("Y-m-d");
		
		$sql = "INSERT INTO gigs VALUES('reza','$gigtitle','null','$category','$gigprice','$gigdescription' ,'null','$date','0')";
       
	    $result = executeSQL($sql);
		// var_dump($result);
        return $result;
	}
	
	
	function accessGigToDb($key)
	{
		$name=$key;
		$sql = "SELECT * FROM gigs WHERE uName LIKE '$name' ";
		$result = executeSQL($sql);
		//var_dump($result);
		$persons = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
				$persons[$i] = $row;
				//var_dump($persons[$i]['type']);
			}
			//var_dump($persons);
		return $persons;  
    }
	
	
	function accessProfileBuyer($key)
	{
		$name=$key;
		$sql = "SELECT * FROM users WHERE uName LIKE '$name' ";
		$result = executeSQL($sql);
		$persons = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
				$persons[$i] = $row;
				//var_dump($persons[$i]['type']);
			}
			//var_dump($persons);
		return $persons;  
    }
	function accessProfileSeller($key)
	{
		$name=$key;
		$sql = "SELECT * FROM sellers WHERE uName LIKE '$name' ";
		$result = executeSQL($sql);
		//var_dump($result);
		$persons = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
				$persons[$i] = $row;
				//var_dump($persons[$i]['type']);
			}
			//var_dump($persons);
		return $persons;  
    }
    function logindb($key)
	{
		$name=$key['name'];
		$password=$key['password'];
		//$name=$key->name;
		//$pass=$key->password;
		//$password=(int)$password;
		//var_dump($password);	
		$sql = "SELECT * FROM users WHERE uName LIKE '$name' and password LIKE '$password'";
		$result = executeSQL($sql);
		$persons = array();
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
				$persons[$i] = $row;
				//var_dump($persons[$i]['type']);
			}
			//var_dump($persons);
		return $persons;  
    }
	
	
	
	function getUserEmailFromDb($key)
	{
		$email=$key['email'];
        $sql = "SELECT * FROM users WHERE email LIKE '$email'";
        $result = executeSQL($sql);
		//var_dump("$result");
        $persons = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
			 echo "<script>
                        alert('$row');
						//document.location='User/main.html';
                     </script>";
        }
        return $persons;
    }
	
	
	 function getuserNameFromDb($key)
	 {
		$name=$key['name'];
        $sql = "SELECT * FROM users WHERE uName LIKE '$name'";        
        $result = executeSQL($sql);
        
        $person = mysqli_fetch_assoc($result);
        
        return $person;
    } 
	
	
	
	function getJoiningDateFromDb($key)
	 {
		$name=$key;
        $sql = "SELECT * FROM users WHERE uName LIKE '$name'";        
        $result = executeSQL($sql);
        
        $person = mysqli_fetch_assoc($result);
        
		
		$day=explode("-",$person['joiningDate']);
		$day=$day[0];
        return $day;
    } 
	
	
	function getLanguageByBuyerFromDb($uName){
        $sql = "SELECT * FROM buyers WHERE uName LIKE '$uName'";        
        $result = executeSQL($sql);
        
        $persons = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }
        
        return $persons;
    } 
	function getSkillsBySellerFromDb($uName){
        $sql = "SELECT * FROM skills WHERE uName LIKE '$uName'";        
        $result = executeSQL($sql);
        $persons = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }
        //var_dump($persons);
        return $persons;
    } 
	
	
	
	
    function addPersonToDb($person){
        $sql = "INSERT INTO person(id, name, email) VALUES(NULL, '$person[name]', '$person[email]')";
        $result = executeSQL($sql);
        return $result;
    }
    
    function editPersonToDb($person){
        $sql = "UPDATE person SET name='$person[name]', email='$person[email]' WHERE id=$person[id]";
        $result = executeSQL($sql);
        return $result;
    }
    
    function removePersonFromDb($personId){
        $sql = "DELETE FROM person WHERE id=$personId";        
        $result = executeSQL($sql);
        return $result;
    }
    
    function getAllUsersFromDb(){
        $sql = "SELECT * FROM users";        
        $result = executeSQL($sql);
        
        $persons = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }
        
        return $persons;
    }
    
    function getPersonByIdFromDb($personId){
        $sql = "SELECT * FROM person WHERE id=$personId";        
        $result = executeSQL($sql);
        
        $person = mysqli_fetch_assoc($result);
        
        return $person;
    }    

    function getPersonsByNameFromDb($personName){
        $sql = "SELECT * FROM person WHERE name LIKE '%$personName%'";
        $result = executeSQL($sql);
        
        $persons = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }
        
        return $persons;
    }
    
    function getPersonsByEmailFromDb($personEmail){
        $sql = "SELECT * FROM person WHERE email LIKE '%$personEmail%'";
        $result = executeSQL($sql);
        
        $persons = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }
        
        return $persons;
    }
    
    function getPersonsByNameOrEmailFromDb($key){
        $sql = "SELECT * FROM users WHERE uName LIKE '%$key%' OR password LIKE '%$key%'";
        $result = executeSQL($sql);
        
        $persons = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }
        
        return $persons;
    }
    
?>