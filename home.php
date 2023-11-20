<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your meta tags and links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" integrity="sha512-oAvZuuYVzkcTc2dH5z1ZJup5OmSQ000qlfRvuoTTiyTBjwX1faoyearj8KdMq0LgsBTHMrRuMek7s+CxF8yE+w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css"></head>
</head>
<body>
<nav class="bg-primary d-flex justify-content-between p-3 ">
  <div class="d-flex mx-4 mt-1 text-light">
    <h5>Welcom! in electrolherba</h5>
  </div>
  <div class="mx-4 d-flex">
    <a href="index.php" class="btn border-white border-1 text-light">LOG out</a>
    <img width="30 px " height="40px" class="mx-3"  src="logo.png" alt="">

  </div>

 </nav>

    <div class="d-flex justify-content-center mt-3 mb-4"><h4 class="text-light">Electro Naccer</h4></div>

   <!-- Filter products by category -->

   <?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "Electro_naccer";

    $connection = new mysqli($hostname, $username, $password, $database);

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Corrected SQL query to retrieve all columns from the products table
    $result = $connection->query("SELECT * FROM products");
    $category_list =  $connection->query("SELECT * FROM Category");
   
   ?>
   <div class="d-flex ">
<form method="post" style="margin-left:30px" class="  my-5 ">
       
        <select name="selectedCategory" id="categorySelect">
            <?php
            // Iterate through the fetched categories and populate the dropdown
            echo '<option value="All" style="color: red; padding: 10px; font-size: 18px;">All</option>';
            while ($productsCategory =   $category_list->fetch_assoc()) {
                $categoryName = $productsCategory['Category_nam'];
                echo '<option value="' . $categoryName . '" style="color: red; font-size: 18px;">' . $categoryName . '</option>';
            }
            ?>
        </select>

        <button type="submit" class="btn bg-primary border-light"> Selecte </button>
</form>
<form method="post" style="" class="p-2  ">
       
        <select name="end-soon-products" id="end-soon-products">
        <?php
            // Iterate through the fetched categories and populate the dropdown
            echo '<option  value="All" style="color: red; padding: 10px; font-size: 18px;">moins que la quantité minimale</option>';
            
            ?>
        </select>

        <button type="submit" class="btn bg-primary border-light"> select </button>
</form>
</div>
<!-- filtraj blcategoryat-->
<?php 
 

?>
    
 
<?php  
if (isset($_POST["end-soon-products"])) {
    $filteredProductsByQuantity = $connection->query("SELECT * from Products where max_de_stok < mini_de_stok;");
    display_products($filteredProductsByQuantity);
} elseif (isset($_POST['selectedCategory'])) {
    $selectedCategory = $_POST['selectedCategory'];
    if ($selectedCategory == "All") {
        display_products($result);
    } else {
        $filteredProducts = $connection->query("SELECT Products.Product_Id,Products.Product_name, Products.Product_img, Products.prix_unitair, Products.mini_de_stok, Products.max_de_stok, Category.Category_nam FROM Products JOIN Category ON Products.categoryy_ID = Category.Category_Id and Category.Category_nam = '$selectedCategory';");
        display_products($filteredProducts);
    }
} else {
    display_products($result);
}
?>








   
    
<?php
    function display_products($result)
    {
        echo '<div class="container-fluid row mx-auto my-4">';
        
        while ($product = $result->fetch_assoc()) {
            $imagePath = $product['Product_img'];
            $label = $product['Product_name'];
            $unitPrice = $product['prix_unitair'];

            // Apply spacing and styling to each card
            echo '<div class="col-lg-3 col-md-4 col-sm-6 mb-3">';
            echo '<div class="card p-3 h-100">';
            echo '<img src="' . $imagePath . '" class="card-img-top h-75" alt="Product Image">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $label . '</h5>';
            echo '<p class="card-text">' . $unitPrice . ' DH</p>';
            echo '</div></div></div>';
        }
        
        echo '</div>';
    }
    ?>
     <footer class="no-print bg-dark text-light">
        <div class="card mt-5 mb-4"></div>  
        <div class=" container tol MMM">
      <div class="row  FFF ">
      <div class=" col-lg-3  col-sm-4 col-6"><img class="w-50 " src="logo.png" alt=""></h5>
        <P class="w-50">Savor the artistry where every dish is a culinary masterpiece</P>
      
      </div>
      <div class="col-lg-3 col-sm-4 col-6">
          <h6 >Useful links</h6>
          <p>About us</p>
          <p>Events</p>
          <p>Blogs</p>
          <p>FAQ</p>
      </div>
      <div class="  col-lg-3 col-sm-4 col-6">
          <h6 >Main Menu</h6>
          <p>Home</p>
          <p>Menu</p>
          <p>Blogs</p>
          <p>Create</p>

      </div>
      <div class=" col-lg-3  col-sm-4 col-6">
          <h6 >Contact Us</h6>
          <p>electro naccer@email.coms</p>
          <p>+64 958 248 966</p>
          <p>Social media</p>
       
      </div>
  </div>
  <div   class="row " >
      <div class="col-lg-5   ">
  
</div>
  <div class="col-lg-5 mt-4  col-12 "><p >Copyright   2023 Dscode | All rights reserved</p></div>
</div>
  </div> 
</footer>
</body>
</html>
