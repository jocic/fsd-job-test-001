<?php

namespace Database\Seeders;

use App\Models\Product;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Product #1
        
        $product = $this->product('smartphone-xyz123');
        
        if (!$product->exists)
        {
            File::copy(resource_path('dummy-products/1.png'), storage_path('app/public/products/dummy-1.jpg'));
            
            $product->title     = 'SmartPhone XYZ123';
            $product->img_cover = asset('/storage/products/dummy-1.jpg');
            $product->slug      = 'smartphone-xyz123';
            $product->tagline   = 'Lorem ipsum sit dolorem, remedium remedire remedium...';
            $product->status    = 'ACTIVE';
            
            $product->save();
        }
        
        // Product #2
        
        $product = $this->product('playstation-5');
        
        if (!$product->exists)
        {
            File::copy(resource_path('dummy-products/2.png'), storage_path('app/public/products/dummy-2.jpg'));
            
            $product->title     = 'PlayStation 5';
            $product->img_cover = asset('/storage/products/dummy-2.jpg');
            $product->slug      = 'playstation-5';
            $product->tagline   = 'Lorem ipsum sit dolorem, remedium remedire remedium...';
            $product->status    = 'ACTIVE';
            
            $product->save();
        }
        
        // Product #3
        
        $product = $this->product('monitor-xxx-100');
        
        if (!$product->exists)
        {
            File::copy(resource_path('dummy-products/3.png'), storage_path('app/public/products/dummy-3.jpg'));
            
            $product->title     = 'Monitor XXX-100';
            $product->img_cover = asset('/storage/products/dummy-3.jpg');
            $product->slug      = 'monitor-xxx-100';
            $product->tagline   = 'Lorem ipsum sit dolorem, remedium remedire remedium...';
            $product->status    = 'ACTIVE';
            
            $product->save();
        }
        
        // Product #4
        
        $product = $this->product('xbox-one');
        
        if (!$product->exists)
        {
            File::copy(resource_path('dummy-products/4.png'), storage_path('app/public/products/dummy-4.jpg'));
            
            $product->title     = 'X-Box One';
            $product->img_cover = asset('/storage/products/dummy-4.jpg');
            $product->slug      = 'xbox-one';
            $product->tagline   = 'Lorem ipsum sit dolorem, remedium remedire remedium...';
            $product->status    = 'ACTIVE';
            
            $product->save();
        }
        
        // Product #5
        
        $product = $this->product('laptop-chp-100');
        
        if (!$product->exists)
        {
            File::copy(resource_path('dummy-products/5.png'), storage_path('app/public/products/dummy-5.jpg'));
            
            $product->title     = 'Laptop CHP-100';
            $product->img_cover = asset('/storage/products/dummy-5.jpg');
            $product->slug      = 'laptop-chp-100';
            $product->tagline   = 'Lorem ipsum sit dolorem, remedium remedire remedium...';
            $product->status    = 'ACTIVE';
            
            $product->save();
        }
        
        // Product #6
        
        $product = $this->product('laptop-chp-200');
        
        if (!$product->exists)
        {
            File::copy(resource_path('dummy-products/6.png'), storage_path('app/public/products/dummy-6.jpg'));
            
            $product->title     = 'Laptop CHP-200';
            $product->img_cover = asset('/storage/products/dummy-6.jpg');
            $product->slug      = 'laptop-chp-200';
            $product->tagline   = 'Lorem ipsum sit dolorem, remedium remedire remedium...';
            $product->status    = 'ACTIVE';
            
            $product->save();
        }
    }

    protected function product($slug)
    {
        return Product::firstOrNew([
            'slug' => $slug,
        ]);
    }
}
