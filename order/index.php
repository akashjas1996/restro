<!DOCTYPE html>
<?php $id='7004909759'; 
  include '../inc/dbconnection.php';
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Menu - [Restaurant Name]</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="../css/style.css">
  <style type="text/css">
    .br{
      border:1px solid white;
    }
  </style>
</head>
<body>

  <!-- Start your project here-->  

<?php 
  include '../inc/header.php';

?>

<main>

<div class="mt-5"></div>


<div class="container">
  <div class="row">
    <div class="col-lg-12">

<h5 style="padding-left: 20px">Order Summary</h5>

<?php 
  if(isset($_GET['val'])){
    $remove_past_orders = "DELETE FROM orders WHERE mobile='7004909759'";
      $res_past_orders = mysqli_query($link, $remove_past_orders);


    $food_items = $_GET['val'];
    $food_items = substr($food_items, 0, -1);
    $items = explode(",", $food_items);


    $array = $items;
    $items_uq = array_unique($array);
    $length = count($items_uq);
    $counts = array_count_values($array);
    for($i=0;$i<$length;$i++){
      $f_item = $items_uq[$i];
      $qty = $counts[$items_uq[$i]];

      $make_order = "INSERT INTO orders(`mobile`, `item_id`, `qty`) VALUES('7004909759','$f_item','$qty')";
      $res_order = mysqli_query($link, $make_order);
    }
  }
?>
      <div style="background-color: lightgrey; border-radius: 20px ">

      <?php 
      $query_orders = "SELECT * FROM orders WHERE mobile='$id'";
      $res_orders = mysqli_query($link, $query_orders);
      while($row_orders = mysqli_fetch_assoc($res_orders)){
        ?>


        <?php 
          $food_id = $row_orders['item_id'];
          $query_details = "SELECT * FROM menu WHERE food_id='$food_id'";
          $res_details = mysqli_query($link, $query_details);
          $row_details = mysqli_fetch_assoc($res_details);
        ?>
        <div class="container my-1 z-depth-0">
  <!--Section: Content-->
  <section class="dark-grey-text">

    <div class="row">
      
      <div class="col-md-8 col-8 d-flex align-items-center mt-3">
        <div>
          
          <h5 class="font-weight-bold mb-1"><?php echo $row_details['food_name'] ?></h5>

          <!-- <p>Lorem ipsum dolor sit amet consectetur adip elit. </p> -->
          <b> <p style="line-height: 10px; font-weight: bold"> ₹ <?php echo $row_details['price'] ?> </p> </b>

         
        </div>


      </div>

      <center>
       <div style="display: inline">
        <br>
         <button onclick="remove_item('count_id')" style="display: inline;" type="button" class="btn btn-success px-2"><i class="fas fa-angle-down"></i></button>
           
             <p id="count_id" style="display: inline;"><?php echo $row_orders['qty'] ?></p>
             <button onclick="add_item('count_id')" style="display: inline;" type="button" class="btn btn-success px-2"><i class="fas fa-angle-up"></i></button>

        </div>
      </center>
    </div>

  </section>
  <!--Section: Content-->


</div>


<hr>

<?php
      }

      ?>
  
  
<div class="container my-1 z-depth-0">


  <!--Section: Content-->
  <section class="dark-grey-text">

    <div class="row">
      
      <div class="col-md-8 col-8 d-flex align-items-center mt-3">
       


      </div>

      <center>
       <div style="display: inline">
         <!-- Indicates a successful or positive action -->
<a href="../track/"> <button type="button" class="btn btn-success">Confirm Order</button> </a>
           
        </div>
      </center>
    </div>

  </section>
  <!--Section: Content-->
</div>


</div>

    </div>
  </div>


  <br>


    <div class="row">
    <div class="col-lg-12">



</div>

    </div>



<br>

    
  </div>
</div>


</main>
  <!-- jQuery -->
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

  <script type="text/javascript">
      
      function add_item(a,count){
        var count = document.getElementById(a).innerHTML;
        count = Number(count);
        document.getElementById(a).innerHTML=count+1;
      }


      function remove_item(a,count){
        var count = document.getElementById(a).innerHTML;
        count = Number(count);
        if(count==0){
          alert("Can't be less than zero");
        }
        else{
          document.getElementById(a).innerHTML=count-1;
        }
        
      }

  </script>

</body>
</html>
