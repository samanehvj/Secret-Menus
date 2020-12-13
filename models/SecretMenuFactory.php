<?php

class SecretMenuFactory
{
    public $id;
    public $brand_id;
    public $name;
    public $price;
    public $image;
    public $description;

    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->brand_id = $data['brand_id'];
        $this->name = $data['name'];
        $this->price = $data['price'];
        $this->image = $data['image'];
        $this->description = $data['description'];
    }

    public static function build($data)
    {
        return new SecretMenuFactory($data);
    }
}
