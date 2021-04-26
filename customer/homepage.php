<?php
include 'connection.php';
session_start();
 
if(!isset($_SESSION['email'])){
    header('Location: log%20in.php');
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
		<link rel="stylesheet" href="../admin/css/style2.css">
      <link rel="stylesheet" href="../css/style.css">
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
		  		echo "<h1 style='text-align: center'><a href='homepage.php' class='logo'></a></h1>";
                    echo "<p style='text-align: center'> welcome ".$_SESSION['email']."</p>";
		  		?>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Reservations</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li class="active">
                    <a>View Reservations</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="homepage_get.php?store=hubmart&title=HUBMART">Hubmart</a>
                        </li>
                        <li>
                            <a href="homepage_get.php?store=shoprite&title=SHOPRITE">Shoprite</a>
                        </li>
                        <li>
                            <a href="homepage_get.php?store=spar&title=SPAR">Spar</a>
                        </li>
                        <li>
                            <a href="homepage_get.php?store=supersaver&title=SUPERSAVER">Supersaver</a>
                        </li>
                    </ul>
                </li>
	            </ul>
	          </li>
                <li>
                    <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Make a Reservation</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu1">
                        <li>
                            <a href="reg_get.php?store=hubmart">Hubmart</a>
                        </li>
                        <li>
                            <a href="reg_get.php?store=shoprite">Shoprite</a>
                        </li>
                        <li>
                            <a href="reg_get.php?store=spar">Spar</a>
                        </li>
                        <li>
                            <a href="reg_get.php?store=supersaver">Supersaver</a>
                        </li>
	            </ul>
                </li>
	          <li>
	              <a href="log%20out.php">Log Out</a>
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
      

    <script src="../admin/js/jquery.min.js"></script>
    <script src="../admin/js/popper.js"></script>
    <script src="../admin/js/bootstrap.min.js"></script>
    <script src="../admin/js/main.js"></script>
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