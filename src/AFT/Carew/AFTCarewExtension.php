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

        // Appel au code perso pour pouvsoir avoir l'affichage des pages par ordre alphabetique
        $container['twig']->addExtension(new AFTExtension($container['twig']->getExtension('carew')));

        // Anciennne extension qui ne fonctionne pas, tri bien lors de la construction mais aucun effet lors de l'affichage
        $carew->getEventDispatcher()->addSubscriber(new PagesSortByNameFileListener());
    }
}
