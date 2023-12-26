<?php
interface Logger {
    public function log($message);
}

class FileLogger implements Logger {// FileLogger is a concrete implementation of the Logger interface
    public function log($message) {
        // Log message to a file
        echo "Logging to file: $message\n";
    }
}
class DatabaseLogger implements Logger {// DatabaseLogger is another concrete implementation of the Logger interface
    public function log($message) {
        // Log message to a database
        echo "Logging to database: $message\n";
    }
}
class User {// User class depends on the Logger interface, not concrete implementations
    private $logger;
    public function __construct(Logger $logger) {
        $this->logger = $logger;
    }
    public function register() {
        // User registration logic
        // Log registration event
        $this->logger->log("User registered");
    }
}
$fileLogger = new FileLogger();
$userWithFileLogger = new User($fileLogger);
$userWithFileLogger->register();

$databaseLogger = new DatabaseLogger();
$userWithDatabaseLogger = new User($databaseLogger);
$userWithDatabaseLogger->register();