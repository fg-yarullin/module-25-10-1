<?php

    declare(strict_types=1);

/* ----------------------------------------------- */
    class Family {
        protected $peopleCount;
    }

/* ----------------------------------------------- */
    class FamilyMember extends Family {
        protected $surname;
        protected $name;
        protected $patronymic;
        // protected $age;
        protected $birthDay;
        protected $weight;
        protected $height;
        protected $education;

        public function __construct($name, $birthDay) {
            $this->name = $name;
            $this->birthDay = $birthDay;
        }

        public function getName() {
            return $this->name;
        }

        public function currentAge() {
            $birthDay = $this->getbirthDay();
            return $this->getbirthDay() ?
                   round((time() - strtotime($birthDay))/(365*24*3600)) :
                   'Birth date has not set yet.';
        }

        public function getbirthDay() {
            if (!empty($this->birthDay)) {
                return $this->birthDay;
            } else {
                return false;
            }
        }

        public function getfullName() { 
            if (!(empty($this->surname) && empty($this->name) && empty($this->patronymic))) {
                echo "{$this->surname} {$this->name} {$this->patronymic}";
            }
            if (!(empty($this->surname) && empty($this->name)) && empty($this->patronymic)) {
                echo "{$this->surname} {$this->name}";
            }
        }

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

/* ----------------------------------------------- */
    class Parents extends FamilyMember {
        
        public function сhildrenCare() {
            echo 'takes care of children';
        }
        public function work() {
            echo 'works to provide for the family';
        }
    }

/* ----------------------------------------------- */
    class Father extends Parents {
        protected $sex = 'male';
        protected $wifeName;
        public function watchTV() {
            echo '';
        }
    }

/* ----------------------------------------------- */
    class Mother extends Parents {
        protected $sex = 'female';
        protected $husbandName;
        public function cook() {
            echo 'prepares food for the family';
        }
    }

/* ----------------------------------------------- */
    class Child extends FamilyMember {
        protected $motherName;
        protected $fatherName;
        protected $sex;
        public function __construct(string $name, string $birthDay, string $sex)
        {
            $this->name = $name;
            $this->birthDay = $birthDay;
            if ($sex === 'm') $this->sex = 'male';
            else if ($sex === 'f') $this->sex = 'female';
        }
        
        public function play() {
            echo 'plays with toys';
        }
        
        public function childSex() {
            return $this->sex;
        }
    }

/* ----------------------------------------------- */
    echo 'Family members:<br><br>';
    $child_1 = new Child('Paul', '2015-03-05', 'm');
    echo get_class($child_1) . '<br>';
    echo "Name: {$child_1->getName()} <br>";
    echo "Birth date: {$child_1->getbirthDay()}<br>";
    echo "Age: {$child_1->currentAge()}<br>";
    echo 'Sex: ' . $child_1->childSex() . '.<br><br>';

/* ----------------------------------------------- */
    $child_2 = new Child('Helena', '2012-01-06', 'f');
    echo get_class($child_2) . '<br>';
    echo "Name: {$child_2->getName()} <br>";
    echo "Birth date: {$child_2->getbirthDay()}<br>";
    echo "Age: {$child_2->currentAge()}<br>";
    echo 'Sex: ' . $child_2->childSex() . '.<br><br>';

/* ----------------------------------------------- */
    $child_3 = new Child('Bella', '', 'f');
    echo get_class($child_3) . '<br>';
    echo "Name: {$child_3->getName()} <br>";
    echo "Birth date: {$child_3->getbirthDay()}<br>";
    echo "Age: {$child_3->currentAge()}<br>";
    echo 'Sex: ' . $child_3->childSex() . '.<br><br>';

