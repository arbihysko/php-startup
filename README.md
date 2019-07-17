# php-startup
A php mvc startup for web pages

#1 First open the config folder and set your database and path configuration.

#2 The controller folder contains files that controll the data send to the client from the server

#3 Libs is the folder that contains the classes created, bootstrap manages the routing, creates the controllers and loads the models.
   Database establishes a connestion to the database using the PDO extention and the information given in ./config/database.php.
   Session has functions for creating, naming and destroying sessions.
   View is the file that senders the view template to the page.

#4 Models will ocntain the model files which are used to query the databaseand send them to the controller for further processing.

#5 Public is the folder that will contain client side files like the css or javascript folders.

#6 Views containss the page templates for the website
   The partial folder contains the header and footer template for the pages.
   
