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
        parent::__construct($s);
        $this->server = $s;
    }
    public function setTime($time){
        $this->server->getPluginManager()->callEvent(new events\Plugin\PluginSetTimeEvent($this, $time));
        if($this->getTimeSeconds() < self::Lagg):
        return $this->Time = $time + 1;
        endif;
        
    }
    
    public function getTimeSeconds(){
        return $this->Time;
    }
    
    public function setTM($m = "-"){
        return $this->move = $m;
    }
    
    public function setSpeed($speed = 2){ // 2 = 1 sec
        return $this->speed = $speed * 10;
    }
    
}
