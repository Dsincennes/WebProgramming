<?php include "includes/database.inc.php"; ?>
<?php header("Content-Type: text/html;charset=UTF-8"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; 
   charset=UTF-8" >
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Book Template</title>

   <link rel="shortcut icon" href="../../assets/ico/favicon.png">   

   <!-- Bootstrap core CSS -->
   <link href="bootstrap3_bookTheme/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- Bootstrap theme CSS -->
   <link href="bootstrap3_bookTheme/theme.css" rel="stylesheet">


   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
   <script src="bootstrap3_bookTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_bookTheme/assets/js/respond.min.js"></script>
   <![endif]-->
</head>

<body>

<?php include 'includes/book-header.inc.php'; ?>
   
<div class="container">
   <div class="row">  <!-- start main content row -->

      <div class="col-md-2">  <!-- start left navigation rail column -->
         <?php include 'includes/book-left-nav.inc.php'; ?>
      </div>  <!-- end left navigation rail --> 

      <div class="col-md-8">  <!-- start main content column -->
        
         <!-- book panel  -->
         <div class="panel panel-danger spaceabove">           
              <?php 
              if(isset($_GET['search']))
              {
                 echo "<div class='panel-heading'><h4>My Customers [Last Name = " . $_GET['search'] ." ]<button type='button' class='btn btn-info btn-sm'onclick=" . "window.location.href='customer-list.php'" . ">Remove Filter</button></div></h4>";
              }
              else
              {
                 echo "<div class='panel-heading'><h4>My Customers</h4></div>";
              }
              ?>

           <table class="table">
              <?php
              if(isset($_GET['search']))
              {
                 echo "<tr>
                  <th id='Name'><a href='customer-list.php?name=1&search=" . $_GET['search'] . "'>Name</a></th>
                  <th id='Email'><a href='customer-list.php?email=1&search=" . $_GET['search'] . "'>Email</a></th>
                  <th id='Address'><a href='customer-list.php?address=1&search=" . $_GET['search'] . "'>Address</a></th>
                  <th id='City'><a href='customer-list.php?city=1&search=" . $_GET['search'] . "'>City</a></th>
                  <th id='Country'><a href='customer-list.php?country=1&search=" . $_GET['search'] . "'>Country</a></th>
                  </tr>";
              }
              else
              {
               echo "<tr>
               <th id='Name'><a href='customer-list.php?name=name'>Name</a></th>
               <th id='Email'><a href='customer-list.php?email=email'>Email</a></th>
               <th id='Address'><a href='customer-list.php?address=address'>Address</a></th>
               <th id='City'><a href='customer-list.php?city=city'>City</a></th>
               <th id='Country'><a href='customer-list.php?country=country'>Country</a></th>
               </tr>";
              }
               mysqli_select_db($connection, $database);
               if(isset($_GET['search']))
               {
                  if(isset($_GET['name']))
                  {
                     $email_search = "SELECT firstName, lastName, email, address, city, country From Customers WHERE lastName='{$_GET['search']}' ORDER BY lastName ASC;";
                     echo "<script>document.getElementById('Name').className = 'glyphicon glyphicon-arrow-down'; </script>";
                     $search_result = mysqli_query($connection, $email_search);
                     while($row = mysqli_fetch_array($search_result))
                     {
                        echo "<tr>";
                        echo "<td>" .$row["firstName"]. " " .$row['lastName'] . "</td>";
                        echo "<td>" .$row["email"] . "</td>";
                        echo "<td>" .$row["address"] . "</td>";
                        echo "<td>" .$row["city"] . "</td>";
                        echo "<td>" .$row["country"] . "</td>";
                        echo "</tr>";
                     }
                  }            
                  else if(isset($_GET['email']))
                  {
                     $email_search = "SELECT firstName, lastName, email, address, city, country From Customers WHERE lastName='{$_GET['search']}' ORDER BY email ASC;";
                     echo "<script>document.getElementById('Email').className = 'glyphicon glyphicon-arrow-down'; </script>";
                     $search_result = mysqli_query($connection, $email_search);
                     while($row = mysqli_fetch_array($search_result))
                     {
                        echo "<tr>";
                        echo "<td>" .$row["firstName"]. " " .$row['lastName'] . "</td>";
                        echo "<td>" .$row["email"] . "</td>";
                        echo "<td>" .$row["address"] . "</td>";
                        echo "<td>" .$row["city"] . "</td>";
                        echo "<td>" .$row["country"] . "</td>";
                        echo "</tr>";
                     }
                  }                  
                  else if(isset($_GET['address']))
                  {
                     $address_search = "SELECT firstName, lastName, email, address, city, country From Customers WHERE lastName='{$_GET['search']}' ORDER BY address ASC;";
                     echo "<script>document.getElementById('Address').className = 'glyphicon glyphicon-arrow-down'; </script>";
                     $search_result = mysqli_query($connection, $address_search);
                     while($row = mysqli_fetch_array($search_result))
                     {
                        echo "<tr>";
                        echo "<td>" .$row["firstName"]. " " .$row['lastName'] . "</td>";
                        echo "<td>" .$row["email"] . "</td>";
                        echo "<td>" .$row["address"] . "</td>";
                        echo "<td>" .$row["city"] . "</td>";
                        echo "<td>" .$row["country"] . "</td>";
                        echo "</tr>";
                     }
                  }
                  else if(isset($_GET['city']))
                  {
                     $city_search = "SELECT firstName, lastName, email, address, city, country From Customers WHERE lastName='{$_GET['search']}' ORDER BY city ASC;";
                     echo "<script>document.getElementById('City').className = 'glyphicon glyphicon-arrow-down'; </script>";
                     $search_result = mysqli_query($connection, $city_search);
                     while($row = mysqli_fetch_array($search_result))
                     {
                        echo "<tr>";
                        echo "<td>" .$row["firstName"]. " " .$row['lastName'] . "</td>";
                        echo "<td>" .$row["email"] . "</td>";
                        echo "<td>" .$row["address"] . "</td>";
                        echo "<td>" .$row["city"] . "</td>";
                        echo "<td>" .$row["country"] . "</td>";
                        echo "</tr>";
                     }
                  }
                  else if(isset($_GET['country']))
                  {
                     $country_search = "SELECT firstName, lastName, email, address, city, country From Customers WHERE lastName='{$_GET['search']}' ORDER BY country ASC;";
                     echo "<script>document.getElementById('Country').className = 'glyphicon glyphicon-arrow-down'; </script>";
                     $search_result = mysqli_query($connection, $country_search);
                     while($row = mysqli_fetch_array($search_result))
                     {
                        echo "<tr>";
                        echo "<td>" .$row["firstName"]. " " .$row['lastName'] . "</td>";
                        echo "<td>" .$row["email"] . "</td>";
                        echo "<td>" .$row["address"] . "</td>";
                        echo "<td>" .$row["city"] . "</td>";
                        echo "<td>" .$row["country"] . "</td>";
                        echo "</tr>";
                     }
                  }
                  else
                  {
                     $search_query = "SELECT firstName, lastName, email, address, city, country From Customers WHERE lastName='{$_GET['search']}' ORDER BY lastName ASC;";
                     $search_result = mysqli_query($connection, $search_query);
                     while($row = mysqli_fetch_array($search_result))
                     {
                        echo "<tr>";
                        echo "<td>" .$row["firstName"]. " " .$row['lastName'] . "</td>";
                        echo "<td>" .$row["email"] . "</td>";
                        echo "<td>" .$row["address"] . "</td>";
                        echo "<td>" .$row["city"] . "</td>";
                        echo "<td>" .$row["country"] . "</td>";
                        echo "</tr>";
                     }
                  }
               }
               else
               {
                  if(isset($_GET['email']))
                  {
                     $email_search = "SELECT firstName, lastName, email, address, city, country From Customers ORDER BY email DESC;";
                     echo "<script>" . "document.getElementById('Email').className = 'glyphicon glyphicon-arrow-down';" . "</script>";
                     $search_result = mysqli_query($connection, $email_search);
                     while($row = mysqli_fetch_array($search_result))
                     {
                        echo "<tr>";
                        echo "<td>" .$row["firstName"]. " " .$row['lastName'] . "</td>";
                        echo "<td>" .$row["email"] . "</td>";
                        echo "<td>" .$row["address"] . "</td>";
                        echo "<td>" .$row["city"] . "</td>";
                        echo "<td>" .$row["country"] . "</td>";
                        echo "</tr>";
                     }
                  }
                  else if(isset($_GET['address']))
                  {
                     $address_search = "SELECT firstName, lastName, email, address, city, country From Customers ORDER BY address DESC;";
                     echo "<script>document.getElementById('Address').className = 'glyphicon glyphicon-arrow-down'; </script>";
                     $search_result = mysqli_query($connection, $address_search);
                     while($row = mysqli_fetch_array($search_result))
                     {
                        echo "<tr>";
                        echo "<td>" .$row["firstName"]. " " .$row['lastName'] . "</td>";
                        echo "<td>" .$row["email"] . "</td>";
                        echo "<td>" .$row["address"] . "</td>";
                        echo "<td>" .$row["city"] . "</td>";
                        echo "<td>" .$row["country"] . "</td>";
                        echo "</tr>";
                     }
                  }
                  else if(isset($_GET['city']))
                  {
                     $address_search = "SELECT firstName, lastName, email, address, city, country From Customers ORDER BY city DESC;";
                     echo "<script>document.getElementById('City').className = 'glyphicon glyphicon-arrow-down'; </script>";
                     $search_result = mysqli_query($connection, $address_search);
                     while($row = mysqli_fetch_array($search_result))
                     {
                        echo "<tr>";
                        echo "<td>" .$row["firstName"]. " " .$row['lastName'] . "</td>";
                        echo "<td>" .$row["email"] . "</td>";
                        echo "<td>" .$row["address"] . "</td>";
                        echo "<td>" .$row["city"] . "</td>";
                        echo "<td>" .$row["country"] . "</td>";
                        echo "</tr>";
                     }
                  }
                  else if(isset($_GET['country']))
                  {
                     $address_search = "SELECT firstName, lastName, email, address, city, country From Customers ORDER BY country DESC;";
                     echo "<script>document.getElementById('Country').className = 'glyphicon glyphicon-arrow-down'; </script>";
                     $search_result = mysqli_query($connection, $address_search);
                     while($row = mysqli_fetch_array($search_result))
                     {
                        echo "<tr>";
                        echo "<td>" .$row["firstName"]. " " .$row['lastName'] . "</td>";
                        echo "<td>" .$row["email"] . "</td>";
                        echo "<td>" .$row["address"] . "</td>";
                        echo "<td>" .$row["city"] . "</td>";
                        echo "<td>" .$row["country"] . "</td>";
                        echo "</tr>";
                     }
                  }
                  else
                  {
                     $all_customers = "SELECT firstName, lastName, email, address, city, country From Customers ORDER BY lastName ASC;";
                     echo "<script>document.getElementById('Name').className = 'glyphicon glyphicon-arrow-up'; </script>";
                     $query_result = mysqli_query($connection, $all_customers);
                     while($row = mysqli_fetch_array($query_result))
                     {
                        echo "<tr>";
                        echo "<td>" .$row["firstName"]. " " .$row['lastName'] . "</td>";
                        echo "<td>" .$row["email"] . "</td>";
                        echo "<td>" .$row["address"] . "</td>";
                        echo "<td>" .$row["city"] . "</td>";
                        echo "<td>" .$row["country"] . "</td>";
                        echo "</tr>";
                  }
               }
               }

                     ?>

           </table>
         </div>           
      </div>
      </div>  <!-- end main content column -->
   </div>  <!-- end main content row -->
</div>   <!-- end container -->
   


   
   
 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_bookTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_bookTheme/dist/js/bootstrap.min.js"></script>
 <script src="bootstrap3_bookTheme/assets/js/holder.js"></script>
</body>
</html>