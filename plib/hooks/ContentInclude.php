<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH.
class Modules_EmbedJs_ContentInclude extends pm_Hook_ContentInclude
{

    public function getJsConfig()
    {
        return [
            'dynamicVar' => date(DATE_ATOM),
        ];
    }

    public function getJsOnReadyContent()
    {
        return 'PleskExt.EmbedJs.init();';
    }

    public function getJsContent()
    {
        return '// example';
    }

    public function getHeadContent()
    {
        return '<!-- additional content for head tag -->';
    }

    public function getBodyContent()
    {
        return '<!-- additional content for body tag -->';
    }

}
