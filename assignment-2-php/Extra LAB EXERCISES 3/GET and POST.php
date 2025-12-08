<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
</head>
<body>
    <!--
    This is a simple HTML form that uses the POST method to send data to a PHP script.
    post methosd is used to send data to the server securely.
    in post method data is not visible in the url  
    http://localhost/php-kaushik/assignment-2-php/LABEXERCISES/post.php -->
    <h3>POST Method</h3>
    <form method="post" action="post.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        
        <input type="submit" value="Submit">
    </form>

    <!--
    This is a simple HTML form that uses the GET method to send data to a PHP script.
    get method is used to send data to the server not securely.
    in get method data is visible in the url
    http://localhost/php-kaushik/assignment-2-php/LABEXERCISES/get.php?name=kaushik&email=kaushik%40gmail.com -->
    <h3>get Method</h3>
    <form method="get" action="get.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        
        <input type="submit" value="Submit">
    </form>


</body>
</html>