<!doctype html>
<html lang="en">
  <head>
  <style>
   
   .main{
       background-color:#FADBD8;
       padding: 6px;
       margin-top:0;
       top:50px;
   }
   .about{
       display:flex;
       justify-content:center;
       width: 500px;
       height: 300px;
       border: 2px solid white;
       margin-top: 30%;
       background-color:white;
       flex-direction: rows;
       box-shadow: 0px 0px 4px 4px #EAECEE ;

   }
   .content{
       padding: 24px;
       line-space:4px;
   }

   @media screen and (max-width: 600px){
       img{
           padding-right:85px;
           height:500px;
       }

       .about{
           margin-top:-50px;
           position:relative;
           width:400px;
           height:500px; 
           margin-left: 12%; 
           
       }

      
   }

  </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php
    include 'navbar.php';
  ?>
<section class="main">
<div class="container my-4">
  <div class="row">
    <div class="col-md-6">
     <img src="img/img1.jpg" width="600px"  height="600px">
    </div>
    <div class="col-md-6 ">
      <div class="about">
        <div class="content">
         <h3>ABOUT ME</h3>
         <p>This is a demo website by JAGRATI in partial fulfillment of the internship opportunity provided to me by
         <b> THE SPARKS FOUNDATION</b>.Youcan view all customers associated with our bank system, and also you can make transitions easily
          and have account of transaction history.

          <br><br>
          This is completion of #Task1:Web Development and Web Design.
        </div>
      </div>
    </div>
  </div>
</div>
 </div>
</section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>