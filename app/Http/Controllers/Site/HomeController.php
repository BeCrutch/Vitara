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
      $sku = [21650];
      $hot_deal_product = Product::where('details->published', 1)->whereIn('details->sku', $sku)->get();

      return view('site.home.index', compact('hot_deal_product'));
  }
}
