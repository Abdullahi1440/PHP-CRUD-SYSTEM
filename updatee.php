<?php
    $id =$_GET['id'];
    $name =$_GET['name'];
    $phone = $_GET['phone'];
    $email = $_GET['email'];
    $addr = $_GET['address'];
    $gender = $_GET['gender'];
    $date = $_GET['date'];
    // echo $id , '<br>';
    // echo $id , '<br>';
    // echo $name , '<br>';
    // echo $phone , '<br>';
    // echo $email ,'<br>';
    // echo $addr , '<br>';
    // echo $gender , '<br>';
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class="card m-4">
        <div class="card-body">
            <form action="" class="m-3" method="post">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Full name</label>
                            <input type="text" class="form-control" value="<?php echo $name ?>" name="name" id="name" placeholder="Enter Full name"
                                required>
                        </div>
                    </div>
                    <div class="col-sm-6">

                        <label for="">Phone</label>
                        <input type="text" class="form-control" value="<?php echo $phone ?>" name="phone" id="phone" placeholder="Enter Phone No."
                            required>

                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" value="<?php echo $email ?>" name="email" id="email" placeholder="Enter Email"
                                required>
                        </div>
                    </div>
                    <div class="col-sm-6">

                        <label for="">Address</label>
                        <input type="text" class="form-control" value="<?php echo $addr ?>" name="address" id="address" placeholder="Enter Address"
                            required>

                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Gender</label>
                            <select name="gender" class="form-control" id="gender" required>
                                <option value="<?php echo $gender ?>"><?php echo $gender?></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">

                        <label for="">Created_date</label>
                        <input type="date" value="<?php echo $date?>"  class="form-control"  name="date" id="date">

                    </div>
                </div>

                <div>
                    <button type="submit" name="update" class="btn btn-success">Update</button>
                    <button type="reset" class="btn btn-info">Reset</button>
                    <a  class="btn btn-danger" href="index.php">Close</a>
                </div>

            </form>
        </div>
    </div>
    <?php 
    include('connection.php');
    if(isset($_POST['update'])){
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $phone = mysqli_real_escape_string($conn,$_POST['phone']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $address = mysqli_real_escape_string($conn,$_POST['address']);
        $gender = mysqli_real_escape_string($conn,$_POST['gender']);
        $date = mysqli_real_escape_string($conn,$_POST['date']);

        
        $updateQry = "UPDATE `crud` SET  `fullname` = '".$name."', `phone`='".$phone."', `email`='".$email."', `address`= '".$address."', `gender` ='".$gender."', `created_date` = '".$date."' WHERE `id` =".$id." ";

        $resUpdate=mysqli_query($conn,$updateQry);
        
        if($resUpdate){
            
            echo "<script>alert('Updated Successflly...');</script>";
            echo "<script>window.location.href='index.php';</script>";
        }else{
            echo"<script>alert('Not Updated..');</script>";
           
        }

    }

    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>