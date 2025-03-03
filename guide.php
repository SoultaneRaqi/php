<?php
/**
 * PHP GUIDE BIBLE
 * A comprehensive reference for PHP development
 */

/**
 * =======================================================
 * PHP BASICS
 * =======================================================
 */

// PHP tags - All PHP code must be enclosed within these tags
<?php
    // PHP code goes here
?>

// Short echo tag (if enabled)
<?= "This is a shorthand for echo"; ?>

// Single-line comments use double forward slashes
# Or the hash symbol

/* 
   Multi-line comments
   use this syntax
*/

/**
 * Documentation comments
 * are written like this
 */

// =======================================================
// VARIABLES
// =======================================================

// Variable declaration - Variables in PHP start with $ sign
$variable = "Hello World";
$number = 42;
$float = 3.14;
$boolean = true;
$null = null;

// Variable scope
$globalVar = "I'm global";

function testScope() {
    $localVar = "I'm local";
    global $globalVar; // Access global variable inside function
    echo $globalVar;   // Outputs: I'm global
    
    // Static variables retain their value between function calls
    static $counter = 0;
    $counter++;
}

// Superglobal variables (accessible everywhere)
// $_GET     - HTTP GET variables
// $_POST    - HTTP POST variables
// $_REQUEST - HTTP Request variables (combination of $_GET, $_POST, and $_COOKIE)
// $_COOKIE  - HTTP Cookies
// $_SESSION - Session variables
// $_SERVER  - Server and execution environment information
// $_FILES   - HTTP File Upload variables
// $_ENV     - Environment variables
// $GLOBALS  - References all variables available in global scope

// Variable variables
$foo = "bar";
$$foo = "baz"; // Creates a variable named $bar with value "baz"

// =======================================================
// DATA TYPES
// =======================================================

// Scalar types
$string = "Hello World";
$integer = 42;
$float = 3.14;
$boolean = true; // or false

// Compound types
$array = ["apple", "banana", "orange"];
$object = new stdClass();

// Special types
$null = null;
$resource = fopen("example.txt", "r"); // Resource handle

// Type checking
var_dump($string);  // Outputs type and value
gettype($integer);  // Returns type as string
is_string($string); // Returns true if variable is a string
is_int($integer);   // Returns true if variable is an integer
is_bool($boolean);  // Returns true if variable is a boolean
is_array($array);   // Returns true if variable is an array
is_object($object); // Returns true if variable is an object
is_null($null);     // Returns true if variable is null

// Type casting
$string = (string) $integer; // Cast to string
$integer = (int) $float;     // Cast to integer
$float = (float) $integer;   // Cast to float
$boolean = (bool) $integer;  // Cast to boolean
$array = (array) $object;    // Cast to array
$object = (object) $array;   // Cast to object

// =======================================================
// CONSTANTS
// =======================================================

// Define constants - constants don't use $ prefix
define("CONSTANT_NAME", "constant value");
const ANOTHER_CONSTANT = "another value"; // As of PHP 5.3

// Predefined constants
// __LINE__     - Current line number of the file
// __FILE__     - Full path and filename of the file
// __DIR__      - Directory of the file
// __FUNCTION__ - Name of the current function
// __CLASS__    - Name of the current class
// __METHOD__   - Name of the current method
// __NAMESPACE__ - Name of the current namespace
// PHP_VERSION  - The PHP version as a string
// PHP_OS       - The operating system PHP is running on

// =======================================================
// OPERATORS
// =======================================================

// Arithmetic operators
$a = 10; $b = 3;
$addition = $a + $b;      // 13
$subtraction = $a - $b;   // 7
$multiplication = $a * $b; // 30
$division = $a / $b;      // 3.33333...
$modulus = $a % $b;       // 1
$exponentiation = $a ** $b; // 1000 (10^3)

// Assignment operators
$c = $a;          // Assign
$c += $b;         // Add and assign
$c -= $b;         // Subtract and assign
$c *= $b;         // Multiply and assign
$c /= $b;         // Divide and assign
$c %= $b;         // Modulus and assign
$c **= $b;        // Exponentiation and assign

// Comparison operators
$equal = $a == $b;           // Equal (value)
$identical = $a === $b;      // Identical (value and type)
$not_equal = $a != $b;       // Not equal
$not_equal_alt = $a <> $b;   // Not equal (alternative)
$not_identical = $a !== $b;  // Not identical
$less_than = $a < $b;        // Less than
$greater_than = $a > $b;     // Greater than
$less_equal = $a <= $b;      // Less than or equal
$greater_equal = $a >= $b;   // Greater than or equal
$spaceship = $a <=> $b;      // Spaceship (returns -1, 0, or 1)

// Increment/Decrement operators
$a++;        // Post-increment
++$a;        // Pre-increment
$a--;        // Post-decrement
--$a;        // Pre-decrement

// Logical operators
$and = $a && $b;     // And
$or = $a || $b;      // Or
$not = !$a;          // Not
$and_alt = $a and $b; // And (alternative, lower precedence)
$or_alt = $a or $b;   // Or (alternative, lower precedence)
$xor = $a xor $b;     // Xor

// String operators
$concatenation = "Hello" . " " . "World"; // Concatenation
$hello = "Hello";
$hello .= " World";                       // Concatenation assignment

// Conditional (ternary) operator
$result = ($a > $b) ? "a is greater" : "b is greater";

// Null coalescing operator (PHP 7+)
$name = $_GET["name"] ?? "Guest"; // Returns "Guest" if $_GET["name"] is null or not set

// =======================================================
// CONTROL STRUCTURES
// =======================================================

// If, elseif, else
if ($a > $b) {
    echo "a is greater than b";
} elseif ($a < $b) {
    echo "a is less than b";
} else {
    echo "a equals b";
}

// Switch
switch ($a) {
    case 1:
        echo "a is 1";
        break;
    case 2:
        echo "a is 2";
        break;
    default:
        echo "a is neither 1 nor 2";
}

// While loop
$i = 1;
while ($i <= 10) {
    echo $i++;
}

// Do-while loop
$i = 1;
do {
    echo $i++;
} while ($i <= 10);

// For loop
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

// Foreach loop (for arrays and objects)
$colors = ["red", "green", "blue"];
foreach ($colors as $color) {
    echo $color;
}

// With key and value
$person = ["name" => "John", "age" => 30, "city" => "New York"];
foreach ($person as $key => $value) {
    echo "$key: $value";
}

// Break and continue
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue; // Skip to next iteration
    }
    if ($i == 8) {
        break;    // Exit the loop
    }
    echo $i;
}

// Match expression (PHP 8+)
$result = match ($a) {
    1 => "a is 1",
    2 => "a is 2",
    default => "a is neither 1 nor 2",
};

// =======================================================
// STRINGS
// =======================================================

// String creation
$single_quotes = 'This is a string'; // Variables not interpolated
$double_quotes = "This is a $string"; // Variables are interpolated
$heredoc = <<<EOD
This is a heredoc string
It can span multiple lines
Variables like $string are interpolated
EOD;

$nowdoc = <<<'EOD'
This is a nowdoc string
It can span multiple lines
Variables like $string are NOT interpolated
EOD;

// String manipulation
$length = strlen($string);                      // String length
$position = strpos($string, "World");          // Find position of substring
$replace = str_replace("World", "PHP", $string); // Replace substring
$substring = substr($string, 0, 5);            // Extract substring
$lowercase = strtolower($string);              // Convert to lowercase
$uppercase = strtoupper($string);              // Convert to uppercase
$trimmed = trim($string);                      // Remove whitespace from both ends
$exploded = explode(" ", $string);             // Split string into array
$imploded = implode(", ", $exploded);          // Join array elements into string

// Formatted strings
$formatted = sprintf("Name: %s, Age: %d", "John", 30); // Format string
printf("Name: %s, Age: %d", "John", 30);              // Format and output

// =======================================================
// ARRAYS
// =======================================================

// Array creation
$indexed = ["apple", "banana", "orange"]; // Indexed array
$associative = [                         // Associative array
    "name" => "John",
    "age" => 30,
    "city" => "New York"
];
$multidimensional = [                    // Multidimensional array
    ["apple", "banana"],
    ["carrot", "potato"],
    ["salmon", "tuna"]
];

// Accessing array elements
$fruit = $indexed[0];              // Access by index
$name = $associative["name"];      // Access by key
$vegetable = $multidimensional[1][0]; // Access multidimensional

// Array manipulation
$count = count($indexed);                  // Count elements
$keys = array_keys($associative);          // Get keys
$values = array_values($associative);      // Get values
$merged = array_merge($indexed, ["grape"]); // Merge arrays
$filtered = array_filter($indexed, function($value) { // Filter array
    return strlen($value) > 5;
});
$mapped = array_map(function($value) {     // Map array
    return strtoupper($value);
}, $indexed);
$reduced = array_reduce($indexed, function($carry, $value) { // Reduce array
    return $carry . $value;
}, "");
$sorted = sort($indexed);                  // Sort array
$reversed = array_reverse($indexed);       // Reverse array
$sliced = array_slice($indexed, 1, 2);     // Extract a slice
$exists = in_array("apple", $indexed);     // Check if value exists
$key_exists = array_key_exists("name", $associative); // Check if key exists

// =======================================================
// FUNCTIONS
// =======================================================

// Function declaration
function sayHello($name) {
    return "Hello, $name!";
}

// Default parameters
function greet($name = "Guest") {
    return "Hello, $name!";
}

// Variable number of arguments
function sum(...$numbers) {
    return array_sum($numbers);
}

// Type declarations (PHP 7+)
function add(int $a, int $b): int {
    return $a + $b;
}

// Nullable type (PHP 7.1+)
function findUser(string $id): ?array {
    // Return user array or null if not found
}

// Union types (PHP 8+)
function process(string|int $input): string|int {
    return $input;
}

// Anonymous functions
$greeting = function($name) {
    return "Hello, $name!";
};

// Using anonymous functions
$result = $greeting("John"); // "Hello, John!"

// Arrow functions (PHP 7.4+)
$square = fn($x) => $x * $x;

// =======================================================
// OBJECTS & CLASSES
// =======================================================

// Class definition
class Person {
    // Properties
    public $name;
    private $age;
    protected $email;
    public static $count = 0;
    
    // Constants
    const STATUS_ACTIVE = 'active';
    
    // Constructor
    public function __construct($name, $age, $email) {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
        self::$count++;
    }
    
    // Method
    public function greet() {
        return "Hello, my name is {$this->name}!";
    }
    
    // Getter
    public function getAge() {
        return $this->age;
    }
    
    // Setter
    public function setAge($age) {
        $this->age = $age;
    }
    
    // Static method
    public static function getCount() {
        return self::$count;
    }
    
    // Destructor
    public function __destruct() {
        // Clean up resources
    }
}

// Creating an object
$person = new Person("John", 30, "john@example.com");

// Accessing properties and methods
$name = $person->name;         // Access public property
$greeting = $person->greet();  // Call method
$age = $person->getAge();      // Call getter
$person->setAge(31);           // Call setter
$count = Person::$count;       // Access static property
$count = Person::getCount();   // Call static method
$status = Person::STATUS_ACTIVE; // Access constant

// Inheritance
class Employee extends Person {
    private $jobTitle;
    
    public function __construct($name, $age, $email, $jobTitle) {
        parent::__construct($name, $age, $email);
        $this->jobTitle = $jobTitle;
    }
    
    public function getJobInfo() {
        return "{$this->name} works as a {$this->jobTitle}";
    }
    
    // Override parent method
    public function greet() {
        return parent::greet() . " I am a {$this->jobTitle}.";
    }
}

// Abstract class
abstract class Vehicle {
    protected $brand;
    
    public function __construct($brand) {
        $this->brand = $brand;
    }
    
    abstract public function drive();
}

// Implementing abstract class
class Car extends Vehicle {
    public function drive() {
        return "Driving {$this->brand} car";
    }
}

// Interface
interface Loggable {
    public function log($message);
}

// Implementing interface
class Logger implements Loggable {
    public function log($message) {
        // Log the message
    }
}

// Trait
trait Shareable {
    public function share($platform) {
        return "Sharing to {$platform}";
    }
}

// Using trait
class Post {
    use Shareable;
    
    private $content;
    
    public function __construct($content) {
        $this->content = $content;
    }
}

// =======================================================
// NAMESPACES
// =======================================================

// Define namespace
namespace App\Models;

// Using classes from other namespaces
use App\Services\AuthService;
use App\Repositories\UserRepository as UserRepo;

// =======================================================
// ERROR HANDLING
// =======================================================

// Try-catch
try {
    // Code that might throw an exception
    $result = divide(10, 0);
} catch (DivisionByZeroError $e) {
    // Handle specific exception
    echo "Division by zero: " . $e->getMessage();
} catch (Exception $e) {
    // Handle general exception
    echo "Error: " . $e->getMessage();
} finally {
    // Code that always executes
    echo "Operation completed";
}

// Custom exception
class CustomException extends Exception {
    public function __construct($message, $code = 0) {
        parent::__construct($message, $code);
    }
    
    public function customFunction() {
        return "Custom error handling";
    }
}

// Throwing exceptions
function divide($a, $b) {
    if ($b === 0) {
        throw new DivisionByZeroError("Cannot divide by zero");
    }
    return $a / $b;
}

// Error handling functions
set_error_handler(function($errno, $errstr, $errfile, $errline) {
    // Custom error handling
});

// =======================================================
// FILE OPERATIONS
// =======================================================

// Reading files
$content = file_get_contents("file.txt");          // Read entire file
$lines = file("file.txt");                        // Read file into array
$handle = fopen("file.txt", "r");                 // Open file for reading
$data = fread($handle, filesize("file.txt"));    // Read from file
fclose($handle);                                 // Close file handle

// Writing files
file_put_contents("file.txt", "Hello World");     // Write to file
$handle = fopen("file.txt", "w");                 // Open file for writing
fwrite($handle, "Hello World");                  // Write to file
fclose($handle);                                 // Close file handle

// File information
$exists = file_exists("file.txt");               // Check if file exists
$size = filesize("file.txt");                    // Get file size
$type = filetype("file.txt");                    // Get file type
$modified = filemtime("file.txt");               // Get last modified time

// Directory operations
$files = scandir("directory");                    // List files in directory
$created = mkdir("new_directory");                // Create directory
$removed = rmdir("directory");                    // Remove directory

// =======================================================
// DATABASE OPERATIONS (PDO)
// =======================================================

// Connect to database
try {
    $pdo = new PDO("mysql:host=localhost;dbname=test", "username", "password");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Query execution
$stmt = $pdo->query("SELECT * FROM users");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Prepared statements
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
$stmt->bindParam(":id", $id, PDO::PARAM_INT);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Insert data
$stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
$stmt->bindParam(":name", $name);
$stmt->bindParam(":email", $email);
$stmt->execute();
$lastId = $pdo->lastInsertId();

// Update data
$stmt = $pdo->prepare("UPDATE users SET name = :name WHERE id = :id");
$stmt->bindParam(":name", $name);
$stmt->bindParam(":id", $id);
$stmt->execute();
$rowCount = $stmt->rowCount();

// Delete data
$stmt = $pdo->prepare("DELETE FROM users WHERE id = :id");
$stmt->bindParam(":id", $id);
$stmt->execute();

// Transactions
try {
    $pdo->beginTransaction();
    
    // Multiple operations
    $stmt1 = $pdo->prepare("INSERT INTO users (name) VALUES (:name)");
    $stmt1->execute([":name" => "John"]);
    
    $stmt2 = $pdo->prepare("UPDATE accounts SET balance = balance - :amount WHERE user_id = :id");
    $stmt2->execute([":amount" => 100, ":id" => 1]);
    
    $pdo->commit();
} catch (Exception $e) {
    $pdo->rollBack();
    echo "Transaction failed: " . $e->getMessage();
}

// =======================================================
// SESSION HANDLING
// =======================================================

// Start session
session_start();

// Set session variables
$_SESSION["user_id"] = 123;
$_SESSION["username"] = "john_doe";

// Get session variables
$user_id = $_SESSION["user_id"] ?? null;
$username = $_SESSION["username"] ?? null;

// Remove session variable
unset($_SESSION["user_id"]);

// Destroy entire session
session_destroy();

// Session configuration
ini_set("session.cookie_lifetime", 3600); // Cookie lifetime in seconds
ini_set("session.gc_maxlifetime", 3600);  // Session lifetime in seconds

// =======================================================
// COOKIES
// =======================================================

// Set cookie
setcookie("user", "john", time() + 3600, "/"); // Name, value, expiry, path

// Get cookie
$user = $_COOKIE["user"] ?? null;

// Delete cookie
setcookie("user", "", time() - 3600, "/");

// =======================================================
// DATE AND TIME
// =======================================================

// Current time
$now = time();                     // Unix timestamp
$date = date("Y-m-d H:i:s");       // Formatted date string
$datetime = new DateTime();        // DateTime object

// Creating dates
$timestamp = mktime(12, 0, 0, 1, 1, 2023); // Hour, minute, second, month, day, year
$date = date_create("2023-01-01 12:00:00");

// Formatting dates
$formatted = date("F j, Y, g:i a", $timestamp); // January 1, 2023, 12:00 pm
$formatted = $datetime->format("Y-m-d H:i:s");

// Date calculations
$tomorrow = time() + 86400;                    // Add one day (86400 seconds)
$next_week = strtotime("+1 week");            // Add one week
$datetime->modify("+1 month");                // Add one month to DateTime

// Date difference
$date1 = new DateTime("2023-01-01");
$date2 = new DateTime("2023-02-01");
$interval = $date1->diff($date2);             // DateInterval object
$days = $interval->days;                      // Number of days between dates

// Timezone
date_default_timezone_set("America/New_York"); // Set default timezone
$timezone = date_default_timezone_get();      // Get default timezone
$datetime->setTimezone(new DateTimeZone("UTC")); // Change timezone of DateTime

// =======================================================
// REGULAR EXPRESSIONS
// =======================================================

// Pattern matching
$pattern = "/pattern/i";                             // i flag for case-insensitive
$subject = "Pattern matching";
$matches = [];
$result = preg_match($pattern, $subject, $matches); // Returns 1 if pattern matches

// Find all matches
$result = preg_match_all($pattern, $subject, $matches); // Returns number of matches
                                                      // $matches contains all matches

// Replace
$result = preg_replace($pattern, "replacement", $subject); // Replace matches

// Split
$result = preg_split($pattern, $subject);            // Split string by pattern

// Common patterns
$email_pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
$url_pattern = "/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/";
$date_pattern = "/^\d{4}-\d{2}-\d{2}$/";            // YYYY-MM-DD

// =======================================================
// SECURITY
// =======================================================

// Input validation
$email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
$int = filter_var($_POST["id"], FILTER_VALIDATE_INT);
$url = filter_var($_POST["url"], FILTER_VALIDATE_URL);

// Sanitization
$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
$string = filter_var($_POST["text"], FILTER_SANITIZE_STRING); // Deprecated in PHP 8.1
$url = filter_var($_POST["url"], FILTER_SANITIZE_URL);

// HTML escaping
$escaped = htmlspecialchars($input);                 // Convert special characters to HTML entities
$escaped = htmlentities($input);                    // Convert all applicable characters to HTML entities

// SQL injection prevention
// Use prepared statements as shown in the Database section

// Cross-site scripting prevention
// Always validate and sanitize input and escape output

// Password hashing
$password = "user_password";
$hash = password_hash($password, PASSWORD_DEFAULT);     // Create hash
$verified = password_verify($password, $hash);          // Verify password against hash

// CSRF protection
// Generate token
$_SESSION["csrf_token"] = bin2hex(random_bytes(32));
// Output in form
// <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
// Verify token
if (!hash_equals($_SESSION["csrf_token"], $_POST["csrf_token"])) {
    die("CSRF attack detected");
}

// =======================================================
// HTTP REQUESTS
// =======================================================

// cURL
$ch = curl_init("https://api.example.com/data");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
$response = curl_exec($ch);
curl_close($ch);

// File_get_contents
$options = [
    "http" => [
        "method" => "GET",
        "header" => "Content-Type: application/json\r\n"
    ]
];
$context = stream_context_create($options);
$response = file_get_contents("https://api.example.com/data", false, $context);

// POST request with cURL
$data = ["name" => "John", "email" => "john@example.com"];
$ch = curl_init("https://api.example.com/users");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
$response = curl_exec($ch);
curl_close($ch);

// =======================================================
// JSON HANDLING
// =======================================================

// Encode to JSON
$array = ["name" => "John", "age" => 30];
$json = json_encode($array);

// Decode JSON
$array = json_decode($json, true);  // Second parameter true returns associative array
$object = json_decode($json);       // Returns object

// Check for errors
if (json_last_error() !== JSON_ERROR_NONE) {
    $error = json_last_error_msg();
}

// =======================================================
// XML HANDLING
// =======================================================

// SimpleXML - parsing
$xml = simplexml_load_file("file.xml");
$xml = simplexml_load_string("<root><item>value</item></root>");

// Accessing XML elements
$value = $xml->item;
$value = $xml->item[0];
$value = (string) $xml->item;
$attribute = (string) $xml->item["attribute"];

// Creating XML
$xml = new SimpleXMLElement("<root></root>");
$item = $xml->addChild("item", "value");
$item->addAttribute("attribute", "value");
$xml_string = $xml->asXML();

// DOM - more powerful XML handling
$dom = new DOMDocument();
$dom->load("file.xml");
$dom->loadXML("<root><item>value</item></root>");
$elements = $dom->getElementsByTagName("item");

// XPath
$xpath = new DOMXPath($dom);
$nodes = $xpath->query("//item[@attribute='value']");

// =======================================================
// ADVANCED TOPICS
// =======================================================

// Generators
function generateRange($start, $end) {
    for ($i = $start; $i <= $end; $i++) {
        yield $i;
    }
}

foreach (generateRange(1, 10) as $number) {
    echo $number;
}

// Closures and variable binding
$message = "Hello";
$greeting = function($name) use ($message) {
    return "$message, $name!";
};

// Reflection
$reflectionClass = new ReflectionClass("Person");
$methods = $reflectionClass->getMethods();
$properties = $reflectionClass->getProperties();

// Dependency Injection
class UserService {
    private $repository;
    
    public function __construct(UserRepository $repository) {
        $this->repository = $repository;
    }
    
    public function getUser($id) {
        return $this->repository->findById($id);
    }
}

// Magic methods
class MagicExample {
    private $data = [];
    
    // Called when accessing non-existent properties
    public function __get($name) {
        return $this->data[$name] ?? null;
    }
    
    // Called when setting non-existent properties
    public function __set($name, $value) {
        $this->data[$name] = $value;
    }
    
    // Called when checking if non-existent property isset() or empty()
    public function __isset($name) {
        return isset($this->data[$name]);
    }
    
    // Called when unsetting non-existent property
    public function __unset($name) {
        unset($this->data[$name]);
    }
    
    // Called when invoking object as a function
    public function __invoke($param) {
        return "Invoked with: $param";
    }
    
    // Called when object is converted to string
    public function __toString() {
        return "MagicExample Object";
    }
    
    // Called for serialization
    public function __sleep() {
        return ["data"];
    }
    
    // Called after unserialization
    public function __wakeup() {
        // Initialize resources
    }
    
    // Called when cloning object
    public function __clone() {
        // Deep copy resources
    }
}

// =======================================================
// PHP 8.0+ FEATURES
// =======================================================

// Named arguments
setcookie(name: "user", value: "john", expires_or_options: time() + 3600);

// Constructor property promotion
class User {
    public function __construct(
        public string $name,
        private int $age,
        protected string $email
    ) {}
}

// Match expression
$result = match ($value) {
    1 => "One",
    2 => "Two",
    default => "Other"
};

// Nullsafe operator
$username = $user?->getProfile()?->getName();

// Union types
function process(string|int $input): string|int {
    return $input;
}

// New in PHP 8.1
// Enumerations
enum Status {
    case Active;
    case Inactive;
    case Pending;
}

enum Color: string {
    case Red = "red";
    case Green = "green";
    case Blue = "blue";
}

// New in PHP 8.2
// readonly classes
readonly class Point {
    public function __construct(
        public float $x,
        public float $y,
    ) {}
}

// =======================================================
// COMMON PHP PATTERNS
// =======================================================

// Singleton pattern
class Singleton {
    private static $instance = null;
    
    private function __construct() {
        // Private constructor prevents direct creation
    }
    
    public static function getInstance() {
        if (self::$instance === null) {
self::$instance = new self();
        }
        return self::$instance;
    }
    
    // Prevent cloning
    private function __clone() {}
    
    // Prevent unserialization
    private function __wakeup() {}
}

// Factory pattern
interface Product {
    public function getName();
}

class ConcreteProduct implements Product {
    public function getName() {
        return "Concrete Product";
    }
}

class ProductFactory {
    public function createProduct($type) {
        switch ($type) {
            case 'concrete':
                return new ConcreteProduct();
            default:
                throw new Exception("Invalid product type");
        }
    }
}

// Observer pattern
interface Observer {
    public function update($subject);
}

class Subject {
    private $observers = [];
    private $state;
    
    public function attach(Observer $observer) {
        $this->observers[] = $observer;
    }
    
    public function detach(Observer $observer) {
        $key = array_search($observer, $this->observers, true);
        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }
    
    public function setState($state) {
        $this->state = $state;
        $this->notify();
    }
    
    public function getState() {
        return $this->state;
    }
    
    private function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}

class ConcreteObserver implements Observer {
    public function update($subject) {
        echo "State updated to: " . $subject->getState();
    }
}

// =======================================================
// COMPOSER & DEPENDENCY MANAGEMENT
// =======================================================

// composer.json file structure
{
    "name": "vendor/package",
    "description": "Package description",
    "type": "library",
    "require": {
        "php": ">=7.4",
        "vendor/package": "^1.0"
    },
    "require-dev": {
        "phpunit/phpunit": "^9.0"
    },
    "autoload": {
        "psr-4": {
            "Vendor\\Package\\": "src/"
        }
    },
    "autoload-dev": {
        "psr-4": {
            "Vendor\\Package\\Tests\\": "tests/"
        }
    },
    "license": "MIT",
    "authors": [
        {
            "name": "Your Name",
            "email": "your.email@example.com"
        }
    ],
    "minimum-stability": "stable"
}

// Using Composer's autoloader
require __DIR__ . '/vendor/autoload.php';

// =======================================================
// PSR STANDARDS
// =======================================================

// PSR-1: Basic Coding Standard
// - Files MUST use only <?php and <?= tags
// - Files MUST use only UTF-8 without BOM for PHP code
// - Files SHOULD either declare symbols (classes, functions, constants) OR cause side-effects (e.g. generate output) but NOT both
// - Namespaces and classes MUST follow PSR-4
// - Class names MUST be declared in StudlyCaps
// - Class constants MUST be declared in all upper case with underscore separators
// - Method names MUST be declared in camelCase

// PSR-4: Autoloading Standard
// Example of PSR-4 autoloader
// src/
//   Vendor/
//     Package/
//       Class.php (contains Vendor\Package\Class)

// PSR-12: Extended Coding Style
// - Code MUST use 4 spaces for indenting, not tabs
// - Lines SHOULD be 80 chars or less, MUST be 120 chars or less
// - There MUST be one blank line after namespace, and one blank line after block of use declarations
// - Opening braces for classes MUST go on the next line, and closing braces MUST go on the next line after the body
// - Opening braces for methods MUST go on the next line, and closing braces MUST go on the next line after the body
// - Visibility MUST be declared on all properties and methods; abstract and final MUST be declared before visibility

// =======================================================
// TESTING
// =======================================================

// PHPUnit example
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {
    public function testAddition() {
        $calculator = new Calculator();
        $this->assertEquals(4, $calculator->add(2, 2));
    }
    
    /**
     * @dataProvider multiplicationProvider
     */
    public function testMultiplication($a, $b, $expected) {
        $calculator = new Calculator();
        $this->assertEquals($expected, $calculator->multiply($a, $b));
    }
    
    public function multiplicationProvider() {
        return [
            [0, 1, 0],
            [1, 2, 2],
            [2, 2, 4],
            [2, 3, 6]
        ];
    }
    
    public function testDivisionByZero() {
        $this->expectException(DivisionByZeroError::class);
        $calculator = new Calculator();
        $calculator->divide(10, 0);
    }
}

// Mocking
class UserServiceTest extends TestCase {
    public function testGetUser() {
        // Create a mock of the UserRepository
        $repository = $this->createMock(UserRepository::class);
        
        // Configure the mock
        $repository->method('findById')
            ->with(1)
            ->willReturn(['id' => 1, 'name' => 'John']);
        
        // Inject the mock
        $service = new UserService($repository);
        
        // Test the service
        $user = $service->getUser(1);
        $this->assertEquals('John', $user['name']);
    }
}

// =======================================================
// PERFORMANCE OPTIMIZATION
// =======================================================

// Opcode caching
// Configure in php.ini or .htaccess:
// opcache.enable=1
// opcache.memory_consumption=128
// opcache.interned_strings_buffer=8
// opcache.max_accelerated_files=4000
// opcache.revalidate_freq=60
// opcache.fast_shutdown=1

// Profiling with Xdebug
// Configure in php.ini:
// xdebug.mode=profile
// xdebug.output_dir=/tmp/profiles

// Benchmarking
function benchmark($callback, $iterations = 1000) {
    $start = microtime(true);
    
    for ($i = 0; $i < $iterations; $i++) {
        $callback();
    }
    
    $end = microtime(true);
    return ($end - $start) / $iterations;
}

// Memory management
// Get current memory usage
$memory = memory_get_usage();

// Get peak memory usage
$peak = memory_get_peak_usage();

// =======================================================
// MODERN PHP FRAMEWORKS & TOOLS
// =======================================================

// Laravel - Popular PHP Framework
// Example routes (routes/web.php)
Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{id}', [UserController::class, 'show']);

// Example controller
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {
    public function index() {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }
    
    public function show($id) {
        $user = User::findOrFail($id);
        return view('users.show', ['user' => $user]);
    }
    
    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);
        
        $user = User::create($validated);
        return redirect()->route('users.show', ['id' => $user->id]);
    }
}

// Example model
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $fillable = ['name', 'email', 'password'];
    
    public function posts() {
        return $this->hasMany(Post::class);
    }
}

// Example Blade template (resources/views/users/show.blade.php)
@extends('layouts.app')

@section('content')
    <h1>{{ $user->name }}</h1>
    <p>{{ $user->email }}</p>
    
    <h2>Posts</h2>
    <ul>
        @foreach($user->posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>
@endsection

// Symfony - Another popular PHP Framework
// Example controller
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController {
    /**
     * @Route("/", name="homepage")
     */
    public function index(): Response {
        return $this->render('default/index.html.twig', [
            'message' => 'Welcome to Symfony!',
        ]);
    }
}

// =======================================================
// API DEVELOPMENT
// =======================================================

// RESTful API controller
class ApiController {
    private $userModel;
    
    public function __construct(UserModel $userModel) {
        $this->userModel = $userModel;
    }
    
    // GET /api/users
    public function index() {
        $users = $this->userModel->all();
        return json_encode($users);
    }
    
    // GET /api/users/{id}
    public function show($id) {
        $user = $this->userModel->find($id);
        
        if (!$user) {
            http_response_code(404);
            return json_encode(['error' => 'User not found']);
        }
        
        return json_encode($user);
    }
    
    // POST /api/users
    public function store() {
        $data = json_decode(file_get_contents('php://input'), true);
        
        // Validate data
        $errors = $this->validateUser($data);
        if (!empty($errors)) {
            http_response_code(422);
            return json_encode(['errors' => $errors]);
        }
        
        $userId = $this->userModel->create($data);
        http_response_code(201);
        return json_encode(['id' => $userId]);
    }
    
    // PUT /api/users/{id}
    public function update($id) {
        $data = json_decode(file_get_contents('php://input'), true);
        
        // Validate data
        $errors = $this->validateUser($data);
        if (!empty($errors)) {
            http_response_code(422);
            return json_encode(['errors' => $errors]);
        }
        
        $success = $this->userModel->update($id, $data);
        
        if (!$success) {
            http_response_code(404);
            return json_encode(['error' => 'User not found']);
        }
        
        return json_encode(['success' => true]);
    }
    
    // DELETE /api/users/{id}
    public function destroy($id) {
        $success = $this->userModel->delete($id);
        
        if (!$success) {
            http_response_code(404);
            return json_encode(['error' => 'User not found']);
        }
        
        http_response_code(204); // No content
        return '';
    }
    
    private function validateUser($data) {
        $errors = [];
        
        if (empty($data['name'])) {
            $errors['name'] = 'Name is required';
        }
        
        if (empty($data['email'])) {
            $errors['email'] = 'Email is required';
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email is invalid';
        }
        
        return $errors;
    }
}

// JWT Authentication
function generateJWT($payload, $secret) {
    $header = json_encode(['typ' => 'JWT', 'alg' => 'HS256']);
    $header = base64_encode($header);
    
    $payload = json_encode($payload);
    $payload = base64_encode($payload);
    
    $signature = hash_hmac('sha256', "$header.$payload", $secret, true);
    $signature = base64_encode($signature);
    
    return "$header.$payload.$signature";
}

function verifyJWT($token, $secret) {
    list($header, $payload, $signature) = explode('.', $token);
    
    $verifySignature = hash_hmac('sha256', "$header.$payload", $secret, true);
    $verifySignature = base64_encode($verifySignature);
    
    if ($signature !== $verifySignature) {
        return false;
    }
    
    return json_decode(base64_decode($payload), true);
}

// =======================================================
// DEPLOYING PHP APPLICATIONS
// =======================================================

// .htaccess for Apache
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>

    RewriteEngine On

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    # Redirect Trailing Slashes
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]

    # Send Requests To Front Controller
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>

// Nginx configuration
server {
    listen 80;
    server_name example.com;
    root /var/www/html/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-XSS-Protection "1; mode=block";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}

// =======================================================
// BEST PRACTICES
// =======================================================

// 1. Follow PSR standards
// 2. Use modern PHP features (PHP 7.4+)
// 3. Use Composer for dependency management
// 4. Use a framework for larger applications
// 5. Apply SOLID principles
// 6. Write unit tests
// 7. Use prepared statements for database operations
// 8. Implement proper error handling
// 9. Validate and sanitize all input
// 10. Use environment-based configuration
// 11. Apply proper security measures
// 12. Document your code
// 13. Use version control (Git)
// 14. Implement a proper deployment workflow
// 15. Monitor performance and optimize when necessary

// =======================================================
// PHP EXTENSIONS
// =======================================================

// Common extensions
// - PDO: Database access
// - MySQLi: MySQL improved extension
// - GD/Imagick: Image processing
// - cURL: HTTP requests
// - Xdebug: Debugging and profiling
// - OPcache: Opcode caching
// - intl: Internationalization functions
// - mbstring: Multibyte string functions
// - xml: XML parsing
// - json: JSON encoding/decoding
// - fileinfo: File information
// - zip: ZIP file manipulation

// Check if extension is loaded
if (extension_loaded('gd')) {
    // Use GD functions
}

// Get loaded extensions
$extensions = get_loaded_extensions();

// =======================================================
// END OF PHP GUIDE BIBLE
// =======================================================
