<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Category;
use App\Models\Slide;
use App\Models\Product;
use Livewire\Component;

class Home extends Component
{
    public $slides;
    public $categories;
    public $latestPosts;
    public $latestProducts; // Biến để lưu sản phẩm mới nhất

    public function mount()
    {
        // $this->slides = Slide::get();
        // $this->categories = Category::with('subcategories')->get();

        // $this->categories->transform(function ($category) {
        //     $category->random_products = Product::where('category_id', $category->id)
        //         ->inRandomOrder()
        //         ->take(8)
        //         ->get();
        //     return $category;
        // });

        // $this->latestPosts = Blog::latest()->take(8)->get();
        // $this->latestProducts = Product::latest()->take(4)->get(); // Lấy 4 sản phẩm mới nhất
    }

    public function render()
    {
           // Lấy tất cả danh mục
           $this->categories = BlogCategory::all();

           // Lấy 4 bài viết cho mỗi danh mục
           foreach ( $this->categories as $category) {
               $category->posts = Blog::where('category_id', $category->id)
                   ->orderBy('created_at', 'desc')
                   ->take(12) // Lấy 4 bài viết
                   ->get();
           }
           $this->slides = Slide::all(); // Retrieve all slides

        return view('livewire.home', [
            // 'categories' => $this->categories,
            'latestPosts' => $this->latestPosts,
            'latestProducts' => $this->latestProducts, // Truyền sản phẩm mới nhất vào view
            'categories' =>  $this->categories, // Truyền danh mục vào view
            'slides' =>  $this->slides, // Truyền danh mục vào view
        ]);
    }
}
