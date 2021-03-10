<?php

    class Father extends Family implements parentalResponsibilities {

        protected $sex = 'male';
        public $wifeName;

        public function watchTV() {
            // ...;
        }

        public function work() {
            // ...
        }

        public function careOfChildren() {
            // ...
        }
    }