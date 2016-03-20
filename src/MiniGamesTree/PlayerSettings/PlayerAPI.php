<?php
namespace MiniGamesTree\PlayerSettings;

use MiniGamesTree\PlayerGames;

use MiniGamesTree\Status;

use MiniGamesTree\Time;

class PlayerAPI{
    
    private $g;

    private $s;
    
    private $Time;

    public function getPlayerAPI() : PlayerGames{
    $this->g = new PlayerGames();
    return $this->g;
    }
    
    public function getModeAPI() : Status{
    $this->s = new Status();
    return $this->s;
    }
    
    public function getTimeAPI() : Time{
    $this->Time = new Time();
    return $this->Time;
    }
    
}
