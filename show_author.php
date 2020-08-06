<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Author List</title>
  </head>
  <body>
  <?php
  include 'include/header.php';
  ?>
    <div class = "container">
    
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">AuthorName</th>
              <th scope="col-2">Action<th>
            </tr>
          </thead>
          <tbody>
            <?php
            include "include/config.php";
            if($link->connect_error){
                die ("Connection failed ".$link->connect_error);
            }
            $sql = "SELECT * FROM authors";
            $result = $link->query($sql);
            $no=1;
                while($row = $result->fetch_assoc()){
                    // $i = 1;
                    echo "<tr>";
                    echo "<td>".$no++."</td>";
                    echo "<td>".$row['AuthorName']."</td>";
                    echo "<td><a href='edit_author.php?id=".$row['id']."'>Edit</a></td>";
                    echo "<td><a href='delete_author.php?id=".$row['id']."'>Delete</a></td>";
                    echo "</tr>";
                }
               
            
            ?>
          </tbody>
        </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>