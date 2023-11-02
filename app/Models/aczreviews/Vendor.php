<?php

namespace App\Models\aczreviews;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Vendor extends Authenticatable
{
    use HasFactory;
    protected $guard = 'vendor';
    public function province(){
        return $this->belongsTo('App\Models\aczreviews\Province', 'province_id');
    }
    public function district(){
        return $this->belongsTo('App\Models\aczreviews\District', 'district_id');
    }
    public function ward(){
        return $this->belongsTo('App\Models\aczreviews\Ward', 'ward_id');
    }
}
