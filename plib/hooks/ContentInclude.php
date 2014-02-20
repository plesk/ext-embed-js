<?php

class Modules_EmbedJs_ContentInclude extends pm_Hook_ContentInclude
{

    public static function getJsConfig()
    {
        return [
            'dynamicVar' => 'value here',
        ];
    }

    public static function getJsOnReadyContent()
    {
        return 'PleskExt.EmbedJs.init();';
    }

    public static function getJsContent()
    {
        return '// example';
    }

    public static function getHeadContent()
    {
        return '<!-- additional content for head tag -->';
    }

}
