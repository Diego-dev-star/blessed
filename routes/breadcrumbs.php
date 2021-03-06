<?php
/**
 * Created by PhpStorm.
 * User: Witalij Coder
 * Date: 26.11.2020
 * Time: 14:15
 */
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// Home > About
Breadcrumbs::for('news', function ($trail) {
    $trail->parent('home');
    $trail->push('News', route('news'));
});

// Home > Blog
Breadcrumbs::for('blog', function ($trail) {
    $trail->parent('home');
    $trail->push('News', route('news'));
});

// Home > Blog > [Category]
Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category->id));
});

// Home > Blog > [Category] > [Post]
Breadcrumbs::for('post', function ($trail, $post) {
    $trail->parent('category', $post->category);
    $trail->push($post->title, route('post', $post->id));
});