<!--Body Starts Here-->
        <div class="main">
            <div class="login">
                <form method="post" action="">
                    <h2>Log In</h2>
                    <?php 
                        if(isset($_SESSION['invalid']))
                        {
                            echo $_SESSION['invalid'];
                            unset($_SESSION['invalid']);
                        }
                    ?>
                    <input type="text" name="username" placeholder="Username" required="true" />
                    <input type="password" name="password" placeholder="Password" required="true" />
                    <input type="submit" name="submit" value="Log In" class="btn-go" />
                    <input type="reset" name="reset" value="Reset" class="btn-exit" />
                </form> 
        </div>
        <!--Body Ends Here-->
