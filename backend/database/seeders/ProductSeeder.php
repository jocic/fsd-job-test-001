<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductVariant;
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
            // Product
            
            File::copy(resource_path('dummy-products/1.png'), storage_path('app/public/products/dummy-1.png'));
            
            $product->title     = 'SmartPhone XYZ123';
            $product->img_cover = asset('/storage/products/dummy-1.png');
            $product->slug      = 'smartphone-xyz123';
            $product->tagline   = 'Lorem ipsum sit dolorem, remedium remedire remedium...';
            $product->status    = 'ACTIVE';
            
            $product->save();
            
            // Variant #1 (Main)
            
            $variant = new ProductVariant();
            
            File::copy(resource_path('dummy-products/1-v1.png'), storage_path('app/public/product-variants/dummy-1-v1.png'));
            
            $variant->title       = $product->title . ' (Black)';
            $variant->img_cover   = asset('/storage/product-variants/dummy-1-v1.png');
            $variant->description = 'Lorem ipsum sit dolorem, remedium remedire remedium...';
            $variant->price       = 100.0;
            $variant->product_id  = $product->id;
            
            $variant->save();
            
            // Variant #2
            
            $variant = new ProductVariant();
            
            File::copy(resource_path('dummy-products/1-v2.png'), storage_path('app/public/product-variants/dummy-1-v2.png'));
            
            $variant->title       = $product->title . ' (Red)';
            $variant->img_cover   = asset('/storage/product-variants/dummy-1-v2.png');
            $variant->description = 'Lorem ipsum sit dolorem, remedium remedire remedium...';
            $variant->price       = 110.0;
            $variant->product_id  = $product->id;
            
            $variant->save();
            
            // Variant #3
            
            $variant = new ProductVariant();
            
            File::copy(resource_path('dummy-products/1-v3.png'), storage_path('app/public/product-variants/dummy-1-v3.png'));
            
            $variant->title       = $product->title . ' (Blue)';
            $variant->img_cover   = asset('/storage/product-variants/dummy-1-v3.png');
            $variant->description = 'Lorem ipsum sit dolorem, remedium remedire remedium...';
            $variant->price       = 120.0;
            $variant->product_id  = $product->id;
            
            $variant->save();
        }
        
        // Product #2
        
        $product = $this->product('playstation-5');
        
        if (!$product->exists)
        {
            File::copy(resource_path('dummy-products/2.png'), storage_path('app/public/products/dummy-2.png'));
            
            $product->title     = 'PlayStation 5';
            $product->img_cover = asset('/storage/products/dummy-2.png');
            $product->slug      = 'playstation-5';
            $product->tagline   = 'Lorem ipsum sit dolorem, remedium remedire remedium...';
            $product->status    = 'ACTIVE';
            
            $product->save();
            
            // Variant #1 (Main)
            
            $variant = new ProductVariant();
            
            File::copy(resource_path('dummy-products/2-v1.png'), storage_path('app/public/product-variants/dummy-2-v1.png'));
            
            $variant->title       = $product->title;
            $variant->img_cover   = asset('/storage/product-variants/dummy-2-v1.png');
            $variant->description = 'Lorem ipsum sit dolorem, remedium remedire remedium...';
            $variant->price       = 200.0;
            $variant->product_id  = $product->id;
            
            $variant->save();
        }
        
        // Product #3
        
        $product = $this->product('monitor-xxx-100');
        
        if (!$product->exists)
        {
            File::copy(resource_path('dummy-products/3.png'), storage_path('app/public/products/dummy-3.png'));
            
            $product->title     = 'Monitor XXX-100';
            $product->img_cover = asset('/storage/products/dummy-3.png');
            $product->slug      = 'monitor-xxx-100';
            $product->tagline   = 'Lorem ipsum sit dolorem, remedium remedire remedium...';
            $product->status    = 'ACTIVE';
            
            $product->save();
            
            // Variant #1 (Main)
            
            $variant = new ProductVariant();
            
            File::copy(resource_path('dummy-products/3-v1.png'), storage_path('app/public/product-variants/dummy-3-v1.png'));
            
            $variant->title       = $product->title;
            $variant->img_cover   = asset('/storage/product-variants/dummy-3-v1.png');
            $variant->description = 'Lorem ipsum sit dolorem, remedium remedire remedium...';
            $variant->price       = 50.0;
            $variant->product_id  = $product->id;
            
            $variant->save();
        }
        
        // Product #4
        
        $product = $this->product('xbox-one');
        
        if (!$product->exists)
        {
            File::copy(resource_path('dummy-products/4.png'), storage_path('app/public/products/dummy-4.png'));
            
            $product->title     = 'X-Box One';
            $product->img_cover = asset('/storage/products/dummy-4.png');
            $product->slug      = 'xbox-one';
            $product->tagline   = 'Lorem ipsum sit dolorem, remedium remedire remedium...';
            $product->status    = 'ACTIVE';
            
            $product->save();
            
            // Variant #1 (Main)
            
            $variant = new ProductVariant();
            
            File::copy(resource_path('dummy-products/4-v1.png'), storage_path('app/public/product-variants/dummy-4-v1.png'));
            
            $variant->title       = $product->title . ' (Black)';
            $variant->img_cover   = asset('/storage/product-variants/dummy-4-v1.png');
            $variant->description = 'Lorem ipsum sit dolorem, remedium remedire remedium...';
            $variant->price       = 140.0;
            $variant->product_id  = $product->id;
            
            $variant->save();
            
            // Variant #2
            
            $variant = new ProductVariant();
            
            File::copy(resource_path('dummy-products/4-v2.png'), storage_path('app/public/product-variants/dummy-4-v2.png'));
            
            $variant->title       = $product->title . ' (Red)';
            $variant->img_cover   = asset('/storage/product-variants/dummy-4-v2.png');
            $variant->description = 'Lorem ipsum sit dolorem, remedium remedire remedium...';
            $variant->price       = 160.0;
            $variant->product_id  = $product->id;
            
            $variant->save();
            
            // Variant #3
            
            $variant = new ProductVariant();
            
            File::copy(resource_path('dummy-products/4-v3.png'), storage_path('app/public/product-variants/dummy-4-v3.png'));
            
            $variant->title       = $product->title . ' (Blue)';
            $variant->img_cover   = asset('/storage/product-variants/dummy-4-v3.png');
            $variant->description = 'Lorem ipsum sit dolorem, remedium remedire remedium...';
            $variant->price       = 125.0;
            $variant->product_id  = $product->id;
            
            $variant->save();
        }
        
        // Product #5
        
        $product = $this->product('laptop-chp-100');
        
        if (!$product->exists)
        {
            File::copy(resource_path('dummy-products/5.png'), storage_path('app/public/products/dummy-5.png'));
            
            $product->title     = 'Laptop CHP-100';
            $product->img_cover = asset('/storage/products/dummy-5.png');
            $product->slug      = 'laptop-chp-100';
            $product->tagline   = 'Lorem ipsum sit dolorem, remedium remedire remedium...';
            $product->status    = 'ACTIVE';
            
            $product->save();
            
            // Variant #1 (Main)
            
            $variant = new ProductVariant();
            
            File::copy(resource_path('dummy-products/5-v1.png'), storage_path('app/public/product-variants/dummy-5-v1.png'));
            
            $variant->title       = $product->title;
            $variant->img_cover   = asset('/storage/product-variants/dummy-5-v1.png');
            $variant->description = 'Lorem ipsum sit dolorem, remedium remedire remedium...';
            $variant->price       = 250.0;
            $variant->product_id  = $product->id;
            
            $variant->save();
        }
        
        // Product #6
        
        $product = $this->product('laptop-chp-200');
        
        if (!$product->exists)
        {
            File::copy(resource_path('dummy-products/6.png'), storage_path('app/public/products/dummy-6.png'));
            
            $product->title     = 'Laptop CHP-200';
            $product->img_cover = asset('/storage/products/dummy-6.png');
            $product->slug      = 'laptop-chp-200';
            $product->tagline   = 'Lorem ipsum sit dolorem, remedium remedire remedium...';
            $product->status    = 'ACTIVE';
            
            $product->save();
            
            // Variant #1 (Main)
            
            $variant = new ProductVariant();
            
            File::copy(resource_path('dummy-products/6-v1.png'), storage_path('app/public/product-variants/dummy-6-v1.png'));
            
            $variant->title       = $product->title;
            $variant->img_cover   = asset('/storage/product-variants/dummy-6-v1.png');
            $variant->description = 'Lorem ipsum sit dolorem, remedium remedire remedium...';
            $variant->price       = 150.0;
            $variant->product_id  = $product->id;
            
            $variant->save();
        }
    }

    protected function product($slug)
    {
        return Product::firstOrNew([
            'slug' => $slug,
        ]);
    }
}
