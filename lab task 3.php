<?php
     $name="";
	 $err_name="";

     $uname="";
	 $err_uname="";

	 $pass="";
	 $err_pass="";

	 $cpass="";
	 $err_cpass="";

	 $email="";
	 $err_email="";

	 $phone="";
	 $err_phone="";

	 $address="";
	 $err_address="";

	 $bdate="";
	 $err_bdate="";

	 $gender="";
	 $err_gender="";

     $wdu="";
	 $err_wdu="";

	 $bio="";
	 $err_bio="";
		 
     if($_SERVER["REQUEST_METHOD"]=="POST")
	 {

		     if(empty($_POST["name"])){
				 $err_name="Name Required";
			 }
			 elseif(isset($_POST[""])){
		         echo htmlspecialchars($_POST["name"]);
		     }
			 else{
				 $name=$_POST["name"];
			 }




			 if(empty($_POST["uname"])){
				 $err_uname="Username Required";
			 }
			 elseif(strlen($_POST["uname"])<6){
				 $err_uname="Username Must Be 6 characters Long";
			 }
			 elseif(strpos($_POST["uname"],"")){
				 $err_uname="Username Should Not Contain White Space";
			 }
			 elseif(isset($_POST[""])){
		         echo htmlspecialchars($_POST["username"]);
		     }
			 else{
				 $uname=$_POST["uname"];
			 }







			if(empty($_POST["pass"])){
				 $err_pass="Password Required";
			 }
			 elseif(isset($_POST[""])){
		         echo htmlspecialchars($_POST["pass"]);
		     }
			 elseif(strlen($_POST["pass"])<8){
				 $err_pass="Password Must Be 8 Charachter Long";
			 }
			 elseif(!strpos($_POST["pass"],"#")){
			     $err_pass="[Password should contain special character]";
		     }
		     elseif(!is_numeric($_POST["pass"])){
			     $err_pass="[Password should contain Numeric values]";
		     }
		     elseif(!ctype_upper($_POST["pass"])){
			     $err_pass="[Password should contain UpperCase values]";
		     }
		     elseif(!ctype_lower($_POST["pass"])){
			     $err_pass="[Password should contain LowerCase values]";
		     }
		     elseif(strpos($_POST["pass"]," ")){
			     $err_pass="[Password should not contain white space]";
		     }

			 else{
				 $pass=$_POST["pass"];
			 }

             if(empty($_POST["confirm pass"])){
				 $err_cpass="Confirm Your Password";
			 }
			 else{
				 $cpass=$_POST["confirm pass"];
			 }
			 









			  if (empty($_POST["email"])) {
                 $err_email = "Email is required";
             }
             elseif(strpos($_POST["email"],"@.")){
			     $err_email="[Email must contain @ and at least one dot after @]";
		     }			 
			
			 else {
                 $email =$_POST["email"];
             }





			 if(empty($_POST["phone"])){
				 $err_phone="Insert Your Phone Number";
			 }
			 else{
				 $phone=$_POST["phone"];
			 }



			  if(empty($_address["address"])){
				 $err_address="Select Your Address";
			 }
			 else{
				 $address=$_POST["address"];
			 }
              


			  if(empty($_address["bdate"])){
				 $err_bdate="Select Your Birth date";
			 }
			 else{
				 $bdate=$_POST["bdate"];
			 }
              



			  if(empty($_gender["gender"])){
				 $err_gender="Select Your gender";
			 }
			 else{
				 $gender=$_POST["gender"];
			 }
              



			  if(empty($_wdu["wdu"])){
				 $err_wdu="Select Your Where did you hear about us?";
			 }
			 else{
				 $wdu=$_POST["wdu"];
			 }
              



			



			 if(empty($_POST["bio"])){
				 $err_bio="Bio Required";
			 }
			 else{
				 $bio=$_POST["bio"];
			 }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>  Club Member Registration </title>
</head>
<body>
	<fieldset>
		<legend>Club Member Registration</legend>
	
	<h1>Club Member Registration </h1>

	<form action="" method = "post">
		
           <table>
           	<tr>
           		<td><span>Name</span></td>
           		<td>:<input type="text" name="name" value = "<?php echo $name;?>" placeholder= "Name" <span> <?php $err_name; ?> </span>
                  
           		 </td>
           		</tr>
           
        


          <tr>
          	<td><span>User Name</span></td>
           	<td>:<input type="text" name="uname" value = "<?php echo $uname;?>" 
           	placeholder= "User Name" <span> <?php $err_uname; ?> </span>
           </td>
          	
         </tr>




         <tr>
         	<td> <span>Password</span> </td>
         	<td>: <input type="password" name ="pass" value= "<?php echo $pass;?>"
             placeholder ="Password" <span> <?php $err_pass; ?> </td> </span>
         	   </td>
         </tr>





         <tr>
         	<td> <span>Confirm Password </span>  </td>
         	<td>: <input type="password" name="cpass" value="<?php echo $cpass;?>"
            placeholder ="Confirm Password" <span> <?php $err_cpass; ?> </span>
        </td>

        </tr>





        <tr>
        	<td> <span> Email </span> </td>
        	<td>: <input type ="text" name= "email" value="<?php echo $email; ?>"
           placeholder = " Email " <span> <?php $err_email; ?> </span> <br> 
           </td>
        	  
        </tr>



       <tr>
        	<td> <span> Phone </span> </td>
        	<td>: <input type="number" name="phone" value="<?php echo $phone;?>"
        		
        	placeholder="Number" <span> <?php $err_phone ;?> </span>
        	- <input type="number" name="code" value="<?php echo $phone;?>"
        		
        	placeholder="Code" <span> <?php $err_phone ;?> </span> <br> <br>
        	
        </td>

    
 
        <tr>


        	<td> <span> Address </span> </td>
        	<td>:  <input type ="text" name= "address " value="<?php echo $address; ?>"
           placeholder = " Street Address " <span> <?php $err_address; ?> </span>  <br>
           
            <input type ="text" name= "city" value="<?php echo $address; ?>"
           placeholder = " City" <span> <?php $err_address; ?> </span> 

          - <input type ="text" name= "State" value="<?php echo $address; ?>"
           placeholder = " State" <span> <?php $err_address; ?> </span> 

            <input type ="number" name= "code" value="<?php echo $address; ?>"
           placeholder = " Postal/Zip Code " <span> <?php $err_address; ?> </span> 

        </td>	  
        </tr>



        <tr>
        	<td> <span> Birthday</span></td>
        	<td>: <select name = "day">
        		<option disabled selected>Day</option>
        		<?php 
        		for($i=1; $i<=31; $i++)
        		{
        			echo "<option> $i </option>";
        		}
        		?>
        	</select>

        	

        	 <select name= "month">
            <option disabled selected > Month </option>
            <?php
                 $month= array("January", "February","March","April", "May", "June", "July", "Auguest", "Septermber", "October", "November", "December");

                 for($a=0; $a<count($month);$a++)
                 {
                 echo "<option> $month[$a] </option> ";
                 
                }
           ?>
       </select>

       <select name="Year">
       	<option disabled selected> Year</option>
       	<?php 
       	for($j=1985; $j<=2002; $j++)
       	{
       		echo "<option> $j </option>";
       	}
       	?>
       	
       </select>
        </td>
        </tr>





        <tr>
					    <td><span>Gender</span></td>
						<td>:<input type="radio" name="gender" value="Male"><span>Male</span>
						<input type="radio" name="gender" value="Female">Female<br>
						<span><?php echo $err_gender;?></span></td>
		</tr>
					<tr>
					    <td><span>Where did you hear about us?</span></td>
						<td>
						    :<select name="Where did you hear about us?">
							     <option disabled selected>Chose One</option>
						         <option>A Friend or Colleague</option>
								 <option>Google</option>
								 <option>Blog Post</option>
								 <option>News Article</option>
							</select>
							<span><?php echo $err_wdu;?></span></td>
						</td>
					</tr>
					<tr>
					    <td><span>Bio</span></td>
						<td>:<textarea name="bio"><?php echo $bio;?></textarea>
						<span><?php echo $err_bio;?></span></td>
					</tr>
					<tr>
						<td><input type="submit" name="submit" value="register"></td>
					</tr>
			  </table>
		</form>
	


</fieldset>

</body>
</html>