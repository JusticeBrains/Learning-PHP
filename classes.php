<?php

    /*Php 7
    class Person{
        var $name;
        var $age;
        var $birthday = false;

        function __construct($name, $age){
            $this->name = $name;
            $this->age = $age;
        }
    }*/

    // php 8
    class Person{
        var $name;
        var $age;
        var $birthday = false;
        function __construct($name, $age){
            $this->name = $name;
            $this->age = $age;
        }

        public function getName(){
            return $this->name;
        }

        public function getAge(){
            return $this->age;
        }

        public function setName($new_name){
            $this->name = $new_name;
        }

        public function set_birthday($b) {
            $this->birthday = $b;
            $this->update_age();
        }

        private function update_age(){
            $this->age = ($this->birthday) ? ++$this->age : $this->age;
        }
    }

    $mclean = new Person('McLean', 24);
    $richie = new Person('Richie', 30);

    echo $mclean-> getName() . '<br/>';

    echo $richie->getName() . '<br/>';

    $mclean->set_birthday(true);
    echo $mclean->getAge();

?>