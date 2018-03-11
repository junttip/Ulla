<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'City';

    protected $primaryKey = 'Postcode';

    public $timestamps = false;

    protected $connection = 'mysql';
}
