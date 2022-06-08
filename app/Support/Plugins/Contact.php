<?php

namespace Vanguard\Support\Plugins;

use Vanguard\Plugins\Plugin;
use Vanguard\Support\Sidebar\Item;

class Contact extends Plugin
{
    public function sidebar()
    {
        return Item::create(__('Contacts'))
            ->route('contact')
            ->icon('fas fa-envelope')
            ->active("contact*");
    }
}
