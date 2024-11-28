<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Payment - @yield('title')</title>

    <!-- Google Fonts and Bootstrap Links -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            display: flex;
        }
        .sidebar {
            width: 250px;
            background-color: #112D4E;
            color: white;
            height: 100vh;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
        }
        .sidebar h2 {
            font-size: 18px;
            margin-bottom: 20px;
            padding: 10px;
            text-align: center;
            border: 2px solid white;
        }
        .menu {
            width: 80%;
            list-style: none;
            padding: 0;
        }
        .menu li {
            width: 100%;
        }
        .menu li a {
            display: block;
            padding: 15px;
            text-align: left;
            text-decoration: none;
            color: white;
            transition: background 0.3s;
        }
        .menu li a:hover, .menu li a.active {
            background-color: #3b4a6b;
        }
        .content {
            flex-grow: 1;
            background-color: #f4f4f9;
            padding: 20px;
            height: 100vh;
            margin-left: 250px;
            overflow-y: auto;
        }
        .subheading {
            padding: 15px;
            font-weight: bold;
            text-transform: uppercase;
            color: #ddd;
            font-size: 14px;
            text-align: left;
            width: 90%;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #f4f4f9;
            border-bottom: 1px solid #ddd;
        }
        .school-title {
            font-weight: 600;
            font-size: 18px;
            color: #112D4E;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        .icon {
            font-size: 2rem;
            color: #112D4E;
        }

        .icondown {
            font-size: 2rem;
            color: #5ea559;
        }

        .iconup {
            font-size: 2rem;
            color: #FF5C5C;
        }




        .profile {
            display: flex;
            align-items: center;
            background-color: #eaeaea;
            padding: 5px 10px;
            border-radius: 20px;
        }
        .profile-image {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .profile-name {
            font-weight: bold;
            color: #112D4E;
            margin-right: 10px;
        }
        .card-custom {
            margin-top: 20px;
        }
        .card-body {
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #aafcfc;
            color: black;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #cacaca;
        }
        .dropdown .dropdown-menu {
            min-width: auto;
            font-size: 12px;
        }
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                position: relative;
                height: auto;
            }
            .content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <h2>LOGO<br>SEKOLAH</h2>
    <div class="subheading">MENU</div>
    <ul class="menu">
        <li><a href="/dashboard">Dashboard</a></li>
        <li><a href="/datamahasiswa">Data Mahasiswa</a></li>
        <li><a href="/datatagihan">Data Tagihan</a></li>
        <li><a href="/daftartransaksi">Daftar Transaksi</a></li>
        <li><a href="/logtransaksi">Log Transaksi</a></li>
        <li><a href="/report">Report Tagihan</a></li>
    </ul>
    <div class="subheading">Administrator</div>
    <ul class="menu">
        <li><a href="/admin_sekolah">Admin Instansi</a></li>
    </ul>
</div>

<!-- Content -->
<div class="content">
    <!-- Header -->
    <header class="header">
        <div class="school-title">School Payment</div>
        <div class="profile">
            <img src="style/assets/img/team/team-2.jpg" alt="Profile" class="profile-image">
            <span class="profile-name">Jonathan Sovisa</span>
            <div class="dropdown">
                <i class="bi bi-three-dots-vertical" role="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"></i>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Change Password</a></li>
                    <li><a class="dropdown-item" href="#">Log Out</a></li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Content Body -->
    <div class="card card-custom">
        <div class="card-body">
            @yield('tabel')
        </div>
    </div>
</div>

<!-- Link Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<!-- Link ApexCharts -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script>
    const menuLinks = document.querySelectorAll('.menu li a');
    menuLinks.forEach(link => {
        link.classList.toggle('active', link.getAttribute('href') === window.location.pathname);
    });
</script>
</body>
</html>