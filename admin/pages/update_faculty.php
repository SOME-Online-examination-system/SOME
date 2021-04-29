<!-- Body Starts Here -->

<div class="main">
            <div class="content">
                <div class="report">
                    
                    <form method="post" action="" class="forms">
                        <h2>Update Faculty</h2>
                        <?php 
                            if(isset($_SESSION['update']))
                            {
                                echo $_SESSION['update'];
                                unset($_SESSION['update']);
                            }
                        ?>
                        <span class="name">Faculty Title</span> 
                        <input type="text" name="faculty_name" value="<?php echo $faculty_name; ?>" required="true" /> <br />
                        
                        <span class="name">Time Duration</span>
                        <input type="number" name="time_duration" value="<?php echo $time_duration; ?>" required="true" /><br />
                        
                        <span class="name">Questions/Set</span>
                        <input type="number" name="qns_per_page" value="<?php echo $qns_per_page; ?>" required="true" /><br />
                        
                        <span class="name">Total Theoretical Qns</span>
                        <input type="number" name="total_english_qns" value="<?php echo $total_english; ?>" required="true" /><br />
                        
                        <span class="name">Total Numerical Qns</span>
                        <input type="number" name="total_math_qns" value="<?php echo $total_math; ?>" /><br />
                        
                        <span class="name">Is Active?</span>
                        <input <?php if($is_active=="yes"){echo "checked='checked'";} ?> type="radio" name="is_active" value="yes" /> Yes 
                        <input <?php if($is_active=="no"){echo "checked='checked'";} ?> type="radio" name="is_active" value="no" /> No
                        <br />
                        
                        <input type="submit" name="submit" value="Update Faculty" class="btn-update" style="margin-left: 15%;" />
                        <button type="button" class="btn-delete">Cancel</button>
                    </form>
                  
                    <?php  ?>
