<?php
namespace MiniGamesTree\Console\Run;

use pocketmine\scheduler\PluginTask;

class RT extends PluginTask{
    public $base;
    public function __construct(\MiniGamesTree\Console\Logger $base){
        parent::__construct($base);
        $this->base = $base;
    }
    public function onRun($tick){
    $this->TimeM($this->base->base->move);
    }
    
    public function TimeM($m){
    if($m == ('-')){
    $this->base->base->Time--;
    }
    if($m == ('+')){
    $this->base->base->Time++;
    }
    }
}
?>
