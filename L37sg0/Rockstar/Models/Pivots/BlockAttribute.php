<?php

namespace L37sg0\Rockstar\Models\Pivots;

use Illuminate\Database\Eloquent\Model;
use L37sg0\Rockstar\Models\Pivots\BlockAttributeStaticData as StaticData;

class BlockAttribute extends Model implements StaticData
{
    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
}
