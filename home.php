<!--<p>welcome user</p>-->
<?php
include 'dp.php';
 //echo "<script>alert('welcome user');</script> ";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<?php
        //include 'loginNavbar.php';
        //require 'db.php';
        ?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <nav class="navbar navbar-expand-lg navbar-light bg-dark p-3">
    <a class="navbar-brand text-info" href="login.php">Student Managment System </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="login nav-link text-info" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="register nav-link text-info" href="manage.php">Manage User</a>
        </li>
      </ul>
    </div>
  </nav>
        <div class="container">
            <h1 class="mt-3 text-center">Users of Student CRUD System.</h1>
        </div>
    <div class="container">
    <table class="table table-striped">
  <thead class="thead-light">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Yashvi Rathaud</td>
      <td>yashvirathore604@gmail.com</td>
      <td>user</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Aishrasha Soni</td>
      <td>aishrashasoni@gmail.com</td>
      <td>user</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Aayush Patidar</td>
      <td>aayushpatidar04@gmail.com</td>
      <td>user</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Prtik Patidar</td>
      <td>pratikpatidar@gmail.com</td>
      <td>user</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Nikhil Sharma</td>
      <td>Nikhil@gmail.com</td>
      <td>user</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Shivani Sharma</td>
      <td>shivani@gmail.com</td>
      <td>user</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Anshuman Sharma</td>
      <td>anshuman@gmail.com</td>
      <td>user</td>
    </tr>
  </tbody>
</table>
    </div>
</body>
</html>
