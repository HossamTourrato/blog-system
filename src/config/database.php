<?php
namespace App\Config;

use PDO;
use PDOException;
use Dotenv\Dotenv;
require_once __DIR__ . '/../../tests/vendor/autoload.php';


$dotenv = Dotenv::createImmutable(__DIR__ . '/../../tests/'); 
$dotenv->safeLoad(); 

class Database {
    private static $instance = null;
    private $pdo;

    private function __construct() {
        try {
            $this->pdo = new PDO(
                "mysql:host=" . ($_ENV['DB_HOST'] ?? 'localhost') . ";dbname=" . ($_ENV['DB_NAME'] ?? 'BlogDB'),
                $_ENV['DB_USER'] ?? 'root',
                $_ENV['DB_PASS'] ?? ''
            );
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->pdo;
    }
}
?>
