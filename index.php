<?php
    class Family {
        protected $peopleCount;
        protected $name;
        protected $age;
        protected $weight;
        protected $height;
        public function eat() {
            echo 'eats';
        }
        public function drink() {
            echo 'drinks';
        }
        public function sleep() {
            echo 'sleeps';
        }
        public function speak() {
            echo 'speaks';
        }
    }

    class Parents extends Family {
        public function сhildrenCare() {
            echo 'takes care of children';
        }
        public function work() {
            echo 'works to provide for a family';
        }
    }

    class Father extends Parents {
        protected $wifeName;
        public function watchTV() {
            echo '';
        }
    }

    class Mother extends Parents {
        protected $husbandName;
        public function cook() {
            echo 'prepares food for the family';
        }
    }

    class Child extends Family {
        protected $sex;
        public function play() {
            echo 'plays with toys';
        }
        public function getEducation() {
            if ($this->age >= 3 && $this->age < 7) echo 'gets education in kindergarten';
            if ($this->age >= 7 && $this->age < 18) echo 'gets education in school';
            // else somthing more
        }

        public function childSex() {
            return $this->sex;
        }

        public function childAge() {
            return $this->age;
        }
    }