<!doctype html>
<html lang="en">
  <head>
  <style>
  body{
    background-color:#F5B7B1;
  }
   .flex-box{
       display:flex;
       justify-content:center;
       align-items:center;
       background-color:#F5B7B1;
       height:700px;
       margin-bottom: 4px;
       
   }
   .content{
       box-shadow: 0px 2px 9px 3px #888888;
       border-radius:20px;
       display:flex;
       justify-content:center;
       align-items:center;
       width: 500px;
       height:300px;
       margin-top:20px;
       background-color:#17A589;
   }

   .line{
       border: 2px solid #F5B7B1;
       position: relative;
       
   }
   
  </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  
  <?php
    include 'condb.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('$name','$email','$balance')";
    $result=mysqli_query($con,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='customers.php';
                     </script>";
                    
    }
  }
?>

   <?php
     include 'navbar.php';
   ?>   

  
    <div class="flex-box">
    <div class="content">
     <div class="row">
     <div class="col-md-6">
        <h3 style="color:#F5B7B1">PHP MINI BANK</h3>
        <div class="line"></div>
     </div>
     <div class="col-md-6">
      <form method="POST">
      <div class="mb-3">
      <input type="text"name="name" required><br>
      </div>
      <div class="mb-3">
      <input type="email" name="email" required><br> 
      </div>
      <div class="mb-3">
      <input type="text" name="balance" required><br> 
      </div>
      <button type="submit" class="btn" name="submit" style="background-color:#F5B7B1">CREATE</button>
      </form>
      </div>
      </div>
      </row>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>