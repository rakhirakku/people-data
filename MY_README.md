Clone the Repository:

git clone https://github.com/rakhirakku/people-data.git
cd people-data

Environment Configuration:

Before running the application, you need to set up your environment configuration. The project requires certain environment variables to work correctly, 
which are usually stored in a .env file at the root of the project.
Rename the .env.example file to .env:
mv .env.example .env

composer install

php artisan key:generate

Running the Application:
To run the application locally, make sure you have PHP installed on your system, and the PHP executable must be available in your system's PATH.

Serve the Application:
php artisan serve

Access the Application:
Once the server is up and running, you can access the application in your web browser at http://127.0.0.1:8000.

View the Layout in the Browser:
To view the layout in your browser, you can click on the following link:

http://127.0.0.1:8000/personal
