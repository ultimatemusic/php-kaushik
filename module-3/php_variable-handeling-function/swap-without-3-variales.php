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
            $a=$_POST['a'];
            $b=$_POST['b'];
            
            $a=$a+$b-($b=$a);

            // $temp=$a;
            // $a=$b;
            // $b=$temp;

            echo "number a ia $a number b is $b";
        }
    ?>
    <form method="post">
        <label>Enter a variable:</label>
        <input type="text" name="a" placeholder="enetr values">
        <br><br>
        <label>Enter b variable:</label>
        <input type="text" name="b" placeholder="enetr values">

        <!-- <label>Enter a variable:</label> -->
        <input type="submit" name="send" >
    </form>
    
</body>
</html>