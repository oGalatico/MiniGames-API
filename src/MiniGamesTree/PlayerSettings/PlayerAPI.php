<?php
namespace MiniGamesTree\PlayerSettings;

use MiniGamesTree\PlayerGames;

use MiniGamesTree\Status;

use MiniGamesTree\Time;

class PlayerAPI{
    
    private $g;

    private $s;
    
    private $Time;

    public function getGameSettings(){
    $this->g = new PlayerGames();
    return $this->g;
    }
    
    public function getMode(){
    $this->s = new Status();
    return $this->s;
    }
    
    public function getTime(){
    $this->Time = new Time();
    return $this->Time;
    }
    
}
