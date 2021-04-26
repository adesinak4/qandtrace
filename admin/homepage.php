<?php
include 'connection.php';
session_start();
 
if(!isset($_SESSION['user_id'])){
    header('Location: index.php');
    exit;
} else {
    // Show users the page!
}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Q 'n' Trace</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style2.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4 pt-5">
		  		<?php
		  		echo "<h1 style='text-align: center'><a href='homepage.php' class='logo'>".$_SESSION['store']."</a></h1>";
                    echo "<h2 style='text-align: center'>".$_SESSION['user_id']."</h2>";
		  		?>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Reservations</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li class="active">
                    <a>Today's Reservations</a>
                </li>
                <li>
                    <a href="reserve.php">All Reservations</a>
                </li>
	            </ul>
	          </li>
	          <li>
	              <a href="logout.php">Log Out</a>
	          </li>
	        </ul>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">

        <h2 class="mb-4">Today's Reservations</h2>
                <!--Table-->
        <table id="tablePreview" class="table">
        <!--Table head-->
          <thead>
            <tr>
              <th>Unique Code</th>
              <th>Full Name</th>
              <th>Branch</th>
              <th>Contact</th>
              <th>Time</th>
              <th>Date</th>
            </tr>
          </thead>
          <!--Table head-->
          <!--Table body-->
          <tbody>
<?php
    $store = $_SESSION['store'];
    $sql = "SELECT * FROM $store WHERE date=CURDATE() ORDER BY time";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


        echo '<tr>
                  <td>' . $row["uniquecode"] .'</td>
                  <td>' . $row["fullname"] .'</td>
                  <td>' . $row["branch"] .'</td>
                  <td> '.$row["tel"] .'</td>
                  <td> '.$row["time"] .'</td>
                  <td> '.$row["date"] .'</td>
                </tr>';
    }
} else {
    echo "0 results";
}
$conn->close();
?>
          </tbody>
          <!--Table body-->
        </table>
        <!--Table-->
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
      <script>
/*            $(document).ready(function () {
              $('#tablePreview').DataTable();
              $('.dataTables_length').addClass('bs-select');
            });*/
          
/*            // Basic example
            $(document).ready(function () {
              $('#tablePreview').DataTable({
                "paging": false // false to disable pagination (or any other option)
              });
              $('.dataTables_length').addClass('bs-select');
            });*/
          
            // Basic example
            $(document).ready(function () {
              $('#tablePreview').DataTable({
                "pagingType": "simple" // "simple" option for 'Previous' and 'Next' buttons only
              });
              $('.dataTables_length').addClass('bs-select');
            });
          
      </script>
  </body>
</html>