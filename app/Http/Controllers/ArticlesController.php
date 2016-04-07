<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests\ArticleRequest;

use App\Article;

class ArticlesController extends Controller
{
    /**
     * Método para exibição da página principal de artigos, onde são exibidos 
     * todos os artigos existentes.
     */
    public function index()
    {
        $articles = Article::all();
        
        if (Request::wantsJson()) {
            return $articles;
        } else {
            return view('articles.index', compact('articles'));
        }
    }
    
    /**
     * Método que lida com a exibição do formulário de criação de artigos.
     */
    public function create()
    {
        $article = new Article();
        
        return view('articles.create', compact('article'));
    }
    
    /**
     * Método responsável pelo registro de um novo artigo.
     */
    public function store(ArticleRequest $request)
    {
        $article = Article::create($request->all());
        
        if (Request::wantsJson()) {
            return $article;
        } else {
            return redirect('articles');
        }
    }
    
    /**
     * Método que exibe um artigo específico baseado no id passado.
     */
    public function show(Article $article)
    {
        if (Request::wantsJson()) {
            return $article;
        } else {
            return view('articles.show', compact('article'));
        }
    }
    
    /**
     * Método que lida com a exibição do formulário de edição de artigos.
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }
    
    /**
     * Método que registra alterações em um artigo existente.
     */
    public function update(ArticleRequest $request, Article $article)
    {
        $article->update($request->all());
        
        if (Request::wantsJson()) {
            return $article;
        } else {
            return redirect('articles');
        }
    }
    
    /**
     * Método que faz a exclusão de um registro.
     */
    public function destroy(Article $article)
    {
        $deleted = $article->delete();
        
        if (Request::wantsJson()) {
            return (string) $deleted;
        } else {
            return redirect('articles');
        }
    }
}
