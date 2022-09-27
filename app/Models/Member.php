<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'members';

    protected $fillable = [
        'name',
        'contact',
        'email',
        'copy_of_IC',
        'packages',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

// In eloquent ORM, $fillable attribute is an array containing all those fields of table which can be filled using mass-assignment.
// Mass assignment refers to sending an array to the model to directly create a new record in Database.