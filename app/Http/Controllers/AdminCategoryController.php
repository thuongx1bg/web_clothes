<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

use App\Components\Recusive;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
USE Exception;
class AdminCategoryController extends Controller
{
    private $category;


    public function __construct(Category $category)
    {
        $this->middleware('auth');
        $this->category = $category;
    }

    public function index()
    {
        $categories = $this->category->latest()->paginate(5);
        return view('admin.category.index', compact('categories'));
    }
    public function create()
    {


        $htmlOption = $this->getCategory($parentId = '');
        return view('admin.category.add', compact('htmlOption'));
    }
    public function store(CategoryRequest $request)
    {
        $this->category->create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' => Str::slug($request->name)
        ]);
        return redirect()->route('categories.index');
    }
    public function delete($id)
    {
        try{
            $this->category->find($id)->delete();
            return response()->json([
                'code'=>200,
                'message'=>'success',
    
            ],200);
    
        }
        catch (Exception $exception) {
           
            Log::error('Message:' . $exception->getMessage() . 'Line' . $exception->getLine());
            return response()->json([
                'code'=>500,
                'message'=>'fail',
    
            ],500);
        }
    }
    public function getCategory($parentId)
    {
        $data = $this->category->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->categoryRecusive($parentId);
        return         $htmlOption;
    }
    public function edit($id)
    {
        $category = $this->category->find($id);

        $htmlOption = $this->getCategory($category->parent_id);

        return view('admin.category.edit', compact('category', 'htmlOption'));
    }
    public function update($id, CategoryRequest $request)
    {
        $this->category->find($id)->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' => Str::slug($request->name)
        ]);
        return redirect()->route('categories.index');
    }
}
