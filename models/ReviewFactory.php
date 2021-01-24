<?php

class ReviewFactory
{
    public $id;
    public $brand_id;
    public $name;
    public $description;

    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->brand_id = $data['brand_id'];
        $this->name = $data['name'];
        $this->description = $data['description'];
    }

    public static function build($data)
    {
        return new ReviewFactory($data);
    }
}
