<?php

namespace App\Models\aczreviews;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    public function categories(){
        return $this->hasMany('App\Models\aczreviews\Category', 'section_id');
    }
    public function department(){
        return $this->belongsTo('App\Models\aczreviews\Department', 'department_id');
    }
}
