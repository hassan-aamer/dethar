<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\Blogs\BlogService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected BlogService $service;

    public function __construct(BlogService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request, $category)
    {
        $result = $this->service->index($request)->where('active', 1)->where('blog_category_id', $category);
        return view('web.pages.blogs.index', compact('result'));
    }
    public function show(Request $request, $id)
    {
        $blog = $this->service->show($id);
        $result = [
            'blogs' => $this->service->index($request)->where('blog_category_id', $blog->blog_category_id)->where('active', 1),
            'blog' => $blog,
        ];
        return view('web.pages.blogs.show', compact('result'));
    }
}
