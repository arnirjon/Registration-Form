<?php
  include('../connect.php');
  $sql = "SELECT * FROM form";
  $query = mysqli_query($con, $sql);


  $result = mysqli_query($con, $sql);
  $row=mysqli_fetch_assoc($result);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
  


    <div class="container my-5">
      <div class="head">
        <h1 class="headline">Candidate Information</h1>
        <p class="headline-txt">This sec</p>
        <hr>
      </div>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Candidate Name</th>
            <th scope="col">Image</th>
            <th scope="col">Submission Date</th>
            <th scope="col">View/Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
            while($data = mysqli_fetch_array($query)) {
              $id = $data['id'];
              $fname = $data['fname'];
              $lname = $data['lname'];
              $submitdate = $data['submitdate'];
              $img = $data['img'];

              $id . '' . $fname . '' . $lname . '' . $submitdate . '' . $img;
          ?>
          <tr>
            <td><?php echo $fname ?></td>
            <td><?php echo $submitdate ?></td>
            <td><img src="../img/<?php echo $img ?>" class="img-fluid" id="profile-img"></td>
            <td>
              <a href="submitform.php?id=<?php echo $id?>">View</a>
              <a href="delete.php?id=<?php echo $id?>">Delete</a>
            </td>
          </tr>
        <?php }?>
        </tbody>
      </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>