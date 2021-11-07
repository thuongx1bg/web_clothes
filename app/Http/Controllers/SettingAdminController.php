<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingRequest;
use Illuminate\Http\Request;
use App\Models\Setting;
use Exception;
use Illuminate\Support\Facades\Log;
class SettingAdminController extends Controller
{
    private $setting;
    public function __construct( Setting $setting)
    {
        $this->middleware('auth');
        $this->setting=$setting;
    }
    public function index(){
        $settings=$this->setting->latest()->paginate(5);
        return view('admin.setting.index',compact('settings'));
    }
    public function create(){
        return view('admin.setting.add');
    }
    public function store(SettingRequest $request){
        $this->setting->create([
            'config_key'=>$request->config_key,
            'config_value'=>$request->config_value,
            'type'=>$request->type,
        ]);
        return redirect()->route('settings.index');
    }
    public function edit($id){
        $settings=$this->setting->find($id);
        return view('admin.setting.edit',compact('settings'));
    }
    public function update(SettingRequest $request,$id){
        $this->setting->find($id)->update([
            'config_key'=>$request->config_key,
            'config_value'=>$request->config_value,
            'type'=>$request->type,
        ]);
        return redirect()->route('settings.index');

    }
    public function delete($id){
        try{
            $this->setting->find($id)->delete();
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

       //front-end
       public function get_Config_value($key){
        if($this->setting->config_key=$key){
            return $this->setting->config_value;
        }
       }
}
