<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'studfirstname', 
        'studlastname', 
        'studmidname', 
        'studprogid', 
        'studcollid', 
        'studyyear'
    ];

    public function program()
    {
        return $this->belongsTo(Program::class, 'studprogid');
    }

    public function college()
    {
        return $this->belongsTo(College::class, 'studcollid');
    }
}
