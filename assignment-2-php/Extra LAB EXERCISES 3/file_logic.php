<?php
        if (isset($_POST['upload'])) {
            $FILE= $_FILES['file'];
            echo $FILE['name'];
            echo "<br>";
            echo $FILE['type'];
            echo "<br>";
            echo $FILE['tmp_name'];
            echo "<br>";
            echo $FILE['size'];
            echo "<br>";
        }
?>