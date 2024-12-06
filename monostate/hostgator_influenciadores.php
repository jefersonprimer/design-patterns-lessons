<?php

class HostGatorInfluenciadores {
  private static $members = [];

  public function __constructor () {}

  public function setMembers($members) {
    self::$members = array_merge($this->members, $members);
  }

  public function getMembers () {
    return self::$members;
  }
}

>