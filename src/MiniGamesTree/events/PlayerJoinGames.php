<?php

namespace MiniGamesTree\event;

use pocketmine\event\Cancellable;

use pocketmine\Player;

use pocketmine\event\plugin\PluginEvent;

use MiniGamesTree\PlayerGames;

use MiniGamesTree\Status;

class PlayerJoinGameEvent extends PluginEvent implements Cancellable{
  
    /** @var Player */
    
    private $player;
    
    /** @var PlayerGames */
    private $g;
    
    /** @var Status */
    private $s;
    /**
     * @param Status $s
     * @param Player $player
     * @param $g
     * @param $s
     */
    public function __construct(\MiniGamesTree\Status $s, Player $player,$g){
        parent::__construct($loader);
        $this->player = $player;
        $this->g = $g;
        $this->s = $s;
    }
    
    public function getPlayer() {
        return $this->player;
    }
    
    public function getMode(){
        return $this->s;
    }
    
    public function getPlayerSettings(){
        return $this->g;
    }
}
