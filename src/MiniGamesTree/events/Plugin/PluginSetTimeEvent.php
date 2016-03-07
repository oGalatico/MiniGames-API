<?php

namespace MiniGamesTree\event\Plugin;

use pocketmine\event\Cancellable;

use pocketmine\Player;

use pocketmine\event\plugin\PluginEvent;

use MiniGamesTree\Time;

class PluginSetTimeEvent extends PluginEvent implements Cancellable{
  
    /** @var Player */
    
    private $player;
    
    /** @var Time */
    private $Time;
    /**
     * @param Time $t
     * @param Player $player
     */
    public function __construct(\MiniGamesTree\Time $t, Player $player){
        parent::__construct($t);
        $this->player = $player;
        $this->Time = $t;
    }
    
    public function getPlayer() {
        return $this->player;
    }
    
    public function getTime(){
        return $this->Time;
    }
}
