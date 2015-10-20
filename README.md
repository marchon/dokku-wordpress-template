dokku-wordpress-template
========================

Wordpress can be quite a .... hassle to set up on Dokku. This template makes is considerably easier.


Requirements:
- dokku (latest)
- (depricated) https://github.com/wmluke/dokku-domains-plugin (depricated) 
- https://github.com/marchon/dokku-mariadb
- https://github.com/marchon/dokku-volume

```
    dokku plugin:install  https://github.com/marchon/dokku-mariadb.git
    dokku plugin:install  https://github.com/marchon/dokku-volume.git
```

Extract the files into a new folder, edit the variables on to of the Makefile and call ```make install```

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
