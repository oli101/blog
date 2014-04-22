---
title: Créer un nouveau dépôt ou cloner un dépôt existant
subtitle: Gestion des versions
navigations: git
layout: doc2
---

##Créer un nouveau dépôt
Commencez par créer un dossier du nom de votre projet sur votre disque.

    $ mkdir test_git
    cd test_git

Ensuite, initialisez un dépôt Git tout neuf dans ce dossier avec la commande :

    git init

C’est tout ! Vous venez de créer un nouveau projet Git dans le dossier où vous vous trouvez.  
Un dossier caché .git vient tout simplement d’être créé.

##Connaitre les dépôts existants sur le serveur
La liste des dépôts s'affiche par une commande ssh comme suit:
    ssh git@A20000A00S190.aft-iftim.france

**A20000A00S190.aft-iftim.france** étant notre serveur de dépot.

Voici le résultat de la commande :
    PTY allocation request failed on channel 0
    hello OlivierLAMARRE, this is git@A20000A00S190 running gitolite3 v3.5.1-0-g1136                   570 on git 1.7.1

     R W    android/evaluation
     R W    ansible/vm
     R W    bundles/AFT/ConnectBundle
     R W    bundles/AFT/ExtJSBundle
     R W    bundles/AFT/JsRoutingBundle
     R W    bundles/AFT/LdapSecurityBundle
     R W    library/AFT/Connect
     R W    project/android/evaluation/Tablet
     R W    project/android/evaluation/Website
     R W    projects/gepstage
     R W    projects/gepweb
     R W    projects/gewweb
     R W    projects/leea
     R W    projects/md
     R W    projects/organigramme
     R W    projects/planning_formateur
     R W    projects/rdc
     R W    projects/security
     R W    projects/sita
     R W    sphinx/extension/fancybox
     R W    sphinx/leea
     R W    sphinx/pegase
     R W    sphinx/rdc
    Connection to A20000A00S190.aft-iftim.france closed.



## Cloner un dépôt existant
Cloner un dépôt existant consiste à récupérer tout l’historique et tous les codes source d’un projet avec Git. 
La commande est la suivante:
```bash
git clone serveur:dossier [dossier]
```
exemple :
    $ git clone git@A20000A00S190.aft-iftim.france:sphinx/extension/fancybox.git fancybox_git  

Voici le résultat de la commande :
    $ git clone git@A20000A00S190.aft-iftim.france:sphinx/extension/fancybox.git fancybox_git
    Cloning into 'fancybox_git'...
    remote: Counting objects: 154, done.
    remote: Compressing objects: 100% (93/93), done.
    remote: Total 154 (delta 62), reused 147 (delta 58)
    Receiving objects: 100% (154/154), 100.13 KiB, done.
    Resolving deltas: 100% (62/62), done.
