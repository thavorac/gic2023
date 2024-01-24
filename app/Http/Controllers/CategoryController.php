<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authorizer;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(Authorizer::class.":permission-c");
    }

    // -- GET /api/categories
    public function getCategories() {
        $categories = Category::all();
        return $categories;
    }

    // -- POST /api/categories
    public function createCategory(Request $request) {
        // dd($request->get('name'));
        $category = new Category();
        $category->name = $request->get('name');
        $category->save();

        return [ "message" => "success", "data" => $category ];
    }

    // -- GET /api/categories/{categoryId}
    public function getCategory($categoryId) {
        // dd($categoryId);
        $category = Category::find($categoryId);
        if ($category) {
            return $category;
        } else {
            return response([ "message" => "category not found"], 400);
        }
    }

    // -- PATCH /api/categories/{categoryId}
    public function updateCategory(Request $request, $categoryId) {
        // dd($request->all());
        $categoryFound = Category::find($categoryId);
        if ($categoryFound) {
            $categoryFound->name = $request->get('name');
            $categoryFound->save();

            return $categoryFound;
        } else {
            return response([ "message" => "category not found"], 400);
        }
    }

    // -- DELETE /api/categories/{categoryId}
    public function deleteCategory($categoryId) {
        $categoryFound = Category::find($categoryId);

        if ($categoryFound) {
            $categoryFound->delete();

            return ["message" => "delete success"];
        } else {
            return response([ "message" => "category not found"], 400);
        }
    }

    // -- GET /api/categories/{categoryId}/products
    public function getProductsOfCategory($categorId) {
        $category = Category::find($categorId);
        if ($category) {
            return $category->products;
        } else {
            return response([ "message" => "category not found"], 400);
        }
    }
}
