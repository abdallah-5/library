<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $table = 'books';
    public $timestamps = true;
    protected $fillable = array('name', 'stackholder_id','author');

    public function stackholder()
    {
        return $this->belongsTo('App\Stackholder');
    }

}
