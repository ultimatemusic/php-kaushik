<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
        if (isset($_POST['send'])) {            
			// Simple Interest Calculator
			$p=$_POST['p'];
			$r=$_POST['r'];
			$t=$_POST['t'];
			$si=($p*$r*$t)/100;
			echo "Interest : ".$si."<br>";
			echo "total amount : ".$si+$p;

        }
    ?>
    <form method="post">

        <label>Enter principal amount variable:</label>
        <input type="text" name="p" placeholder="enetr values">
        <br><br>


        <label>Enter rate variable:</label>
        <input type="text" name="r" placeholder="enetr values">
        <br><br>
		

		<label>Enter time variable:</label>
        <input type="text" name="t" placeholder="enetr values">
        
        <!-- <label>Enter a variable:</label> -->
        <input type="submit" name="send" value="calculate">
    </form>
    
</body>
</html>
