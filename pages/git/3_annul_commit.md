---
title: Annuler un commit effectué par erreur
subtitle: Gestion des versions
navigations: git
layout: doc2
---


##Corriger une erreur
###Modifier le dernier message de commit

Si vous avez fait une faute d’orthographe dans votre dernier message de commit ou que vous voulez tout simplement le modifier, vous pouvez le faire facilement grâce à la commande suivante :

    $git commit --amend

L’éditeur de texte s’ouvrira à nouveau pour changer le message.

Cette commande est généralement utilisée juste après avoir effectué un commit lorsqu’on se rend compte d’une erreur dans le message. Il est en effet impossible de modifier le message d’un commit lorsque celui-ci a été transmis à d’autres personnes.

###Annuler le dernier commit (soft)

Si vous voulez annuler votre dernier commit :

    $git reset HEAD

Cela annule le dernier commit et revient à l’avant-dernier.


###Annuler les modifications d’un fichier avant un commit

Si vous avez modifié plusieurs fichiers mais que vous n’avez pas encore envoyé le commit et que vous voulez restaurer un fichier tel qu’il était au dernier commit, utilisez git checkout :

    $git checkout nomfichier

Le fichier redeviendra comme il était lors du dernier commit.

###Annuler/Supprimer un fichier avant un commit

Supposons que vous veniez d’ajouter un fichier à Git avec git add et que vous vous apprêtiez à le « commiter ». Cependant, vous vous rendez compte que ce fichier est une mauvaise idée et vous voudriez annuler votre git add.

Il est possible de retirer un fichier qui avait été ajouté pour être « commité » en procédant comme suit :

    $git reset HEAD -- fichier_a_supprimer


##Si ce chapitre n'est pas suffisant appeler Maître F.BESSET
