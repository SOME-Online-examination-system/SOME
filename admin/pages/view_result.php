<!-- Body Starts Here -->

<div class="main">
            <div class="content">
                <div class="report">
                    
                    <?php 
                        if(isset($_GET['student_id']))
                        {
                            $student_id=$_GET['student_id'];
                            $full_name=$obj->get_fullname('tbl_student',$student_id,$conn);
                            echo "<h2>".$full_name."'s Result</h2>";
                        }
                        else
                        {
                            header('location:'.SITEURL.'admin/index.php?page=dashboard');
                        }
                        if(isset($_GET['added_date']))
                        {
                            $added_date=$_GET['added_date'];
                        }
                        else
                        {
                            header('location:'.SITEURL.'admin/index.php?page=dashboard');
                        }
                        //Now Getting VAlues Based on aded date and student id
                        $tbl_name="tbl_result";
                        $where="student_id='$student_id' && added_date='$added_date'";
                        $query=$obj->select_data($tbl_name,$where);
                        $res=$obj->execute_query($conn,$query);
                        $sn=1;
                        while($row=$obj->fetch_data($res))
                        {
                            $student_id=$row['student_id'];
                            $question_id=$row['question_id'];
                            $user_answer=$row['user_answer'];
                            $right_answer=$row['right_answer'];
                            
                            $added_date=$row['added_date'];
                            //Get all the question and answers detail
                            $tbl_name2="tbl_question";
                            $where2="question_id='$question_id'";
                            $query2=$obj->select_data($tbl_name2,$where2);
                            $res2=$obj->execute_query($conn,$query2);
                            $row2=$obj->fetch_data($res2);
                            $question=$row2['question'];
                            $first_answer=$row2['first_answer'];
                            $second_answer=$row2['second_answer'];
                            $third_answer=$row2['third_answer'];
                            $fourth_answer=$row2['fourth_answer'];
                            $fifth_answer=$row2['fifth_answer'];
                            $reason=$row2['reason'];
                            ?>
                </div>
            </div>
        </div>
<!--Body Ends Here-->
