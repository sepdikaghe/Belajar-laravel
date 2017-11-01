<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Model\Article;

class testController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(5);
        return view ('article/home', ['articles'=>$articles]);
    }

    public function show($id)
    {
        $article = Article::find($id);
        if (!$article) {
            abort(404);
        }
        return view('article/single', ['article' => $article]);
    }

    public function create()
    {
        return view('article/create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'       => 'required|min:5',
            'description' => 'required|min:10'
        ]);

        $article = new Article;
        $article->title = $request->title;
        $article->description = $request->description;
        $article->save();
        return redirect('/article');
    }
    
    public function edit($id)
    {
        $article = Article::find($id);
        if (!$article) {
            abort(404);
        }
        return view('article/edit', ['article' => $article]);
    }

    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->title = $request->title;
        $article->description = $request->description;
        $article->save();
        return redirect('article');
    }

    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('article');
    }
}
