## Setting Up your environment
- Firstly, create a mysql database titled  'celestia-dev'
- For the database,
		username: root
		password: mysql
- import mysql db from the 'db' directory
	[for more info, read '/models/init.php']

- Save project files in '/opt/secret-ninja' and change url to 'localhost/3333' as directed
	by [/config/config.php]


## Project Structure
- We are using the [https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller][model-view-controller] 
		paradigm to design the user interface
- The Routes class found in [/routes/routes.php] is responsible for serving the correct page
	depending on the users request
- If a page is not available, the user is redirected to the home page
