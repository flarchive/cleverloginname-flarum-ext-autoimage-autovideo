<?php

/*
 * This file is part of cleverloginname/flarum-ext-autoimage-autovideo.
 *
 * Copyright (c) 2018 Damith Harischandrathilaka.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace CleverLoginName\FlarumExtAutoimageAutovideo;

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
         ->content(function (Document $document) {
            $document->body[] = preg_replace("(https?:\/\/[a-z0-9\-\.\/]+\.(?:jpe?g|png|gif))", "<img src="$1"></img>", $document->body[]);
        })
];
