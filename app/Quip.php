<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quip extends Model
{
    protected $table = 'Quip';

    protected $primaryKey = 'Quip_id';

    public $timestamps = false;

    protected $connection = 'mysql';
}
