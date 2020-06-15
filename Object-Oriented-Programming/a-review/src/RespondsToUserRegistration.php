<?php namespace Stutord;

interface RespondsToUserRegistration {
  public function userRegisteredSuccessfully();
  public function userRegisteredFailed();
}