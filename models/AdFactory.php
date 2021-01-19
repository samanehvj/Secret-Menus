<?php

class AdFactory
{
    public $id;
    public $name;
    public $img;
    public $link;

    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->img = $data['img'];
        $this->link = $data['link'];
    }

    public static function build($data)
    {
        return new AdFactory($data);
    }
}
