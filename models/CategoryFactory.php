<?php

class CategoryFactory
{
    public $id;
    public $name;

    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
    }

    public static function build($data)
    {
        return new CategoryFactory($data);
    }
}
