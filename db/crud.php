<?php

    class crud{
        //private database object
        private $db;

        //constructor to initiate private variable to the databse connection
        function __construct($conn){
            $this->db = $conn;   
        }

        //function to insert a new record into the database
        public function insert($firstName, $lastName, $email, $datejoined, $department){
            try {
                //code... write values as placeholders to avoid sql injection
                // $sql = "INSERT INTO `formdata` VALUES (:firstName, :lname, :email, :djoin, :dept)"; (`firstName`, `lastName`, `email`, `datejoined`, `department`) 
                $sql = "INSERT INTO formdata (firstName, lastName, email, datejoined, dept_id) VALUES (:firstName, :lastName, :email, :datejoined, :dept_id)";
                //prepare the sql statement for execution
                $stmt = $this->db->prepare($sql);
                //bind all placeholders to the actual values
                $stmt->bindparam(':firstName',$firstName);
                $stmt->bindparam(':lastName',$lastName);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':datejoined',$datejoined);
                $stmt->bindparam(':dept_id',$department);
                //execute statement
                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }

        }
            
        public function showData(){
            $sql = "SELECT * FROM `formdata` a inner join department s on a.dept_id = s.dept_id";
            $result = $this->db->query($sql);
            return $result;
        }


        public function getDept(){
            $sql = "SELECT * FROM `department`";
            $result = $this->db->query($sql);
            return $result;
        }

        public function viewData($id){
            $sql = "select * from formdata a inner join department s on a.dept_id = s.dept_id where rec_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;       
        
        }
     
        
        public function editRecord($id, $firstName, $lastName, $email, $datejoined, $department){
            try{
            $sql = "UPDATE `formdata` SET `firstName`=:firstName,`lastName`=:lastName,`email`=:email,`datejoined`=:datejoined,`dept_id`=:dept_id WHERE rec_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id',$id);
            $stmt->bindparam(':firstName',$firstName);
            $stmt->bindparam(':lastName',$lastName);
            $stmt->bindparam(':email',$email);
            $stmt->bindparam(':datejoined',$datejoined);
            $stmt->bindparam(':dept_id',$department);
            $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function deleteRecord($id){
            try{
                $sql = "delete from formdata where rec_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(":id", $id);
                $stmt->execute();
                return true;
    
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;

                
            };

        }
    }
?>