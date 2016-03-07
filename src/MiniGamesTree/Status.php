<?php
namespace MiniGamesTree;
class Status extends Base\ArrayBase{
    
    const Mode1 = "Stop";
    
    const Mode2 = "Witing";
    
    const Mode3 = "Start";
    public function setStart(){
        $this->status{
            "Mode"
        } = self::Mode3;
    }
  
    public function setStop(){
    $this->status{
        "Mode"
    } = self::Mode1;
    }
    
     public function setWiting(){
    $this->status{
        "Mode"
    } = self::Mode2;
    }
        public function isStart(){
        return $this->status[0] == (self::Mode3);
    }
    
    public function isStop(){
        return $this->status[0] == (self::Mode1);
    }
    
    public function isWiting(){
    return $this->status[0] == (self::Mode2);
    }
    
}
?>
