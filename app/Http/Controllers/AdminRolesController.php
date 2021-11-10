<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\Log;
use FFI\Exception;
class AdminRolesController extends Controller
{
    private $role;
    private $permisstion;
    public function __construct(Role $role, Permission $permisstion)
    {
        $this->role=$role;
        $this->permisstion=$permisstion;
    }
    public function index(){
        $roles=$this->role->paginate(5);
        return view('admin.role.index',compact('roles')); 
    }
    public function create(){
        $permisstions=$this->permisstion->where('parent_id',0)->get();
        return view('admin.role.add',compact('permisstions')); 
        
    }
    public function store(Request $request){
        $roles=$this->role->create([
            'name'=>$request->name,
            'display_name'=>$request->display_name,
        ]);
        $roles->permisstions()->attach($request->permisstion_id);
        return redirect()->route('roles.index');
 
    }
    public function edit($id){
        $permisstions=$this->permisstion->where('parent_id',0)->get();
        $roles=$this->role->find($id);
        $permisstionCheck=$roles->permisstions;
        return view('admin.role.edit',compact('permisstions','roles','permisstionCheck'));
       }
       public function update($id,Request $request){
        $roles=$this->role->find($id);
        $this->role->find($id)->update([
            'name'=>$request->name,
            'display_name'=>$request->display_name,
        ]);
        $roles->permisstions()->sync($request->permisstion_id);
    return redirect()->route('roles.index');
    
    }
    public function delete($id){
        try{
           
            $this->role->find($id)->delete();
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
