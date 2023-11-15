<?php require "views/componet/header.php" ?>

<body>
<?php if (isset($_SESSION["user"])):?>
<div class="container-fluid">
    <div class="row g-0">
       <?php require "views/componet/navbar.php" ?>
        <main class="col-10 bg-secondary min-vh-100">

            <div class="container-fluid mt-3 p-4">
                <div class="row flex-column flex-lg-row">
                    <h2 class="h6 text-white-50">QUICK STATS</h2>

                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h3 class="card-title h2 text-primary-emphasis">
                                    <?php foreach ($reports as $report):?>
                                        <?php echo $report?>
                                    <?php endforeach;?>
                                </h3>
                                <span class="text-black-50">
                                    <i class="fas fa-users"></i>
                                    Reports
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h3 class="card-title h2 text-primary-emphasis">
                                    <?php foreach ($destricts as $destrict):?>
                                        <?php echo $destrict?>
                                    <?php endforeach;?>
                                </h3>
                                <span class="text-black-50">
                                    <i class="fas fa-chart-pie"></i>
                                     Destricts
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h3 class="card-title h2 text-primary-emphasis">
                                    <?php foreach ($towns as $town):?>
                                        <?php echo $town?>
                                    <?php endforeach;?>
                                </h3>
                                <span class="text-black-50">
                                    <i class="fas fa-city"></i>
                                    Towns
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h3 class="card-title h2 text-primary-emphasis">
                                    <?php foreach ($dams as $dam):?>
                                        <?php echo $dam?>
                                    <?php endforeach;?>

                                </h3>
                                <span class="text-black-50">
                                    <i class="fas fa-water"></i>
                                    Dams
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row flex-column flex-lg-row w-100 justify-content-center">
                    <div class="card">
                        <div class="card-header h4">Recommendation Letter</div>
                        <div class="card-body">
                            <div>
                                <table  class="table table-hover">
                                    <tr>
                                    <th class="">#</th>
                                    <th>Title</th>
                                    <th>E-mail</th>
                                    <th>Updated At</th>
                                    <th>Action</th>

                                    </tr>

                                        <?php foreach ($messages as $message):?>
                                    <tr>
                                            <td class=""><?php echo $message->id?></td>
                                            <td class=""><?php echo $message->title?></td>
                                            <td class=""><?php echo $message->email?></td>
                                            <td class=""><?php echo $message->updated_at?></td>
                                        <td class="">
                                                      <?php if ($message->replied===0):?>
                                                  <a href="detailReport?id=<?php echo $message->id?>" class="">
                                                          <i for="" class="btn btn-outline-danger fas fa-exclamation"></i>
                                                      </a>
                                                      <?php elseif ($message->replied===1):?>
                                                          <a href="detailReport?id=<?php echo $message->id?>" class="">
                                                              <i for="" class="btn btn-outline-primary fas fa-check"></i>
                                                          </a>
                                                      <?php endif;?>
                                                  </td>



                                    </tr>
                                        <?php endforeach;?>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<?php else:
    $login[]="error";
    view("admin/login", ["login" => $login]);
    ?>

<?php endif;?>
<?php require "views/componet/fooder.php" ?>

