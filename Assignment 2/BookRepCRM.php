<!DOCTYPE html>
<html lang="en">

<head>
   <meta http-equiv="Content-Type" content="text/html; 
   charset=UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Book Template</title>

   <link rel="shortcut icon" href="../../assets/ico/favicon.png">

   <!-- Google fonts used in this theme  -->
   <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>

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
   <?php include 'book-header.inc.php'; ?>
   <?php
   function readCustomers($filename)
   {
      $customerFile = file($filename) or die('Error: Cannot find file');
      $delimeter = ',';

      foreach ($customerFile as $line) {
         $splitContents = explode($delimeter, $line);
         $aCustomer = array();

         $aCustomer['ID'] = $splitContents[0];
         $aCustomer['Name'] = utf8_encode($splitContents[1] . ' ' . $splitContents[2]);
         $aCustomer['Email'] = utf8_encode($splitContents[3]);
         $aCustomer['University'] = utf8_encode($splitContents[4]);
         $aCustomer['City'] = utf8_encode($splitContents[6]);

         $customers[$aCustomer['ID']] = $aCustomer;
      }
      return $customers;
   }

   function readOrders($filename)
   {
      $orderFile = file($filename) or die('Error: Cannot find file');
      $delimeter = ',';

      foreach ($orderFile as $line) {
         $splitContents = explode($delimeter, $line);
         $aOrders = array();

         $aOrders['id'] = utf8_encode($splitContents[0]);
         $aOrders['custID'] = utf8_encode($splitContents[1]);
         $aOrders['ISBN'] = utf8_encode($splitContents[2]);
         $aOrders['title'] = utf8_encode($splitContents[3]);
         $aOrders['category'] = utf8_encode($splitContents[4]);

         $books[$aOrders['id']] = $aOrders;
      }
      return $books;
   }

   $customers = readCustomers('customers.txt');
   $books = readOrders('orders.txt');
   ?>


   <div class="container">
      <div class="row">
         <!-- start main content row -->

         <div class="col-md-2">
            <!-- start left navigation rail column -->
            <?php include 'book-left-nav.inc.php'; ?>
         </div> <!-- end left navigation rail -->

         <div class="col-md-10">
            <!-- start main content column -->

            <!-- Customer panel  -->
            <div class="panel panel-danger spaceabove">
               <div class="panel-heading">
                  <h4>My Customers</h4>
               </div>
               <table class="table">
                  <tr>
                     <th>Name</th>
                     <th>Email</th>
                     <th>University</th>
                     <th>City</th>
                  </tr>
                  <?php
                  foreach ($customers as $key => $value) {
                     echo "<tr>";
                     echo '<td>' . '<a href = "BookRepCRM.php?id=' . $value['ID'] . '">' . $value['Name'] . '</a>' . '</td>';
                     echo "<td>" . $value['Email'] . "</td>";
                     echo "<td>" . $value['University'] . "</td>";
                     echo "<td>" . $value['City'] . "</td>";
                     echo "</tr>";
                  }
                  echo "</th>";
                  ?>
               </table>
            </div>


            <?php
            if (isset($_GET['id'])) {
               echo '<div class="panel panel-danger spaceabove">';
               echo '<div class="panel-heading">';
               echo '<h4>Orders for ' .$customers[$_GET["id"]]["Name"].'</h4>';
               echo "</div>";
               echo '<table class="table">';
               echo "<tr>";
               echo "<th>ISBN</th>";
               echo "<th>Title</th>";
               echo "<th>Category</th>";
               echo "</tr>";
               $boolOrders = false;
               $id = $_GET['id'];
               foreach ($books as $keys => $values) {
                  echo "<tr>";
                  if ($id == $values['custID']) {
                     $boolOrders = true;
                     echo "<td>" . $values['ISBN'] . "</td>";
                     echo "<td>" . $values['title'] . "</td>";
                     echo "<td>" . $values['category'] . "</td>";
                     echo "</tr>";
                  }
               }
               if ($boolOrders == false) {
                  echo "</table><tr><td><center>No Orders for this customer</center></td></tr>";
               }
            }
            ?>
            </table>
         </div>

      </div> <!-- end main content column -->
   </div> <!-- end main content row -->
   </div> <!-- end container -->





   <!-- Bootstrap core JavaScript
 ================================================== -->
   <!-- Placed at the end of the document so the pages load faster -->
   <script src="bootstrap3_bookTheme/assets/js/jquery.js"></script>
   <script src="bootstrap3_bookTheme/dist/js/bootstrap.min.js"></script>
   <script src="bootstrap3_bookTheme/assets/js/holder.js"></script>
</body>

</html>