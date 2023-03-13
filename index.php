
<?php
require_once('database/config.php');
require_once('database/dbhelper.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="http://joto.ga/">
    <title>Thiết Bị JOTO Chính Hãng</title>
    <link href="img/logo.png" rel="icon">
    
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    
    
   
    
    <link rel="stylesheet" type="text/css" href="css/news.css">
    <link rel="stylesheet" type="text/css" href="css/option2.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css"  href="css/stylemain.css">
    <link rel="stylesheet" type="text/css" href="css/zento.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" href="plugin/fontawesome/css/all.css">
    <!-- CSS only -->
   <!-- CSS only -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    
   
        
        <div id="container">
            <?php 
                
                include("molde/header.php");
                include("molde/menu.php");
                include("molde/main.php");
                
             ?>
            
        </div>

    
    <?php
    include("molde/footer.php");
    ?>
    
    <script type="text/javascript" src="js/style.js"></script>
    

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
        function addToCart(id){
            $.post('api/cookie.php',{
                'action':'add',
                'id':id,
                'num':1,
            }
            , function(data) {
            location.reload()
        })
            
        }
        
    </script>
    <script>
        var header = document.getElementById('header')
        
        var menuMobile =document.getElementById('mobile-menu')
        var cliHeight = header.clientHeight;
        menuMobile.onclick = function(){
           
           var isClose= header.clientHeight===cliHeight
           if(isClose){
                header.style.height='auto';

           }
           else{
                header.style.height=null;
           }
        }
    </script>


</body>



</html>