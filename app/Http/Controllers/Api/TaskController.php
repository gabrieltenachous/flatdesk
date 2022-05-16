<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\StoreTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class TaskController extends Controller
{
    public function __construct(){
        
        $this->user = JWTAuth::parseToken()->authenticate();
    }

    public function index(){ 
        $task = Task::paginate(10); 
        return response()->json(
            [ 
                'data' => $task,
                'message' => 'Tarefa listada com sucesso',
            ]
        );
    }
    
    public function store(StoreTaskRequest $request){ 
        $task = new Task();
        $task->name = $request->name;
        $task->status = $request->status;
        $task->description = $request->description;
        $task->user_id = auth()->user()->id;
        $task->save();
        return response()->json(
            [ 
                'data' => $task,
                'message' => 'Tarefa cadastrado com sucesso',
            ]
        );
    }
    public function update(StoreTaskRequest $request,$id){
        $task = Task::find($id);
        $task->name = $request->name;
        $task->status = $request->status;
        $task->description = $request->description;
        $task->user_id = auth()->user()->id;
        $task->save();
        return response()->json(
            [ 
                'data' => $task,
                'message' => 'Tarefa editado com sucesso',
            ]
        );
    }
    public function show($id){
        $task = Task::find($id); 
        if($task == null){
            return response()->json(
                [  
                    'message' => 'Tarefa não existe',
                ],403
            );   
        }
        return response()->json(
            [ 
                'data' => $task,
                'message' => 'Tarefa mostrada com sucesso',
            ]
        );
    }

    public function destroy($id){
        $task = Task::find($id);
        if($task == null){
            return response()->json(
                [  
                    'message' => 'Tarefa não existe',
                ],403
            );   
        }
        $task->delete(); 
        return response()->json(
            [ 
                'data' => $task,
                'message' => 'Tarefa deletada com sucesso',
            ]
        );
    }
}
