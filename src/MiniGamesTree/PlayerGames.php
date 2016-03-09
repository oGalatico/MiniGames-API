<?php
namespace MiniGamesTree;


class PlayerGames extends Base\ArrayBase{
    
    
        public function add($number,$player){
        $this->number++;
        $this->num[$player] = $this->number;
       return $this->pg
                {
        $number
        }  =
                $player->getName();
    }
    
    public function remove($number){
        $this->number--;
        unset($this->num[$this->getPlayerWithNumber($number)]);
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
        return $this->server->getPlayer($this->pg{
       $number - 
        (1)});
    }
    
    public function isPlayerWithNumber($number){
        return array_key_exists($number - 1, $this->pg);
    }
    
    public function inGame(){
        foreach($this->server->getOnlinePlayers() as $p){
        return in_array($p->getName(), $this->pg);
    }}
    
    public function getAllPlayerName($glue = " * "){ // Like /list
        return implode($glue , $this->pg);
    }
    /*
    public function getNumber(){
        return fread(fopen("Number", "r"), filesize("Number"));
    }
   * 
   */
   public function getLastPlayerNumber(){
   return $this->number;
   }
    public function getNumber($player){
    return $this->num[$player];
    }
}
?>
