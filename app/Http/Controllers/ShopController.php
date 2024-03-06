<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ShopController extends Controller
{
    public function __invoke()
    {
        $categories = Category::tree()->get()->toTree();

        return view('pages/shop/shop', [
            'categories' => $categories
        ]);
    }
}
