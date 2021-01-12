<div class="row p-5 ">
    <div class="col col-md-8 offset-md-2 bg-light">
        <form method="post" enctype="multipart/form-data" action="index.php?action=save" class="my-5">
            <div class="form-group">
                <label for="name" style="font-size: 20px;font-family: Vollkorn;">Brand Name </label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Missing Brand Name">
            </div>

            <div class="form-group">
                <label for="category" style="font-size: 20px;font-family: Vollkorn;">Category</label>
                <select name="category" class="form-control" id="category">
                    <?php
                    $categories = CategoryModel::list();

                    foreach ($categories as $category) {
                    ?>
                        <option value="<?= $category->id ?>"><?= $category->name ?></option>
                    <?php
                    }

                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="image" style="font-size: 20px;font-family: Vollkorn;">Image</label>
                <input name="image" type="file" class="form-control-file" id="image">
            </div>

            <button type="submit" class="btn btn-dark text-light mb-2" style="font-family: ovo;">Submit</button>
        </form>
    </div>
</div>