<?php
$id=$_GET['id'];
$fullname=$_GET['name'];
$phone=$_GET['phone'];
$email=$_GET['email'];
$address=$_GET['address'];
$gender=$_GET['gender'];
$date=$_GET['date'];
echo $phone;
//  echo $id ,'<br/>';
//  echo $fullname,'<br/>';
//  echo $phone ,'<br/>';
//  echo $email ,'<br/>';
//  echo $address ,'<br/>';
//  echo $date ,'<br/>';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="card">
        <div class="card-body">
        <form action="" class="m-3" method="post">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Full name</label>
                            <input type="text" class="form-control" name="name" value="<?php echo$fullname?>"id="name" placeholder="Enter Full name" required>
                        </div>
                    </div>
                    <div class="col-sm-6">

                        <label for="">Phone</label>
                        <input type="text" class="form-control" name="phone" value="<?php echo$phone?>"id="phone" placeholder="Enter Phone No." required>

                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control"value="<?php echo$email?> "name="email" id="email" placeholder="Enter Email" required>
                        </div>
                    </div>
                    <div class="col-sm-6">

                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address"value="<?php echo$address?>" id="address" placeholder="Enter Address" required>

                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Gender</label>
                            <select name="gender" class="form-control" id="gender" required>
                             <option value="value="<?php echo $gender?>"><?php echo $gender?></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">

                        <label for="">Created_date</label>
                        <input type="date" class="form-control" name="date"value="<?php echo$date?>" id="date">

                    </div>
                </div>

                <div>
                    <button type="submit" name="save" class="btn btn-success">Save change</button>
                    <button type="reset" class="btn btn-info">Reset</button>
                </div>

            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    
</body>
</html>