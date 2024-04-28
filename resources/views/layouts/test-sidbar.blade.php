
<!doctype html>
<html lang="en">
  <head>
  	<title>PROJECTS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
        <style>
            btn-primar :hover {
                color: rgb(red, 67, 95);
                background-color: white;
            }
            
        </style>
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar"  style="background: #FBBC05;">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
	  		<a href="{{ route('home') }}" class="sidebar-link">
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="{{ route('home') }}" class="sidebar-link">
              <span class="fa fa-home mr-3"></span> Homepage</a>
          </li>

          <li class="sidebar-item">
            <a href="{{ route('clients.index') }}" class="sidebar-link">
                <i class="fas fa-shopping-cart"></i>
                <span>Clients</span>
          </li>
            
          <li class="sidebar-item">
            <a href="{{ route('fournisseurs.index') }}" class="sidebar-link">
                <i class="fas fa-shopping-cart"></i>
                <span>Fournisseurs</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="{{ route('depenses.index') }}" class="sidebar-link">
                <i class="fas fa-users"></i>
                <span>Depenses</span>
            </a>
        </li>
          
          <li>
            <a href="logout.php"><span class="fa fa-paper-plane mr-3"></span> LOGOUT</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <button class="btn btn-primary my-5" ><a href="add_project.php" class="text-light" >New Project</a></button> 
        <h2 class="mb-4">PROJECTS</h2>
        <table class="table">
          <thead>
            <tr>
              <!--<th scope="col">Sl no</th>-->
              <th scope="col">Project Name</th>
              <th scope="col">client</th>
              <th scope="col">description</th>
              <th scope="col">Date</th>
              <th scope="col">Deadline</th>
              <th scope="col">Operations</th>
            </tr>
          </thead>
          <tbody>


          
           
        </tbody>
      </table>
        
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>