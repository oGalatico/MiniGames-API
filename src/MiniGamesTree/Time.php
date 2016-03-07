<?php

namespace MiniGamesTree;

use pocketmine\Server;

class Time extends Base\ArrayBase{
    
    /** @var Server */
    private $server;
    
     /**
     * @param $s
     */
    public function __construct(Server $s){
        parent::__construct($server);
        $this->server = $s;
    }
    public function setTime($time){
        $this->server->getPluginManager()->callEvent(new PluginSetTimeEvent($this, $time));
        return $this->Time = $time + 1;
    }
    
    public function getTimeSeconds(){
        return $this->Time * $this->Time;
    }
    
}
