@extends('layouts.layout')
@section('content')
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <!-- Favicon -->
        <link href="assets/img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="assets/css/animate.min.css" rel="stylesheet">
<link href="assets/css/owl.carousel.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="assets/css/product.css" rel="stylesheet">

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <!-- Container wrapper -->
        <div class="container-fluid">

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse main-nav" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand">
            <img
                src="assets/img/logowh.png"
                height="45"
                alt=""
                loading="lazy"
            />
            </a>
            <!-- Left links -->
            <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="product">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="detail">Detail</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profileview">Profile</a>
            </li>

            </ul>
            <!-- Left links -->
        </div>
        <form class="navlogbut d-flex">
            <button class="btn btn-outline-light bg-secondary=" type="submit" ><a class="nav-link" href="login">LOGIN</a></button>
        </form>
        
        
    </nav>
    <!-- Navbar -->

  
    