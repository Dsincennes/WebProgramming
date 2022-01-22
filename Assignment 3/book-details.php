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
   <div class="row">  <!-- start main content row -->

      <div class="col-md-2">  <!-- start left navigation rail column -->
         <?php include 'includes/book-left-nav.inc.php'; ?>
      </div>  <!-- end left navigation rail --> 

      <div class="col-md-10">  <!-- start main content column -->
        
         <!-- book panel  -->
         <div class="panel panel-danger spaceabove">           
           <div class="panel-heading"><h4>Book Details</h4></div>
           
           <table class="table">
             <?php 
              mysqli_select_db($connection, $database);
              $book_details_query = "SELECT * FROM Books WHERE Books.ID='{$_GET['bookID']}';";
              $search_result = mysqli_query($connection, $book_details_query);
              while($row = mysqli_fetch_array($search_result))
              {
                $author_details = "SELECT * FROM Authors INNER JOIN BookAuthors ON Authors.ID = BookAuthors.AuthorID WHERE BookAuthors.BookID = {$row['ID']};";
                $detail = mysqli_query($connection, $author_details);
                $author_info = mysqli_fetch_array($detail); 
                
                $sub_details =  "SELECT * FROM Subcategories INNER JOIN Books ON Subcategories.ID = Books.SubcategoryID WHERE Subcategories.ID = {$row['SubcategoryID']};";
                $detail = mysqli_query($connection, $sub_details);
                $sub_info = mysqli_fetch_array($detail); 

                $imprint_details = "SELECT * FROM Imprints INNER JOIN Books ON Imprints.ID = Books.ImprintID WHERE Books.ImprintID = {$row['ImprintID']}";
                $detail = mysqli_query($connection, $imprint_details);
                $imprint_info = mysqli_fetch_array($detail);

                $binding_details = "SELECT * FROM BindingTypes INNER JOIN Books ON BindingTypes.ID = Books.BindingTypeID WHERE Books.BindingTypeID = {$row['BindingTypeID']}";
                $detail = mysqli_query($connection, $binding_details);
                $binding_info = mysqli_fetch_array($detail);

                $production_details = "SELECT * FROM ProductionStatuses INNER JOIN Books ON ProductionStatuses.ID = Books.ProductionStatusID WHERE Books.ProductionStatusID = {$row['ProductionStatusID']}";
                $detail = mysqli_query($connection, $production_details);
                $production_info = mysqli_fetch_array($detail);

            echo "<tr>
               <th>Cover</th>
               <td><img src='./images/tinysquare/{$row['ISBN10']}.jpg'></td>
             </tr>            
             <tr>
               <th>Title</th>
               <td><em>{$row['Title']}</em></td>
             </tr>    
             <tr>
               <th>Authors</th>
               <td>
               {$author_info['FirstName']}
               </td>
             </tr>   
             <tr>
               <th>ISBN-10</th>
               <td>{$row['ISBN10']}</td>
             </tr>
             <tr>
               <th>ISBN-13</th>
               <td>{$row['ISBN13']}</td>
             </tr>
             <tr>
               <th>Copyright Year</th>
               <td>{$row['CopyrightYear']}</td>
             </tr>   
             <tr>
               <th>Instock Date</th>
               <td>
               {$row['LatestInstockDate']}
               </td>
             </tr>              
             <tr>
               <th>Trim Size</th>
               <td>{$row['TrimSize']}</td>
             </tr> 
             <tr>
               <th>Page Count</th>
               <td>{$row['PageCountsEditorialEst']}</td>
             </tr> 
             <tr>
               <th>Description</th>
               <td>{$row['Description']}</td>
             </tr> 
             <tr>
               <th>Sub Category</th>
               <td>{$sub_info['SubcategoryName']}</td>
             </tr>
             <tr>
               <th>Imprint</th>
               <td>{$imprint_info['Imprint']}</td>
             </tr>   
             <tr>
               <th>Binding Type</th>
               <td>{$binding_info['BindingType']}</td>
             </tr> 
             <tr>
               <th>Production Status</th>
               <td>{$production_info['ProductionStatus']}</td>
             </tr>";
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