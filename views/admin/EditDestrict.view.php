
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
                        <li class="breadcrumb-item active" aria-current="page">Add Destrict</li>
                    </ol>
                </nav>
                <div class="flex-fill"></div>

            </nav>
            <div class="container-fluid mt-3 p-4">
                <div class="row flex-column flex-lg-row">
                    <div class="">
                        <form action="destrictUpdate" method="post" class="w-100 d-flex justify-content-center align-items-center">

                            <div class="card w-50 p-2">
                                <div class="row mb-3">

                                    <div class="col-sm-10 w-100">
                                        <?php
                                        foreach ($destricts as $destrict):?>
                                            <input type="hidden" name="id" value=" <?php echo $destrict->id ;?>"
                                                   placeholder="Destrict name" class="form-control" id="inputEmail3">
                                        <input type="text" name="name" value="<?php echo $destrict->name ;?>" placeholder="Destrict name" class="form-control" id="inputEmail3">
                                        <?php endforeach;?>
                                    </div>
                                </div>

                                <div class="row mb-3 w-100 d-flex justify-content-end">
                                    <a href="destrictlist" class="btn-width btn btn-outline-primary ">Back</a>
                                    <button type="reset" class="btn-width btn btn-outline-danger mx-2">Cancel</button>
                                    <button type="submit" class="btn-width btn btn-outline-primary">Update</button>
                                </div>
                            </div>

                        </form>

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


