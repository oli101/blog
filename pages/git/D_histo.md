---
title: Historique et état d'un projet
subtitle: Gestion des versions
navigations: git
---



##Lecture les logs
L'analyse des logs permet de connaître tout le passif d'un projet, pour cela il suffit d'executer la commande suivante : 

    $git log

Cela donne le résultat suivant : 

    commit fd1c927c592da1ac334ea3c55bb77488aca0d985
    Author: Olivier Lamarre <OlivierLAMARRE@aft-iftim.com>
    Date:   Wed Dec 4 10:44:07 2013 +0100

        Added latex support

    commit 1e4e299a6cef119ab620ee4da86d3db2b3e6cd86
    Author: Francis Besset <FrancisBESSET@aft-iftim.com>
    Date:   Thu Nov 28 19:23:39 2013 +0100

        Fixed bullshit in fancybox.py

    commit 1ef40c7a4b13e1e7bbd7128d3230955ce8e96d32
    Author: Francis Besset <FrancisBESSET@aft-iftim.com>
    Date:   Thu Nov 28 18:38:44 2013 +0100

        Removed useless files and move fancybox dir

##Connaitre l'état de l'arbre du projet
Pour que cela focntionne correctement il faut ajouter une ligne supplémentaire dans la config git
Dans le répetoire .git se trouyve le fichier "config", il suffit d'ajouter la ligne suivante : 

    [alias]
        lg = log --color --graph --pretty=format:'%Cred%h%Creset -%C(yellow)%d%Creset %s %Cgreen(%cr) %C(bold blue)%Creset' --abbrev-commit 

Cela s'effectue avec la commande suivante : 

    git lg --all

Ce qui donne l'affichage suivant : 

    * 3b1143a - (HEAD, master)Correction orthographe (Olivier Lamarre 4 minutes ago)
    * c32601c - (origin/master)Orthographe (Olivier Lamarre 5 weeks ago)
    * a566c91 -Orthographe (Olivier Lamarre 5 weeks ago)
    * 5bf67a1 -css couleur PEGASE (Olivier Lamarre 5 weeks ago)
    * 99698b7 -Modification de la hauteur du body (Olivier Lamarre 5 weeks ago)
    * 3a0553b -Fixed fancybox static file published in build (Olivier Lamarre 5 weeks ago)
    * da5669f -Initial commit (Olivier Lamarre 5 weeks ago)

## Récupérer et tirer depuis des dépôts distants
Pour cela il faut mettrre à jour les données de la branche serveur sur notre PC avec la commande : 

    $git fetch origin


## Appliquer les modifications et repositionner l'abre de développememt
Cette action aura pour but de mettre à niveau la branche master du local par rapport à la branche origin du serveur, cette action suit le "fetch" précédent: 

    $git rebase origin/master
