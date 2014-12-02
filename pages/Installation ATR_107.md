---
title: Installation sur serveur
subtitle: Projet ATR
navigations: main
---


## Console

    http_proxy="";php app/console assetic:dump --env=prod --no-debug web

    php app/console cache:clear --env=prod --no-debug --no-warmup
    rm -rf /tmp/wsdl_9961cc64c59f9b669a1d434d25b91ade.cache



## Deploiement sur le 102
    rsync -avz --delete-after --exclude-from=app/rsync_exclude.txt ./ etudes@10.0.6.102:/home/http/deploy/atr

