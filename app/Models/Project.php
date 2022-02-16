<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $hidden = ['updated_at', 'created_at'];
    public function getImageAttribute($image)
    {
        return asset('') .  $image;
    }
    public function Images()
    {
        return $this->hasMany(ProjectImages::class, 'project_id', 'id');
    }
    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function Location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }
    public function Type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
}
