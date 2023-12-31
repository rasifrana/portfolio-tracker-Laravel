<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'asset_type' ,'price', 'quantity',  'user_id'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
