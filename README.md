#pageR


pageR is a rapid website development script in PHP for people who dosn't like to work on hardcore frameworks.
Our primary goal is to provide a structured format that enables PHP users at all levels to rapidly develop robust web applications, without any loss to flexibility.

##Some Info


1. [pageR](http://www.aveshan.com) - The rapid development PHP format
2. [pageR GitHub](https://github.com/Aveshan/pageR) - Source

##Lincense Info


Auther: Chinmay G.
License Under [MIT](http://opensource.org/licenses/MIT) - Open Source License.


##How To Use


#### ON YOUR SERVER (we use Ubuntu 12.04 LTS):

1. install Apache, MySQL, PHP and eventually PHPMyAdmin: [How to setup a LAMP stack on Ubuntu 12.04](http://www.dev-metal.com/setup-basic-lamp-stack-linux-apache-mysql-php-ubuntu-12-04/)
2. install mod_rewrite and activate it: [How to enable mod_rewrite in Ubuntu 12.04 LTS](http://www.dev-metal.com/enable-mod_rewrite-ubuntu-12-04-lts/)
3. remove all files from the */var/www* (should only be Apache's index.html and your phpinfo()-containing .php right now) with `rm -r /var/www/*`,
otherwise things will get messy and git won't download the repo into a non-empty folder
4. copy the contents of the extracted pageR repository into /var/www ! In this tutorial we don't use a sub-folder,  so your index.php should go into /var/www !
Best way to do is cloning via git: `git clone https://github.com/Aveshan/pageR.git /var/www`
5. Run the pageR.sql statements in the via PHPMyAdmin or do it via mysql command-line
5. You must enable rewrite_mod.
7. Add php file having name of the page link you have to add in 'links' folder. say "about.php".
8. This is how links are added in html link href='<?php ech0 URL;?>/about'.
9. Add your functions in class file in folder master/Core.php Core class object already initiated.
10. Edit Your URL and DB variables in master/conf.php file.
11. Sometimes .htaccess file dose not arrive, use following and save it in .htaccess file and pageR folder.
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-l
RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]

## Contribute

Please commit only in *development* branch. The *master* branch will always contain the stable version.
Use it, And keep me posted if you have any new idea about it. :-D

###Hire Me

Mail me, I am available for freelance work, Remote worldwide or locally in India.
