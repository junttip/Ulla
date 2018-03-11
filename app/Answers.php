<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    protected $table = 'Answers';
    protected $primaryKey = 'Answer_id';
    public $timestamps = false;
    protected $connection = 'mysql';

}
