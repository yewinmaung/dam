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
                        <li class="breadcrumb-item active" aria-current="page">Dam List</li>
                    </ol>
                </nav>
                <div class="flex-fill"></div>

            </nav>
            <div class="container-fluid mt-3 p-4">
                <div class="row flex-column flex-lg-row">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Destrict</th>
                            <th scope="col">Town</th>
                            <th scope="col">Date</th>
                            <th scope="col">Mass</th>
                            <th scope="col">Description</th>
                            <th scope="col">Updated-at</th>
                            <th scope="col">Actions</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php if (!($dams)):?>
                        <tr>
                            <td colspan="10">
                                <div class="alert alert-danger d-flex justify-content-center align-items-center">Dams are Empty</div>

                            </td>
                        </tr>
                            <?php endif;?>
                        <?php foreach ($dams as $dam):?>
                        <tr>
                            <td><?php echo $dam->id?></td>
                            <td><?php echo $dam->name?></td>
<!--                            <td>-->
<!--                                <img src="upload_img/6547cf85d6d24_54516007_2304383332953940_9039741049416712192_n.jpg" width="60" height="60" alt="">-->
<!--                            </td>-->
                            <td><img src="<?php echo $dam->img?>" width="60" height="60" alt=""></td>


                            <td>
                                <?php foreach ($destricts as $destrict):?>
                                <?php echo $destrict->id===$dam->district_id ? $destrict->name:null?>
                                <?php endforeach;?>
                            </td>

                            <td>
                                <?php foreach ($towns as $town):?>
                                    <?php echo $town->id===$dam->town_id ? $town->name:null?>
                                <?php endforeach;?>
                            </td>
                            <td><?php echo $dam->date?></td>
                            <td><?php echo $dam->mass?></td>
                            <td><?php echo $dam->description?></td>
                            <td><?php echo $dam->updated_at?></td>
                            <td>
                                <a href="destoryDam?id=<?php echo $dam->id?>" class="btn btn-outline-danger">Delete</a>
                                <a href="editDam?id=<?php echo $dam->id?>" class="btn btn-outline-primary">Detail</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
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


