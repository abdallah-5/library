<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stackholder extends Model 
{

    protected $table = 'stackholders';
    public $timestamps = true;
    protected $fillable = array('name', 'type');

    public function books()
    {
        return $this->hasMany('App\Book');
    }

}