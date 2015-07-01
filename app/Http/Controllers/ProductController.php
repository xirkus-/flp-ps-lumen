<?php namespace Flpps\Http\Controllers;
 
use Flpps\Product;
use Flpps\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class ProductController extends Controller {
 
		public function index(){
			$products  = Product::all();
			return response()->json($products);
		}
 
		public function getProduct($id){
			$product  = Product::find($id);
			return response()->json($product);
		}
 
		public function saveProduct(Request $request){
			// $product = Product::create($request->all());
			// return response()->json($product);
		}
 
		public function deleteProduct($id){
			// $product  = Product::find($id);
			// $product->delete();
			// return response()->json('success');
		}
 
		public function updateProduct(Request $request,$id){
			// $product  = Product::find($id);
			// $product->title = $request->input('title');
			// $product->save();
			// return response()->json($product);
		}
 
}
