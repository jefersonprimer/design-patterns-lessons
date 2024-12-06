<?php

class HostGatorInfluenciadores {
  protected static $instance;
  private $members = [];

  private function __constructor () {}
  private function __clone () {}
  private function __wakeup () {}

  public static function getInstance(): self {
    if(empty (self::$instance))
      self::$instance = new self();
    return self::$instance;
  }

  public function setMembers($members) {
    $this->members = array_merge($this->members, $members);
  }
}

>