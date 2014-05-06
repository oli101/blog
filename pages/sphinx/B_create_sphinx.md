---
title: Création Projet Sphinx 
subtitle: Documentation Generator
navigations: sphinx
---

## Créer un nouveau projet

Créer un répertoire
Sous une fenêtre dos aller dans le répertoire en question et lancer la commande suivannte

    cd D:\Tuto\Portail_Tuto
    D:\Tuto\Portail_Tuto>sphinx-quickstart


## Contruire un projet

Dans le répertoire du projet lancer la commande suivante:

    $ sphinx-build -b html ./ _build/html

Cela va créer un répertoire _build/html avec tout le contenu au format html.

Si on veut extraire en latex pour génération en pdf faire:

    $ sphinx-build -b latex ./ _build/latex


Cela va créer un répertoire _build/latex avec tout le contenu au format latex.

## Construire le PDF

On utilise pour cela le logiciel [Tex Live](http://www.tug.org/texlive/). 

Il suffit de lancer TextLive Manager et d'ouvrir le fichier .tex et effectuer la génération. Une nouvelle fenêtre va apparaitre sur la droite avec la version du projet au format PDF.
Remarque : Dans la fenêtre de droite il faut re-faire la deuxième génération sinon il existe un problème sur de création de la table des matières

### Configuration latex

Pour la génération du fichier en PDF
Dans le fichier sphinxmanual.ds il faut modifier la ligne 9 

    -> %\PassOptionsToClass{openright}{\sphinxdocclass}
en 

    -> %\PassOptionsToClass{openany}{\sphinxdocclass}

sinon les chapitres commencent toujours sur une page pair

Pour supprimer la page blanche après le titre il faut mettre en commentaire dans le fichier _build\latex\sphinxmanual.cls la ligne avec la notion **\cleardoublepage%**, environ ligne 74

Pour supprimer la page blanche après la table des matières il faut mettre en commentaire dans le fichier _build\latex\sphinxmanual.cls la ligne avec la notion **\cleardoublepage%**, environ ligne 113
