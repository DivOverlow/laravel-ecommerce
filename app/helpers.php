<?php

function presentPrice($price)
{
//    return money_format('$%i', $price / 100);
    return '$' . number_format($price / 100, 2);
}

function setActiveCategory($category, $output = 'active')
{
    return request()->category == $category ? $output : '';
}

function productImage($path)
{
    return ($path && file_exists('storage/'.$path)) ? asset('storage/'.$path) : asset('img/no_image.png');
}
