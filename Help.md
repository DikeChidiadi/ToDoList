# How to download Tailwind CSS:

• You would need to have Node.js downloaded.

• Create a Project in Laravel.

• Type this: ```npm install tailwindcss @tailwindcss/vite```

• After it finished downloading then you go to tailwind.config.js
  and type this: ```import tailwindcss from '@tailwindcss/vite'```

• Under ```./resources/css/app.css``` you add this too: 
```php
@import "tailwindcss";
@source "../views";
```

• DONT DELETE THE LINE THAT HAS @VITE IN IT THAT START WITH IF AND ENDS
  WITH ENDIF!!!

# After downloading Tailwind CSS, downloading Daisy UI:

• Type this into the terminal: ```npm i daisyui```

• In tailwind.config.js you put this into the plugin: 
```php
require('daisyui'),
```


# How to download the latest tailwindcss version?

Type this in the terminal: ```npx @tailwindcss/upgrade```

It will ask: ``` Ok to proceed? (y) ```

After you type ```y``` it will download the latest tailwindcss version.


# Php artisan serve problem
If this issue shows up:

```Failed to listen on 127.0.0.1:8000```

```Failed to listen on 127.0.0.1:8001```

```Failed to listen on 127.0.0.1:8002```

```Failed to listen on 127.0.0.1:8003```

```Failed to listen on 127.0.0.1:8004```

```Failed to listen on 127.0.0.1:8005```

```Failed to listen on 127.0.0.1:8006```

```Failed to listen on 127.0.0.1:8007```

```Failed to listen on 127.0.0.1:8008```

```Failed to listen on 127.0.0.1:8009```

```Failed to listen on 127.0.0.1:8010```

Here is the solution:

• First of all you have to know which PHP version you are using.

• Then you open the folder and follow this path: ```C:\Users\<username>\.config\herd\bin\php84\php.ini``` 
  (php84 is the current version as of 15.03.2025)

• Open the php.ini file in an editor and with STRG + F you search for ```variables_order```

• Once you found it remove the ```E``` from ```EGPCS```

• Then you save it!!!

• Close it and also close Visual Studio Code and reopen it again

• If you go to the Terminal and type: ```php artisan serve```. 
  It should work after that.


# Php artisan commands:
• ```php artisan migration``` -> is for migrating the table that I created

• ```php artisan make:migration``` -> erstellt eine Migration

• ```php artisan make:migration create_name_table``` -> so wird eine *table* erstellt

• ```php artisan make:model name -m``` -> erstellt ein Model

• ```php artisan migrate``` -> is for migration commands

• ```php artisan make:controller NameController``` -> is for creating a controller

• ```php artisan make:controller NameController --model=Name``` -> is for creating a controller and a model

# How to know your current php version
Type this inside your terminal: ```php --version``` or ```php -v```

# How to make the Database from Laravel appear in HeidiSQL

• You have to go to your models and type ```php artisan migrate```

• After it's migrated you open HeidiSQL and the Models you created should appear

# Installing MySQL

• Go to the website of MySQL and click downloads

• Then scroll down to the near end and click MySQL Community (GPL) Downloads

• After that click on MySQL Community Server and take the current version (right now: 9.3.0 Innovation), select the correct   operating system and press download

Now comes the configuration of MySQL

• MySQL Server Installations: Choose "Configure this server instance as a side-by-side installation

• Type and Networking: Leave everything as it is. (If the port is already in use choose another one. With cmd and typing      netstat -a you have a view of the active networks)

• Accounts and Roles: Choose the password

• Windows Service: Leave everything as it is

• Server File Permissions: Choose → Yes, grant full access to the user running the Windows Service bla bla bla

• Sample Databases: Tick off the two boxes

• Apply Configuration: Just press Execute so all will be executed

* In case this error appears:
* > SQLSTATE[42S02]: Base table or view not found: 1146 Table 'ue4_dike_eventmanager.sessions' doesn't exist (Connection: mysql, SQL: select * from `sessions` where `id` = OOcNcv20Gt9F0KSX7kcrbn6z79Le9DGyjOhsjSmM limit 1)

  You have to open ´´´app\database\migrations´´´ and migrate this table: ´´´create_users_table.php´´´
  How to migrate → php artisan migrate
  After you did this you open Herd and the website should be visiable.

# Using MySQL Command Line Client
• Go to START

• Go to Alle and scroll to MySQL and click the MySQL Command Line Client

• After the window opens type in your password

• To use a database first type this: create database NameDB; and then use NameDB. With that the database gets changed.

• If you want to see all your databases type: show databases;
