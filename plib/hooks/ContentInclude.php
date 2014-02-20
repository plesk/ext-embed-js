<?php

class Modules_EmbedJs_ContentInclude extends pm_Hook_ContentInclude
{

    public static function getJsConfig()
    {
        return [
            'dynamicVar' => date(DATE_ATOM),
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

    public static function getBodyContent()
    {
        return '<!-- additional content for body tag -->';
    }

}
