<?php 
    include('check.php');
    include('pages/timeCheck.php');
    $tbl_name4="tbl_student";
    $username=$_SESSION['student'];
    $where4="username='$username'";
    $query4=$obj->select_data($tbl_name4,$where4);
    $res4=$obj->execute_query($conn,$query4);
    if($res4==true)
    {
        $row4=$obj->fetch_data($res4);
        $student_id=$row4['student_id'];
        $first_name=$row4['first_name'];
        $last_name=$row4['last_name'];
        $faculty=$row4['faculty'];
        $full_name=$first_name.' '.$last_name;
    }
    //get total time and total no. of questions based on the faculty of the student
    $tbl_name_qns='tbl_faculty';
    $where_qns="faculty_id='$faculty'";
    $query_qns=$obj->select_data($tbl_name_qns,$where_qns);
    $res_qns=$obj->execute_query($conn,$query_qns);
    if($res_qns==true)
    {
        $row_qns=$obj->fetch_data($res_qns);
        $faculty_name=$row_qns['faculty_name'];
        $_SESSION['facultyName']=$faculty_name;
        $time_duration=$row_qns['time_duration'];
        $totalTime=$time_duration*60;
        $qns_per_page=$row_qns['qns_per_set'];
        $total_english=$row_qns['total_english'];
        
        //echo $total_english;die();
    }
    if(!isset($_SESSION['strt_time']))
    {
        $_SESSION['strt_time']=date('h:i:s A');
    }
    if(!isset($_SESSION['end_time']))
    {
        $_SESSION['end_time']=date('h:i:s A',strtotime("+".$time_duration." minutes"));
    }
    
    
?>
<!--Body Starts Here-->
        <div class="main">
            <div class="content">
                
                User: <span class="heavy"><?php echo $full_name; ?></span>&nbsp;&nbsp;
                Faculty: <span class="heavy"><?php echo $faculty_name; ?></span>&nbsp;&nbsp;
                Start Time: <span class="heavy"><?php echo $_SESSION['strt_time']; ?></span>&nbsp;&nbsp;
                End Time: <span class="heavy"><?php echo $_SESSION['end_time']; ?></span>&nbsp;&nbsp;
                <?php 
                    //Getting Time Difference
                    $startTime=strtotime($_SESSION['end_time']);
                    $currentTime=strtotime(date('h:i:s A'));
                    $timeDifference=$startTime-$currentTime;
                    
                ?>
                <span class="timer" data-seconds-left=<?php echo $timeDifference; ?>></span>
                <form method="post" action="">
                    <div class="welcome">
                        <div class="ques">
