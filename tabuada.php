


<!DOCTYPE html>

<head>
   
    <title>Tabuada gus</title>
</head>

<body>


<marquee direction="down" width="255" height="250" behavior="alternate"  id="marquee1">
  

    <?php

    $tab = 0;
    if(isset($_POST["Tabuada"])){
        $tab = $_POST["Tabuada"];
        if(!is_numeric($tab)){
            echo "<br>isso não é um número :(<br>";
        }else{

        $num=0;
        while($num<=10){
            echo $num . " x " . $tab . " = " . ($num * $tab) . "<br>";
            $num++;
        }

    }
}

?>

<form method="post">
    <input type="text" name="Tabuada" >
    <input type="submit">
</form>
<input type="button" value="acalmar o código." onClick="document.getElementById('marquee1').stop();"/>
</body>

</html>

  <!-- <input type="button" value="Start Marquee" onClick="document.getElementById('marquee1').start();"/> -->
