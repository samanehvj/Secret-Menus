<div class="home">
    <div class="card-columns">

        <?php
        foreach ($this->data as $brand) {
        ?>
            <div class="card d-inline-block mb-4 ">
                <img class="card-img-top" src="imgs/<?= $brand->image ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $brand->name ?></h5>

                    <a href="index.php?action=view&id=<?= $brand->id ?>" class="btn-dark text-light w-25 btn-lg text-center ml-5 " style="font-size: 20px;font-family: ovo;">View</a>
                </div>
            </div>
        <?php
        }
        ?>

        <?php
        foreach ($this->ads as $ad) {
        ?>
            <div class="card d-inline-block ">
                <img class="card-img-top" src="<?= $ad->img ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $ad->name ?></h5>

                    <a href="<?= $ad->link ?>" target="_blank" class="btn-dark text-light w-25 btn-lg text-center ml-5 ">Shop</a>
                </div>
            </div>
        <?php
        }
        ?>

    </div>
</div>