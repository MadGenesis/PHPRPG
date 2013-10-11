<?php
class monster_sizes {
    
    protected $monster_name, $monster_health, $monster_damage, $monster_defence, $monster_level, $experiencegain, $monster_type, $monster_size;
    
    public function __contruct(){
        $this->monster_name = $row->monster_name;
        $this->monster_health = $row->monster_health;
        $this->monster_damage = $row->monster_damage;
        $this->monster_defence = $row->monster_defence;
        $this->monster_level = $row->monster_level;
        $this->experiencegain = $row->experiencegain;
        $this->monster_type = $row->monster_type;
    }
    
    public function monster_general($monster_size){
        $this->monster_name = $row->monster_name . '(General)';
        $this->monster_health;
        $this->monster_damage;
        $this->monster_defence;
        $this->monster_level;
        $this->experiencegain;
        $this->monster_type;
        return $this->monster_size = 'General';
    }
    
    public function monster_champion($monster_size){
        $this->monster_name = $row->monster_name . '(Champion)';
        $this->monster_health = $this->monster_health * 2;
        $this->monster_damage = $this->monster_damage / 100 * 120;
        $this->monster_defence = $this->monster_defence / 100 * 120;
        $this->monster_level = $this->monster_level;
        $this->experiencegain = $this->experiencegain * 2.2;
        $this->monster_type = $this->monster_type;
        return $this->monster_size = 'Champion';
    }
    
    public function monster_giant($monster_size){
        $this->monster_name = $row->monster_name . '(Giant)';
        $this->monster_health = $this->monster_health * 10;
        $this->monster_damage = $this->monster_damage / 100 * 160;
        $this->monster_defence = $this->monster_defence / 100 * 150;
        $this->monster_level = $this->monster_level;
        $this->experiencegain = $this->experiencegain * 12;
        $this->monster_type = $this->monster_type;
        return $this->monster_size = 'Giant';
    }
}
?>