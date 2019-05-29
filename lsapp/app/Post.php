<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // table name
    protected $table ='posts';
    //primary key field
    public $primaryKey='id';
    //timestamps
    Public $timestamps= true;
}
