<html>
<head>
    <title>succes</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap4/js/bootstrap.js"></script>
    <script src="bootstrap4/js/jquery-3.3.1.js"></script>
    <script src="bootstrap4/js/bootstrap.js"></script>
</head>
<body>
<div class="heading">
    <h2 class="text-center">succes</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="" method="post" class="form-group">
                <table class="table table-striped table-responsive-sm">
                    <tr>
                        <td class="text-right">
                            <label for="">* Staff ID:</label>
                        </td>
                        <td>
                            <input type="number" name="staffid" class ="form-control" value=" <?php echo $row["staff_id"];?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">* First Name : </label>
                        </td>
                        <td>
                            <input type="text" name="fname" class ="form-control" value="<?php echo $row["first_name"];?>" required>

                            </label>
                        </td>
                    <tr>
                        <td class="text-right">
                            <label for="">* Middle Name : </label>
                        </td>
                        <td>
                            <input type="text" name="mname" class ="form-control" value="<?php echo $row["middle_name"];?>" required>

                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">* Last Name : </label>
                        </td>
                        <td>
                            <input type="text" name="lname" class ="form-control" value="<?php echo $row["last_name"];?>" required>

                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">* Departmen : </label>
                        </td>
                        <td>
                            <input type="text" name="dept" class ="form-control" value="<?php echo $row["last_name"];?>" required>

                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">* Username : </label>
                        </td>
                        <td>
                            <input type="text" name="username" class ="form-control" required>

                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-right">
                            <label for="">* Password : </label>
                        </td>
                        <td>
                            <input type="text" name="password" class ="form-control" required>

                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center">
                            <button class="btn btn-outline-dark" type="submit">Save</button>
                        </td>
                        <td>
                            <input type="date" name="jd" class ="form-control" value="<?php echo $row["join_date"];?>">

                            </label>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>

