<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR Calculator</title>
</head>

<body>
    <div class="jumbotron jumbotron-fluid jbt_padding">
        <div class="container">
            <h1 class="display-4">

            <?php
                $headerName = "HR Calculator";
                echo $headerName;
            ?>



            </h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <form id="hrData" action="site.php" method="get">
                <div class="form-group">
                    <label for="eeName">Name</label>
                    <input type="text" class="form-control" id="eeName" name="testing">
                </div>

                <div class="form-group">
                    <label for="hireDate">Hire Date</label>
                    <input type="date" class="form-control" id="hireDate">
                </div>

                <div class="form-group">
                    <label for="salary">Salary</label>
                    <input type="number" class="form-control" id="salary">
                </div>

                <div class="form-group">
                    <label for="annualLeave">Annual Leave</label>
                    <input type="number" class="form-control" id="annualLeave">
                </div>

                <!-- <div class="form-group">
                    <label for="eeName">Name</label>
                    <input type="text" class="form-control" id="eeName">
                </div>
                <div class="form-group">
                    <label for="eeName">Name</label>
                    <input type="text" class="form-control" id="eeName">
                </div> -->

                <input type="submit">
                <button class="btn btn-primary" onclick=display() type="submit">Submit</button>
                <button class="btn btn-primary" type="reset">Reset</button>

            </form>
            <br>
            <?php echo $_GET["testing"]
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="javascript.js"></script>

</body>

</html>