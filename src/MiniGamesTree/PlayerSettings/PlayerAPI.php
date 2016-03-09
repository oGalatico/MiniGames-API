<?php
namespace MiniGamesTree\PlayerSettings;

use MiniGamesTree\PlayerGames;

use MiniGamesTree\Status;

use MiniGamesTree\Time;

class PlayerAPI{
    
    /** @var PlayerGames */
    private $g;
    
    /** @var Status */
    private $s;
    
    /** @var Status */
    private $Time;
    
    /**
     * @param Status $s
     * @param PlayerGames $g
     * @param Time $t
     */
    public function __construct(\MiniGamesTree\Status $s, PlayerGames $g,Time $t){
        $this->g = $g;
        $this->s = $s;
        $this->Time = $t;
    }
    
    public function getGameSettings(){
    return $this->g;
    }
    
    public function getMode(){
    return $this->s;
    }
    
    public function getTime(){
    return $this->Time;
    }
    
}
