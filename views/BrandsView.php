<div class="home">
    <div class="card-columns">

        <?php
        foreach ($this->data as $brand) {
        ?>
            <div class="card d-inline-block">
                <img class="card-img-top" src="imgs/<?= $brand->image ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $brand->name ?></h5>

                    <a href="index.php?action=view&id=<?= $brand->id ?>" class="btn bg-info text-light btn-block" style="font-size: 20px;font-family: Vollkorn;">View</a>
                </div>
            </div>
        <?php
        }
        ?>

    </div>
</div>