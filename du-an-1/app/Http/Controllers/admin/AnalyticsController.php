<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnalyticsController extends Controller
{
    /**
     * @throws \JsonException
     */
    function product(Request $request){
        if($request->ajax()) {
            $product = DB::table('product')
                ->select('CategoryName',
                    'category.CategoryId',
                    DB::raw('COUNT(*) as quantity'),
                    DB::raw('MIN(product.Price) as minPrice'),
                    DB::raw('MAX(product.Price) as maxPrice'),
                    DB::raw('AVG(product.Price) as avgPrice'))
                ->join('category', 'product.CategoryId', '=', 'category.CategoryId')
                ->groupBy('category.CategoryId')
                ->get();
            return json_encode($product, JSON_THROW_ON_ERROR);
        }
            return '404';
    }

}
