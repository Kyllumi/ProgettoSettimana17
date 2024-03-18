<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Activity extends Model
{
    protected $fillable = ['title', 'description', 'project_id'];

    use HasFactory;

    public function projects(): BelongsTo {
        return $this->belongsTo(Project::class);
    }
}
