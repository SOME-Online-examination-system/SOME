<?php 
    if(isset($_SESSION['user']))
    {
        $username=$_SESSION['user'];
        $tbl_name="tbl_app";
        $where="username='$username'";
        $query=$obj->select_data($tbl_name,$where);
        $res=$obj->execute_query($conn,$query);
        $count_rows=$obj->num_rows($res);
        if($count_rows==1)
        {
            $row=$obj->fetch_data($res);
            $app_id=$row['app_id'];
            $app_name=$row['app_name'];
            $email=$row['email'];
            $username=$row['username'];
            $password=$row['password'];
            $contact=$row['contact'];
            $image_name=$row['image_name'];
        }
        else
        {
            header('location:'.SITEURL.'admin/login.php');
        }
    }
    else
    {
        header('location:'.SITEURL.'admin/index.php?page=logout');
    }
?>
<!--Body Starts Here-->
        <div class="main">
            <div class="content">
                <div class="report">
                    <!--
                    <form method="post" action="" class="forms">
                        <h2>Update App Details</h2>
                        -->
                        <?php 
                            if(isset($_SESSION['update']))
                            {
                                echo $_SESSION['update'];
                                unset($_SESSION['update']);
                            }
                            if(isset($_SESSION['invalid']))
                            {
                                echo $_SESSION['invalid'];
                                unset($_SESSION['invalid']);
                            }
                            if(isset($_SESSION['password']))
                            {
                                echo $_SESSION['password'];
                                unset($_SESSION['password']);
                            }
                            if(isset($_SESSION['not_match']))
                            {
                                echo $_SESSION['not_match'];
                                unset($_SESSION['not_match']);
                            }
                        ?>
                        <!--
                        <span class="name">App Name</span>
                        <input type="text" name="app_name" value="<?php echo $app_name; ?>" required="true" /><br />
                        
                        <span class="name">Email</span>
                        <input type="email" name="email" value="<?php echo $email; ?>" required="true" /><br />
                        
                        <span class="name">Username</span>
                        <input type="text" name="username" value="<?php echo $username; ?>" required="true" /><br />
                        
                        <span class="name">Contact</span>
                        <input type="tel" name="contact"  value="<?php echo $contact; ?>" required="true" /><br />
                       
                       <span class="note">Note: Please Enter Your Current Password To Make Changes.</span><br />
                       
                        <span class="name">Current Password</span>
                        <input type="password" name="current_password" placeholder="Current Password" required="true" /><br />
                        
                        
                        <input type="submit" name="submit" value="Update Settings" class="btn-update" style="margin-left: 15%;" />
                        <a href="<?php echo SITEURL; ?>admin/index.php"><button type="button" class="btn-delete">Cancel</button></a>
                    </form>
                    <hr />
                    -->
