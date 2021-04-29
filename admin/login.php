
<?php 
    include('config/apply.php');
    include('../box/header.php');
?>

<!--Body Starts Here-->
        <div class="main">
            <div class="login">
                <form method="post" action="">
                    <h2>Admin | Log In</h2>
                    <?php 
                        
                    ?>
                    <input type="text" name="username" placeholder="Username" required="true" />
                    <input type="password" name="password" placeholder="Password" required="true" />
                    <input type="submit" name="submit" value="Log In" class="btn-go" />
                    <input type="reset" name="reset" value="Reset" class="btn-exit" />
                </form>
                <?php 
                    
                ?>
            </div>
        </div>
        <!--Body Ends Here-->

<?php
    include('../box/footer.php');
?>
