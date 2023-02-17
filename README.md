![php-popular-900x450](https://user-images.githubusercontent.com/101228590/218207268-f887a467-35e3-4fc4-bf4c-67647026880c.png)


# Logica de Programação em Php
[📂](https://github.com/JoaoSchrock/projects.php/tree/main/LogicaProgramacao.php)

![class](https://user-images.githubusercontent.com/101228590/219174324-e039218c-2581-4040-8571-231004079c24.png)


# Instalacao composer:
~~~
https://getcomposer.org/download/
~~~
--------------------------

1 - abrir a pasta que deseja para instalacao prompt de comando: 
~~~
cd <caminhoDoDiretorio>
~~~
-------------------------------------
2 - Copiar o arquivo:
~~~
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
~~~
------------------------------------------
3 - Baixar o setup:
~~~
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
~~~
-----------------------------------
4 - Instalar o composer:
~~~
php composer-setup.php
~~~
----------------------------------
5 - Remove o setup:
~~~
php -r "unlink('composer-setup.php');"
~~~
~~~
mexer no JSON (já configurado)
~~~
~~~
adicionar o composer.phar
~~~
-------
~~~
php composer.phar install
~~~

ATIVAR SERVER PHP
~~~
php -S localhost:port
~~~
##exemple:
~~~
php -S localhost:80
~~~
