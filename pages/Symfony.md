---
title: Symfony
subtitle: Installation application
navigations: symfony
---

##Migration d'un projet
Si il existe des scripts de migration interne

     php app/console doctrine:migrations:execute 20141201114004

20141201114004 est le numéro de version se trouvant dans le répertoire :app / DoctrineMigrations / 


##Installation de l'environnement de production
Pour l'install de pages web

    php app/console assets:install web --env=prod

Pour les javascripts:

    php app/console assetic:dump --env=prod
