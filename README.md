dokku-wordpress-template
========================

Wordpress can be quite a .... hassle to set up on Dokku. This template makes is considerably easier.

Requirements:
- dokku (latest: 0.4.1 as of last update)
- (depricated) https://github.com/wmluke/dokku-domains-plugin (depricated) 
- https://github.com/marchon/dokku-mariadb
- https://github.com/marchon/dokku-volume 
- ( testing ) https://github.com/marchon/dokku-docker-auto-volumes.git


to check installed plugins 
```
root@studionorthnh:~# dokku plugin

  00_dokku-standard    0.4.0 enabled    dokku core standard plugin
  20_events            0.4.0 enabled    dokku core events logging plugin
  apps                 0.4.0 enabled    dokku core apps plugin
  backup               0.4.0 enabled    dokku core backup plugin
  build-env            0.4.0 enabled    dokku core build-env plugin
  certs                0.4.0 enabled    dokku core certificate management plugin
  checks               0.4.0 enabled    dokku core checks plugin
  common               0.4.0 enabled    dokku core common plugin
  config               0.4.0 enabled    dokku core config plugin
  docker-options       0.4.0 enabled    dokku core docker-options plugin
  domains              0.4.0 enabled    dokku core domains plugin
  enter                0.4.0 enabled    dokku core enter plugin
  git                  0.4.0 enabled    dokku core git plugin
  logs                 0.4.0 enabled    dokku core logs plugin
> mariadb              1.0.0 enabled    dokku mariadb service plugin
  nginx-vhosts         0.4.0 enabled    dokku core nginx-vhosts plugin
  plugin               0.4.0 enabled    dokku core plugin plugin
  ps                   0.4.0 enabled    dokku core ps plugin
  shell                0.4.0 enabled    dokku core shell plugin
  tags                 0.4.0 enabled    dokku core tags plugin
  tar                  0.4.0 enabled    dokku core tar plugin

```


```
    dokku plugin:install  https://github.com/marchon/dokku-mariadb.git
    dokku plugin:install  https://github.com/marchon/dokku-volume.git
```

- Extract the files into a new folder 
- edit the six variables on top of the Makefile 
- call ```make install```

```
# MODIFIY THESE SIX SETTINGS

# Setting 1: will also be the Name on the dokku host
PROJECT_NAME=wptest

# Setting 2: dokku.mycompany.com or whatever
DOKKU_HOST=d

# Setting 3: usually it's dokku
DOKKU_USER=dokku

# Setting 4: in case you have want to push something else than master
BRANCH=master

# Setting 5: the name of the local git remote
GIT_TARGET=live

# Setting 6: requires the domains plugins and sets the domain
VHOST=wptest.dokku.dudagroup.com
```


E.g.:
```
git clone https://github.com/marchon/dokku-wordpress-template.git myproject
cd myproject
rm -rf .git # except if your contributing to this :-)
vi Makefile
make install
```

If everything succeeded you'll have a new instance running!

Please be aware, that this is just a Makefile..... and still under development.
