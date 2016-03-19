<?php
namespace MiniGamesTree;


class PlayerGames extends Base\ArrayBase{
    
    
        public function add($number,$player){
        $this->number++;
        $this->score[$player->getName()] = 0;
        $this->num[$player->getName()] = $this->number;
       return $this->pg
        {
        $number
        }=
        $player->getName();
    }
    
    public function remove($number){
        $this->number--;
        unset($this->score[$this->getPlayerWithNumber($number)->getName()]);
        unset($this->num[$this->getPlayerWithNumber($number)->getName()]);
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

    public function getName($number){
    return $this->pg{$number -
    (1)
    )};}

    public function inGame(){
        foreach($this->server->getOnlinePlayers() as $p){
        return in_array($p->getName(), $this->pg);
    }}
    
    public function getAllPlayerName($glue = " , "){ // Like /list
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
    return $this->num[$player->getName()];
    }
    
    public function setScore($number,$score){
    return $this->score[$this->getPlayerWithNumber($number)->getName()] = $score;  // $this->score[$this->getPlayerWithNumber($this->getNumber($player))->getName()] = $score;
    }
    
    public function getScore($number){
    return $this->score[$this->getPlayerWithNumber($number)->getName()];  // $this->score[$this->getPlayerWithNumber($this->getNumber($player))->getName()];
    }
    /*
    How Can Add Score !!
    $this->setScore($number,$this->getScore($this->getNumber($player)) + $score) || $this->setScore($number,$this->getScore($this->getNumber($player)) - $score)
    
    */
 
}
?>
