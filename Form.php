<!DOCTYPE html>
<html lang="en">

<head>
    <title>Test Home Work</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <center>
        <div class="container">

            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Enter Name" name="fname">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Enter Email" name="email">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Number</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Enter Number" name="number">
                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>
            </form>



        </div>
    </center>


    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
        $name = $_POST['fname'];
        if (empty($name)) {
            echo "";
        }    
    }  

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $email = $_POST['email'];
        if (empty($email)) {
            echo "";
        } 

    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $number = $_POST['number'];
        if (empty($number)) {
            echo "";
        }
    }
  
?>



    <div>
        <table class="table table-striped table-dark">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Number</th>
                </tr>
            </thead>
            <thead class="thead-dark">
                <tr>
                    <td scope="col"><?php echo $name;?></td>
                    <td scope="col"><?php echo $email; ?></td>
                    <td scope="col"><?php echo $number;?></td>
                </tr>
            </thead>

        </table>
    </div>



</body>

</html>