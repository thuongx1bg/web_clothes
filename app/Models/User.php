<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    public function roles(){
        return $this->belongsToMany(Role::class,'role_user','user_id','role_id');
    }

    public function checkPermisstionsAccess($permisstionCheck){
        // B1 lay dược tất cả các quyền của user đăng nhập hệ thông
        $roles=auth()->user()->roles;
        // dd($roles);
        foreach ($roles as $role){
            $permisstions =$role->permisstions;
            // dd($permisstions);
            if($permisstions->contains('key_code',$permisstionCheck)){
                return true;
            }
            
        }
       
        return false;
        //B2 So sánh  giá trj dựa vào cua router hiện tại xem có tồn tại trong các quyền mình lấy được hay không
       
    }

    
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
