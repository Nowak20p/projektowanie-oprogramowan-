<?php
class Config {
    private static $instance;
    private $config = array(
        "login"     =>  "mojlogin",
        "password"  =>  "haslo",
        "language"  =>  "pl"
        );
 
    private function __construct() {}

    public static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new Config();
        }
        return self::$instance;
    }
    public function setLanguage($lang) {
        $this->config["language"] = $lang;
    }
    public function getLanguage() {
        return $this->config["language"];
    }
}
 
$conf1 = Config::getInstance();
echo $conf1->getLanguage(); // wyswietla "pl"
$conf2 = Config::getInstance();
$conf2->setLanguage("en");
echo $conf1->getLanguage(); // wyswietla "en"



?>