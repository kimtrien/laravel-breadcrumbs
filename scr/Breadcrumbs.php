<?php
class Breadcrumbs
{
    protected static $breadcrumbs = [];

    public function add($name, $url = null)
    {
        self::$breadcrumbs[] = [
            'name' => $name,
            'url'  => $url
        ];
    }
}