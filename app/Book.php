<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name','author','published','category_id'];


    /**
     * return the category
     */
    public function category()
    {
        return $this->belongsTo('App\Category','category_id', 'id');
    }
}
