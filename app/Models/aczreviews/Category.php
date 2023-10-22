<?php

namespace App\Models\aczreviews;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function department(){
        return $this->belongsTo('App\Models\aczreviews\Department', 'department_id');
    }
    public function section(){
        return $this->belongsTo('App\Models\aczreviews\Section', 'section_id');
    }
}
