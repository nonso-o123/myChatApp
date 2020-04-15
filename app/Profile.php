<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/cfI0Hn0fuWMmY1FhKyW95psLI6eA1ZjUnC5XJJ5x.png';
        return '/storage/' . $imagePath;
    }


    public function user()
    {
        return $this->belongsTo((User::class));
    }
}
