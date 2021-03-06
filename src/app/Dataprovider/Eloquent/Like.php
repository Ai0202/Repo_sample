<?php
declare(strict_types=1);

namespace App\DataProvider\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = [
        'post_id',
        'user_id',
        'created_at',
    ];
}
