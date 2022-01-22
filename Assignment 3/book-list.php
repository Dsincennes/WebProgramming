<?php include "includes/database.inc.php"; ?>
<?php header("Content-Type: text/html;charset=UTF-8"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta http-equiv="Content-Type" content="text/html; 
   charset=ISO-8859-1" />
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
      <div class="row">
         <!-- start main content row -->

         <div class="col-md-2">
            <!-- start left navigation rail column -->
            <?php include 'includes/book-left-nav.inc.php'; ?>
         </div> <!-- end left navigation rail -->

         <div class="col-md-6">
            <!-- start main content column -->

            <!-- book panel  -->
            <div class="panel panel-danger spaceabove">
               <div class="panel-heading">
                  <h4>BOOKS</h4>
               </div>
               <table class="table">
                  <?php
                  mysqli_select_db($connection, $database);
                  echo "<tr>";
                  echo "<th>Cover</th>";
                  echo "<th>ISBN</th>";
                  echo "<th>Title</th>";
                  echo "</tr>";
                  ?>
                  <?php
                  if (isset($_GET['categories'])) {
                     $sub_query = "SELECT * FROM Books WHERE Books.SubcategoryID = '{$_GET['categories']}';";
                     $sub_result = mysqli_query($connection, $sub_query);
                     while ($row = mysqli_fetch_array($sub_result)) {
                        echo "<tr>
                              <td><img src='./images/tinysquare/{$row['ISBN10']}.jpg'></td>
                              <td>{$row['ISBN13']}</td>
                              <td><a href='book-details.php?bookID={$row['ID']}'>{$row['Title']}</a></td>
                              </tr>";
                     }
                  }
                     else if (isset($_GET['imprints'])) {
                     $sub_query = "SELECT * FROM Books WHERE Books.ImprintID = '{$_GET['imprints']}';";
                     $sub_result = mysqli_query($connection, $sub_query);
                     while ($row = mysqli_fetch_array($sub_result)) {
                        echo "<tr>
                              <td><img src='./images/tinysquare/{$row['ISBN10']}.jpg'></td>
                              <td>{$row['ISBN13']}</td>
                              <td><a href='book-details.php?bookID={$row['ID']}'>{$row['Title']}</a></td>
                              </tr>";
                     }
                  }
                  else if (isset($_GET['status'])) {
                     $sub_query = "SELECT * FROM Books WHERE Books.ProductionStatusID = '{$_GET['status']}';";
                     $sub_result = mysqli_query($connection, $sub_query);
                     while ($row = mysqli_fetch_array($sub_result)) {
                        echo "<tr>
                              <td><img src='./images/tinysquare/{$row['ISBN10']}.jpg'></td>
                              <td>{$row['ISBN13']}</td>
                              <td><a href='book-details.php?bookID={$row['ID']}'>{$row['Title']}</a></td>
                              </tr>";
                     }
                  } 
                  else if (isset($_GET['status'])) {
                     $sub_query = "SELECT * FROM Books WHERE Books.ProductionStatusID = '{$_GET['status']}';";
                     $sub_result = mysqli_query($connection, $sub_query);
                     while ($row = mysqli_fetch_array($sub_result)) {
                        echo "<tr>
                              <td><img src='./images/tinysquare/{$row['ISBN10']}.jpg'></td>
                              <td>{$row['ISBN13']}</td>
                              <td><a href='book-details.php?bookID={$row['ID']}'>{$row['Title']}</a></td>
                              </tr>";
                     }
                  }else if (isset($_GET['binding'])) {
                     $sub_query = "SELECT * FROM Books WHERE Books.BindingTypeID = '{$_GET['binding']}';";
                     $sub_result = mysqli_query($connection, $sub_query);
                     while ($row = mysqli_fetch_array($sub_result)) {
                        echo "<tr>
                              <td><img src='./images/tinysquare/{$row['ISBN10']}.jpg'></td>
                              <td>{$row['ISBN13']}</td>
                              <td><a href='book-details.php?bookID={$row['ID']}'>{$row['Title']}</a></td>
                              </tr>";
                     }
                  }else {
                     $book_query = "SELECT * FROM Books";
                     $search_result = mysqli_query($connection, $book_query);
                     while ($row = mysqli_fetch_array($search_result)) {
                        echo "<tr>
                              <td><img src='./images/tinysquare/{$row['ISBN10']}.jpg'></td>
                              <td>{$row['ISBN13']}</td>
                              <td><a href='book-details.php?bookID={$row['ID']}'>{$row['Title']}</a></td>
                           </tr>";
                     }
                  }


                  ?>
               </table>
            </div>
         </div>

         <div class="col-md-2">
            <!-- start left navigation rail column -->
            <div class="panel panel-info spaceabove">
               <div class="panel-heading">
                  <h4>Categories</h4>
               </div>
               <ul class="nav nav-pills nav-stacked">
                  <?php
                  $sql = "SELECT * FROM Subcategories ORDER BY SubcategoryName DESC LIMIT 20; ";
                  $sqlresult = mysqli_query($connection, $sql);
                  while ($row = mysqli_fetch_array($sqlresult)) {
                     echo "<li><a href=book-list.php?categories=" . $row["ID"] . ">" . $row["SubcategoryName"] . "</a></li>";
                  }
                  ?>
               </ul>
            </div>

         </div> <!-- end left navigation rail -->

         <div class="col-md-2">
            <!-- start left navigation rail column -->
            <div class="panel panel-info spaceabove">
               <div class="panel-heading">
                  <h4>Imprints</h4>
               </div>
               <ul class="nav nav-pills nav-stacked">
                  <?php
                  $sql_imp = "SELECT * FROM Imprints ORDER BY Imprint;";
                  $sqlresultimp = mysqli_query($connection, $sql_imp);
                  while ($row = mysqli_fetch_array($sqlresultimp)) {
                     echo "<li><a href=book-list.php?imprints=" . $row["ID"] . ">" . $row["Imprint"] . "</a></li>";
                  }
                  ?>
               </ul>
            </div>

            <div class="panel panel-info">
               <div class="panel-heading">
                  <h4>Status</h4>
               </div>
               <ul class="nav nav-pills nav-stacked">
                 <?php
                  $sql_status = "SELECT * FROM ProductionStatuses ORDER BY ProductionStatus;";
                  $sqlresultstatus = mysqli_query($connection, $sql_status);
                  while ($row = mysqli_fetch_array($sqlresultstatus)) {
                     echo "<li><a href=book-list.php?status=" . $row["ID"] . ">" . $row["ProductionStatus"] . "</a></li>";
                  }
                  ?>
               </ul>
            </div>

            <div class="panel panel-info">
               <div class="panel-heading">
                  <h4>Binding</h4>
               </div>
               <ul class="nav nav-pills nav-stacked">
                 <?php
                  $sql_status = "SELECT * FROM BindingTypes ORDER BY BindingType;";
                  $sqlresultstatus = mysqli_query($connection, $sql_status);
                  while ($row = mysqli_fetch_array($sqlresultstatus)) {
                     echo "<li><a href=book-list.php?binding=" . $row["ID"] . ">" . $row["BindingType"] . "</a></li>";
                  }
                  ?>
               </ul>
            </div>
         </div> <!-- end left navigation rail -->


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