<?php require "views/componet/userhead.php" ?>
<section class="category_section layout_padding" id="dam">
    <div class="container">

        <div class="row">
            <h2 class="d-flex justify-content-center w-100 py-3">Dams</h2>
            <div class="d-flex justify-content-center w-100 pb-5">
                <div class="underline"></div>
            </div>
            <?php foreach ($dams as $dam):?>
                <div class="col-12 col-md-12 px-2 mb-1 d-flex justify-content-center align-items-center">

                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $dam->img?>" class="card-img-top" alt="...">
                        <div class="card-body text-dark">
                            <h5 class="card-title"><?php echo $dam->name?></h5>
                            <p class="card-text">
                                <table class="text-left">
                                <tr>
                                    <td>Destrict :</td>
                                    <td> <?php foreach ($destricts as $destrict):?>
                                            <?php echo $destrict->id===$dam->district_id ? $destrict->name:null?>
                                        <?php endforeach;?></td>
                                </tr>
                                <tr>
                                    <td>Town :</td>
                                    <td> <?php foreach ($towns as $town):?>
                                            <?php echo $town->id===$dam->town_id ? $town->name:null?>
                                        <?php endforeach;?></td>
                                </tr>
                                <tr>
                                    <td>Mass :</td>
                                    <td> <?php echo $dam->mass?></td>
                                </tr>
                                <tr>
                                    <td>Date :</td>
                                    <td><?php echo $dam->date?></td>
                                </tr>
                                <tr>
                                    <td>Description :</td>
                                    <td><?php echo $dam->description?></td>
                                </tr>
                                <tr class="">
                                   <td class="pt-3">

                                       <a href="home" class="btn btn-outline-primary">
                                        Back
                                       </a>
                                   </td>
                                </tr>
                            </table>


                            </p>

                        </div>
                    </div>

                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>
<?php require "views/componet/userfoot.php"?>
