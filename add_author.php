<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Online Library Management System</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <style>
    /* Make the image fully responsive */
    .carousel-inner img {
        width: 100%;
        height: 300px;
    }
    </style>
    </head>
    <body>
    <?php
        include 'include/header.php';
        include 'carousel.php';
    ?>
    <div class="container py-2">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div class="form-group">
        <label for="">AuthorName</label>
        <input type="text" class="form-control" name="aname">
        </div>
        <button type="submit" class="btn btn-secondary py-2">Save</button>
        </form>
    </div>

        <?php
        include 'include/config.php';
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    
        if($link->connect_error){
            die("Connection failed ".$link->connect_error);
        }
        if($_SERVER['REQUEST_METHOD'] == "POST"){
        
            $authorname = test_input($_POST["aname"]);
        
            $sql = "INSERT INTO authors(AuthorName) VALUES('$authorname')";

            if($link->query($sql) === TRUE){
                echo "Insert Data Successfully.";
            }else {
                echo "Error inserting Data.".$link->error;
            }
            $link->close();
        }

        ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>