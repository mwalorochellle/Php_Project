<html>
<head>
    <title>Locate Staff</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap4/js/bootstrap.js"></script>
    <script src="bootstrap4/js/jquery-3.3.1.js"></script>
    <script src="bootstrap4/js/bootstrap.js"></script>
</head>
<body>
<div class="heading">
    <h2 class="text-center">Locate Staff</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="users.php" method="post" class="form-group">
                <table class="table table-striped table-responsive-sm">
                    <tr>
                        <td class="text-right">
                            <label for="">Staff ID:</label>
                        </td>
                        <td>
                            <input type="number" name="staffid" class ="form-control" value=" <?php echo $row["staff_id"];?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center">
                            <button class="btn btn-outline-warning" type="submit">Search</button>
                        </td>
                </table>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>
