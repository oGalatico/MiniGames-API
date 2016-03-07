<?php

namespace MiniGamesTree\Settings;

use MiniGamesTree\PlayerGames;

use MiniGamesTree\Status;

class BaseAPI{
    
    /** @var PlayerGames */
    private $g;
    
    /** @var Status */
    private $s;
    /**
     * @param Status $s
     * @param PlayerGames $g
     */
    public function __construct(\MiniGamesTree\Status $s, PlayerGames $g){
        $this->g = $g;
        $this->s = $s;
    }
    
    public function getGameSettings(){
    return $this->g;
    }
    
    public function getMode(){
      return $this->s;
    }
