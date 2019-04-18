<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $tasks = Task::where('user_id', Auth::id())->orderby('id', 'DESC')->get();

        return view('tasks.index', compact('tasks'));
    }

    public function store(TaskRequest $request){
        $tasks = new Task();
        $tasks->name = $request->name;
        $tasks->user_id = $request->user()->id;
        $tasksave = $tasks->save();

        if($tasksave)

            return redirect()->route('task.index')->with([
                    'msg' => 'success',
                    'content' => trans('message.add_success'),
            ]);
        else

            return redirect()->route('task.index')->with([
                    'msg' => 'fail',
                    'content' => trans('message.add_fail'),
            ]);
    }

    public function destroy(Task $task){
        $this->authorize('destroy', $task);
        $taskdelete = $task->delete();

        if($taskdelete)

            return redirect()->route('task.index')->with([
                    'msg' => 'success',
                    'content' => trans('message.delete_success'),
            ]);
        else

            return redirect()->route('task.index')->with([
                    'msg' => 'fail',
                    'content' => trans('message.delete_fail'),
            ]);
    }
}
