<?php

namespace App\Http\Controllers;


use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    protected $task;

    public function __construct(){
        $this->task = new Todo();
    }
    public function index(){
        return view('pages.todo.index');
    }

    /*$request kiyla hdnne ewana request ek catch kragnna*/
    public function store(Request $request){
        
        /*dd($request); //to view request we use this */

        $this->task->create($request->all()); 
        /*models->todo eke database table eke tittle ekyi done ekyi denme neththan mema data pass krnn be */

        return redirect()->back(); 
        /* task eka complete wela apahu hitapu thenatama ynna */


        /*$this->task->tittle = $request->tittle;
        $this->task->save();
        
        mema danne models->todo eke ara widihata database eke table colums mention krla neththan 

        */
    }
}
