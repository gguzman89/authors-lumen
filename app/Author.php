<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /**
     * The attributes that are mass assignables.
     * 
     * @var array
     */

    protected $fillable = ['name', 'email', 'github', 'twitter', 'location', 'lastest_article_published'];

    /**
     * the attributes excluded from the model's JSON form
     */
    protected $hidden = [];
}
