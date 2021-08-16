<?php

namespace App\Composer;

use Illuminate\View\View;
use App\Models\testing_command;

class NewComposer
{
    // private $posts;

    // public function __construct(Post $posts) {
    //   $this->posts = $posts;
    // }
  
    public function compose(View $view) {
      $view->with('testing_command', testing_command::orderBy('name')->get());
    }
}