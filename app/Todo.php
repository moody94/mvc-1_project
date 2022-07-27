<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{

    protected $table = 'todos';

    protected $fillable = ['title', 'content', 'starts_at', 'type', 'author_name', 'color', 'author_email'];

    protected $primaryKey = 'id';

    public $timestamps = false;
}
