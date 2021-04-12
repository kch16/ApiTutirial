<?php

namespace App\Http\Controllers;

use App\Todo;
use App\Http\Requests\TodoRequest;
use App\Http\Resources\TodoResource;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     //모든 할 일데이터를 가져오는 메소드
    public function index()
    {
        //
        $allTodos = Todo::all();
        //$allTodos = Todo::select('id','title','content')->get();
        $filteredTodos = TodoResource::collection($allTodos);
        return $filteredTodos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     //새 데이터를 만드는 화면을 반환
    //public function create()
    //{
        //
    //}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TodoRequest $request)
    {
        //
        $userInputData = $request->all();
        $newTodo = Todo::create($userInputData);
        return new TodoResource($newTodo);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //매개변수로 들어오는 아이디에 해당하는 할 일 데이터를 가져옵니다.
    //public function show($id)
    public function show(Todo $id)
    {
        //
        //$fetchedTodo = Todo::find($id);

        $fetchedTodo = new TodoResource($id);
        return $fetchedTodo;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //기존 데이터를 수정하는 화면을 반환
    //public function edit($id)
    //{
        //
    //}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //해당 할 일 데이터를 수정합니다.
    //public function update(Request $request, $id)
    public function update(TodoRequest $request, Todo $id)
    {
        //
        //$fetchedTodo = Todo::find($id);
        $id->update($request -> all());

        $updateTodos = new TodoResource($id);
        return $updateTodos;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //해당 할 일 데이터를 삭제합니다.
    //public function destroy($id)
    public function destroy(Todo $id)
    {
        //
        //$fetchedTodo = Todo::find($id);
        $id->delete();
        //$id->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
