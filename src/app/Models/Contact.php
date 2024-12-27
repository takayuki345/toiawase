<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'categry_id',
        'first_name',
        'last_name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'detail'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function scopeKeywordSearch($query, $keyword)
    {
        $query->where('first_name', 'like', '%' . $keyword . '%')->orWhere('last_name', 'like', '%' . $keyword . '%')->orWhere('email', 'like', '%' . $keyword . '%');
    }

    public function scopeCategorySearch($query, $category_id)
    {
        if (!empty($category_id)) {
            $query->where('category_id', $category_id);
        }
    }

    public function scopeGenderSearch($query, $gender_id)
    {
        if (!empty($gender_id)) {
            $query->where('gender_id', $gender_id);
        }
    }

    public function scopeDateSearch($query, $created_at)
    {
        if (!empty($created_at)) {
            $query->whereDate('created_at', $created_at);
        }
    }
}
