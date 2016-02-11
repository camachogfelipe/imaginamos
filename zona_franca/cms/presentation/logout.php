<?php

class Logout {

  public $mSiteUrl;

  // Class constructor
  public function __construct()
  {
    $this->mSiteUrl = Link::Build('');

    unset($_SESSION["user"]);
  }

  public function init() {
  }

}

?>