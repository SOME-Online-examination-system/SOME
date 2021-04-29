<!--Body Starts Here-->
        <div class="main">
            <div class="content">
                <div class="report">
                    
                    <form method="post" action="" class="forms">
                        <h2>Add Faculty</h2>
                      
                            <?php 
                            if(isset($_SESSION['validation']))
                            {
                                echo $_SESSION['validation'];
                                unset($_SESSION['validation']);
                            }
                            if(isset($_SESSION['add']))
                            {
                                echo $_SESSION['add'];
                                unset($_SESSION['add']);
                            }
                            ?>
                            
                        <span class="name">Faculty Title</span> 
                        <input type="text" name="faculty_name" placeholder="Faculty Title" required="true" /> <br />
                        
                        <span class="name">Time Duration</span>
                        <input type="text" name="time_duration" placeholder="Time Duration in Minutes" required="true" /><br />
                        
                        <span class="name">Questions/Set</span>
                        <input type="text" name="qns_per_page" placeholder="Total Questions Per Page" required="true" /><br />
                        
                        <span class="name">Total Theoretical Qns</span>
                        <input type="number" name="total_english_qns" placeholder="Total Number of Theoretical Questions" required="true" /><br />
                        
                        <span class="name">Total Numerical Qns</span>
                        <input type="number" name="total_math_qns" placeholder="Total Number of Numerical Questions" /><br />
                        
                        <span class="name">Is Active?</span>
                        <input type="radio" name="is_active" value="yes" /> Yes 
                        <input type="radio" name="is_active" value="no" /> No
                        <br />
                        
                        <input type="submit" name="submit" value="Add Faculty" class="btn-add" style="margin-left: 15%;" />
                        <a href="<?php echo SITEURL; ?>admin/index.php?page=faculties">
                            <button type="button" class="btn-delete">Cancel</button>
                        </a>
                    </form>
                    
               
                </div>
            </div>
        </div>
        <!--Body Ends Here-->
