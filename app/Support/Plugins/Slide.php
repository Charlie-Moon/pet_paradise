<?php

namespace Vanguard\Support\Plugins;

use Vanguard\Plugins\Plugin;
use Vanguard\Support\Sidebar\Item;

class Slide extends Plugin
{
    public function sidebar()
    {
        return Item::create(__('Slides'))
            ->route('slide')
            ->icon('fas fa-play')
            ->active("slide*");
    }
}
