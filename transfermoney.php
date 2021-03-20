<?php
include 'condb.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($con,$sql);
    $sql1 = mysqli_fetch_assoc($query); 

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($con,$sql);
    $sql2 = mysqli_fetch_assoc($query);

    if($amount < 0)
    {
      echo '<script type="text/javascript">';
      echo ' alert( Negative values cannot be transferred")'; 
      echo '</script>';
    }
    else if($amount > $sql1['balance'])
    {
        echo '<script type="text/javascript">';
        echo ' alert("Insufficient Balance")';
        echo '</script>';
    }
    else if($amount == 0){
      echo "<script type='text/javascript'>";
      echo "alert('Oops! Zero value cannot be transferred')";
      echo "</script>";
    }
    else{
           //debiting money from sender's account
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$from";
                mysqli_query($con,$sql);

          //crediting to receiver's account from sender;
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$to";
                mysqli_query($con,$sql);  
                
           //inserting data into transactions table     
           $sender = $sql1['name'];
           $receiver = $sql2['name'];
           $sql = "INSERT INTO transactions(`sender`, `receiver`, `amount`) VALUES ('$sender','$receiver','$amount')";
           $query=mysqli_query($con,$sql);


            if($query){
              echo "<script> alert('Transaction Successful');
                                     window.location='transactionhistory.php';
                           </script>";
             }

             $newbalance= 0;
             $amount =0;
      }
    }

?>

<!doctype html>
<html lang="en">
  <head>
  <style>
  
   .table th{
     color:#566573;
    
   }
   .mt-4{
     background-color:black;
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


<div class="container">
        <h2 class="text-center pt-4">Transfer Money</h2>

        <?php
                include 'condb.php';
                $senderid=$_GET['id'];
                $sql = "SELECT * FROM  users where id=$senderid";
                $result=mysqli_query($con,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($con);
                }
                $rows=mysqli_fetch_assoc($result);
          ?>

        <br>
        <div>
            <table class="table table-striped table-condensed table-bordered">
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>
                <tr>
                    <td class="py-2"><?php echo $rows['id'] ?></td>
                    <td class="py-2"><?php echo $rows['name'] ?></td>
                    <td class="py-2"><?php echo $rows['email'] ?></td>
                    <td class="py-2"><?php echo $rows['balance'] ?></td>
                </tr>
            </table>
          </div>
        <form  method="post" name="tosend" class="text mt-5 " >
            <div class="form-group">
             <label for="exampleInputEmail1">Transfer To:</label>
             <!--  <input type="name" name="to" class="form-control" id="exampleInputEmail1"  placeholder="Enter name"> -->
             <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users where id!=$sid";
                $result=mysqli_query($con,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($con);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['name'] ;?> (Balance: 
                    <?php echo $rows['balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
            </div>
           <div class="form-group">
             <label for="exampleInputAmount">Amount:</label>
              <input type="text" class="form-control" name="amount" id="exampleInputPassword1" placeholder="Amount">
           </div>
           <div class="text-center" >
            <button type="submit" name="submit" class="btn mt-4" style="background-color:#27AE60;">SEND MONEY</button>
           </div>
       </form>
    </div> 
        


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>