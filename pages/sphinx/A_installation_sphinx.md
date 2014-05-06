---
title: Installation Sphinx 
subtitle: Documentation Generator
navigations: sphinx
---


## Installation Sous Windows


* Téléchargement de python-3.3.2.msi et installation
* Mise à jour du Path avec c:\Python33
* Téléchargelent de setuptools-1.1.7.tar.gz
* Téléchargement de la commande python ez_setup.py
* Lancement de la commande python  > python ez_setup.py
* Mise à jour du Path avec c:\Python33\Scripts
* Ajout de la variable d'environnement HTTPS_proxy = http://proxy.aft-iftim.france:81
* Lancement de la commande easy_install sphinx

## Installation Sous Debian

Se connecter en tant que root 

    aft@vm-dev:~/dev$ su - 
    Mot de passe :
    root@vm-dev[~] # aptitude search sphinx 
    root@vm-dev[~] # aptitude install python-sphinx
