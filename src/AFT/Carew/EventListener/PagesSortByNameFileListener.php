<?php

namespace AFT\Carew\EventListener;

use Carew\Document;
use Carew\Event\CarewEvent;
use Carew\Event\Events;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class PagesSortByNameFileListener implements EventSubscriberInterface
{
    public function onDocuments(CarewEvent $event)
    {
        $documents = $event->getSubject();

        // Le tableau collection va permettre de gérer que les pages
        $collections = array();
        foreach ($documents as $document) {
            $type = $document->getType().'s';
            if (!array_key_exists($type, $collections)) {
                $collections[$type] = array();
            }

            $collections[$type][$document->getFilePath()] = $document;
        }

        if (isset($collections['pages'])) {
            $collections['pages'] = $this->sortByNameFile($collections['pages']);
        }

        // On renvoi les documents typés pages dans l'ordre voulu
        $event->setSubject($collections['pages']);
    }

    public static function getSubscribedEvents()
    {
        return array(
            Events::DOCUMENTS => 'onDocuments',
        );
    }

    private function sortByNameFile($documents)
    {
        uasort($documents, function($a, $b) {
            $aTitle = $a->getTitle();
            $bTitle = $b->getTitle();
            if ($a->getType() != 'page' || $b->getType() != 'page') {
                return 0;
            }
            return $a->getFile()->getFilename() < $b->getFile()->getFilename() ? -1 : 1;
        });
        return $documents;
    }
}
