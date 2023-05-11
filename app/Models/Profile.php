<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'url', 'image'];
 
    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/elDp41orsmDcJBJTjWJywB9xVqrkqwmymwTdMAoH.png';
        return '/storage/' . $imagePath;

    }

    public function followers()
    {
        return $this->belongsToMany(User::class);

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
