<?php
require_once('Security.class.php');
    class User{
        private $email;
        private $password;
        private $passwordConfig;

        

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }

        /**
         * Get the value of passwordConfig
         */ 
        public function getPasswordConfig()
        {
                return $this->passwordConfig;
        }

        /**
         * Set the value of passwordConfig
         *
         * @return  self
         */ 
        public function setPasswordConfig($passwordConfig)
        {
                $this->passwordConfig = $passwordConfig;

                return $this;
        }

        public function register(){
                $secure = Security::comfirmPasswords($this->password, $this->passwordConfig);
                if( $secure === true ){
                        try{
                            $password = Security::hash($this->password);

                            $conn = new PDO("mysql:host=localhost;dbname=spotify", "root", "");
                            //INSERT INTO users (email, password) VALUES ("tester2", "test2")
                            $statement = $conn->prepare('insert INTO users (email, password) VALUES (:email, :password)');
                            $statement->bindParam(":email", $this->email);
                            $statement->bindParam(":password", $password);
                            //var_dump($statement);
                            $result = $statement->execute();
                            return $result;
                        }

                        catch(Trowable $t){
                            return false;
                        }
                }
                else{
                        
                }
        }

    }