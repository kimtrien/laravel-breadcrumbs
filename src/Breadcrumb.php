<?php
namespace KjmTrue\Breadcrumbs;

class Breadcrumb
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