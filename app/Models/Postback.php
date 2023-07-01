<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Postback extends Model
{
    protected $table = 'postbacks'; // Update the table name if needed

    protected $fillable = [
        'url',
        'request',
        'response',
    ];
}
