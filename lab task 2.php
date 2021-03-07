<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  if (empty($_POST["date of birth"])) {
    $date of birthErr = "Date Of Birth is required";
  } else {
    $date of birth = test_input($_POST["date of birth"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
if (empty($_POST["degree"])) {
    $degreeErr = "degree is required";
  } else {
    $degree = test_input($_POST["degree"]);
  }
}
if (empty($_POST["blood group"])) {
    $blood groupErr = "blood group is required";
  } else {
    $blood group = test_input($_POST["blood group"]);
  }
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Date Of Birth: <input type="date" name="date of birth">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
 Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
Degree:
  <input type="checkbox" id="degree1" name="degree1" value="degree">
  <label for="degree1"> SSC</label><br>
  <input type="checkbox" id="degree2" name="degree2" value="degree">
  <label for="degree2"> HSC</label><br>
  
<input type="checkbox" id="degree3" name="degree3" value="degree">
  <label for="degree3"> BSc</label><br>
  <input type="checkbox" id="degree4" name="degree4" value="degree">
  <label for="degree4"> MSc</label><br>
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

  <label for="blood groups"> Blood group:</label>
  <select id="blood groups" name="blood groups">
    <option value="a+">A+</option>
    <option value="b+">B+</option>
    <option value="a-">A-</option>
    <option value="b-">B-</option>
    <option value="ab+">AB+</option>
    <option value="ab-">AB-</option>
    <option value="o+">O+</option>
    <option value="" selected> </option>
    <option value="o-">O-</option>
  </select>
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit">
  

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $date of birth;
echo "<br>";
echo $gender;
echo "<br>";
echo $degree;
echo "<br>"
echo $blood group;
?>
</body>
</html>