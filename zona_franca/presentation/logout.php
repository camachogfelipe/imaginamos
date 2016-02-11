<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of logout
 *
 * @author carlos
 */
class logout
{
  public $mSiteUrl;

  // Class constructor
  public function __construct()
  {
    $this->mSiteUrl = Link::Build('');

    unset( $_SESSION["user"] );
    header( "location:".$this->mSiteUrl );
  }

  public function init()
  {
  }
}

?>
