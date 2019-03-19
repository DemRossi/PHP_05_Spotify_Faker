<?php
    class Security{
        public static function comfirmPasswords($firstPassword, $secondPassword){
            if($firstPassword == $secondPassword){
                $same = true;
                return $same;
            }else{
                $same = false;
                return $same;
            }
        }

        public static function hash($password){
            $options = [
                'cost' => 15
            ];

            $hash = password_hash($password, PASSWORD_DEFAULT, $options);
            return $hash;
        }
    }