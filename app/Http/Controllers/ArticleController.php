<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
	public function index()
	{
		error_log(\Request::getRequestUri());
		return Article::all();
	}

	public function show(Article $article)
	{
		return $article;
	}

	// localhost:8000/api/v3/articulos/save
	public function store(Request $request)
	{
		// dd($request->all());
		$article = Article::create($request->all());

		return response()->json($article, 201);
	}

	public function update(Request $request, Article $article)
	{
		$article->update($request->all());

		return response()->json($article, 200);
	}

	public function delete(Article $article)
	{
		try {
			// dd($article);
			$article->delete();
			return response()->json(null, 204);

		} catch (\Throwable $th) {
			//throw $th;
			dd($th);
		}
	}
}
