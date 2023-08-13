<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    class Check_inputs{

        public string $nickname;
        public string $password;
        private array $players_list;
        
        public function WithoutSpaces(){
            
            $validate = false;
           
            $this->nickname = trim($this->nickname);
            
            if(!empty($this->nickname)){
                $validate = true; 
            }

            return $validate;
        }

        public function ValidatePassword(){

            

            return true;
        }


        public function onRegistered(){

            $validate = false;

            if($this->WithoutSpaces($this->nickname)){
                if(in_array($this->nickname,$this->players_list)){
                    $validate = true;
                }
            }
            return $validate;
        }


    }



    if(isset($_POST["nickname"]) && isset($_POST["password"])){


    }
}
?>