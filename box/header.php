<!DOCTYPE html>
<html lang="en-US">
    <head>
        <!--Meta Tags Starts Here-->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!--Meta Tags Ends Here-->
        <title>SOME</title>
        
        <!--COUNT DOWN TIMER STARTS HERE-->
        <script src="<?php echo SITEURL; ?>/assets/js/countdown/jquery.js"></script>
        <script src="<?php echo SITEURL; ?>/assets/js/countdown/jquery.simple.timer.js"></script>
        <script>
          $(function(){
            $('.timer').startTimer();
          });
        </script>
        <!--COUNT DOWN TIMER ENDS HERE-->
        
        <!--ADDING CKEDITOR HERE-->
        <script type="text/javascript" src="<?php echo SITEURL; ?>/assets/ckeditor/ckeditor.js"></script>
        
        <!--CSS File Starts Here-->
        <link rel="stylesheet" type="text/css" href="<?php echo SITEURL; ?>/assets/css/style.css" />
        <!--CSS File Ends Here-->
    </head>
    
    <body>
        <!--Header Starts Here-->
        <header class="header">
            <div class="wrapper clearfix">
                <div class="logo">
                    <img src="<?php echo SITEURL; ?>/images/logo.jpg"/>
                </div>
                
                <div class="head-title">
                    <h1>Online Examination Portal</h1>
                </div>
            </div>
        </header>
        <!--Header Ends Here-->
