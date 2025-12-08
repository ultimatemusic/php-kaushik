<?php
// User View
class UserView {
    public function displayUser($user) {
        echo "<h2>User Information</h2>";
        echo "Name: " . htmlspecialchars($user->getName()) . "<br>";
        echo "Email: " . htmlspecialchars($user->getEmail()) . "<br>";
    }
}
