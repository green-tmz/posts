<?php

declare(strict_types=1);

namespace Green\Posts\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title'];
}
