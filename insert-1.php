   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert-1.php</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
       <div class="container">
            <div class="row">
                  <div class="col-6 m-auto">
                        <h1 class="text-white text-center bg-dark py-3"> Insert operations </h1>

                    <form action="" method="POST">
                         <div class="form-group">
                             <label> Username</label>
                             <input type="text" class="form-control" name="username" placeholder="username">
                         </div>

                         <div class="form-group">
                            <label> password</label>
                            <input type="password" class="form-control" name="password" placeholder="password">
                         </div>

                         <button type="submit" class="btn btn-block btn-success" name = "submit"> Submit</button>
                    </form>
                  </div>
            </div>
       </div>

       <?php
          $con = mysqli_connect('localhost', 'root', '', 'localform');
           
           if(isset($_POST['submit'])){
               $username = $_POST['username'];
               $password = $_POST['password'];

               $q = "INSERT INTO `localform-1`(`username`, `password`) VALUES ('$username','$password')";
               
               mysqli_query($con, $q);

           }

          

    ?>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>