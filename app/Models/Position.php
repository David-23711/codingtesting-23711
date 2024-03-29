<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\Employee;

class Position extends Model
{
    use HasFactory;
    protected $fillable = ['department_id', 'name'];
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
