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
            $pi=$_POST['pi'];
            $r=$_POST['r'];
            $area=$pi*pow($r,2);
            echo "area of circle is : ".$area;

        }
    ?>
    <form method="post">
        <label>Enter pi variable:</label>
        <input type="text" name="pi" placeholder="enetr values">
        <br><br>
        <label>Enter r variable:</label>
        <input type="text" name="r" placeholder="enetr values">

        <!-- <label>Enter a variable:</label> -->
        <input type="submit" name="send" value="calculate">
    </form>
    
</body>
</html>