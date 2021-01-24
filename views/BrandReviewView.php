<div class="row">
    <div class="col-md-10 offset-md-1">
        <a class="btn btn-dark"  href="#review-form">Add Review</a>
    <?php

    foreach ($this->data['reviews'] as $review) {

    ?>

        <div class="row card my-3 border border-warning">
            <div class="col-md-12">
                <div class="card-body">
                    <h5 class="card-title"><?= $review->name ?></h5>
                    <p class="card-text"><?= $review->description ?> </p>
                </div>
            </div>
        </div>

    <?php
    }
    ?>
    </div>
</div>