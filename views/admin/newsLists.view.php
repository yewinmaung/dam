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

                        <li class="breadcrumb-item active" aria-current="page">Posts List</li>
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
                                <th scope="col">Title</th>
                                <th scope="col">Updated Date</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php if ($posts):?>
                                    <?php foreach ($posts as $post):?>
                                        <tr>
                                            <td><?php echo $post->id?></td>
                                            <td><?php echo $post->title?></td>
                                            <td><?php echo $post->updated_at?></td>
                                            <td>
                                                <a href="destoryPost?id=<?php echo $post->id?>" class="btn btn-outline-danger">Delete</a>
                                                <a href="detailPost?id=<?php echo $post->id?>" class="btn btn-outline-primary">Detail</a>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php else:?>
                                <tr>
                                    <td colspan="4">
                                        <div class="">
                                            <p class="d-flex justify-content-center alert alert-danger">No Posts</p>
                                        </div>
                                    </td>
                                </tr>
                                <?php endif;?>

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


