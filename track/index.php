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
  include '../inc/header.php';
?>

<main>

<div class="mt-5"></div>


<div class="container">
  <div class="row">
    <div class="col-lg-12">
<br>
<div class="progress">
  <div class="progress-bar btn-success" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<br>
<!-- <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div> -->
<br>
<!-- <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<br>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div> -->




<h5 style="padding-left: 20px">Order Summary</h5>
      <div style="background-color: lightgrey; border-radius: 20px ">

      <div class="container my-1 z-depth-0">


  <!--Section: Content-->
  <section class="dark-grey-text">

    <div class="row">
      
      <div class="col-md-8 col-8 d-flex align-items-center mt-3">
        <div>
          
          <h5 class="font-weight-bold mb-1">Chicken Keema</h5>

          <!-- <p>Lorem ipsum dolor sit amet consectetur adip elit. </p> -->
          <b> <p style="line-height: 10px; font-weight: bold"> ₹ 30 </p> </b>

         
        </div>


      </div>

      <center>
       <div style="display: inline">
        <br>
        
               <b> <p style="line-height: 10px; font-weight: bold"> 2 </p> </b>

        </div>
      </center>
    </div>

  </section>
  <!--Section: Content-->


</div>


<hr>
  
  
 <div class="container my-1 z-depth-0">


  <!--Section: Content-->
  <section class="dark-grey-text">

    <div class="row">
      
      <div class="col-md-8 col-8 d-flex align-items-center mt-3">
        <div>
          
          <h5 class="font-weight-bold mb-1">Gobi Manchurian</h5>

          <!-- <p>Lorem ipsum dolor sit amet consectetur adip elit. </p> -->
           <b> <p style="line-height: 10px; font-weight: bold"> ₹ 50 </p> </b>

         
        </div>


      </div>

      <center>
       <div style="display: inline">
        <br>
         
               <b> <p style="line-height: 10px; font-weight: bold"> 1 </p> </b>

        </div>
      </center>
    </div>

  </section>
  <!--Section: Content-->
</div>
<hr>
<div class="container my-1 z-depth-0">


  <!--Section: Content-->
  <section class="dark-grey-text">

    <div class="row">
      
      <div class="col-md-8 col-8 d-flex align-items-center mt-3">
       


      </div>

      <center>
       <div style="display: inline">
         <!-- Indicates a successful or positive action -->

         <b> <p style="line-height: 1"> Total 764.89 </p> </b>
         <p style="line-height: 1"> SGST : 32.78 </p>
         <p style="line-height: 1"> SGST : 54.90 </p>
<button type="button" disabled="" class="btn btn-black btn-success">Net Total  ₹ 110</button>
           
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
