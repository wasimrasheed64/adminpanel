<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    private $model = Product::class;

    //
    public function index()
    {
        $products = $this->model::all();
        return view('admin.product.index', compact('products'));
    }

    public function create(){
       $categories = Category::all();
        return view('admin.product.create',compact('categories'));
    }

    public function store(ProductRequest $request)
    {
        try {
            $request['is_active'] = $request->has('is_active');
            $request['is_featured'] = $request->has('is_featured');
            $request['in_menu'] = $request->has('is_menu');
            $request['is_footer'] = $request->has('is_footer');
                if (request('imageOne')) {
                    $request['image_1'] = request('imageOne')->store($this->model::UPLOAD_DIRECTORY);
                }
                if (request('imageTwo')) {
                    $request['image_2'] = request('imageTwo')->store($this->model::UPLOAD_DIRECTORY);
                }
                if (request('imageThree')) {
                     $request['image_3'] = request('imageThree')->store($this->model::UPLOAD_DIRECTORY);
                }
                if (request('imageFourth')) {
                    $request['image_4'] = request('imageFourth')->store($this->model::UPLOAD_DIRECTORY);
                }
            DB::transaction(function () use ($request){
                $this->model::create($request->all());
            });
            $this->success('successfully created product');
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
            return back()->withInput();
        }
        return redirect()->route('product');
    }

    public function edit($id){
        $categories = Category::all();
        $product = $this->model::find($id);
        return view('admin.product.edit',compact('categories','product'));
    }

    public function update($id, ProductRequest $request)
    {
        try {
                $request['is_active'] = $request->has('is_active');
                $request['is_featured'] = $request->has('is_featured');
                $request['in_menu'] = $request->has('is_menu');
                $request['is_footer'] = $request->has('is_footer');
                // if (request('menuImage')) {
                //     $request['menu_image'] = request('menuImage')->store($this->model::UPLOAD_DIRECTORY);
                // }
                if (request('imageOne')) {
                    $request['image_1'] = request('imageOne')->store($this->model::UPLOAD_DIRECTORY);
                }
                if (request('imageTwo')) {
                    $request['image_2'] = request('imageTwo')->store($this->model::UPLOAD_DIRECTORY);
                }
                if (request('imageThree')) {
                     $request['image_3'] = request('imageThree')->store($this->model::UPLOAD_DIRECTORY);
                }
                if (request('imageFourth')) {
                    $request['image_4'] = request('imageFourth')->store($this->model::UPLOAD_DIRECTORY);
                }
            DB::transaction(function () use ($request,$id){
               $product = $this->model::find($id);
               $product->update($request->all());
            });
            $this->success('successfully updated product');
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
            return back()->withInput();
        }
        return redirect()->route('product');
    }

    public function destroy($id)
    {
        try {
            $subcategory = $this->model::findorFail($id);
            $subcategory->delete();
            $this->success('Successfully Deleted  the Product');
            return response()->json(['message' => 'Successfully product has been deleted', 'status' => 200], 200);
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
            return response()->json(['message' => "Something went wrong", 'status' => 500], 200);
        }
    }
}
