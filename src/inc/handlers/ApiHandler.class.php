<?php

class ApiHandler implements Handler {
  private $user;
  
  public function handle($action) {
    switch ($action) {
      default:
        UI::addMessage(UI::ERROR, "Invalid action!");
        break;
    }
  }
}