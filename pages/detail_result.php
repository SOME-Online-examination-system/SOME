<!--Body Starts Here-->
        <div class="main">
            <div class="content">
                <div class="report">
                    
                    <?php 
                        if(isset($_SESSION['USERID']))
                        {
                            $student_id=$_SESSION['USERID'];
                            $full_name=$obj->get_fullname('tbl_student',$student_id,$conn);
                            echo "<h2>".$full_name."'s Result</h2>";
                        }
                        else
                        {
                            header('location:'.SITEURL.'index.php?page=logout');
                        }
                        $added_date=date('Y-m-d');
                        //Now Getting VAlues Based on aded date and student id
                        $tbl_name="tbl_result";
                        $where="student_id='$student_id' && added_date='$added_date'";
                        $query=$obj->select_data($tbl_name,$where);
                        $res=$obj->execute_query($conn,$query);
                        $sn=1;
                        
