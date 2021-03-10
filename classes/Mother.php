<?php

    class Mother extends Family implements parentalResponsibilities {

        protected $sex = 'female';
        public $husbandName;

        public function cook() {
            return 'Prepares food for the family';
        }

        public function work() {
            // ...
        }

        public function careOfChildren() {
            // ...
        }
    }