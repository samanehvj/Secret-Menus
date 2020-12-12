<div class="row ">

    <?php

    foreach ($this->data['secret_menus'] as $menu) {

    ?>

        <div class="card my-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="imgs/<?= $menu->image ?>" class="card-img" alt="<?= $menu->names ?>">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $menu->name ?></h5>
                        <p class="card-text"><?= $menu->description ?> </p>
                        <h5 class="text-warning text-center card-title" style="font-size: 35px;font-family: raleway;"> $ <strong><?= $menu->price ?></strong></h5>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }
    ?>
</div>