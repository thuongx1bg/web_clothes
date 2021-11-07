<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderAddRequest;
use App\Models\Slider;
use App\Traits\StorageImageTrait;use   App\Components\Recusive;
use App\Http\Requests\SliderRequest;
use Exception;
use Illuminate\Http\Request;use Illuminate\Support\Facades\Log;


class AdminSliderController extends Controller
{
    use StorageImageTrait;
    private $slider;
    public function __construct(Slider $slider){
        $this->middleware('auth');
        $this->slider=$slider;
    }
    public function index(){
        $sliders = $this->slider->latest()->paginate(3);
        return view('admin.slider.index', compact('sliders'));
     
    }
    public function create(){
        return view('admin.slider.add');
    }
    public function store(SliderRequest $request){
        try{
            $data= [
                'name' => $request->name,
                'description' => $request->description,
           
            ];
           $dataImgage =$this->storageTraitUploat($request,'image_path','slider');
           if(!empty($dataImgage))
           {
               $data['image_name']=$dataImgage['file_name'];
               $data['image_path']=$dataImgage['file_path'];
           }
           $this->slider->create($data);
           return redirect()->route('slider.index'); 

        }
        catch(Exception $exception){
            Log::error('Message:' . $exception->getMessage() . 'Line' . $exception->getLine());
        }
        
    }
    public function edit($id){
      
        $sliders=$this->slider->find($id);
      

        return view('admin.slider.edit', compact('sliders'));
    }
    public function update(SliderRequest $request,$id){
        try{
            $data=[
                        'name'=>$request->name,
                        'description'=>$request->description,
            ];
        $dataImgage =$this->storageTraitUploat($request,'image_path','slider');
           if(!empty($dataImgage))
           {
               $data['image_name']=$dataImgage['file_name'];
               $data['image_path']=$dataImgage['file_path'];
           }
    
        $this->slider->find($id)->update($data);
            return redirect()-> route('slider.index');
            }
            catch(Exception $exception){
                    Log::error('Message:' . $exception->getMessage() . 'Line' . $exception->getLine());
                                        }

    }
   public function delete($id){
    try{
        $this->slider->find($id)->delete();
        return response()->json([
            'code'=>200,
            'message'=>'success',

        ],status:200);

    }
    catch (Exception $exception) {
       
        Log::error('Message:' . $exception->getMessage() . 'Line' . $exception->getLine());
        return response()->json([
            'code'=>500,
            'message'=>'fail',

        ],status:500);
    }
   }
}
