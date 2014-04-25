<?php

namespace AFT\Carew;

use AFT\Carew\EventListener\PagesSortByNameFileListener;
use Carew\Carew;
use Carew\ExtensionInterface;

class AFTCarewExtension implements ExtensionInterface
{
    public function register(Carew $carew)
    {
        $carew->getEventDispatcher()->addSubscriber(new PagesSortByNameFileListener());
    }
}
