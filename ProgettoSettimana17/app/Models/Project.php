<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    protected $fillable = ['name', 'description', 'language', 'user_id'];

    use HasFactory;
  
    public function activities(): HasMany {
        return $this->hasMany(Activity::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
