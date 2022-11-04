<?php
  include('../connect.php');
  $getid = $_GET['id'];
  $sql = "SELECT * FROM `form` WHERE id=$getid";
  $result = mysqli_query($con, $sql);
  $row=mysqli_fetch_assoc($result);
  $id=$row['id'];
  $fname=$row['fname'];
  $lname=$row['lname'];
  $bday = $row['bday'];
  $natinal = $row['natinal'];
  $address = $row['address'];
  $city = $row['city'];
  $email = $row['email'];
  $state = $row['state'];
  $phone = $row['phone'];
  $course = $row['course'];
  $addcomment = $row['addcomment'];
  $gender = $row['gender'];
  $img = $row['img'];
  $submitdate = $row['submitdate'];
    

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $fname?> <?php echo $lname?> Candidate Submission</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/0b185ee620.js" crossorigin="anonymous"></script>
  </head>
  <body>
    
    <!-- <div class="container">
      <div class="form">
        <br>
        <div class="head">
          <h1 class="headline"><span><?php echo $getid ?><span>.</span>  </span><?php echo $fname?> <?php echo $lname?></h1>
          <p class="headline-txt">This candidate all information is here</p>
          <hr>
        </div>
        
        <img src="../img/<?php echo $img ?>" class="img-fluid" id="submitprofile-img">

        <table>
          <tr>
            <td>First Name:</td>
            <td><?php echo $fname?></td>
          </tr>
          <tr>
            <td>Last Name:</td>
            <td><?php echo $lname?></td>
          </tr>
          <tr>
            <td>Birth Date:</td>
            <td><?php echo $bday?></td>
          </tr>
          <tr>
            <td>Nationality:</td>
            <td><?php echo $natinal?></td>
          </tr>
          <tr>
            <td>Address:</td>
            <td><?php echo $address ?></td>
          </tr>
          <tr>
            <td>City:</td>
            <td><?php echo $city?></td>
          </tr>
          <tr>
            <td>State:</td>
            <td><?php echo $state?></td>
          </tr>
          <tr>
            <td>Email:</td>
            <td><?php echo $email?></td>
          </tr>
          <tr>
            <td>Phone:</td>
            <td><?php echo $phone?></td>
          </tr>
          <tr>
            <td>Course:</td>
            <td><?php echo $course?></td>
          </tr>
          <tr>
            <td>Gender:</td>
            <td><?php echo $gender?></td>
          </tr>
          <tr>
            <td>Additional Comment:</td>
            <td><?php echo $addcomment?></td>
          </tr>
        </table>


      </div>
    </div> -->

    <div class="container">
      <div class="form">
        <br>
        <div class="head">
          <div class="row">
            <div class="col-sm-6">
              <h1 class="headline"><span hidden><?php echo $getid?></span> <?php echo $fname?> <?php echo $lname?></h1>
              <p class="headline-txt">
                <b>Submission Date:</b> 
                  <?php
                      echo "<span>" .date('d M Y l, h:i:a', strtotime($row['submitdate'])) . "</span>";
                  ?> 
                </p>
            </div>
            <div class="col-sm-6">
              <img src="../img/<?php echo $img?>" class="img-fluid" id="submitprofile-img">
            </div>
          </div>
        </div>

        <br>

        <table class="data">
          <section>All Information</section>
          <tr>
            <td class="jysd">First Name</td>
            <td class="ficun"><?php echo $fname?></td>
          </tr>
          <tr>
            <td class="jysd">Last Name</td>
            <td class="ficun"><?php echo $lname?></td>
          </tr>
          <tr>
            <td class="jysd">Birth Date</td>
            <td class="ficun"><?php echo $bday?></td>
          </tr>
          <tr>
            <td class="jysd">Gender</td>
            <td class="ficun"><?php echo $gender ?></td>
          </tr>
          <tr>
            <td class="jysd">Nationality</td>
            <td class="ficun"><?php echo $natinal ?></td>
          </tr>
          <tr>
            <td class="jysd">City</td>
            <td class="ficun"><?php echo $city ?></td>
          </tr>
          <tr>
            <td class="jysd">Email</td>
            <td class="ficun"><?php echo $email ?></td>
          </tr>
          <tr>
            <td class="jysd">State</td>
            <td class="ficun"><?php echo $state ?></td>
          </tr>
          <tr>
            <td class="jysd">Phone</td>
            <td class="ficun"><?php echo $phone ?></td>
          </tr>
          <tr>
            <td class="jysd">Course</td>
            <td class="ficun"><?php echo $course ?></td>
          </tr>
          <tr>
            <td class="jysd">Additional Comment</td>
            <td class="ficun"><?php echo $addcomment ?></td>
          </tr>
        </table>

      </div>
    </div>

    <script>
      var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
      };
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>