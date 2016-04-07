<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * Definimos os campos que poderão ser preenchidos no formulário.
     */
     protected $fillable = ['title', 'content'];
}
