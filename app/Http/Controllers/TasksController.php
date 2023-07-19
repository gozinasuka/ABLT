<?php

namespace App\Http\Controllers;

use App\Models\Task;
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
            /* metode pemanggilan table database sebelum pakai model */
            // 'tasks' => DB::table('tasks')->orderBy('id', 'asc')->get(),

            /* metode pemanggilan table database pakai model */
            'tasks' => Task::orderBy('id', 'asc')->get(),
        ]);
    }

    
    public function store(Request $request){

        
        /* Create isi table tasks*/
        /* metode pemanggilan table database sebelum pakai model */
        // DB::table('tasks')->insert(['list' => $request -> list,]);

        /* 
        -metode pemanggilan table database pakai model 
        -penggunaan insert tidak akan memberika feedback data jika kita ingin return lagi datanya
        -penggunaan creat akan memberika feedback data jika kita ingin return lagi datanya
        */
        
        Task::create([
            'list' => $request -> list,
            'mark' => false,
        ]);
        
        //dd('submitted');

        /* penggunaan return*/
       // return redirect('tasks');
       return back();
    }

    public function edit($id){

        /* -metode pemanggilan table database sebelum pakai model */
        // $task = DB::table('tasks')->where('id', $id)->first();

        /* -metode pemanggilan table database pakai model */
        //$task = Task::where('id', $id)->first();
        /* metode lebih simpel tanpa where , pengunaan find dilakukan jika kita mencari id */
        $task = Task::find($id);

        return view('tasks.edit', ['task'=> $task]);
    }

    public function update(request $request, $id){

        /* -metode pemanggilan table database sebelum pakai model */
        // DB::table('tasks')->where('id', $id)->update(['list'=>$request->list]);

        /* -metode pemanggilan table database pakai model */
        // Task::where('id', $id)->update(['list'=>$request->list]);
        /* metode lebih simpel tanpa where , pengunaan find dilakukan jika kita mencari id */
        Task::find($id)->update(['list'=>$request->list]);

        return redirect('tasks');
    }

    public function destroy($id){

        /* -metode pemanggilan table database sebelum pakai model */
        // DB::table('tasks')->where('id', $id)->delete();

        /* -metode pemanggilan table database pakai model */
        // Task::where('id', $id)->delete();
        /* metode lebih simpel tanpa where , pengunaan find dilakukan jika kita mencari id */
        Task::find($id)->delete();

        return back();
        
    }

}
