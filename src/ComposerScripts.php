<?php

namespace Miguilim\ComposerReactPromiseBug;

use Composer\Script\Event;

class ComposerScripts
{
    public static function postAutoloadDump(Event $event)
    {
        require_once $event->getComposer()->getConfig()->get('vendor-dir').'/autoload.php';
    }
}