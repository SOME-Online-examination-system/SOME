<?php
    include('../config/apply.php'); 
    if((isset($_GET['id']))&&(isset($_GET['page'])))
    {
        //echo "DELETE PAGE";
        //Get the values from URL
        $id=$_GET['id'];
        $page=$_GET['page'];
        
        switch($page)
        {
            case "students":
            {
                $tbl_name="tbl_student";
                $title="Student";
                $where="student_id=$id";
            }
            break;
            case "faculties":
            {
                $tbl_name="tbl_faculty";
                $title="Faculty";
                $where="faculty_id=$id";
            }
            break;
            
            case "questions":
            {
                $tbl_name="tbl_question";
                $title="Question";
                $where="question_id=$id";
            }
            break;
        }
            
