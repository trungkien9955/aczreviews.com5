<?php

namespace App\Models\aczreviews;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    public function sections(){
        return $this->hasMany('App\Models\aczreviews\Section', 'department_id');
    }
}
