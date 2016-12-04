<?php


namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Advertises extends Model
{
    //
    protected $table;
    protected $fillable = [
        'name',
        'sponser',
        'level',
        'desc',
    ];
}
