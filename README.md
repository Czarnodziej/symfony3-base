symfony3-base
=============

Requirements:
- gulp
- user bundle
- basic frontend/backend logic

TODO:
 - language in route prefix
 - redirect logged in users from login to dashboard after coming to /login path
 - redirect user to proper view after logged in resetted its password
 - flash after submitted forms
 - basic tests

Gulp:
```
# prod env
gulp --prod
```


```
HTTPDUSER=`ps axo user,comm | grep -E '[a]pache|[h]ttpd|[_]www|[w]ww-data|[n]ginx' | grep -v root | head -1 | cut -d\  -f1`
# if this doesn't work, try adding `-n` option
sudo setfacl -R -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX var
sudo setfacl -dR -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX var

#load db structure
php bin/console doctrine:schema:update --force
#add admin:admin user
php bin/console doctrine:fixtures:load
```
