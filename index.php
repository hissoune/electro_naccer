<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>authentification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" integrity="sha512-oAvZuuYVzkcTc2dH5z1ZJup5OmSQ000qlfRvuoTTiyTBjwX1faoyearj8KdMq0LgsBTHMrRuMek7s+CxF8yE+w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css"></head>
<body >
  
  
 <nav class="bg-primary d-flex justify-content-between p-3 ">
  <div class="d-flex mx-4 mt-1 ">
    <img width="20px " height="20px" class="mx-5" src="d1c7058b6b7d8f379caec2fab2778d96.jpg" alt="">
    <h5>hdfiuofibn</h5>
  </div>
  <div class="mx-4">
    <span class="btn border-white border-1">EN</span>
    <img width="20 px " height="20px" class="mx-5"  src="d1c7058b6b7d8f379caec2fab2778d96.jpg" alt="">

  </div>

 </nav>
 <div >
  <div style="margin-left: 23%;" class="bg-primary  p-2 w-50 d-flex justify-content-center text-white fs-3 ">Log in to your acount</div>
  <form  method="POST" style="margin-left:23% ;" class="w-50  bg-light p-4">
    <div class="form-group mb-3 w-75  mx-5">
      <label for="identifient">identifient </label>
      <input type="number" name="userid" class="form-control" id="name"   placeholder="enter username">
      
    </div>
    <div class="form-group mb-3 w-75 mx-5">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control" id="password" placeholder="Password">
    </div>
   
    <button type="submit" class="btn btn-primary mx-5">Log In</button>
  </form>

 </div >
 <div style="margin-left: 23%; border: 2px blue solid;" class="bg-dark w-50 mt-3 p-4">
  <h4 class="text-white mx-5 my-4"> Disclaimer for the EVC</h4>
  <p class="w-75 mx-4 text-white">Please note that :

    - The data on your electronic application form <br>can no longer be changed once the application has <br> been submitted. These same details are used to make <br> the appointment at the CEV.
    
    - When you submit in person your application to the CEV, <br> the following data will be checked: the application <br> number on the form (VOWINTxxxxxxx), the passport number and the name <br> of the applicant. If there are any inconsistencies,<br> you will be refused access.
    
    - Please fill in your details correctly on the Visa <br> On Web application form. Only the form used to make an appointment will be accepted!</p>
 </div>
 <?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "Electro_naccer";

$connection = new mysqli($hostname, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if userId and password are set
    if (isset($_POST['userid'], $_POST['password'])) {
        $userId = $_POST['userid'];
        $password = $_POST['password'];

        // Prepare a SQL statement using a prepared statement to prevent SQL injection
        $stmt = $connection->prepare("SELECT * FROM User WHERE UserId = ? AND Passwords = ?");
        $stmt->bind_param("is", $userId, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if any rows were returned
        if ($result->num_rows > 0) {
            header("Location: home.php");
            exit();
        } else {
            echo '<script>alert("Login failed. Please check your userId and password.");</script>';
        }

        // Close the statement
        $stmt->close();
    }
}

// Close the MySQL connection
$connection->close();
?>





</body>
</html>