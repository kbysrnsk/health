<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class SoftDeleteController extends Controller
{
    

    /*
     * 論理削除
     */
    public function delete($id)
    {
        $user = \App\User::find($id);
        
        $user = delete();
        //Person::find($id)->delete(); // softDelete

        return redirect()->to('delete');
    }
    public function restore($id)
    {
        $user = \App\User::find($id);
        
        $user = restore();
        //Person::onlyTrashed()->find($id)->restore(); // restoreメソッドで復元

        return redirect()->to('delelte');
    }

   
}
