<?php

namespace L37sg0\Rockstar\Models\Pivots;

interface PageBlockStaticData
{
    public const TABLE_NAME = 'page_block';

    public const FIELD_ID = 'id';
    public const FIELD_CREATED_AT = 'created_at';
    public const FIELD_UPDATED_AT = 'updated_at';

    public const FIELD_PAGE_ID = 'page_id';
    public const FIELD_BLOCK_ID = 'block_id';

    public const FILLABLE = [
        self::FIELD_PAGE_ID,
        self::FIELD_BLOCK_ID
    ];

}
