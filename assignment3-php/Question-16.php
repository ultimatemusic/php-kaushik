<!-- Write a class that implements a destructor to perform cleanup tasks when an object is
destroyed. -->



 <!-- Example: Class with Destructor in PHP -->



 <?php

class Logger {
    private $logFile;

    // Constructor: Open log file for writing
    public function __construct($filename) {
        $this->logFile = fopen($filename, "a"); // Open for appending
        if ($this->logFile) {
            echo "Log file opened.\n";
        }
    }

    // Method to write a message to the log
    public function writeLog($message) {
        $timestamp = date("Y-m-d H:i:s");
        fwrite($this->logFile, "[$timestamp] $message\n");
    }

    // Destructor: Close the file (cleanup task)
    public function __destruct() {
        if ($this->logFile) {
            fclose($this->logFile);
            echo "Log file closed.\n";
        }
    }
}

// Using the Logger class
$logger = new Logger("log.txt");
$logger->writeLog("User logged in.");
$logger->writeLog("User performed an action.");

// Destructor will be called automatically when the script ends or object is destroyed
?>
