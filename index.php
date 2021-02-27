<?php
    declare(strict_types=1);

    class Family {
        public $peopleCount;
        public $name;
        public $age;
        public $weight;
        public $height;
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
        public $sex;

        public function __construct (int $age, string $sex) {
            $this->age = $age;
            $this->sex = $sex;
        }
        
        public function play() {
            echo 'plays with toys';
        }
        
        public function getEducation() {
            if ($this->age >= 3 && $this->age < 7) echo 'gets education in kindergarten';
            if ($this->age >= 7 && $this->age < 18) echo 'gets education in school';
            // else anything more
        }

        public function childSex() {
            return $this->sex;
        }

        public function childAge() {
            return $this->age;
        }
    }

$child_1 = new Child(12, 'male');
$child_2 = new Child(14, 'female');

echo "First child {$child_1->age} years  old.<br>";
echo "and sex is {$child_1->sex}<br>";
echo "<br>Second child {$child_2->age} years  old.<br>";
echo "and sex is {$child_2->sex}<br>";