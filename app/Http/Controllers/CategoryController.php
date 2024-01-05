<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //-- GET /api/categories
    public function getCategories(){
        $categories = Category::all();
        return $categories;
    }

    //-- POST /api/categories
    public function createCategories(){}

    //-- GET /api/categories{categoryId}
    public function getCategory($categoriesId){}

    //-- PATCH /api/categories/{categoryId}
    public function updateCategories($categoriesId){}

    //-- DELETE /api/categories/{categoryId}
    public function deleteCategories($categoriesId){}

}
