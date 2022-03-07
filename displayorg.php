
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Organization</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/orgRep.css">
</head>
<body style="background-color: #c2efeb">
    <div class="fullContainer " id="orgRepSection">
        <!--------------Start Navigation bar------------------->
        <header style="position: relative;">
            <div class="container">
                <div class="logo" style="color: #ffc10d; font-size: 30px; padding-top: 0; font-family: 'Monoton', cursive;">
                 <a href="orgRep.html">front<span style="color: #50e5de; font-size:50px;">S</span>teps</a>
                </div>
                <nav class="topnav">
                    <ul>
                        <li>
                            <a href="orgRep.html">Home</a>
                        </li>
                        <li>
                            <a href="#aboutSection">About Us</a>
                        </li>
                        <li>
                            <a href="#servicesSection">Services</a>
                        </li>
                        <li>
                            <a href="#contactSection">Contact Us</a>
                        </li>
                        <div class="dropdown">  
                            <button onmouseover="myProfile()" class="dropbtn">My Profile</button>  
                         
                          </div>  
                          <li>
                            <a href="index.html" style="background-color: var(--themeYellow);">Log out</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
 <!--------------Navigation bar------------------->
 
 
 
 

 
 <div class="applicantPage">
      <a href="#" name="record"></a>
      <div class="container">
        <div class="header">
            <h2 style="color: #445654;">Display Organization</h2>
        </div>


        <form id="form" class="form" action="insertdisplayorg.php" method="post">
		<div class="form-control">

        <label for="orgID"> Organization ID </label>
            <input type="text" name="orgID" id="orgID" placeholder="Organization ID">
            <input type="submit" value="Search" class="btn col-5">
			<a href="manageorg.html" ><button name="next" class="btn col-5" id="newbtn" >Next</button></a>

        </div>
		<p class="noorganization"> <a href="neworg.html" class="registerLink"> Add New Organization </p>

		</form>
		<br>
        <div>
        <table class="table" id="orgList">
	
</style>
        <thead>
                    <tr>
                        <th> Organization ID</th>
                        <th>Organization Name</th>
                    </tr>
                </thead>
                <tbody class="text-light">
				
                <?php
                    session_start();
                    if(!isset($_SESSION['orgList'])){
						echo   '<tr>';
                        echo '<td></td>';
                        echo '<td></td>';
                        echo '</tr>';
                    }
					else{
                    foreach ($_SESSION['orgList'] as $index => $arrayRow) {
                        echo '<tr>';
                        echo '<td>'. $arrayRow['orgID'] .'</td>';
                        echo '<td>'. $arrayRow['orgName'] .'</td>';
                        echo '</tr>';
                    }
					}
                    unset($_SESSION['orgList']);
                ?>

                </tbody>
                </table>
	
</div>
<style>
table, th, td {
  border: 1px solid;
}

table {
  width: 100%;
}
</style>

	  
	  
</div>
<!-- start footer-->
<footer class="bg-dark text-center text-white">
<!-- Grid container -->
<div class="container ">
  <!-- Section: Form -->
  <section class="">
    <form action="">
      <!--Grid row-->
      <div class="row d-flex justify-content-center">
        <!--Grid column-->
        <div class="col-auto">
          <p class="pt-2">
            <strong>Sign up for our newsletter</strong>
          </p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-5 col-12">
          <!-- Email input -->
          <div class="form-outline form-white mb-4">
            <input type="email" id="form5Example2" class="form-control" placeholder="Email address.." />
          </div>
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-auto">
          <!-- Submit button -->
          <button type="submit" class="btn btn-outline-light mb-4">
            Subscribe
          </button>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </form>
  </section>
  <!-- Section: Form -->
</div>
<!-- Grid container -->

<!-- Copyright -->
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  &copy;2022frontSteps
</div>
<!-- Copyright -->
</footer>
<!--End footer-->

<script src="Js/orgRep.js"></script>
</body>
</html>
© 2022 GitHub, Inc.
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
