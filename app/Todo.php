<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ["title", "completed", "order"];

    public function getCompletedAttribute($value)
    {
      return (bool) $value;
    }
}
