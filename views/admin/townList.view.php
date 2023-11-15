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

                        <li class="breadcrumb-item active" aria-current="page">Town List</li>
                    </ol>
                </nav>
                <div class="flex-fill"></div>

            </nav>
            <div class="container-fluid mt-3 p-4">
                <div class="row flex-column flex-lg-row">
                    <div class="w-100 d-flex justify-content-center align-items-center">
                        <table class="table w-50 bg-primary">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Town</th>
                                <th scope="col">Destrict ID</th>
                                <th scope="col">Add Data Date</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (!($towns)):?>
                                <tr>
                                    <td colspan="5">
                                        <div class="alert alert-danger d-flex justify-content-center align-items-center">Towns are Empty</div>
                                    </td>

                                </tr>
                            <?php endif;?>
                            <?php foreach ($towns as $town):?>

                                <tr>
                                    <td><?php echo $town->id?></td>
                                    <td><?php echo $town->name?></td>

                                    <td> <?php foreach ($destricts as $destrict):?>
                                            <?php echo $destrict->id===$town->destrict_id ? $destrict->name:null?>
                                        <?php endforeach;?></td>

                                    <td><?php echo $town->updated_at?></td>
                                    <td>
                                        <a href="destoryTown?id=<?php echo $town->id?>" class="btn btn-outline-danger">Delete</a>
                                        <a href="editTown?id=<?php echo $town->id?>" class="btn btn-outline-primary">Detail</a>
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


