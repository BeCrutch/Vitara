<?php
namespace App\Http\Controllers\Site;

use App\Resource;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\Cache;

class HomeController
{
  public function index()
  {
    return view('site.home.index');
  }
}
