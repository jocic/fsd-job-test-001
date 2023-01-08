<?php

/*************************************************\
|* Author: Djordje Jocic <office@eledgen.com>    *|
|* --------------------------------------------- *|
|* Year: 2022                                    *|
|* Version: 1.0.0                                *|
|* --------------------------------------------- *|
|* Filename: seeders.php                         *|
\*************************************************/

return [
    
    'menu_items' => [
        'products' => 'Products',
        'variants' => 'Variants',
    ],
    
    'data_types' => [
        
        'product' => [
            'singular' => 'Product',
            'plural'   => 'Products',
        ],
        
        'product_variant' => [
            'singular' => 'Product Variants',
            'plural'   => 'Product Variants',
        ]
    ],
    
    'data_rows' => [
        'active'         => 'Active',
        'slug'           => 'Slug',
        'img_cover'      => 'Cover',
        'tagline'        => 'Tagline',
        'description'    => 'Description',
        'price'          => 'Price',
        'product'        => 'Product',
        'parent'         => 'Parent',
        'parent_product' => 'Parent Product',
    ],
    
];
