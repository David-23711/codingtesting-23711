<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Education extends Model
{
    use HasFactory;
    protected $fillable = ['degree', 'school', 'employee_id'];
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
