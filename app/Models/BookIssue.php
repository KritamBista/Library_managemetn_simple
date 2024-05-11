<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookIssue extends Model
{
    use HasFactory;
    /**
     * Get the book that owns the BookIssue
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
    /**
     * Get the student that owns the BookIssue
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    /**
     * Get the user that owns the BookIssue
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    /**
     * The roles that belong to the BookIssue
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
   
}
