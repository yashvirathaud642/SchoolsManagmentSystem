<?php
$id = $name = $class= $section = $country = $state = $city = $image='' ;
$id = $_GET['id'];
include 'dp.php';
$sql = "select * from users where id='$id';";
$res = mysqli_query($con, $sql);
$data = mysqli_fetch_array($res);

$name = $data['name'];
$country = $data['country'];
$state = $data['state'];
$city = $data['city'];
$image = isset($data['userimage']) ? $data['userimage'] : 'userimage';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> View </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <?php
    //require "dp.php";
    //echo "welcome user";
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <nav class="navbar navbar-expand-lg navbar-light bg-dark p-3">
    <a class="navbar-brand text-info text-white" href="login.php">Student Managment System </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="login nav-link text-info text-white" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="register nav-link text-info text-white" href="manage.php">Manage User</a>
        </li>
      </ul>
    </div>
    </div>
    <div class="topnav-right">
    <a  class="text-info text-white" href="#" style="text-decoration: none;"><i class="fa-solid fa-user"></i>Profile</a>&nsbp;
    <a  class="text-info text-white" href="#" style="text-decoration: none;"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
  </div>
  </nav>
  <div class="container p-3">
            <h1 class="mt-3">Details</h1>
           
          <table class="table table-bordered table-stripped">
          <thead>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Country</td>
                            <td>State</td>
                            <td>City</td>
                            <td>Image</td>
                           
                        </tr>    
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $id;?></td>
                            <td><?php echo $name;?></td>
                            <td><?php echo $country;?></td>
                            <td><?php echo $state;?></td>
                            <td><?php echo $city;?></td>
                            <td><img src="<?php echo $image?>"></td>
                        </tr>
                    </tbody>
                </table>
                
                </div>
                
</body>
</html>
