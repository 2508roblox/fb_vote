<?php

namespace App\Livewire;

use App\Models\Blog as ModelsBlog;
use App\Models\BlogCategory;
use Livewire\Component;

class Blog extends Component
{
    public function render()
    {
        // Lấy tất cả danh mục
        $categories = BlogCategory::all();

        // Lấy 4 bài viết cho mỗi danh mục
        foreach ($categories as $category) {
            $category->posts = ModelsBlog::where('category_id', $category->id)
                ->orderBy('created_at', 'desc')
                ->take(12) // Lấy 4 bài viết
                ->get();
        }
        return view('livewire.blog', [
            'categories' => $categories, // Truyền danh mục vào view
        ]);
    }
}
