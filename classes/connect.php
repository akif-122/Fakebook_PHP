<?php
class Database
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "fakebook_db";

    public function connect()
    {
        $conn = mysqli_connect($this->host, $this->user, $this->password, $this->db);
        return $conn;
    }

    public function save($query)
    {
        $conn = $this->connect();
        $result = mysqli_query($conn, $query);
        return $result;
    }

    public function read($query){
        $conn = $this->connect();
        $result = mysqli_query($conn, $query);

        if(!$result){
            return false;
        }else{
            $data = null;
            while($row = mysqli_fetch_assoc($result)){
                $data[] = $row;
            }
            return $data;
        }
        
    }


    public function delete($query){
        $conn = $this->connect();
        $result = mysqli_query($conn, $query);
    }
    
    
    
}
?>