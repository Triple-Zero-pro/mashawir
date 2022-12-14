<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = ['target', 'image', 'banner_type_id', 'status'];


    public function banner_type()
    {
        return $this->belongsTo(BannerType::class, 'banner_type_id');
    }


}
