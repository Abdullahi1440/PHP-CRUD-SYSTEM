<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operations</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <!-- create=>insert, read->select update  delete-->
    <div class="card m-4">
    <h3 class="card-title display-4 text-mt-5 text-center text-success  text-bold text-uppercase">
           Registration Form
       </h3>
        <div class="card-body">
            <?php
            include("connection.php");
             

            if (isset($_POST['save'])) { 
                $Fname =  mysqli_real_escape_string($conn, $_POST['name']);
                $phone = mysqli_real_escape_string($conn, $_POST['phone']);
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $address = mysqli_real_escape_string($conn, $_POST['address']);
                $gender = mysqli_real_escape_string($conn, $_POST['gender']);
                $date = mysqli_real_escape_string($conn, $_POST['date']);

                $insert = mysqli_query($conn, "INSERT INTO crud(`fullname`,`phone`,`email`,`address`,`gender`,`created_date`)VALUES('" . $Fname . "','" . $phone . "','" . $email . "','" . $address . "','" . $gender . "','" . $date . "' )");
                if ($insert) {
                    echo "<script>alert('Inserted Successfully...')</script>";
                } else {
                    echo "<script>alert('Failed!...')</script>";;
                }
            }

            ?>
            <form action="" class="m-3" method="post">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Full name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Full name" required>
                        </div>
                    </div>
                    <div class="col-sm-6">

                        <label for="">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone No." required>

                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required>
                        </div>
                    </div>
                    <div class="col-sm-6">

                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address" required>

                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Gender</label>
                            <select name="gender" class="form-control" id="gender" required>
                                <option value="">Select gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">

                        <label for="">Created_date</label>
                        <input type="date" class="form-control" name="date" id="date">

                    </div>
                </div>

                <div>
                    <button type="submit" name="save" class="btn btn-success">Save change</button>
                    <button type="reset" class="btn btn-info">Reset</button>
                </div>

            </form>
            <table class="table table-bordered  mt-3 m-5">
                <thead>
                    <tr>
                    <th >ID</th>
                        <th >fullname</th>
                        <th >Phone</th>
                        <th >Email</th>
                        <th >Address </th>
                        <th >Gender </th>
                        <th > Created_date</th>
                        <th > Action </th>
                    </tr>
                    
                </thead>
               <tbody>
                   <?php
                   $result=mysqli_query($conn ,"SELECT *FROM crud ORDER BY id");
                   while($row=mysqli_fetch_array($result)){
                       
                    ?>
                    <tr>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[2];?></td>
                    <td><?php echo $row[3];?></td>
                    <td><?php echo $row[4];?></td>
                    <td><?php echo $row[5];?></td>
                    <td><?php echo $row[6];?></td>
                    <td>
                  <?php echo"

                
                   <td>
                    <a href='updatee.php?id=$row[0] &name=$row[1] &phone=$row[2] &email=$row[3] &address=$row[4] &gender=$row[5] &date=$row[6]' class='btn btn-outline-success'> Edit  </a>
                    <a href='delete.php?id=$row[0]'onClick='return deleteRecord()' class='btn btn-outline-danger'>Delete</a>

                   </td>";

                    ?>
                   </tr>
                   <?php
                   }
                   ?>
               </tbody>
                
            </table>

        </div>
        <script>
            function deleteRecord(){
                return confirm('Are you sure  You want to delete this record');
            }
        </script>
       
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>