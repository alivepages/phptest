#!/bin/bash

# General Update
#apt-get -y update
#apt-get -y install awscli
#apt-get -y install ruby
#cd /home/ubuntu
#aws s3 cp s3://aws-codedeploy-us-east-1/latest/install . --region us-east-1
#chmod +x ./install
#./install auto
#apt-add-repository --force-yes --yes ppa:chris-lea/redis-server

apt-get -y update
apt-get --force-yes --yes install apache2 apache2-mpm-prefork apache2-utils libexpat1 ssl-cert redis-server php5-redis libapache2-mod-php5 php5 php5-common php-apc php5-curl php5-dev php5-gd php5-imagick php5-mcrypt php5-memcache php5-memcached php5-mhash php5-mysql php5-pspell php5-snmp php5-sqlite php5-xmlrpc php5-xsl build-essential tcl8.5

#Bolt-ern-uL-zEd-pAv-bev-nig-wymT
echo mysql-server-5.1 mysql-server/root_password password 9hbbF8WCNBETJqAuQ7vuhK8Hd | debconf-set-selections
echo mysql-server-5.1 mysql-server/root_password_again password 9hbbF8WCNBETJqAuQ7vuhK8Hd | debconf-set-selections
apt-get -y install mysql-server

echo "ServerName kichinkAPI" >> /etc/apache2/apache2.conf

cd /etc/apache2/sites-available

#Remoive default sites
sudo  a2dissite 000-default.conf

rm 000-default.conf
rm default-ssl.conf

#Create new site availible
#Add virtual host config for our sites
cat <<EOF >api.kichink.com.conf
#Admin
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

apache2ctl graceful

service redis start
