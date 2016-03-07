<?php

namespace MiniGamesTree\Console;

use pocketmine\plugin\PluginBase;

class Logger extends PluginBase { 

    const Name = "MiniGamesBase";
    
    public function onEnable() {
    
        $this->getLogger()->info(\pocketmine\utils\TextFormat::GREEN.self::Name . " IS Worked");
        
    }
}
?>
