<?php
class Mylog {
    private $log;

    private function __construct($filename) {

        $this->log = new Monolog\Logger('name');
        $this->log->pushHandler(new Monolog\Handler\StreamHandler($filename, Monolog\Level::Info));
    }

    public static function load($filename) {
        return new Mylog($filename);
    }

    public function add($message) {
        $this->log->info($message);
    }
}