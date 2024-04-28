
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
		
<div class="sidebar ">
   <ul class="sidebar-menu">                         
    <li class="sidebar-item">
        <a href="{{ route('home') }}" class="sidebar-link">
            <i class="fas fa-home"></i>
            <span>dashboard</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="{{ route('factures.index') }}" class="sidebar-link">
            <i class="fas fa-users"></i>
            <span>Facture</span>
        </a>
   </li>
    <li class="sidebar-item">
        <a href="{{ route('clients.index') }}" class="sidebar-link">
            <i class="fas fa-shopping-cart"></i>
            <span>Clients</span>
        </a>
    </li>
<!-- Add more sidebar items as needed -->
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
    <li class="sidebar-item">
        <a href="{{ route('factures.index') }}" class="sidebar-link">
            <i class="fas fa-users"></i>
            <span>Facture</span>
        </a>
    </li>
    </ul>
</div>


<style>
    /* styles.css */

@media (max-width: 768px) {
  .sidebar {
    display: none;
  }

  .sidebar.expanded {
    display: block;
  }

  .sidebar.collapsed {
    display: none;
  }

  .content {
    margin-left: 0;
  }
}

@media (min-width: 769px) {
  .sidebar-menu {
    width: 200px;
  }

  .sidebar.collapsed .sidebar-text {
    display: none;
  }

  .sidebar.expanded .sidebar-item {
    display: block;
  }
}
</style>