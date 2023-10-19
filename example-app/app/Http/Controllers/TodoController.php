<?php

namespace App\Http\Controllers;


use domain\facade\TodoFacade;
use Illuminate\Http\Request;

class TodoController extends ParentController
{
    public function index(){
        $response['task'] = TodoFacade::all();
        return view('pages.todo.index')->with($response);
    }

    /*$request kiyla hdnne ewana request ek catch kragnna*/
    public function store(Request $request){
        
        /*dd($request); //to view request we use this */

        TodoFacade::store($request->all());
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
       TodoFacade::delete($task_id);
        return redirect()->back();
    }

    public function done($task_id)
    {
        TodoFacade::done($task_id);
        return redirect()->back();
    }
}
