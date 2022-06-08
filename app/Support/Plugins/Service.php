<?php

namespace Vanguard\Support\Plugins;

use Vanguard\Plugins\Plugin;
use Vanguard\Support\Sidebar\Item;

class Service extends Plugin
{
    public function sidebar()
    {
        return Item::create(__('Services'))
            ->route('service')
            ->icon('fas fa-cog')
            ->active("service*");
    }
}
