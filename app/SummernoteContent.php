<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SummernoteContent extends Model
{
	use Notifiable;

    protected $fillable = [
        'title', 'contenu',
    ];
}
