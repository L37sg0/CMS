<?php

namespace L37sg0\Rockstar\Models;

use Illuminate\Database\Eloquent\Model;
use L37sg0\Rockstar\Models\BlockStaticData as StaticData;
use L37sg0\Rockstar\Models\Enums\AttributeType;

class Block extends Model implements StaticData
{
    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;

    public function attributes() {
        return $this->belongsToMany(Attribute::class)->withPivot('value')->withTimestamps();
    }

    public function images() {
        return $this->attributes()->where(Attribute::FIELD_TYPE, AttributeType::Image)->get();
    }
}
