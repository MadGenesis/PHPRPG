<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of character
 *
 * @author sharkgaming
 */
include('class_entities.php');

class character extends entities {

    public $melee;
    public $tank;
    public $mage;
    public $ranged;
    public $nightsider;

    public function characterChoice($role) {
        return $type = $row->class;
    }

    public function settype() {
        return $this->$type;
    }

   

    public function valg($type) {

        switch ($type) {
            case 'tank':

                $this->life = 150;
                $this->damage = rand(8, 15);
                $this->defence = 50;
                $this->level = 1;
                $this->experience = 0;
                $this->experiencetolevelup = 150 * $this->level;
                return $this . $row->class;
                break;
            case 'mage':


                $this->life = 60;
                $this->damage = rand(20, 23);
                $this->defence = 8;
                $this->level = 1;
                $this->experience = 0;
                $this->experiencetolevelup = 150 * $this->level;
                return $this;
                break;
            case 'melee':

                $this->life = 100;
                $this->damage = rand(8, 15);
                $this->defence = 10;
                $this->level = 1;
                $this->experience = 0;
                $this->experiencetolevelup = 150 * $this->level;
                return $this;
                break;
            case 'ranged':

                $this->life = 75;
                $this->damage = rand(18, 21);
                $this->defence = 9;
                $this->level = 1;
                $this->experience = 0;
                $this->experiencetolevelup = 150 * $this->level;
                return $this;
                break;

            case 'nightsider':

                $this->life = 30;
                $this->damage = rand(60, 89);
                $this->defence = 23;
                $this->level = 1;
                $this->experience = 0;
                $this->experiencetolevelup = 150 * $this->level;
                return $this;
                break;
        }
        
        }
 public function stats()  {
      
        echo "life:" . $this->life ."</br>";
        echo "damage:" . $this->damage."</br>";
        echo "defence:" . $this->defence."</br>";
        echo "level:" . $this->level."</br>";
        echo "experience:" . $this->experience."</br>";
        echo "experiencetolevelup:" . $this->experiencetolevelup."</br>";
        echo "class:" . $row->class."</br>";
    }
        /*
         * slut på class
         */
    

}

?>
