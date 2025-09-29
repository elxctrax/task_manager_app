Approach: 
Used Laravel Herd to setup my enviroment which generated all the needed files. 
The first thing I did was create my migration file called 'todo' and create the needed rows ('task', 'description', 'is_completed').
Next I created an Eloquent model which works along with the 'todo' migration file/database. 
I created the navaigation bar in 'layouts.blade.php' which can be called into other blade files (reusablilty). 
The main frontend content for the tables and task manager was implmented in the 'welcome.blade.php', this was mostly pasted from bootstrap 4.
Next, the logic for the task manager was implmented in 'TaskController.php'. This is where all of CRUD functionality is defined and is called into the 'welcome.blade.php' code. 
Used '@foreach' and '@if/else' in the blade templates to make the tables/UI dynamic instead of predefining slots.
Connected all of the pages and functions using the 'Routes::' to make links and logic functional.

Assumptions:
At first this seemed like a simple project but the challenging part was learning Laravel, but with a Laravel tutorial I found on YouTube (https://youtube.com/playlist?list=PL4cUxeGkcC9gF5Gez17eHcDIxrpVSBuVt&si=ITS9F6n_ZYi9fo5a)
The HTML and controller aspects were not a new concept to me but the migration folders were new to me. At first it was challenging but I navigated through and got a good grasp on how migration files and Eloquent models work with sqlite.
The CSS part was a little tricky because I am used to using HTML without blade aspects and learned how to connect the CSS using @VITE and npm in the terminal.

Bonus Features:
I added pagination using bootstrap 4.
I added a navigation bar on the top which stays no matter what pages you are on in the webpage.
I added an 'About' section for fun which describes what this web application is about and linked this repository, inviting others to work/improve on it.
