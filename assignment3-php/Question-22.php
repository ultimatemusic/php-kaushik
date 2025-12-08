<!-- Create two traits and use them in a class to demonstrate how to include multiple behaviors. -->




 <!-- Example: Using Multiple Traits in a Class -->



 <?php

// First trait: Logging behavior
trait Logger {
    public function log($message) {
        echo "[LOG]: $message\n";
    }
}

// Second trait: Timestamp behavior
trait Timestamp {
    public function currentTime() {
        echo "Current Time: " . date("Y-m-d H:i:s") . "\n";
    }
}

// A class using both traits
class Report {
    use Logger, Timestamp;

    public function generate() {
        $this->log("Report generation started.");
        // Simulate report logic...
        $this->currentTime();
        $this->log("Report generation completed.");
    }
}

// Create an object and call method
$report = new Report();
$report->generate();

?>
