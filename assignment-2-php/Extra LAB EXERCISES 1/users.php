<?php
    $user_list=[
        [
            'name' => 'meet tukadia',
            'email' => 'meet@gmail.com',
            'password' =>'meet@123'
        ],
        [
            'name' => 'Nandini triwedi',
            'email' => 'Nandini@gmail.com',
            'password' => 'password123'
        ],
        [
            'name' => 'banshi luka',
            'email' => 'banshiluka2005@yahoo.com',
            'password' => 'mypassword'
        ],
        [
            'name' => 'kaushik chauhan',
            'email' => 'kaushik.@gmail.com',
            'password' => '2004@kaushik'
        ]
    ];
    function display_user($user_list) {
        foreach($user_list as $user){
            echo "<tr>";
                echo "<td>".$user['name']."</td>";
                echo "<td>".$user['email']."</td>";
                echo "<td>".$user['password']."</td>";
            echo "</tr>";
        }
    }
?>