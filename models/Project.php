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

        //gets needed capital
        public function getNeededCapital($projectName){
            //Prepare Query
            $this->db->query('select * from projects where projectName='.$projectName);
           //Fetch All records
           $results=$this->db->resultset();
            $capital= $record['totalOutflow'] * 3;         
            
            return $capital;
            
        }

        //gets Duration
        public function getDuration(){
            //Prepare Query
            // $this->db->query('select * from project_duration where projDurationID='.$projID);
            $this->db->query('
                SELECT a.projDurationID, a.startTime as Highdate, b.endTime as LowDate, DATEDIFF(day, a.startTime, b.endTime) AS Diffs  
                FROM (SELECT projDurationID, startTime, ROW_Number() OVER (Partition By projDurationID ORDER BY startTime) as RowNum FROM dbo.Registration) a  
                INNER JOIN (SELECT projDurationID, endTime, (ROW_Number() OVER (Partition By projDurationID ORDER BY startTime) -1)as RowNumMinusOne  
                FROM dbo.Registration) b ON a.projDurationID=b.projDurationID  
            ');
            // $duration= $data['endTime']- $data['startTime'];   
            
            //Fetch All records
            $results=$this->db->resultset();
            return $results;
            
        }
    }
?>