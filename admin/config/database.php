<?php 
    include('constants.php');
    
    Class Database
    {
        public function db_connect()
        {
            $conn=mysqli_connect(LOCALHOST,USERNAME,PASSWORD) or die(mysqli_error());
            return $conn;
        }
        
        public function db_select($conn)
        {
            $db_select=mysqli_select_db($conn,DBNAME) or die(mysqli_error());
            return $db_select;
        }
        public function select_data($tbl_name,$where="",$other="")
        {
            $query="SELECT * FROM $tbl_name";
            if($where!="")
            {
                $query.=" WHERE $where";
            }
            if($other!="")
            {
                $query.=' '.$other;
            }
            return $query;
        }
        public function select_random_row($tbl_name,$where,$limit)
        {
            $query="SELECT * FROM $tbl_name";
            if($where!="")
            {
                $query.=" WHERE $where  ORDER BY RAND()";
            }
            if($limit!="")
            {
                $query.=' LIMIT '.$limit;
            }
            return $query;
        }
        public function insert_data($tbl_name,$data)
        {
            $query="INSERT INTO $tbl_name SET $data";
            return $query;
        }
