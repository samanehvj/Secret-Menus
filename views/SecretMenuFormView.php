<div class="row p-5 ">
    <div class="col col-md-8 offset-md-2 bg-light">
        <form method="post" enctype="multipart/form-data" action="index.php?action=savemenu" class="my-5">
            <input type="hidden" name="brand_id" value="<?= $this->data['brand']->id ?>">
            <div class="form-group">
                <label for="name">Food Name </label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Missing Brand Name">
            </div>

            <div class="form-group">
                <label for="price">Food Price : </label>
                <input name="price" type="text" class="form-control" id="price" placeholder="Missing Brand Name">
            </div>

            <div class="form-group">
                <label for="rating">Rating : </label>
                <select name="rating" id="rating">
                    <option value="0">Rate the Food</option>
                    <option value="1">Very Bad</option>
                    <option value="2">Bad</option>
                    <option value="3">Normal</option>
                    <option value="4">Good</option>
                    <option value="5">Very Good</option>
                </select>

            </div>

            <div class="form-group">
                <label for="desc">Description</label>
                <textarea name="description" class="form-control" id="desc" rows="3"></textarea>
            </div>



            <div class="form-group">
                <label for="image">Image</label>
                <input name="image" type="file" class="form-control-file" id="image">
            </div>

            <button type="submit" class="btn bg-nav mb-2">Submit</button>
        </form>
    </div>
</div>