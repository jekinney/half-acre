<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        'is_primary' => 'bool',
    ];

    /**
     * Guarded columns from mass assignment
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Relationship to parent model
     *
     * @return MorphTo
     */
    public function imageable(): MorphTo
    {
        return $this->morphTo();
    }
}
