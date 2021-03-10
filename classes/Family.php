<?php

require __DIR__ . '/../interfaces/parentalResponsibilities.php';

class Family {
    protected $peopleCount;
    protected $surname;
    protected $name;
    protected $patronymic;
    protected $sex;
    protected $birthDay;
    // protected $role;
    protected $weight;
    protected $height;
    protected $education;

    public function __construct($name, $birthDay /*, $role */) {
        $this->name = $name;
        $this->birthDay = $birthDay;
        // $this->$role = $role;
    }

    public function getName() {
        return $this->name;
    }

    public function age() {
        $birthDay = $this->getBirthday();
        return $this->getBirthday() ?
               round((time() - strtotime($birthDay))/(365*24*3600)) :
               'Birth date has not set yet.';
    }

    public function getBirthday() {
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

    public function getSex() {
        return $this->sex;
    }

    public function setPeopleCount(int $number) {
        $this->peopleCount = $number;
    }

    public function getPeopleCount() {
        return $this->peopleCount;
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