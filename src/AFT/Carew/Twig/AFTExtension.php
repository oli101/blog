<?php

namespace AFT\Carew\Twig;

use Carew\Twig\CarewExtension;

// La classe AFTExtension herite de la classe Twig_Extension comme CarewExtension 
class AFTExtension extends \Twig_Extension
{
    protected $carewExtension;

    // Le contructeur se base sur l'objet carewExtension déja existant
    public function __construct(CarewExtension $carewExtension)
    {
        $this->carewExtension = $carewExtension;
    }

    // Méthode magique qui permet d'intercepter l'appel une fonction sans pour autant connaitre le nom (renderDocuments)
    public function __call($name, $arguments)
    {
        // La fonction call_user_fucntion_array va donc appler la methode renderDocuments pour notre CarewExtension avecle passage de tous les parametres
        // necessaire au bon fonction de la méthode d'origine
        return call_user_func_array(array($this->carewExtension, $name), $arguments);
    }

    // Surcharge de la fonction de CarewExtension
    public function renderDocuments(\Twig_Environment $twig, array $documents = array(), array $pages = array(), $currentPage = null)
    {
        // On affecte l'ordre de tri
        ksort($documents);
        // On rappele la methode d'origine avec les parametre (passés dans $arguments de la fonction call_user....)
        return $this->carewExtension->renderDocuments($twig, $documents, $pages, $currentPage);
    }

    // Obligation de réécrire toutes les méthodes existantes de la classe héritée (Twig_extension)
    public function getName()
    {
        return $this->carewExtension->getName();
    }

    public function initRuntime(\Twig_Environment $environment)
    {
        return $this->carewExtension->initRuntime($environment);
    }

    public function getTokenParsers()
    {
        return $this->carewExtension->getTokenParsers();
    }

    public function getNodeVisitors()
    {
        return $this->carewExtension->getNodeVisitors();
    }

    public function getFilters()
    {
        return $this->carewExtension->getFilters();
    }

    public function getTests()
    {
        return $this->carewExtension->getTests();
    }

    public function getFunctions()
    {
        return $this->carewExtension->getFunctions();
    }

    public function getOperators()
    {
        return $this->carewExtension->getOperators();
    }

    public function getGlobals()
    {
        return $this->carewExtension->getGlobals();
    }
}
