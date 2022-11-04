<?php
  include('connect.php');

  if(isset($_POST['send'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $bday = $_POST['bday'];
    $natinal = $_POST['natinal'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $state = $_POST['state'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];
    $addcomment = $_POST['addcomment'];
    $gender = $_POST['gender'];

    $img = $_FILES["img"]["name"];
    $tempname = $_FILES["img"]["tmp_name"];
    $folder = "img/".$img;

    $sql = "INSERT INTO `form` (`id`, `fname`, `lname`, `bday`, `natinal`, `address`, `city`, `state`, `email`, `phone`, `course`, `addcomment`, `gender`, `img`) VALUES (NULL, '$fname', '$lname', '$bday', '$natinal', '$address', '$city', '$state', '$email', '$phone', '$course', '$addcomment', '$gender', '$img')";


    $query = mysqli_query($con, $sql);


    if($query) {
      move_uploaded_file($tempname, $folder);
      header('Location: index.php');
    }
    else {
      echo "Data not update";
    }








  }
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/0b185ee620.js" crossorigin="anonymous"></script>
  </head>
  <body>
    
    <div class="container">
      <div class="form">
        <br>
        <div class="head">
          <h1 class="headline">Registration Form</h1>
          <p class="headline-txt">Fill out the form for registration</p>
          <hr>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-sm-6">
              <label>First Name<span class="str">*</span></label>
              <input type="text" name="fname" placeholder="First Name">
            </div>
            <div class="col-sm-6">
              <label>Last Name<span class="str">*</span></label>
              <input type="text" name="lname" placeholder="Last Name">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <label>Birth Date<span class="str">*</span></label>
              <input type="date" name="bday">
            </div>
            <div class="col-sm-6">
              <label>Nationality<span class="str">*</span></label>
              <input type="text" name="natinal" placeholder="Nationality">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <label>Address</label>
              <input type="text" name="address" placeholder="Address Line 1">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <label>City</label>
              <input type="text" name="city" placeholder="City">
            </div>
            <div class="col-sm-6">
              <label>State</label>
              <input type="text" name="state" placeholder="State">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <label>Email ID</label>
              <input type="text" name="email" placeholder="Email">
            </div>
            <div class="col-sm-6">
              <label>Phone Number<span class="str">*</span></label>
              <input type="text" name="phone" placeholder="Phone">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <label class="course">Courses<span class="str">*</span></label>
              <select name="course">
                <option>Choose your Course</option>
                <option>Computer Engineering</option>
                <option>Textile Engineering</option>
                <option>Civil Engineering</option>
                <option>Electronics Engineering</option>
                <option>Architecture Engineering</option>
                <option>Telecommunication Engineering</option>
                <option>Mechanical Engineering</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <label class="textarea-a">Additional Comments</label>
              <textarea placeholder="Comments" name="addcomment"></textarea>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-sm-12">
              <label class="gndr">Gender<span class="str">*</span></label>
              <input type="radio" name="gender" class="radio" id="male" value="Male">
              <span for="male">Male</span>
              <input type="radio" name="gender" class="radio" id="female" value="Female">
              <span for="female">Female</span>
              <input type="radio" name="gender" class="radio" id="others" value="Others">
              <span for="others">Other's</span>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-sm-12">
              <p><label for="file">Upload Image</label></p>
              <p><input type="file"  accept="image/*" name="img" id=""  onchange="loadFile(event)" style="display: block;"></p>
              <p><img id="output" width="200" /></p>
            </div>
          </div>
          <button name="send">Submit</button>
        </form>
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