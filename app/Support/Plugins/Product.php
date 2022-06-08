<?php

namespace Vanguard\Support\Plugins;

use Vanguard\Plugins\Plugin;
use Vanguard\Support\Sidebar\Item;

class Product extends Plugin
{
    public function sidebar()
    {
        return Item::create(__('Products'))
            ->route('product')
            ->icon('fas fa-box')
            ->active("product*");
    }
}
