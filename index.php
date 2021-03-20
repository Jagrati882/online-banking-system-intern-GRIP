<!doctype html>
<html lang="en">
  <head>
  <style>
  
   .main{
    background-image: linear-gradient(#F5B7B1, #FADBD8);
   }

  

   footer{
       background-color:#E5E7E9;
   }
   
   

   .link{
      
       width:220px;
       height:200px;
       margin: 30px;
       display:flex;
       justify-content:center;
       align-items:center;
       flex-direction:rows;
   }
   .fa-user{
       width: 1000px;
       height: 1000px;
   }
   .links a{
     display:inline;
   }
   .btn-1,.btn-2{
     padding:10px;
     margin:25px;
     border-radius:50px;
     border:none;
     font-size:20px;
     transition-duration:0.4s; 
   }
   
   .btn-1: hover{
     font-size:40px;
   }
   
   .center{
       display:flex;
       justify-content:center;
       align-items:center;
       height:700px;
       margin-bottom: 4px;
   }
   .content{
       box-shadow: 0px 2px 9px 3px #888888;
       border-radius:20px;
       padding:50px;
       text-align:center;
       width: 600px;
       height:500px;;
       margin-top:10px;
       background-color:#17A589;
       flex-direction:row;
       
   }
   .content p{
     font-size:28px;
     color:#F5B7B1;
   }
  .content h1{
    color:#F5B7B1; 
  
    
  }
   .button{
       margin-top:80px;
      
   }
   .line{
     border:2px solid #F5B7B1;
     width:300px;
     margin-left:20%;
     color:#F5B7B1;
   }
  
  
  </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Basic Banking System</title>
  </head>
  <body>
   <?php
   include 'navbar.php';
   ?>   
  
   <section class="main"> 
   <div class="center">
    <div class="content">
      <p>Welcome To <h1>MINI BANK</h1></p>
      <div class="line"></div>
       <div class="button">
        <a href="createuser.php"><button class="btn-1">Create User</button></a>
        <a href="customers.php"><button class="btn-2">All Customers</button></a>
      </div>
     </div>
     </div>
    </div>
    

    <footer class="text-center mt-5 py-2">
      <p> &copy 2021, developed under <b><br> WEB Developer Intern @ TSF </p>

    </footer>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>