<?php require "views/componet/header.php" ?>
<body>
<?php if (isset($_SESSION["user"])):?>

<div class="container-fluid">
    <div class="row g-0">
        <?php require "views/componet/navbar.php" ?>
        <main class="col-10 bg-secondary">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin">Home</a></li>

                        <li class="breadcrumb-item active" aria-current="page">Destrict List</li>
                    </ol>
                </nav>
                <div class="flex-fill"></div>

            </nav>
            <div class="container-fluid mt-3 p-4">
                <div class="row flex-column flex-lg-row">
                  <div class="w-100 d-flex justify-content-center align-items-center">
                      <table class="table w-50">
                          <thead>
                          <tr>
                              <th scope="col">#</th>
                              <th scope="col">Destrict Name</th>
                              <th scope="col">Add Data Date</th>
                              <th scope="col">Actions</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php if (!($destricts)):?>
                          <tr>
                              <td colspan="4">
                                  <div class="alert alert-danger d-flex justify-content-center align-items-center">Destricts are Empty</div>
                              </td>

                          </tr>
                          <?php endif;?>
                          <?php foreach ($destricts as $destrict):?>

                              <tr>
                                  <td><?php echo $destrict->id?></td>
                                  <td><?php echo $destrict->name?></td>
                                  <td><?php echo $destrict->updated_at?></td>
                                  <td>
                                      <a href="destroyDestrict?id=<?php echo $destrict->id?>" class="btn btn-outline-danger">Delete</a>
                                      <a href="editdestrict?id=<?php echo $destrict->id?>" class="btn btn-outline-primary">Detail</a>
                                  </td>
                              </tr>
                          <?php endforeach;?>


                          </tbody>
                      </table>
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


