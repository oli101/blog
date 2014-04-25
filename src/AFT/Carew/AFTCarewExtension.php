<?php

namespace AFT\Carew;

use AFT\Carew\EventListener\PagesSortByNameFileListener;
use AFT\Carew\Twig\AFTExtension;
use Carew\Carew;
use Carew\ExtensionInterface;

class AFTCarewExtension implements ExtensionInterface
{
    public function register(Carew $carew)
    {
        $container = $carew->getContainer();

        if (!$container['twig']->hasExtension('carew')) {
            throw new \Exception('Twig Carew extension not found');
        }

        $container['twig']->addExtension(new AFTExtension($container['twig']->getExtension('carew')));

        $carew->getEventDispatcher()->addSubscriber(new PagesSortByNameFileListener());
    }
}
