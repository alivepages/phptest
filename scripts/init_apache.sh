#!/bin/sh

#Check if this is www or dns
DIRINIT="/isInit"
if [ -d "$DIRINIT" ]; then
echo "Server already initiated"
rm -R /srv/api.kichink.com

else


#Server name
echo "ServerName KichinkAPI" >> /etc/apache2/apache2.conf

#check if default and remove all
cd /etc/apache2/sites-available

#Remoive default sites
defaultserverfile="/etc/apache2/sites-available/000-default.conf"
if [ -f "$defaultserverfile" ]
then
  echo "$defaultserverfile found. Removing default site"
  sudo  a2dissite 000-default.conf
  rm 000-default.conf
  rm default-ssl.conf
else
  echo "$defaultserverfile not found."
fi


##Add conf files

  cat <<EOF >api.kichink.com.conf
  #kontrol
  <VirtualHost *:80>
  ServerName api.kichink.com

  DocumentRoot /srv/api.kichink.com/web/content/
  <Directory /srv/api.kichink.com/web/content/>
      Require all granted
      Options FollowSymLinks MultiViews
      AllowOverride All
  </Directory>
  ErrorLog /api_error.log
  LogLevel warn
  CustomLog /api_access.log combined
  </VirtualHost>
EOF

a2ensite api.kichink.com.conf

a2enmod rewrite

php5enmod mcrypt

mkdir /isInit

fi
