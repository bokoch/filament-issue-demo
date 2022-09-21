<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $title
 * @property string $description
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property-read Collection<Post> $posts
 */
class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
