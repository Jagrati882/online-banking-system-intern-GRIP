<!doctype html>
<html lang="en">
  <head>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>transfer money</title>
  </head>
  <body>
   <?php
    include 'condb.php';
    $sql = "SELECT * FROM transactions";
    $result = mysqli_query($con,$sql);
    ?>

   <?php
    include 'navbar.php';
   ?>

<div class="container">
        <h2 class="text-center pt-4">Transaction History</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">SNO</th>
                            <th scope="col" class="text-center py-2">Sender</th>
                            <th scope="col" class="text-center py-2">Receiver</th>
                            <th scope="col" class="text-center py-2">Amount</th>
                            <th class="text-center">Date & Time</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    
                    include 'condb.php';

                    $sql ="select * from transactions";
        
                    $query =mysqli_query($con, $sql);

                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['sno'] ?></td>
                        <td class="py-2"><?php echo $rows['sender']?></td>
                        <td class="py-2"><?php echo $rows['receiver']?></td>
                        <td class="py-2"><?php echo $rows['amount']?></td>
                        <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                         
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>