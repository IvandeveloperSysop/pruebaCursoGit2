<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Session;


class weddingController extends Controller
{
    //
    public function index($token){
        $users = DB::table('users')
        ->where('token', $token)
        ->first();

        if ($users) {
            return view('welcome',['users' => $users]);
        }else{
            abort(404);
        }
        // dd($users);
    }

    public function confirmInvitation($token){
        try {
            //code...
            DB::table('users')
            ->where('token', $token)
            ->update(['status' => 1]);
    
            $json = [
                'result' => 'ok'
            ];
    
            return $json;
        } catch (\Throwable $th) {
            //throw $th;
            $json = [
                'result' => $th
            ];
    
            return $json;
        }
    }

}
