<!--Body Starts Here-->
        <div class="main">
            <div class="content">
                <div class="report">
                    
                    <form method="post" action="" class="forms" enctype="multipart/form-data">
                        <h2>Add Question</h2>
                       
                        <span class="name">Question</span> <br />
                        <textarea name="question" placeholder="Add Your Question" required="true"></textarea> <br />
                        <script>
                            CKEDITOR.replace( 'question' );
                        </script>
                        
                        <span class="name">Image</span>
                        <input type="file" name="image" /><br />
                        
                        <span class="name">First Answer</span>
                        <input type="text" name="first_answer" placeholder="First Answer" required="true" /><br />
                        
                        <span class="name">Second Answer</span>
                        <input type="text" name="second_answer" placeholder="Second Answer" required="true" /><br />
                        
                        <span class="name">Third Answer</span>
                        <input type="text" name="third_answer" placeholder="Third Answer" required="true" /><br />
                        
                        <span class="name">Fourth Answer</span>
                        <input type="text" name="fourth_answer" placeholder="Fourth Answer" required="true" /><br />
                        
                         <span class="name">Fifth Answer</span>
                        <input type="text" name="fifth_answer" placeholder="Fifth Answer" required="true" /><br />
                       
                        
                        <span class="name">Answer</span>
                        <select name="answer">
                            <option value="1">First Answer</option>
                            <option value="2">Second Answer</option>
                            <option value="3">Third Answer</option>
                            <option value="4">Fourth Answer</option>
                            <option value="5">Fifth Answer</option>
                        </select>
                        <br />
                        
                        <span class="name">Reason</span><br />
                        <textarea name="reason" placeholder="Reason to be the answer"></textarea>
                        <script>
                            CKEDITOR.replace( 'reason' );
                        </script>
                        <br />
                        
                        <span class="name">Marks</span>
                        <input type="text" name="marks" placeholder="Marks for this question" />
                        <br />
                        
                        <span class="name">Category</span>
                        <select name="category">
                            <option value="English">Theoretical</option>
                            <option value="Math">Numerical</option>
                        </select>
                        <br />
                        
                        <span class="name">Faculty</span>
                        <select name="faculty">
                           
                            
                        </select>
                        <br />
                        
                        <span class="name">Is Active?</span>
                        <input type="radio" name="is_active" value="yes" /> Yes 
                        <input type="radio" name="is_active" value="no" /> No
                        <br />
                        
                        <input type="submit" name="submit" value="Add Question" class="btn-add" style="margin-left: 15%;" />
                        <a href="<?php echo SITEURL; ?>admin/index.php?page=questions"><button type="button" class="btn-delete">Cancel</button></a>
                    </form>
                 
                </div>
            </div>
        </div>
        <!--Body Ends Here-->
