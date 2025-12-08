<!-- Discuss the purpose of the final keyword in PHP and how it affects classes and methods. -->




 <!-- 1. final Class -->


 <?php
final class Logger {
    public function log($message) {
        echo "[LOG]: $message";
    }
}

// ❌ This will cause an error:
// class FileLogger extends Logger {}  // ❌ Fatal error



?>



 <!-- 2. final Method – Cannot Be Overridden -->


 <?php
 
 
 class User {
    final public function getRole() {
        return "User";
    }

    public function getName() {
        return "Sanket";
    }
}

class Admin extends User {
 
    
    public function getName() {
        return "Admin Sanket";
    }
}

?>