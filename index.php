<?php session_start();
  include 'inc/dbconnection.php';
 ?>
<!DOCTYPE html>
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
   include 'inc/header.php';
?>

<main>

<div class="mt-5"></div>


<div class="container">
 

  <?php 
      $tot_price = 0;
      $query_cat = "SELECT * FROM category";
      $res_cat = mysqli_query($link, $query_cat);
      
      while($row_cat = mysqli_fetch_assoc($res_cat)){
          ?>

           <div class="row">
    <div class="col-lg-12">

     

<h5 style="padding-left: 20px"><?php echo $row_cat['cat_name'] ?></h5>
      <div style="background-color: lightgrey; border-radius: 20px ">

      <?php
        $cat_id = $row_cat['cat_id'];
        $query_items = "SELECT * FROM menu WHERE category=$cat_id";
        $res_items = mysqli_query($link, $query_items);
        while($row_items = mysqli_fetch_assoc($res_items)){
          $food_id=  $row_items['food_id'];
          $food_name=  $row_items['food_name'];
          $food_price=  $row_items['price'];
      ?>

      <div class="container my-1 z-depth-0">


  <!--Section: Content-->
  <section class="dark-grey-text">

    <div class="row">
      
      <div class="col-md-8 col-8 d-flex align-items-center mt-3">
        <div>
          
          <h5 class="font-weight-bold mb-1"><?php echo $row_items['food_name'] ?></h5>

          <p><?php echo $row_items['description'] ?></p>
          <b> <p style="line-height: 10px; font-weight: bold"> ₹ <?php echo $row_items['price'] ?> </p> </b>

         
        </div>


      </div>

      <center>
       <div style="display: inline">
        <br>
         <button 

         onclick="remove_item(<?php echo $food_id ?>, '<?php echo $food_name ?>', <?php echo $food_price ?>)" 
          style="display: inline;" type="button" class="btn btn-success px-2">
          <i class="fas fa-angle-down"></i>

        </button>
           
             <p id="<?php echo $food_id ?>" style="display: inline;">0</p>
             <button onclick="add_item(<?php echo $food_id ?>, '<?php echo $food_name ?>', <?php echo $food_price ?>)" style="display: inline;" type="button" class="btn btn-success px-2"><i class="fas fa-angle-up"></i></button>

        </div>
      </center>
    </div>

  </section>
  <!--Section: Content-->


</div>


<hr>

    <?php } ?>
  
  

</div>

    </div>
  </div>
   <br>

      <?php } ?>

      
 







<!-- Bottom Heade starts -->
<nav class="navbar fixed-bottom navbar-dark  bg-dark">
    
  <div class="container">
    <div style="width: 100vw" class="row">
    <div class="col-lg-9 col-9">
      <div style="color: white" id="pre-review-order"> </div>
      
       <hr style="background-color: white">
       <b>
         
          <p style="color: white; display: inline; line-height:10px" class="mt-2">Total = ₹ </p> <p id="total_box" style="color: white; line-height:10px; display: inline" id="total_amt"> 0 </p>

       </b>
  </div>

  <div class="col-lg-3 col-3 mt-2">
    <a href="order/">  <button type="button" class="btn-sm btn-success btn-rounded">Proceed</button> </a>
  </div>
  </div>
</div>

</nav>

<br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- Bottom header ends -->
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
      
      function add_item(a, name, price){
        console.log(a);
        console.log(name);
        console.log(price);
        var count = document.getElementById(a).innerHTML;
        count = Number(count);
        document.getElementById(a).innerHTML=count+1;
        count++;
        var line_id = "item"+a;

        

        if($(line_id).length){
            var element_old = document.getElementById(line_id);
            element_old.innerHTML="";
            element_old.appendChild(document.createTextNode(name+' X '+ count+' = ₹ '+ price*count));
            total_box = document.getElementById('total_box');
            current_total = document.getElementById('total_box').innerHTML;
            current_total = Number(current_total);
            console.log(current_total);
            total_box.innerHTML=price+current_total;
            // element_old.appendChild("BR");
        }
        else{
          var element = document.createElement(line_id);
          element.setAttribute("id",line_id);
          element.appendChild(document.createTextNode(name+' X '+ count+' = ₹ '+ price*count));
           // $tot_price=$tot_price+(price*count);


          document.getElementById('pre-review-order').appendChild(element);
           var br = document.createElement("BR");
           br.setAttribute("id",'br'+line_id);
           document.getElementById('pre-review-order').appendChild(br);

           total_box = document.getElementById('total_box');
            current_total = document.getElementById('total_box').innerHTML;
            current_total = Number(current_total);
            console.log(current_total);
            total_box.innerHTML=price+current_total;

        }
      }
      function remove_item(a, name, price){
        console.log(a);
        console.log(name);
        console.log(price);
        var count = document.getElementById(a).innerHTML;
        count = Number(count);
        if(count==0){
          var line_id = "item"+a;
           console.log(line_id);
            var element_old = document.getElementById(line_id);
            var br = document.getElementById('br'+line_id);
            br.remove();
            element_old.remove(); 
        }
        else{
          count--;
          document.getElementById(a).innerHTML=count;
          var line_id = "item"+a;
        if($(line_id).length){
            var element_old = document.getElementById(line_id);
            element_old.innerHTML="";
            if($('br'+line_id).length){
            var br = document.getElementById('br'+line_id);
            br.remove();
          }
            // element_old.parentNode.removeChild(element_old);
            if(count!=0)
              element_old.appendChild(document.createTextNode(name+' X '+ count+' = ₹ '+ price*count));

              total_box = document.getElementById('total_box');
              current_total = document.getElementById('total_box').innerHTML;
              current_total = Number(current_total);
              console.log(current_total);
              total_box.innerHTML=current_total-price;

        }


        }
        
      }

  </script>

</body>
</html>
