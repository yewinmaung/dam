
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
                    <div class="d-flex justify-content-center align-items-center">


                        <?php foreach ($messages as $message):?>
                            <div class="card text-center w-75">
                                <div class="card-header d-flex justify-content-start">
                                    <h5 class="">Name :  <?php echo $message->name?></h5>

                                </div>
                                <div class="card-body">
                                    <h5 class="card-title d-flex justify-content-start">Title :<?php echo $message->title?></h5>
                                    <div class="form-control mb-3">
                                        <textarea class="form-control" style="height: 100px"><?php echo $message->description?>
                                        </textarea>
                                    </div>
                                    <div class="">
                                        <form action="reply" method="post" class="">
                                            <input type="hidden" name="id" value="<?php echo $message->id ?>">
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" name="reply" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                                <label for="floatingTextarea2">Reply</label>
                                            </div>
                                            <button class="btn btn-outline-primary">
                                                Send
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="card-footer text-muted">
                                    <?php echo $message->updated_at?>
                                </div>
                            </div>
                            <?php endforeach;?>


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
