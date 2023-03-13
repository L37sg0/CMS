<?php

namespace L37sg0\Rockstar\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use L37sg0\Rockstar\Models\Enums\AttributeType;
use L37sg0\Rockstar\Models\PageStaticData as StaticData;

class Page extends Model implements StaticData
{
    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;

    /**
     * @return BelongsToMany
     */
    public function blocks() {
        return $this->belongsToMany(Block::class);
    }

    /**
     * @return BelongsToMany
     */
    public function attributes() {
        return $this->belongsToMany(Attribute::class)->withTimestamps();
    }

    /**
     * @return Collection
     */
    public function images() {
        return $this->attributes()->where(Attribute::FIELD_TYPE, AttributeType::Image)->get();
    }

    /**
     * @return Collection
     */
    public function texts() {
        return $this->attributes()->where(Attribute::FIELD_TYPE, AttributeType::Text)->get();
    }

    /**
     * @return Collection
     */
    public function meta() {
        return $this->attributes()->where(Attribute::FIELD_TYPE, AttributeType::Meta)->get();
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeActive($query) {
        return $query->where(self::FIELD_ACTIVE, true);
    }
}
