<!--Body Starts Here-->
        <div class="main">
            <div class="content">
                <div class="report">
                    <h2>Faculty Manager</h2>
                    <a href="<?php echo SITEURL; ?>admin/index.php?page=add_faculty">
                        <button type="button" class="btn-add">Add Faculty</button>
                    </a>
                    <?php 
                        if(isset($_SESSION['add']))
                        {
                            echo $_SESSION['add'];
                            unset($_SESSION['add']);
                        }
                        if(isset($_SESSION['update']))
                            {
                                echo $_SESSION['update'];
                                unset($_SESSION['update']);
                            }
                        if(isset($_SESSION['delete']))
                            {
                                echo $_SESSION['delete'];
                                unset($_SESSION['delete']);
                            }
                    ?>
                    
                    <table>
                        <tr>
                            <th>S.N.</th>
                            <th>Faculty Title</th>
                            <th>Time Duration</th>
                            <th>Qns Per Exam</th>
                            <th>Is Active?</th>
                            <th>Actions</th>
                        </tr>
