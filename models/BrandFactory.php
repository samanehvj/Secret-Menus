<?php

class BrandFactory
{
    public $id;
    public $name;
    public $image;

    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->image = $data['image'];
    }

    public static function build($data)
    {
        return new BrandFactory($data);
    }
}
