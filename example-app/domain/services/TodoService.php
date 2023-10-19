<?php

namespace domain\services;
use App\Models\Todo;

class TodoService{

    protected $task;

    public function __construct(){
        $this->task = new Todo();
    }

    public function all(){
        return $this->task->all(); // to get data from the databse table 
    }

    /*$request kiyla hdnne ewana request ek catch kragnna*/
    public function store($data){
        $this->task->create($data); 
        /*models->todo eke database table eke tittle ekyi done ekyi denme neththan mema data pass krnn be */
    }

    public function delete($task_id)/*methanata tsk_id nethuwa mokk dunnth gnnwa*/
    {
        $task = $this->task->find($task_id);
        $task->delete();
    }

    public function done($task_id)
    {
        $task = $this->task->find($task_id);
        $task->done = 1;
        $task->update();
    }
}