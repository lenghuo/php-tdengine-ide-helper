<?php
namespace TDengine;

use TDengine\Resource;

/**
 * @method mixed getConnection()
 * @method string getSql()
 * @method void close()
 * @method void bindParams(array $params)
 * @method Resource execute()
 * @method void setTableNameTags(string $tableName, array $tags)
 *
 */
class Statement
{

    public function __construct()
    {
    }
}