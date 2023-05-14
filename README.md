## Project v.1

Football Managment App is a web application that allow to **C**reate, **R**ead, **U**pdate & **D**elete the principals actors in a game match. The functions implemented in this version are:
 - **CRUD** teams
 - **CRUD** players
 - **CRUD** games

## Video presentation

https://github.com/AlbertLnz/Football-managment-app/assets/120119395/3b94f059-4cfc-4cd8-8909-430c28e9bb94

## How to install

###  · Cloning the repository

 1. Create a new folder on your Desktop and do it "Git Bash Here"
 2. Copy the next command on your GIT tab:
	 ```
	git clone https://github.com/AlbertLnz/Football-managment-app.git
	```
 3. Be sure that you are inside the app:
 	 ```
	cd Football-managment-app
	```
	You have to be looking at the following image:
	![edited](https://github.com/AlbertLnz/Football-managment-app/assets/120119395/a3e3390e-777a-4aa8-b70a-265a6d8ab4c8)


 4. Before installing Breeze package and Node.js dependencies, you must edit the **example.env** file to **.env** 

 5. Having installed Composer (you can download it at this  [link](https://getcomposer.org/)), run the following command to download the Breeze package in Laravel and thus be able to interact with the artisan command interface:
 	 ```
	composer require laravel/breeze --dev
	```
	Or you can insert the URL of your server by editing the .env file changing the app's URL if you have a Hosting:
	 ```
	APP_URL="/{directorio del proyecto}"
	```
 6. Once Breeze package installed or URL inserted, you will need to install the Node.js dependencies (you must have Node.js on your computer beforehand [link](https://nodejs.org/es))
 	 ```
	npm install
	```
 7. ***OPTIONAL:*** *If you want, you can download the DataBase that I provided you to observe the functioning of the application on this link &#8594;* [Example DataBase](https://drive.google.com/file/d/1vI6LBr5FV1F4k3A5kv7rbqHAWbY8kIdI/view) *, and follwing the next step:*
 
    7.1. Once the file is downloaded, we run our server (XAMPP), go to [PHPMyAdmin](http://localhost/phpmyadmin/) and create a DataBase named "football_managment_app" and without create any folder, import the downloaded Database.

</br>

 8. Now we are going to run the server with the following command (*In case of having Hosting, skip these command*) 
	 ```
	php artisan serve
	```
    And we access the [URL provided by artisan]('http://127.0.0.0') and click on **"GENERATE APP KEY"** and refresh
    
    <img width="301" alt="1" src="https://github.com/AlbertLnz/Football-managment-app/assets/120119395/49d25057-9dfc-49d3-9ebb-08aed9e57b85">
    
 9. And in other Git tab, execute the following command:
 	 ```
	npm run dev
	```
	
	![edited2](https://github.com/AlbertLnz/Football-managment-app/assets/120119395/d3b78cad-1889-48d8-83c6-315c6232e7e9)
	*To stop commands use the keys: Ctrl + C*

	#### And if we refresh the page we will see the magic!
	
## Technologies used
### Languages:
![Top Langs](https://github-readme-stats.vercel.app/api/top-langs/?username=AlbertLnz&theme=Football-managment-app)
### Framework used:
<p><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo"></a></p>

## About me / License
· [Github Albert](https://github.com/AlbertLnz) </br>
· [Linkedin Albert](https://www.linkedin.com/in/albert-l-342138178/)

Albert Lanza Rio
