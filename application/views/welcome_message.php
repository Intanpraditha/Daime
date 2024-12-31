<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bootstrap Sidebar & Topbar</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    /* Sidebar */
    .sidebar {
        height: 100%;
        width: 250px;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #343a40;
        padding-top: 50px;
    }

    .sidebar a {
        padding: 10px 15px;
        text-decoration: none;
        font-size: 20px;
        color: #ffffff;
        display: block;
    }

    .sidebar a:hover {
        background-color: #adb5bd;
    }

    /* Topbar */
    .topbar {
        background-color: #343a40;
        padding: 10px 15px;
        color: #ffffff;
    }
</style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <a href="#">Menu 1</a>
    <a href="#">Menu 2</a>
    <a href="#">Menu 3</a>
    <a href="#">Menu 4</a>
    <a href="#">Menu 5</a>
</div>

<!-- Page Content -->
<div style="margin-left: 250px;">
    <!-- Topbar -->
    <div class="topbar">
        <h3>Topbar Content</h3>
    </div>

    <!-- Page Content -->
    <div class="container-fluid">
        <h2>Main Content Area</h2>
        <p>This is where your main content goes.</p>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
