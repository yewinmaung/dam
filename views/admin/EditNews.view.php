
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
                        <li class="breadcrumb-item active" aria-current="page">Update Post</li>
                    </ol>
                </nav>
                <div class="flex-fill"></div>

            </nav>
            <div class="container-fluid mt-3 p-4">
                <div class="row flex-column flex-lg-row">
                    <div class="">


                        <form action="updatePost" method="post" enctype="multipart/form-data" class="w-100 d-flex justify-content-center align-items-center">
                            <?php foreach ($posts as $post):?>
                            <div class="card w-50 p-2">
                                <input type="hidden" value="<?php echo $post->id?>" name="id" class="form-control">

                                <div class="form-floating mb-3">
                                   <input type="text" value="<?php echo $post->title?>" name="title" placeholder="Post Title" class="form-control" id="inputEmail3">
                                    <label for="floatingInput">Post Title</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" name="desc" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"><?php echo $post->description?></textarea>
                                    <label for="floatingTextarea2">Description</label>
                                </div>
                                <div class="row mb-3 w-100 d-flex justify-content-end">
                                    <a href="post" class="btn-width btn btn-outline-primary">Back</a>
                                    <button type="reset" class="btn-width btn btn-outline-danger mx-1">Cancel</button>
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
