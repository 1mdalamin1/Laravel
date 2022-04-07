<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class ManyToManyController extends Controller
{
    public function index()
    {
        return Tag::with('posts')->find(1); // tag wayse post show

        
        // $post = Post::find(1)->tags()->attach([1, 3]); // for crate/insert 1st post tags
        // $post = Post::find(1)->tags()->detach([1]); // for delete 1st post 1tag
        $post = Post::find(1)->tags()->sync([1, 3, 2, 4, 7]); // for insert_or_update 1st post 1tag
        // $post = Post::find(1)->tags()->toggle([3, 2, 5]); // for insert_or_delete 1st post 1tag |-> mean same data id delete withen new data id update
        $post = Post::with('tags')->find(1); // for read 1st post with tags

        return $post;
    }
}
