Artificial Intelligence Challenge
===

Serveur LAMP
==

## Sous Windows

 * Installez EasyPHP : http://www.easyphp.org.
 * Le lancer, une icône dans la barre des tâches apparaitra.
 * Testez si tout va bien : ouvrir le navigateur web et taper : 127.0.0.1 dans
 la barre d'adresse."It works ! " devrait apparaitre. 

 * Cliquez droit sur l'icône puis aller dans "Administration".
 * Définissez le répertoire de travail (le dossier Git).

## Sous Linux

 * Lancez un terminal.
 * Tapez : `sudo apt-get install lamp-server^` (sans oublier le ^)
 * Un mot de passe administrateur va vous être demandé pour la base de données,
 pensez à le conserver !
 * Testez si tout va bien : ouvrez le navigateur web et tapez : `127.0.0.1` dans
 la barre d'adresse. "It works ! " devrait apparaitre. 
 * Ensuite, il faut configurer Apache : `sudo chown -R $USER:users /home/mon-nom/depot-git-aic`
 * Puis : `sudo ln -s /home/nom-nom/depot-git-aic /var/www`
 * En allant sur `127.0.0.1/aic` dans le navigateur, le site devrait apparaitre.

 * Installer PhpMyAdmin : `sudo apt-get install phpmyadmin`
 Sélectionnez "apache2" si l'on vous demande un serveur web à configurer
 automatiquement.
 * De même, sélectionnez "oui" si l'on demande de configurer phpmyadmin avec
 db-config-common, et entrez le mot de passe administrateur de la base de
 données que vous avez mis précédemment.
 * Entrez ensuite un mot de passe pour PhpMyAdmin.
 * Testez en allant sur : `127.0.0.1/phpmyadmin`. L'utilisateur sera `root`, le
 mot de passe celui que vous aurez défini plus tôt.

## Désinstalation

# Sous Linux

 * `sudo apt-get remove apache2 apache2-mpm-prefork apache2-utils apache2.2-bin
 apache2.2-common libapache2-mod-php5 libapr1 libaprutil1
 libaprutil1-dbd-sqlite3 libaprutil1-ldap libdbd-mysql-perl libdbi-perl
 libhtml-template-perl libmysqlclient18 libnet-daemon-perl libplrpc-perl
 libterm-readkey-perl mysql-client-5.5 mysql-client-core-5.5 mysql-common
 mysql-server mysql-server-5.5 mysql-server-core-5.5 php5-cli php5-common
 php5-mysql phpmyadmin`

# Sous Windows

 * Désinstaller le programme "EasyPHP"
