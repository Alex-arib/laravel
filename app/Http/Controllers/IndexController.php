<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;


class IndexController extends Controller
{
    //для фукнции конструкт
    protected $mes;
    protected $header;

    public function __construct()
    {
        $this->mes ='tete';
        $this->header='еще текст';

    }


    //
    public function index()
    {
        //получить все
        //$articles = Article::all();
        //dump($articles);
//получаем опреденное

        $articles=Article::select(['id','title','desc'])->get();

        //передаем в вид
        return view('page')->with([            'mes'=>$this->mes,            'header'=>$this->header,            'articles'=>$articles        ]);



    }

    public function calendar()
    {


        //передаем в вид
        return view('calendar')->with(['mes'=>$this->mes]);



    }

    public function show($id)
    {
        //получть все значения с бд ститьи
        //$article = Article::find($id);
        //dump($article);

        //where id= $id, ->first - это что бы получить первую запись

        $article=Article::select(['id','title','text'])->where('id', $id)->first();

        return view('article-content')->with([
            'mes'=>$this->mes,
            'header'=>$this->header,
            'article'=>$article]
        );
    }

    public function add(){
        return view('add-content')->with([
                'mes'=>$this->mes,
                'header'=>$this->header
            ]);

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
