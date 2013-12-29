pageR
====

pageR is a rapid website development script in PHP for people who dose't like to work on hardcore frameworks.
Our primary goal is to provide a structured format that enables PHP users at all levels to rapidly develop robust web applications, without any loss to flexibility.

Some Info
----------------------------

[pageR](http://www.aveshan.com) - The rapid development PHP format
[pageR GitHub](https://github.com/Aveshan/pageR) - Source

Lincense Info
---------------------------------

Auther: Chinmay G.
License Under [MIT](http://opensource.org/licenses/MIT) - Open Source License.


How To Use
---------------------------

1> You must enable rewrite_mod.
2> Add php file having name of the link in 'links' folder.
3> This is how links are added in html "<a href='<?php ech0 URL;?>/about'>About Us</a>".
4> Add your functions in class file in folder master/Core.php Core class object already initiated.
5> Edit Your URL and DB variables in master/conf.php file.
6> Sometimes .htaccess file dose not arrive, use following and save it in .htaccess file and pageR folder.
"RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-l
RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]
"(without quotes).

Support Us
---------------------------
Use it, And keep me posted if you have any new idea about it. :-D

Hire Me
---------------------------
Mail me, I am available for freelance work, Remote worldwide or locally in India.