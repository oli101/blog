## Récupération des données depuis git

    git status
    git lga
    git fetch
    git rebase origin/master


## Migration d'un projet
Si il existe des scripts de migration interne

     php app/console doctrine:migrations:execute 20141201114004

20141201114004 est le numéro de version se trouvant dans le répertoire :app / DoctrineMigrations / 


## Installation de l'environnement de production
Pour l'install de pages web

    php app/console assets:install web --env=prod

Pour les javascripts:

    php app/console assetic:dump --env=prod



## Deploiement sur le 102
    rsync -avz --delete-after --exclude-from=app/rsync_exclude.txt ./ etudes@10.0.6.102:/home/http/deploy/atr


## Déploiement sur la recette/dev
    fab -f bin/fabfile.py test deploy:force -p "etudes"


## En cas de problème
    rm -rf /tmp/wsdl_8b0183f6eb607f85aeb7930e2533dbe6.cache
    http_proxy="";php app/console assetic:dump --env=prod --no-debug web     
