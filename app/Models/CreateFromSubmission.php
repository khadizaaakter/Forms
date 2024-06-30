<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreateFromSubmission extends Model
{
    use HasFactory;

    protected $table = 'create_form_submissions';

    protected $fillable = [
        'problem_statement',
        'serial_no',
        'active',
    ];
}
