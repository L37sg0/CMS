<?php

namespace L37sg0\Rockstar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use L37sg0\Rockstar\Models\AttributeStaticData as StaticData;

class Attribute extends Model implements StaticData
{
    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts    = self::CASTS;

    /**
     * @return BelongsToMany
     */
    public function pages() {
        return $this->belongsToMany(Page::class)->withTimestamps();
    }
}
