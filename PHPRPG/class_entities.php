<?php
class entities {
    public $life, $damage, $defence, $level, $experience, $experiencetolevelup;

    public function __contruct() {
        $this->life = 100;
        $this->damage = rand(8,15);
        $this->defence = 10;
        $this->level = 1;
        $this->experience = 0;
        $this->experiencetolevelup = 150 * $this->level;
    }
    
    public function setLife($life){
        $this->life = $this->life + ($this->level * 20);
    }
    
    public function setLevel($level){
        if ($this->experience = $this->experiencetolevelup){
            $this->level++;
            $this->experience = 0;
            
            
        }
         }
        public function getLife(){
   
           return $life;
        }
    
    
}
?>