<?php

namespace L37sg0\Rockstar\Models;

interface BlockStaticData
{
    public const TABLE_NAME = 'blocks';

    public const FIELD_ID = 'id';
    public const FIELD_CREATED_AT = 'created_at';
    public const FIELD_UPDATED_AT = 'updated_at';

    public const FIELD_TITLE = 'title';
    public const FIELD_SLUG = 'slug';
    public const FIELD_CONTENT = 'content';

    public const FILLABLE = [
        self::FIELD_TITLE,
        self::FIELD_SLUG,
        self::FIELD_CONTENT
    ];

}
