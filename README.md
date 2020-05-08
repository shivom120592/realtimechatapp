# PHP Realtime Messenger

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

PHP Realtime Messenger is a real time chat application built using PHP, Javascript, MySQL and Firebase. This application is able to send messages along with images.

### Technologies Used 
Below mentioned is the list of all technologies, frameworks, languages, DB's used for building this application.

* [jQuery] - For a much more user friendly DOM manipulation API.
* [PHP 7] - Serves as the foundation of the application and handles the authentication and DB interaction.
* [Javascript] - Is used to send, fetch, and display messages being sent by the users.
* [Firebase] - Firebase was used for asynchronous chat transfers. 
* [Apache2] - Apache2 was used to serve the application
* [MySQL] - Holds the data for user, and their respecitve uuid's
* [Composer] - To install dependencies to interact with Firebase's API for PHP a little better.


### Installation
Follow along to know how to setup the project.

Install the dependencies and devDependencies and start the server.

```sh
# install all the dependencies
$ composer install 
# import the db schema in your MySQL instance
$ mysql -u root -p 
mysql> create database phpfirebase; 
$ mysql -u root -p phpfirebase < schema.sql
```
Once you're done you're going to need to create a [Firebase instance].
Create a new project. Navigate to `Database` and create one for yourself. You don't have to manually create entry keys, once we send a request to the backend you'll be propmpted by Firebase to create the keys automatically.

Once you're done with all of that, you're gonna wanna start your Apache2 instance.

```sh
$ sudo systemctl restart apache2
```

then navigate to `localhost/phpmessenger`. Navigate to register. After you're done login and you'll be greeted with all the user's on the server. You can click on any user and start chatting right away.

MIT


**Free Software, Hell Yeah!**

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)


   [jQuery]: <https://jquery.com/>
   [git-repo-url]: <https://github.com/joemccann/dillinger.git>
   [PHP 7]: <https://www.php.net/manual/en/migration70.new-features.php>
   [Javascript]: <https://javascript.info/>
   [Firebase]: <https://firebase.google.com/>
   [Apache2]: <https://httpd.apache.org/>
   [MySQL]: <https://www.mysql.com/>
   [Composer]: <https://getcomposer.org/>
  

