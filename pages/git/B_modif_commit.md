---
title: Modifier le code, effectuer des commits et publication
subtitle: Gestion des versions
navigations: git
---

##Connaitre les changements effectués sur un projet
###Etat du projet local
Pour connaître l'état du projet et son avancement en terme de modification il suffit de lancer la commande suivante dans le répertoire du projet: 

    $ git status
    # On branch master
    nothing to commit (working directory clean)

Ce message nous informe que rien n’a été modifié. 

Après modifictaion sur un des fichiers du projet voici le résultat: 

    $ git status
    # On branch master
    # Changes not staged for commit:
    #   (use "git add <file>..." to update what will be committed)
    #   (use "git checkout -- <file>..." to discard changes in working directory)
    #
    #       modified:   fancybox.py
    #
    no changes added to commit (use "git add" and/or "git commit -a")



###Connaître les modification sur le projet
Pour connaître exactement les modifcations il suffit de lancer la commande diff 

    $ git diff
    diff --git a/fancybox.py b/fancybox.py
    index 98df1ae..03151a8 100644
    --- a/fancybox.py
    +++ b/fancybox.py
    @@ -74,6 +74,7 @@ class FancyboxDirective(Directive):
             'width': directives.length_or_percentage_or_unitless,
             'height': directives.length_or_unitless,
             'add_js': bool,
    +        #teste
         }

Les lignes ajoutées sont précédées d’un « + » tandis que les lignes supprimées sont précédées d’un « - ». Normalement les lignes sont colorées et donc faciles à repérer.


##Valdier les modifications et effectuer un commit
Le dépôt local est composé de trois "arbres" gérés par git. 
* Le premier est votre espace de travail qui contient réellement vos fichiers.
* Le second est un Index qui joue un rôle d'espace de transit pour vos fichiers 
* Le troisième le HEAD qui pointe vers la dernière validation que vous ayez fait.

###Valider les modifications
Avant de pouvoir commiter, il faut valider ces changements. 
Cela s'effectue par la commande suivant : 

    $git add <filename>

le fichier ainsi modifié passe en état *staged*, autrement dit il est dans le deuxième arbre. 
Pour ajouter toutes les modifications il suffit d'ajouter --all à  la place de filename.


###Commiter les modifications
Pour cela il faut utiliser la commande suivante : 

    $git commit -m "Messsage"

le fichier passe en état *commited*, autrement dit il est dans le troisième arbre, pret à être eenvoyé sur le serveur central.

##Travailler avec le Central
###Connaître les différences avec le central
Pour cela il suffit de lancer la commande suivante (La commande fecth origin doit être lancée avant):

    $git diff master origin/master

###Importer les différences du central
Pour cela il suffit de lancer les commandes suivantes

    $git fetch origin
    $git rebase origin/master

###Envoyer vers le dépôt central

Les modification commitées sont dans le HEAD de la copie du dépôt local. Pour les envoyer sur le dépôt distant, il faut exécuter la commande suivante:

    $git push origin master

* origin étant le nom pour le dépot distant
* master étant la branche dans laquelle on souhaite envoyer les modifications ( si pas de branche on laisse master)

##
