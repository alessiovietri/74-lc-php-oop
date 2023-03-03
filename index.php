<?php

    class User {
        public $nome;
        public $email;
        public $address;
        public static $className = "84";

        function __construct(string $_nome, string $_email, Address $_address = null, int $eta = 3) {
            $this->nome = $_nome;
            $this->email = $_email;
            $this->address = $_address;
        }

        public function getNome() {
            if (strlen($this->email) > 2){
                return $this->nome;
            }
            else {
                return '';
            }
        }

        public function setNome(string $nome) {
            if (is_numeric($nome)) {
                echo 'Il parametro nome deve essere una stringa';
            }
            else {
                $this->nome = $nome;
                var_dump($this);
                echo '<br>';
                echo '<br>';
            }
        }

        public function getCity() {
            return $this->address->city;
        }

        public function printClassName() {
            return 'Sono uno studente di classe #'.self::$className;
        }

        public static function getClassName() {
            return self::$className;
        }
    }

    class Address {
        public $street;
        public $city;
        public $zipCode;
        public $country;

        function __construct($_street, $_city, $_zipCode, $_country = 'Italy') {
            $this->street = $_street;
            $this->city = $_city;
            $this->zipCode = $_zipCode;
            $this->country = $_country;
        }
    }
    
    var_dump(User::$className);
    echo '<br>';
    echo '<br>';
    
    var_dump(User::getClassName());
    echo '<br>';
    echo '<br>';
    
    $sofia = new User("sofia@email.it", "Sofia", null);
    $sofia->email = "sofia@email.it";
    // $sofia->setNome("Sofia");
    
    var_dump($sofia->printClassName());
    echo '<br>';
    echo '<br>';
    
    var_dump($sofia->getCity());
    echo '<br>';
    echo '<br>';

    var_dump($sofia);
    echo '<br>';
    echo '<br>';
    var_dump($sofia->getNome());
    echo '<br>';
    echo '<br>';


    $addressSofia = new Address("Via Roma, 1", "Roma", "00100", "Italia");
    var_dump($addressSofia);
    echo '<br>';
    echo '<br>';

    $sofia->address = $addressSofia;
    var_dump($sofia);
    echo '<br>';
    echo '<br>';
    var_dump($sofia->getCity());
    echo '<br>';
    echo '<br>';


















    $addressFilippo = new Address("Via Napoli, 1", "Napoli", "80100", "Italia");
    var_dump($addressFilippo);
    echo '<br>';
    echo '<br>';

    
    $filippo = new User("", "Filippo", $addressFilippo);
    $filippo->email = "";
    // $filippo->setNome("Filippo");

    var_dump($filippo);
    echo '<br>';
    echo '<br>';
    var_dump($filippo->getNome());
    echo '<br>';
    echo '<br>';