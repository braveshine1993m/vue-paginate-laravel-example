<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'ID';
    protected $table = 'wp_posts';
    const CREATED_AT = 'post_date';
    const UPDATED_AT = 'post_modified';
}
