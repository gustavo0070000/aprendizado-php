<?php
$nameErr = $emailErr = $genderErr = $dataErr = "";
$name = $email = $gender = $data = "";
$findme   = 'scicrop';
$findme2 = 'gmail';

//$idade = "";//

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  
    
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    $pos =  strpos($email, $findme);
    $pos =  strpos($email, $findme2);
  if ($pos === false ){ //if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     $emailErr = "Invalid email format";
    }
  }

   //if ($email != "gmail.com")
     //   $emailErr = "Invalid email format";
  if (empty($_POST["data"])) {
    $data = "";
  } else {
    $data = test_input($_POST["data"]);
    
  }
 


    
}
    
 

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }


function test_input($data) {
    return $data;
}
?>

<h2>PHP Validção Form</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  data: <input type="date" name="data" value="<?php echo $data;?>">
  <span class="error">* <?php echo $dataErr;?></span>
  
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Feminino") echo "checked";?> value="Feminino">Feminino
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Masculino") echo "checked";?> value="Masculino">Masculino
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
$idade = 2000 - $data ;
echo "<h2>Mensagem:</h2>";
echo "$name do sexo $gender, tem $idade anos de idade! Estaremos lhe enviando um email no endereço $email.";
?>