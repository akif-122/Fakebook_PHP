<?php 
    include "connect.php";
    class Signup extends Database{
        private $error = "";
        public function evaluate($data){
            
            foreach($data as $key => $val){
                if(empty($val)){
                    $this->error .= $key . " is Required. <br/>";
                }

                if($key == "email"){
                    if(!filter_var($val , FILTER_VALIDATE_EMAIL)){
                        $this->error .= $key . "is not valid. <br/>";
                    }
                }
                

                if($key == "first_name"){
                    if(is_numeric($val)){
                        $this->error .= $key . " Should not be number. <br/>";
                    }
                    if(strstr($val , " ")){
                        $this->error .= $key . " Should not be inlcude space. <br/>";
                    }
                }

                if($key == "last_name"){
                    if(is_numeric($val)){
                        $this->error .= $key . " Should not be number. <br/>";
                    }
                    if(strstr($val , " ")){
                        $this->error .= $key . " Should not be inlcude space. <br/>";
                    }
                }
                
            }

            if($this->error == ""){
                return $this->create_user($data);
            }else{
                return $this->error;
            }
        }

        // CREATE USER

        public function create_user($data){
            $first_name = $data['first_name'];
            $last_name = $data['last_name'];
            $email = $data['email'];
            $password = $data['password'];
            $gender = $data["gender"];

            //GENERATE 
            $url_address = $first_name."-".$last_name;
            $userid = $this->createUserId();

           $sql = "INSERT INTO users (email, first_name, last_name, userid, gender, password, url_address)
                    VALUES('$email','$first_name','$last_name','$userid','$gender','$password','$url_address')";
                    
            $result = $this->save($sql);
            return $result;
            
        }

        public function createUserId(){
            $user_id = uniqid();
            return $user_id;
        }
        
        
    }
?>