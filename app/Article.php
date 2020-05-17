<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Article extends Model
{
	use Notifiable;

    protected $fillable = [
        'title', 'detail',
    ];

    protected $casts = [
    	'date_creation' => 'datetime',
    ];
}
