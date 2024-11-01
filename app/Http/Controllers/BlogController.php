<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
public function index()
{
// Получаем все посты из базы данных
$posts = Post::all();
return view('blog.index', compact('posts')); // Передаём переменную $posts в представление
}

public function show($id)
{
// Получаем конкретный пост по ID
$post = Post::findOrFail($id);
return view('blog.show', ['post' => $post]); // Передаём пост в представление
}
}
