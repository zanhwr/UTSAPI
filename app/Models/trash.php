<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class trash extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = 'trash';
    protected $filelabel = [
        'username',
        'jenis',
        'qty'
    ];

    protected $hidden = [];
}
