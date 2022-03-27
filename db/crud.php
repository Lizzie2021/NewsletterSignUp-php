<?php 
    class crud{
        private $db;
        function __construct($conn){
            $this->db = $conn;
        }
        
        public function insert($fname,$lname,$email){
            try{
                $stmt = $this->db->prepare("INSERT INTO subscriber (firstname, lastname, email)
                VALUES (:firstname, :lastname, :email)");
                $stmt->bindParam(':firstname', $fname);
                $stmt->bindParam(':lastname', $lname);
                $stmt->bindParam(':email', $email);
                $stmt->execute();
                $last_id = $this->db->lastInsertId();
                return $last_id;
            }catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
                return false;
            }
        }

        public function checkEmail($email){
            try{
                $stmt = $this->db->prepare("SELECT * FROM subscriber WHERE email=:email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $user = $stmt->fetch();
            if($user){
                return false;
            }else{
                return true;
            }
            }catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
                
            }
            

        }
    

        public function getSubscriber($id){
            try{
                
                $stmt = $this->db->prepare("SELECT firstname, lastname,email FROM subscriber WHERE id=:id");
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }catch(PDOException $e){
                echo "Error: " . $e->getMessage();
                return false;
            }

        }

        public function getSubscribers(){
            try{
                
                $sql= "SELECT * FROM subscriber ";
                $result = $this->db->query($sql);
                return $result;
            }catch(PDOException $e){
                echo "Error: " . $e->getMessage();
                return false;
            }

        }

        public function update($id,$fname,$lname,$email){
            try{
                $sql = "UPDATE subscriber SET firstname=:firstname,lastname=:lastname,email=:email WHERE id=:id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':firstname', $fname);
                $stmt->bindParam(':lastname', $lname);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':id',$id);
                $stmt->execute();
                return true;
            }catch(PDOException $e){
                echo "Error: " . $e->getMessage();
                return false;
            }

        }

        public function delete($id){
            try{

                $sql = "DELETE FROM `subscriber` WHERE id = $id";
                $this->db->exec($sql);
                return true;

            }catch(PDOException $e){
                echo "Error: " . $e->getMessage();
                return false;
            }
        }
            

    }
?>