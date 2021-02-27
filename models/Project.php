<?php
    class Project{
        private $db;

        public function __construct(){
            $this->db = new Database;

        }

        //adds projects
        public function addProject($data){
            //Prepare Query
            $this->db->query('insert into projects(projectName, industry, pDescription, totalInflow, totalOutflow) values(:projectName, :industry, :pDescription, :totalInflow, :totalOutflow)');

            // Bind Values
            $this->db->bind(':projectName', $data['projectName']);
            $this->db->bind(':industry', $data['industry']);
            $this->db->bind(':pDescription', $data['pDescription']);
            $this->db->bind(':totalInflow', $data['totalInflow']);
            $this->db->bind(':totalOutflow', $data['totalOutflow']);
            //Execute
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        //gets last inserted project
        public function getLastProjectID(){
            
            return $this->db->lastInsertId();
            
        }

        //gets projects
        public function getProjects(){
            //Prepare Query
            $this->db->query('select * from projects');

                     
            //Fetch All records
            $results=$this->db->resultset();
            return $results;
            
        }

        //gets some projects
        public function getSomeProjects($pID){
            //Prepare Query
            $this->db->query('select * from projects where projectID='.$pID);

                     
            //Fetch All records
            $results=$this->db->resultset();
            return $results;
            
        }

        //adds project duration
        public function addProjectDuration($data){
            //Prepare Query
            $this->db->query('insert into project_duration(startTime, endTime) values(:startTime, :endTime)');

            // Bind Values
            $this->db->bind(':startTime', $data['startTime']);
            $this->db->bind(':endTime', $data['endTime']);

            

            //Execute
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        //gets projectDurationID
        public function getProjectDuration($projID){
            //Prepare Query
            $this->db->query('select * from project_duration where projDuration='.$projID);

                     
            //Fetch All records
            $results=$this->db->resultset();
            return $results;
            
        }
    }
?>