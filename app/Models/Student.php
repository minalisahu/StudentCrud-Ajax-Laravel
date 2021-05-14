<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'student_name',
        'fathers_name',
        'dob',
        'email',
        'address',
        'city',
        'state',
        'pin',
        'phone',
        'class',
        'marks',

    ];

    /**
     * Get created
     *
     */
    public function getCreatedAttribute()
    {
        return $this->created_at ? $this->created_at->format('jS M, Y') : '--';
    }

    /**
     * Get modified
     *
     */
    public function getModifiedAttribute()
    {
        return $this->updated_at ? $this->updated_at->format('jS M, Y') : '--';
    }
}
