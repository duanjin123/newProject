<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model
{
    use SoftDeletes;

    protected $connection = 'mysql';

    protected $table = 'users';

    protected $primaryKey = 'id';

    protected $fillable = ['name'];
}
