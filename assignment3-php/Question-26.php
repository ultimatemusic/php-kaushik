<!-- Write a method in a class that accepts type-hinted parameters and demonstrate how it
works with different data types. -->



<!-- Example: Type-Hinted Method in a Class -->



<?php
declare(strict_types=1); // Enforces strict type checking

class UserService {

    // Method with type-hinted parameters and return type
    public function registerUser(string $name, int $age, bool $isMember): string {
        return "User: $name, Age: $age, Member: " . ($isMember ? "Yes" : "No");
    }
}

$service = new UserService();

// ✅ Correct usage
echo $service->registerUser("Sanket", 25, true) . "\n";

 
?>


