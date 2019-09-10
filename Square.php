<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:16
 */
include_once ('Rectangle.php');
include_once "Resizeable.php";
class Square extends Rectangle implements Resizeable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }
    public function resize($objShape,$percent)
    {
       $resize = $percent/100;
       $objShape->width = $objShape->width*$resize + $objShape->width;
    }
}