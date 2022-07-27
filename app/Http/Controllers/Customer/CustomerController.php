<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{
    public function update($id, Request $request)
    {
        $request->validate([
            'name'             => 'required',
            'sdt'             => 'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|min:9',        // just a normal required validation
            'email'            =>  [
                'required',  'email', 'max:255',
                Rule::unique('customers')->ignore($id),
            ], // required and must be unique in the ducks table
            'password_confirm' => 'same:password'
        ]);
        $idCustomer = $id;
        if ($request->password) {
            $newPassword = bcrypt($request->password);
            $data['password'] = $newPassword;
        }
        $data = [
            'name' => $request->name,
            'sdt' => $request->sdt,
            'email' => $request->email,
        ];
        $customer = DB::table('customers')->where('id', '=', $idCustomer)->update($data);
        return back()->with(['message' => 'Cập nhật thông tin cá nhân thành công', 'alert-type' => 'success']);
    }
}
