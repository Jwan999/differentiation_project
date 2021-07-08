<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $appends = ["average"];
    protected $guarded;
    protected $with = ["project"];

    public function projects()
    {
        return $this->belongsToMany(Project::Class)->withPivot("order")->orderByPivot("order","asc");
    }

    public function project()
    {
        return $this->belongsTo(Project::Class);
    }

    public function getAverageAttribute()
    {
        $marks = [
            $this->{"student_1_grade"},
            $this->{"student_2_grade"},
            $this->{"student_3_grade"},
            $this->{"student_4_grade"},
        ];
        $marks = array_filter($marks);
        $marks = array_sum($marks) / count($marks);
        return $marks;
    }
}
