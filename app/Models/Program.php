<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = ['progfullname', 'progshortname', 'progcollid', 'progcolldeptid'];

    public function college()
    {
        return $this->belongsTo(College::class, 'progcollid');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'progcolldeptid');
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'studprogid');
    }
}

