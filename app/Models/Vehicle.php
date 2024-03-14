<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class Vehicle extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Guarded columns from mass assignment
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Relationship to the Image model
     *
     * @return MorphMany
     */
    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function primaryImage()
    {
        return $this->morphMany(Image::class, 'imageable')
            ->where('is_primary', true);
    }

    /**
     * Gather a list of vehicles.
     * Will update to use request
     * object if needed
     *
     * @param  Request $request
     * @return Collection
     */
    public function list(Request $request): Collection
    {
        return $this->with('images')->latest()->get();
    }
}
