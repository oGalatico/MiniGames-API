<?php

namespace MiniGamesTree;

use pocketmine\Server;

class Time extends Base\ArrayBase{
    
    const Lagg = 100001;
    
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
        if($this->getTimeSeconds() < self::Lagg):
        return $this->Time = $time + 1;
        endif;
        
    }
    
    public function getTimeSeconds(){
        return $this->Time * $this->Time;
    }
    
}
