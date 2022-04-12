<table class="table table-bordered m-1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>fullname</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Created_date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = mysqli_query($conn, "SELECT *FROM crud  ORDER BY id ");
                while ($row = mysqli_fetch_array($result)) {
                    //echo $row[4];
                ?>
                    <tr>
                        <td><?php echo $row[0];  ?></th>
                        <td><?php echo $row[1]; ?></td>
                        <td><?php echo $row[2] ?></td>
                        <td><?php echo $row[3] ?></td>
                        <td><?php echo $row[4] ?></td>
                        <td><?php echo $row[5] ?></td>
                        <td><?php echo $row[6] ?></td>

                        <?php echo "
            <td>
                <a href='update.php?id=$row[0]&name=$row[1]&phone=$row[2]&email=$row[3]&address=$row[4]&gender=$row[5]&d=$row[6]' class='btn btn-outline-success'>Edit</a>
                <a href='delete.php?id=$row[0]' onclick ='return deleteRecord()' class='btn btn-outline-danger '>Delete</a>
            </td>";
                        ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script>
        function deleteRecord()
        {
            return confirm("Are you sure you want to delete ?");
        }
    </script>