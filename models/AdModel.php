<?php

class AdModel
{
    public static function list()
    {
        $con = DatabaseModel::connect();

        $query = "SELECT * FROM ads";
        $ad_res = mysqli_query($con, $query);

        $ads = array();

        while ($ad = mysqli_fetch_assoc($ad_res)) {
            $ads[] = AdFactory::build($ad);
        }

        return $ads;
    }
}
