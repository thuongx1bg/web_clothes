<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Ui\Presets\React;
use Illuminate\Support\Facades\Log;


class AdminUserController extends Controller
{
    private $user;
    private $role;
    public function __construct(User $user,Role $role)
    {
        $this->user=$user;
        $this->role=$role;
    }
    public function index(){
        $users=$this->user->latest()->paginate(5);
       
        return view('admin.user.index',compact('users'));
    }
    public function create(){
        $roles=$this->role->all();
        return view('admin.user.add',compact('roles'));
    }
    public function store(Request $request){
        try{
            DB::beginTransaction();
            $user=$this->user->create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
            ]);
            $user->roles()->attach($request->role_id);
            DB::commit();
            return redirect()->route('users.index');

        }
        catch(Exception $exception){
            DB::rollBack();

        }
    }
    public function delete($id){
        try{
           
            $this->user->find($id)->delete();
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
       public function edit($id){
        $roles=$this->role->all();
        $user=$this->user->find($id);
        $roleOfUser=$user->roles;
        return view('admin.user.edit',compact('roles','user','roleOfUser'));
        // dd('abc');
        
    }
    public function update(Request $request,$id){
        try{
            DB::beginTransaction();
            $this->user->find($id)->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
            ]);
            $user=$this->user->find($id);
            $user->roles()->sync($request->role_id);
            DB::commit();
            return redirect()->route('users.index');

        }
        catch(Exception $exception){
            DB::rollBack();

        }
        
    }

    
    
}
