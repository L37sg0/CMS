<?php

namespace L37sg0\Rockstar\Models;

interface PageStaticData
{
    public const TABLE_NAME = 'pages';

    public const FIELD_ID = 'id';
    public const FIELD_CREATED_AT = 'created_at';
    public const FIELD_UPDATED_AT = 'updated_at';

    public const FIELD_TITLE = 'title';
    public const FIELD_URL = 'url';
    public const FIELD_VIEW = 'view';
    public const FIELD_ACTIVE = 'active';

    public const FILLABLE = [
        self::FIELD_TITLE,
        self::FIELD_URL,
        self::FIELD_VIEW,
        self::FIELD_ACTIVE
    ];
}
