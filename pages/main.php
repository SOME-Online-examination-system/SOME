<?php 
    if(isset($_GET['page']))
    {
        $page=$_GET['page'];
    }
    else
    {
        $page='welcome';
    }
    
    switch($page)
    {
        case "welcome":
        {
            include('welcome.php');
        }
        break;
        
        case "question":
        {
            include('question.php');
        }
        break;
        
        case "login":
        {
            include('login.php');
        }
        break;
        
        case "endSession":
        {
            include('endSession.php');
        }
        break;
