<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TodoRequest;
use App\Http\Resources\TodoResource;
use App\Model\Todo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class TodoController extends Controller
{


    public function index(){

        $allTodos = Todo::all();

        $filteredTodos = TodoResource::collection($allTodos);
        return $filteredTodos;
    }



    public function show(Todo $todo){

        $filteredTodos = new TodoResource($todo);

        return $filteredTodos;

    }

    public function store(TodoRequest $request){

        $data = $request->all();

        $blog = Blog::create($data);

        return new TodoResource($blog);

    }


    public function update(Todo $todo, TodoRequest $request){

        // 디비에 있는 해당 블로그 모델을 찾아서 들어온 리퀘스트로 변경한다.
        $todo->update($request->all());

        return new TodoResource($todo);

    }




    public function destroy(Todo $todo){
        $todo->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }


}













