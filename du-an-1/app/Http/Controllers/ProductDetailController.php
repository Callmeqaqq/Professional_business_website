<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\HomeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductDetailController extends Controller
{
    function index($slug){
        $data = DB::table('product')
                        ->join('supplier', 'product.SupplierId', '=', 'supplier.SupplierId')
                        ->join('product_image', 'product.ProductId', '=', 'product_image.ProductId')
                        ->join('category', 'product.CategoryId', '=', 'category.CategoryId')
                        ->select('product.*', 'product_image.images','supplier.SupplierName','category.CategoryName','category.CategorySlug')
                        ->where('Slug','=', $slug)
                        -> Get();
        $variant = DB::table('product')
                        ->join('variant', 'product.ProductId', '=', 'variant.ProductId')
                        ->select('variant.*')
                        ->where('Slug','=', $slug)
                        ->Get();
        $comment = DB::table('comment')
                        ->join('product', 'product.ProductId', '=', 'comment.ProductId')
                        ->select('comment.*','product.Slug')
                        ->where('product.Slug','=', $slug)
                        ->Get();
        $idCat = DB::table('product')
            ->select('product.CategoryId')
            ->where('Slug','=',$slug)
            ->get();
        foreach($idCat as $item){
            $dm=$item->CategoryId;
        }
        $relative = DB::table('product')
            ->select('product.*')
            ->where('CategoryId','=',$dm)
            ->where('Slug','!=',$slug)
            ->where('Active','=', 1)
            ->get();

        $sum = 0;
        foreach ($comment as $com){
            $sum = $sum + $com->Rating;
        }
        if(count($comment)==0){
            $star = 0;
        }else{
            $star = $sum / count($comment);
        }

        $accept = false;
        if(session()->has("LoggedUser")){
            $accept = true;
        }
        $quantity =0;
        foreach ($variant as $var){
            $quantity = $quantity + $var->Quantity;
        }

//         dd($comment);
        return view('shop/productdetail', compact('data','variant','comment','relative','accept','star','quantity'));
    }

    function load_comment(Request $request){
        $productId = $request->productId;
        $comment = DB::table('comment')
            ->join('users','users.UserId', '=', 'comment.UserId')
            ->select('comment.*','users.Fullname')
            ->where('ProductId','=',$productId)
            ->get();
//        dd($comment);
        $nd='';
        if(count($comment)==0){
            $nd='<h3>Chưa có đánh giá cho sản phẩm này</h3>';
        }
        else{
            $nd='<h3>'.count($comment).' Đánh giá cho sản phẩm</h3>';
        }

        $output='
            <div class="review-wrapper">
                '.$nd.'
            </div>
        ';
        foreach($comment as $key=>$comm){
            $star1='';
            $star2='';
            for($i = 1; $i <= $comm->Rating; $i++){
                $star1 .='
                <i style="color:#e97730" class="fas fa-star"></i>
            ';
            }
            for($i = 1; $i <= 5-($comm->Rating); $i++){
                $star2 .='
                <i style="color:#e97730" class="far fa-star"></i>
            ';
            }
            $output.='
                <div class="single-review">
                    <div class="review-img">
                        <img src="'.url('/images/users/default.jpg').'" alt="">
                    </div>
                    <div class="review-content">
                        <div class="review-rating">
                              '.$star1.''.$star2.'
                        </div>
                        <h5><span>'.$comm->Fullname.'</span> - Ngày '.date('d-m-Y', strtotime($comm->CreateAt)).'</h5>
                        <p>'.$comm->Content.'</p>
                    </div>
                </div>
            ';
        }
        echo $output;
    }

    function send_comment(Request $request){
        $productId = $request->productId;
        $userId = $request->userId;
        $comment_content = $request->comment_content;
        $commentCreateAt = $request->commentCreateAt;
        $rating = $request->rating;
        DB::table('comment')
            ->insert([
               'ProductId' => $productId,
                'UserId' => $userId,
                'Content' => $comment_content,
                'CreateAt' => $commentCreateAt,
                'Rating' => $rating
            ]);

    }

    function quantity(Request $request){
        $variantId = $request->variantId;
        $quantity = DB::table('variant')->where('variantId','=', $variantId)->get();
        foreach ($quantity as $qua){
            session()->put('quantity',$qua->Quantity);
        }

        $output = '
            <span>Số lượng còn lại: '.session('quantity').'</span>
        ';
        echo $output;
    }
}
