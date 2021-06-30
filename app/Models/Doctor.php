<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use Translatable;
    use HasFactory;
    public $translatedAttributes = ['name','appointments'];
    public $fillable= ['email','email_verified_at','password','phone','name','section_id','status'];

    /**
     * Get the Doctor's image.
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    // One To One get section of Doctor
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
    //many to many relationship between doctor and appointment
    public function doctorappointments()
    {
        return $this->belongsToMany(Appointment::class,'appointment_doctor');
    }

}
