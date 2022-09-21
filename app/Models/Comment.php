<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $content
 * @property string $author
 * @property int $sort
 * @property int $post_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property-read Post $post
 */
class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'author',
        'post_id',
        'sort',
    ];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
