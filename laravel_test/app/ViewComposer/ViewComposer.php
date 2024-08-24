<?php

namespace App\ViewComposer;

use App\Repositories\UserRepository;
use Illuminate\View\View;

class ViewComposer
{
  function __construct()
  {
  }
  function compose($vw)
  {
    // return $vw->with([
    //   'username' => 'abdelrahman',
    //   'age' => '22',
    // ]);

    return $vw->with([
      'username' => 'abdelrahman',
      'age' => '22',
    ]);
  }
}

// use App\ViewComposer\ViewComposer;
// View::share([]);
// View::composer(['namePage'], ViewComposer::class);