<div class="row p-5 ">
    <div class="col col-md-8 offset-md-2 bg-light">
        <form method="post" enctype="multipart/form-data" action="index.php?action=savereview" class="my-5" id="review-form">
            <input type="hidden" name="brand_id" value="<?= $this->data['brand']->id ?>">
            <div class="form-group">
                <label for="name">Name </label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Your Full Name">
            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <textarea name="description" class="form-control" id="desc" rows="3"></textarea>
            </div>
            <button type="submit" class="btn bg-nav mb-2">Add Review</button>
        </form>
    </div>
</div>