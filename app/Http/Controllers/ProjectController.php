<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProjectController extends Controller
{



    //
    public function index()
    {


    }


    public function show($id)
    {

    }

    public function add(){

    }
    public function store(Request $request){
        //dump($request->all());
        //'required|unique:articles' - проверка на уникальность
        $this->validate($request, [
            'title' => 'required|max:255'
        ]);

        dump($request->all());

        $data = $request->all();

        $article = new Article;
        $article->fill($data);

        //созранение информации в бд и передача в модель
        $article->save();

        return redirect('/');
    }





}
