<?php

    class Child extends Family {
        public $motherName;
        public $fatherName;
        
        public function __construct(string $name, string $birthDay, string $sex) {
            $this->name = $name;
            $this->birthDay = $birthDay;
            if ($sex === 'm') $this->sex = 'male';
            elseif ($sex === 'f') $this->sex = 'female';
            else $this->sex = '&#8722;';
        }
        
        public function play() {
            return 'plays with toys';
        }
    }