<?php
abstract class AbstractUser {
    protected $username;
    protected $password;
    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }
    abstract public function authenticate();
}
class AdminUser extends AbstractUser {
    public function authenticate() {
        echo "Admin user authenticated successfully.\n";
    }
}
class RegularUser extends AbstractUser {
    public function authenticate() {
        echo "Regular user authenticated successfully.\n";
    }
}
$adminUser = new AdminUser('admin', 'admin_password');
$adminUser->authenticate();

$regularUser = new RegularUser('user', 'user_password');
$regularUser->authenticate();

// ==============================================================