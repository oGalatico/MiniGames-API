<?php

namespace MiniGamesTree;

class Time extends Base\ArrayBase{
    
    const Lagg = 100001;

    public function setTime($time){
        if($this->getTimeSeconds() < self::Lagg):
        return $this->Time = $time + 1;
        endif;
        
    }
    
    public function getTimeSeconds(){
        return $this->Time;
    }
    
    public function setTimeMove($m = "-"){
        return $this->move = $m;
    }
    
    public function setSpeed($speed = 4){ // 4 = 1 sec
        return $this->speed = $speed * 5;
    }
    
}
