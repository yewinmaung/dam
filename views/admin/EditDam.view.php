<?php require "views/componet/header.php" ?>
<body>
<?php if (isset($_SESSION["user"])):?>
<div class="container-fluid">
    <div class="row g-0">
        <?php require "views/componet/navbar.php"?>
        <main class="col-10 bg-secondary">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Update Dam</li>
                    </ol>
                </nav>
                <div class="flex-fill"></div>

            </nav>
            <div class="container-fluid mt-3 p-4">
                <div class="row flex-column flex-lg-row">
                    <div class="">


                        <form action="#" method="post" enctype="multipart/form-data" class="w-100 d-flex justify-content-center align-items-center">
                            <?php foreach ($dams as $dam):?>
                            <div class="card w-50 p-2">
                                <div class="row mb-3">
                                    <div class="col-sm-10 w-100 ">

                                        <img src="<?php echo $dam->img?>" class="mb-2" width="60" height="60" alt="">
                                        <br>
                                        <input type="file" name="image" />
                                    </div>
                                </div>


                                <div class="form-floating mb-3">
                                    <input type="text" name="name" value="<?php echo $dam->name;?>" placeholder="Dam name" class="form-control" id="inputEmail3">
                                    <label for="floatingInput">Dam Name</label>
                                </div>

                                <div class="row mb-3">
                                    <label for="floatingInput" class="mb-1">Destrict</label>
                                    <div class="col-sm-10 w-100">
                                        <select required class="form-select" name="destrict">
                                            <?php foreach ($destricts as $destrict):?>
                                            <option value="<?php echo $destrict->id;?>" <?php echo $destrict->id===$dam->district_id ?'selected="selected"' :'' ?>><?php echo $destrict->name?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="floatingInput" class="mb-1">Town</label>
                                    <div class="col-sm-10 w-100">
                                        <select required class="form-select" name="town">
                                            <?php foreach ($towns as $town):?>
                                                <option value="<?php echo $town->id?>" <?php echo $town->id===$dam->town_id ?'selected="selected"' :'' ?>><?php echo $town->name?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-floating mb-3">
                                    <input type="date" name="date" placeholder="Dam name" class="form-control" id="inputEmail3">
                                    <label for="floatingInput">Date</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" value="<?php echo $dam->mass?>" name="mass" placeholder="Dam name" class="form-control" id="inputEmail3">
                                    <label for="floatingInput">Mass</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" name="desc" style=""><?php echo $dam->description?>
                                    </textarea>
                                    <label for="floatingTextarea2">Description</label>
                                </div>
                                <div class="row mb-3 w-100 d-flex justify-content-end">
                                    <a href="damlist" class="btn-width btn btn-outline-primary ">Back</a>
                                    <button type="reset" class="btn-width btn btn-outline-danger mx-2">Cancel</button>
                                    <button type="submit" class="btn-width btn btn-outline-primary">Update</button>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </form>

                    </div>

                </div>
            </div>
        </main>


        <?php require "views/componet/fooder.php" ?>
    </div>
</div>
<?php else:
    $login[]="error";
    view("admin/login", ["login" => $login]);
    ?>
<?php endif;?>
</body>
