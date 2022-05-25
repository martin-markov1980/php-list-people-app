# php-list-people-app

Motivation:
After completing the procedural PHP for beginners course at https://drupalize.me/topic/php
I have decided to put in practice everything I have learned and build this CRUD PHP people list app.
Please note that there is not much of CSS styling in the app as my main focus was the PHP functionality.

Functionality:
Create person, update person, see person details and delete person.

How to setup the app locally:
 - Make sure you have Docker and DDEV installed https://ddev.readthedocs.io/en/stable/
 - Clone the repo to your local
 - cd to the php-list-people-app folder and run:
 ddev start
 - import the database with:
 ddev import-db --src=people.sql
 - to open the app in your browser run:
 ddev launch
 
