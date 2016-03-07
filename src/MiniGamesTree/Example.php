<?php

class Example {


 // That IS Example
  public function onJoin(PlayerJoinEvent $ev){
  MiniGamesAPI::getInstance()->add(1,$ev->getPlayer()->getName()); // Add Player 1
  MiniGamesAPI::getInstance()->getPlayerWithNumber(1)->getInventory()->addItem(Item::get(1));
  if(MiniGamesAPI::getInstance()->inGame()){
   MiniGamesAPI::getInstance()->remove(1); // delete Player 1
   
  }
  }

}
