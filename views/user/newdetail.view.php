<?php require "views/componet/userhead.php" ?>
<section class="category_section layout_padding" id="dam">
    <div class="container">

        <div class="row">
            <h2 class="d-flex justify-content-center w-100 py-3">Dams</h2>
            <div class="d-flex justify-content-center w-100 pb-5">
                <div class="underline"></div>
            </div>
            <?php foreach ($posts as $post):?>
                <div class="col-12 col-md-12 px-2 mb-1 d-flex justify-content-center align-items-center">

                    <div class="card text-dark">
                        <div class="card-header h5 d-flex justify-content-between">
                          <div class="">  <?php echo $post->title?></div>
                           <div class="">
                               <?php echo $post->updated_at?>
                           </div>
                        </div>
                        <div class="card-body">
                            <p class="text-left">Description :</p>
                            <p class="card-text"><?php echo $post->description?></p>
                            <a href="home" class="btn btn-outline-primary">Back</a>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>
<?php require "views/componet/userfoot.php"?>

