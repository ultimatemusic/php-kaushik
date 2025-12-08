<?php
    require_once('users.php');
?>
<html>
    <head>
        <title>Embedding HTML and PHP</title>
    </head>
    <body>
        <h1>Embedding HTML and PHP</h1>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
            <?php
                display_user($user_list);
            ?>
    </body>
</html>