<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    protected $fillable = ['title'];

    public function notes()
    {
      return $this->hasMany('App\Note');
    }
}
