<?php
//Hierarchy inheritance but not parallel like in C++
//Properties and methods
//__toString() etc methods that allows convert to string in needed cases (f.e. using in implode func)
echo '<span style="color:red;">First homework:<br></span>';
class ParentClass {
    function __construct() {
        echo "Constructor " . __CLASS__  . "<br>";
    }
    function __destruct() {
        print "Destructor " . __CLASS__  . "<br>";
    }
}

class ChildClass extends ParentClass {
    function __construct() {
        parent::__construct();
        echo "Constructor " . __CLASS__  . "<br>";
    }
    function __destruct() {
        parent::__destruct();
        print "Destructor " . __CLASS__  . "<br>";
    }
}

class ChildEmptyClass extends ParentClass {}

$obj = new ParentClass();
echo "<br>";
$obj = new ChildClass();
echo "<br>";
$obj = new ChildEmptyClass();
echo "<br>";
$obj_copy = &$obj;
unset ($obj_copy);
unset ($obj);

echo '<span style="color:red;">Some magical methods:<br></span>';
class SampleClass {
    private $abstract_variable;
    // Function describing like docstrings in PyCharm IDE
    private function changer_abstract_variable(int $multiplier = 0): void { //void - PHP 7.1
        //var_dump($multiplier);
        $this->abstract_variable *= $multiplier;
    }
    private static function stat() {
        echo 'It\'s a static method that\'s one for all class instances.<br>';
    }
    public function __get($trying_change) {
        if (property_exists($this, $trying_change)) {
            return $this->$trying_change;
        }
        return NULL;
    }
    public function __set($trying_change, $value)
    {
        if (property_exists($this, $trying_change)) {
            $this->$trying_change = $value;
        }
    }
    public function __call($method, $params) {
        if (method_exists($this, $method)) {
        //return $this->$method($params);
            return call_user_func_array(array($this, $method), $params);
        }
        //return NULL;
        exit();
    }
    public static function __callstatic($method, $params) {
        if (method_exists(__CLASS__, $method)) {
            //return $this->$method($params);
            return call_user_func_array(array(__CLASS__, $method), $params);
        }
        //return NULL;
        exit();
    }
}

$obj = new SampleClass();
$obj->abstract_variable = 100; // __set
echo $obj->abstract_variable; // __get
$obj->changer_abstract_variable(3); // __call
echo "<br>$obj->abstract_variable<br>"; // __get
SampleClass::stat(); // __callstatic

echo '<span style="color:red;">Singletone pattern:<br></span>';
class Singleton {
    // To initialise the only object
    private static $inst = [];

    // To protect object creation through new
    private function __construct() {}

    // To forbid cloning
    private function __clone() {}

    // To forbid recreation from strings through unserialize() func
    private function __wakeup() {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    // Working method to create object at first and then return link on this object
    public static function getInstance(): Singleton {
        $cls = static::class; // Using class name as a creation key
        if (!isset(self::$inst[$cls])) {
            self::$inst[$cls] = new static; // static keyword represents name of the current class
        }
        return self::$inst[$cls];

        /**if (self::$inst != null) {
            return self::$inst;
        }
        return new self;**/
    }

    // Target of this class
    public $some_variable = 0;
}

$s1 = Singleton::getInstance();
$s2 = Singleton::getInstance();

$s1->some_variable = 10;
echo $s2->some_variable.'<br>';
if ($s1 === $s2) {
    echo "Singleton works, both variables contain the same instance.<br>";
} else {
    echo "Singleton failed, variables contain different instances.<br>";
}

//$s3 = new Singleton(); // can't initialise coz of private constructor
$s3 = $s1; // Same as $s3 = &$s1;
if ($s1 === $s3) {
    echo "Singleton works, both variables contain the same instance.<br>";
} else {
    echo "Singleton failed, variables contain different instances.<br>";
}

//$objCloned = clone $s1; // can't initialise coz of private clone method

?>

<a href="get_post.php"><br><br>Second lecture homework</a>