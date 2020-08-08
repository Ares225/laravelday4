<?php
Route:get('/posts/{post}', function($post){
    $posts = [
          'my-first-post' => 'Hello, this is my first blog post!',
          'my-second-post' => 'Now I am geeting the hang of this blogging thing.'

    ];
    if(!array_key_exists($post,$posts)){
      abort(404,'Sorry,that post was not found.');
    
  
  return view('post',[
         'post' => $posts[$post]
          ])
          });
?>