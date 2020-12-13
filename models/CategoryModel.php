<?php

class CategoryModel
{
    public static function list()
    {
        $con = DatabaseModel::connect();

        $query = "SELECT * FROM categories";
        $res = mysqli_query($con, $query);

        $date = array();

        while ($item = mysqli_fetch_assoc($res)) {
            $data[] = CategoryFactory::build($item);
        }

        return $data;
    }
}
