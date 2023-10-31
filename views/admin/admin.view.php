<?php require "views/componet/header.php" ?>
<body>
<div class="container-fluid">
    <div class="row g-0">
       <?php require "views/componet/navbar.php" ?>
        <main class="col-10 bg-secondary">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="flex-fill"></div>
                <div class="navbar nav">
                    <li class="nav-item dropdown w-25">
                        <a href="#" class="nav-link dropdown-toggle"
                           data-bs-toggle="dropdown">
                            <i class="fas fa-user-circle"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#" class="dropdown-item">User Profile</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">Logout</a>
                            </li>
                        </ul>
                    </li>
                </div>

            </nav>
            <div class="container-fluid mt-3 p-4">
                <div class="row flex-column flex-lg-row">
                    <h2 class="h6 text-white-50">QUICK STATS</h2>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h3 class="card-title h2">1,250</h3>
                                <span class="text-success">
<i class="fas fa-chart-line"></i>
Daily visitors
</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h3 class="card-title h2">8,210</h3>
                                <span class="text-success">
<i class="fas fa-chart-line"></i>
Weekly visitors
</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h3 class="card-title h2">12,560</h3>
                                <span class="text-success">
<i class="fas fa-chart-line"></i>
Monthly visitors
</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h3 class="card-title h2">102,250</h3>
                                <span class="text-success">
<i class="fas fa-chart-line"></i>
Yearly visitors
</span>
                            </div>
                        </div>
                    </div>
                </div>
                            </div>
        </main>
    </div>
</div>
<?php require "views/componet/fooder.php" ?>

