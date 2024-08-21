<?php

use App\Singletone;

require_once __DIR__ . '/vendor/autoload.php';


class Index extends Singletone
{
    private $hashmap = [];

    public function getValue(string $key): string
    {
        return $this->hashmap[$key] ?? '';
    }

    public function setValue(string $key, string $value): void
    {
        $this->hashmap[$key] = $value;
    }
}

$config1 = Index::getInstance();
$login = "test_login";
$password = "test_password";


// $config1->setValue("login", $login);
// $config1->setValue("password", $password);

$config1->setValue("login", $login);
$config1->setValue("password", $password);

echo $config1->getValue("login");
echo $config1->getValue("password");
