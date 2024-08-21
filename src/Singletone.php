<?php

declare(strict_types=1);

namespace App;
// class Singletone
// {

//     /**
//      * The actual singleton's instance almost always resides inside a static
//      * field. In this case, the static field is an array, where each subclass of
//      * the Singleton stores its own instance.
//      */
//     private static $instance = [];

//     /**
//      * Singleton's constructor should not be public. However, it can't be
//      * private either if we want to allow subclassing.
//      */

//     protected function __construct() {}


//     /**
//      * Cloning and unserialization are not permitted for singletons.
//      */

//     protected function __clone() {}

//     public function __wakeup()
//     {
//         throw new \Exception("Cannot unserialize singleton");
//     }

//     /**
//      * The method you use to get the Singleton's instance.
//      */
//     public static function getInstance()
//     {
//         $subclass = static::class;
//         if (!isset(self::$instance[$subclass])) {
//             self::$instance[$subclass] = new static();
//         }

//         return self::$instance[$subclass];
//     }
// }
// The Singleton pattern i have implemented is designed to support subclasses, 
// allowing each subclass to have its own Singleton instance.



// single class singleton pattern 

class Singletone
{

    private static $instance;

    private function __construct() {}

    private function __clone() {}

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize singleton");
    }

    public static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    public function sayHello()
    {
        echo "Hi";
    }
}

// function singleInstalnce()
// {
//     return Singletone::getInstance();
// }

// $single = singleInstalnce();

// $single->sayHello();
