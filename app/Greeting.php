<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Greeting extends Model
{

    protected $table = 'Greeting';
    protected $primaryKey = 'Greeting_id';
    public $timestamps = false;
    protected $connection = 'mysql';

}
