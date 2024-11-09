<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\BlogReview;
use Livewire\Component;
use Livewire\WithPagination;

class BlogPost extends Component
{
    use WithPagination;
    public $slug;
    public $post;
    public $previousPost;
    public $nextPost;
    public $name;
    public $email;
    public $comment;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'comment' => 'required|string',
    ];

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->post = Blog::where('slug', $slug)->firstOrFail();
        $this->previousPost = Blog::where('id', '<', $this->post->id)->orderBy('id', 'desc')->first();
        $this->nextPost = Blog::where('id', '>', $this->post->id)->orderBy('id')->first();
    }

    public function submitReview()
    {
        $this->validate();

        BlogReview::create([
            'blog_id' => $this->post->id,
            'name' => $this->name,
            'email' => $this->email,
            'comment' => $this->comment,
            'approved' => false, // Assuming reviews need admin approval
        ]);

        session()->flash('message', 'Đánh giá của bạn đã được gửi và đang chờ xét duyệt.');

        // Clear form fields after submission
        $this->reset(['name', 'email', 'comment']);
    }

    public function render()
    {
        return view('livewire.blog-post', [
            'post' => $this->post,
            'previousPost' => $this->previousPost,
            'nextPost' => $this->nextPost,
            'reviews' => $this->post->reviews()->paginate(5), // Paginate reviews with 5 per page
        ]);
    }

}
