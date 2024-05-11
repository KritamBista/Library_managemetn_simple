<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    /**
     * Get all of the issues for the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function book_issues()
    {
        return $this->hasMany(BookIssue::class);
    }
    /**
     * The roles that belong to the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
  
}
