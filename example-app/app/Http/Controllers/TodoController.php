<?php

namespace App\Http\Controllers;


use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends ParentController
{

    protected $task;

    /*public function __construct(){
        $this->task = new Todo();
    }
*/
    public function index(){
        $response['task'] = Todo::all(); // to get data from the databse table
   
        return view('pages.todo.index')->with($response);
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

    public function delete($task_id)/*methanata tsk_id nethuwa mokk dunnth gnnwa*/
    {
        $task = $this->task->find($task_id);
        $task->delete();

        return redirect()->back();
    }

    public function done($task_id)
    {
        $task = $this->task->find($task_id);
        $task->done = 1;
        $task->update();

        return redirect()->back();
    }
}
