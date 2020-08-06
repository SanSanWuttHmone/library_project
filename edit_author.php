    <?php
        include 'include/config.php';
        $id=$_REQUEST['id'];
        $sql = "SELECT * FROM authors WHERE id ='".$id."' "; 
        $result = mysqli_query($link, $sql) or die ( mysqli_error());
        $row = mysqli_fetch_assoc($result);
    ?>
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

        $status= "";
        if(isset($_POST['new'])){
            $authorname = $_REQUEST['aname'];
            $update = "UPDATE authors set AuthorName = '".$authorname."' WHERE id = '".$id."'";
            mysqli_query($link,$update) or die(mysqli_error());
          //  $status = "<a href = 'show_author.php'>View Updated Record.</a>";
           // echo $status;
            mysqli_close($link);
            header('Location: show_author.php');
        }
    ?>
    <div class="container py-2">
        <form method="post" name="form" action="">
        <input name="new" type="hidden" vlaue="1">
        <input name="id" type="hidden" value="<?php echo $row['id'];?>">
        <div class="form-group">
        <label for="">Author Name</label>
        <input type="text" class="form-control" name="aname" value="<?php echo $row['AuthorName'];?>">
        </div>
        <button type="submit" class="btn btn-secondary py-2">Update</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>