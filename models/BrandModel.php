<?php

class BrandModel
{
    public static function list()
    {
        $con = DatabaseModel::connect();

        $query = "SELECT * FROM brands";
        $brand_res = mysqli_query($con, $query);

        $brands = array();

        while ($brand = mysqli_fetch_assoc($brand_res)) {
            $brands[] = BrandFactory::build($brand);
        }

        return $brands;
    }

    public static function view($id)
    {
        $con = DatabaseModel::connect();

        $query = "SELECT * FROM brands WHERE id=" . $id;
        $brand_res = mysqli_query($con, $query);
        $brand = mysqli_fetch_assoc($brand_res);

        $brand = BrandFactory::build($brand);

        return $brand;
    }

    // return list of brands that have specefic name
    public static function search($name)
    {
        $con = DatabaseModel::connect();

        $query = "SELECT * FROM brands WHERE name LIKE '%" . $name . "%'";
        $brand_res = mysqli_query($con, $query);

        $brands = array();

        while ($brand = mysqli_fetch_assoc($brand_res)) {
            $brands[] = BrandFactory::build($brand);
        }

        return $brands;
    }

    // return list of brands which have specefic category ID
    public static function filter($category)
    {
        $con = DatabaseModel::connect();

        $query = "SELECT * FROM brands WHERE category_id=" . $category;
        $brand_res = mysqli_query($con, $query);

        $brands = array();

        while ($brand = mysqli_fetch_assoc($brand_res)) {
            $brands[] = BrandFactory::build($brand);
        }

        return $brands;
    }

    public static function secret_menu($id)
    {
        $con = DatabaseModel::connect();

        $query = "SELECT * FROM secret_menus WHERE brand_id=" . $id;
        $res = mysqli_query($con, $query);

        $secretMenus = array();

        while ($menu = mysqli_fetch_assoc($res)) {
            $secretMenus[] = SecretMenuFactory::build($menu);
        }

        return $secretMenus;
    }

    public static function save($request, $file)
    {
        $con = DatabaseModel::connect();
        $img = basename($file["image"]["name"]);





        $target_dir = "imgs/";
        $target_file = $target_dir . basename($file["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if (isset($request["name"])) {
            $check = getimagesize($file["image"]["tmp_name"]);
            if ($check !== false) {
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }

        // Check file size
        if ($file["image"]["size"] > 5000000) {
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $uploadOk = 0;
        }

        $query = "INSERT INTO brands 
                (name, image, category_id) 
            VALUES ('" . $request['name'] . "','" . $img . "', '" . $request['category'] . "' )";

        if (mysqli_query($con, $query)) {
            if ($uploadOk == 0) {

                return false;
            } else {
                if (move_uploaded_file($file["image"]["tmp_name"], $target_file)) {

                    return true;
                } else {

                    return false;
                }
            }
        } else {

            return false;
        }
    }

    public static function savemenu($request, $file)
    {
        $con = DatabaseModel::connect();
        $img = basename($file["image"]["name"]);

        $target_dir = "imgs/";
        $target_file = $target_dir . basename($file["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if (isset($request["name"])) {
            $check = getimagesize($file["image"]["tmp_name"]);
            if ($check !== false) {
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }

        // Check file size
        if ($file["image"]["size"] > 5000000) {
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $uploadOk = 0;
        }




        $query = "INSERT INTO secret_menus 
                (brand_id, name,price,image, description, rating) 
            VALUES ('" . $request['brand_id'] . "', '" . $request['name'] . "','" . $request['price'] . "','" . $img . "', '" . $request['description'] . "', '" . $request['rating'] . "')";

        if (mysqli_query($con, $query)) {
            if ($uploadOk == 0) {

                return false;
            } else {
                if (move_uploaded_file($file["image"]["tmp_name"], $target_file)) {

                    return true;
                } else {

                    return false;
                }
            }
        } else {

            return false;
        }
    }
}
