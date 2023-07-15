<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{
    public function index()
    {
        // $tasks = DB::table('tasks')->get();
        // return view('tasks.index', compact('tasks'));


        /*cara normal menampilkan data dari tabel*/

        // return view('tasks.index', [
        //     'tasks' => DB::table('tasks')->get(),
        // ]);
        

        /* 
        jika ingin urutan array dari daftar ter akhir menggunakan orderby('id', 'desc')
        jika ingin urutan array dari daftar ter akhir menggunakan orderby('id', 'asc')
        */

        /* Show isi table tasks*/
        return view('tasks.index', [
            'tasks' => DB::table('tasks')->orderBy('id', 'asc')->get(),
        ]);
    }

    
    public function store(Request $request){

        /* Create isi table tasks*/
        DB::table('tasks')->insert([
            'list' => $request -> list,
        ]);
        //dd('submitted');

        /* penggunaan return*/
       // return redirect('tasks');

       return back();
    }
}
