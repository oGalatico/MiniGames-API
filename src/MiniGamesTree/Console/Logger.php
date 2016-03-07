<?php

namespace MiniGamesTree\Console;

use pocketmine\plugin\PluginBase;

class Logger extends PluginBase { 

    const Name = "MiniGamesBase";
    
    public function onEnable() {
        $base = new MiniGamesTree\Base\ArrayBase();
        $this->getServer()->getScheduler()->scheduleRepeatingTask(new Run\RT($this), $base->speed);
        $this->getLogger()->info(\pocketmine\utils\TextFormat::GREEN.self::Name . " IS Worked");
        
    }
}
?>
