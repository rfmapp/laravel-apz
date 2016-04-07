<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];
    
    /**
     * Método para evitar a necessidade de tokens para todas as requisições json.
     * Só deve ser usado aqui, nunca em produção.
     */
     protected function tokensMatch($request)
     {
         if ($request->wantsJson()) {
             return true;
         }
         return parent::tokensMatch($request);
     }
}
