<?php
namespace MiniGamesTree;
use pocketmine\Server;
class PlayerGames extends Base\ArrayBase{
    
    /** @var Server */
    private $server;
    
    private $mode;
     /**
     * @param $s
     */
    public function __construct(Server $s){
        parent::__construct($server);
        $this->server = $s;
        $this->mode = new Status;
    }
    
    public function check(){
        if($this->getPlayerCount() == 1 && $this->mode->isStarting()){
        // soon
        }
    }
    
        public function add($number,$player){
        $this->server->getPluginManager()->callEvent(new PlayerJoinGameEvent($this, $player));
       return $this->pg
                {
        $number
        }  =
                $player->getName();
    }
    
    public function remove($number){
        unset($this->pg{
            $number       
        });
    }
    public function getPlayerCount(){
        return count($this->pg);
   /*$c = 0;
    do{
        $c++;
        return $c;
    }while (($c <= count($this->pg)));
    */
    }
    
    public function getPlayerWithNumber($number){
        return $this->server->getPlayer($this->pg[$number - 1]);
    }
    
    public function isPlayerWithNumber($number){
        return array_key_exists($number - 1, $this->pg);
    }
    
    public function inGame($name){
        return in_array($name, $this->pg);
    }
    /*
    public function getNumber(){
        return fread(fopen("Number", "r"), filesize("Number"));
    }
   * 
   */
}
?>
