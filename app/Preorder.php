<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preorder extends Model
{
    protected $fillable = ['preorder_user', 'quantity', 'info', 'product_id'];
}
