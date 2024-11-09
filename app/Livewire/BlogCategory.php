<?php

namespace App\Livewire;

use App\Models\BlogCategory as ModelsBlogCategory;
use Livewire\Component;

class BlogCategory extends Component
{
    public $category;
    public $categoryName;

    public function mount($slug)
    {
        $this->category = ModelsBlogCategory::where('slug', $slug)->firstOrFail();
        $this->categoryName = $this->category->name;
    }

    public function render()
    {
        return view('livewire.blog-category', [
            'blogs' => $this->category->blogs, // Fetch posts from the category
            'categoryName' => $this->categoryName
        ]);
    }
}
