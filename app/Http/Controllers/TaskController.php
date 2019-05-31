<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TaskRepository;
use App\Models\Task;
use App\Http\Requests\TaskFormRequest;

class TaskController extends Controller
{
    /**
     * The task Repository instance
     * 
     * @var TaskRepository
     */
    protected $tasks;

    /**
     * Create a new controller instance
     * 
     * @param TaskRepository $tasks
     * @return void
     */
    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');

        $this->tasks = $tasks;
    }

    /**
     * Display list of all of the user's tasks.
     * 
     * @param Request request
     * @return Response
     */
    public function index(Request $request)
    {
        $tasks = $request->user()->tasks()->get();

        return view('tasks.index',[
            'tasks' => $this->tasks->forUser($request->user()),
        ]);
    }

    public function store(TaskFormRequest $request)
    {
        $request->user()->tasks()->create([
            'name' => $request->name,
        ]);

        return redirect('/tasks');
    }
}
