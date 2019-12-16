# Villa for Rent - Website
    It is a website based on technologies: PHP, JS, SQL, CSS (SCSS preprocessor), HTML. It arises from
    are thinking of renting a villa around the world. The site is in early development, many functions are
    not yet available. At the moment I provide the version with: user registration, login,
    villa searching and sorting (needs corrections, I think that using the "switch case" will be about
    much better in sorting) and hotel concept page (currently not downloaded from the database).
    I am convinced that the site requires security patches. In the future, once I get used to
    PHP I'm going to change the code to an object-oriented language already written decently. The page is not written
    according to "mobile first", I wanted the application to look nice on computers this time
    desktop (it should also already be adapted for laptops).

## Getting Started
1. You can download the page from the attachment or from my repository:
    https://github.com/jakubwirfel/WWW-Aplication
###### Prerequisites
1. A desktop or laptop computer with XAMMP installed '
    https://www.apachefriends.org/pl/index.html
###### Installing
1. Download the repository and extract
2. Put the extracted folder into: .. \ XAMPP \ htdocs
3. Run xampp
4. Go to the website: http://127.0.0.1/phpmyadmin
5. Create a new database named villa_for_rent
6. Import the sql file: villa_for_rent_DB.sql to the database
7. If everything has been done correctly the website should already be
        functional at the link: http://127.0.0.1/WWW-Aplication/index.php or
        http://127.0.0.1/AplicationWWW/index.php (depending on the download source)

## Running the tests
###### DEFAULT USER NAME: test / PASSWORD: Test.1234
1. Go to the subpage: http://127.0.0.1/AplicationWWW/join.php and register
2. You will be directed to the subpage: http://127.0.0.1/AplicationWWW/main.php
3. Check the functionality of the search form by entering the data: Destination ->
    Turkey, Hungary, Greece, Italy / Checkin, Checkout -> irrelevant (no database from
    rezerweniem) / Adults, Children -> from the form field
4. Check the Lowest, Highest price sort functionality
5. In the search form, click "Reset filter"
6. Click the "show map" button to display the goggle map (in this phase an empty map without
    hotel markers. Requires work with google console and maps-google framework)
7. Enter one of the villa cards, you will be transferred to the concept page:
    http://127.0.0.1/AplicationWWW/hotel.php
8. Hover your username in the upper right corner of the page (navigation) and click "Sign
    out 'you will be directed to the main page
9. Log in with your username and password and log out again
## Built of
1. HTML5
2. CSS 3
3. SCSS - CSS preprocessor
4. PHP
5. SQL
6. JavaScript
## Make a contribution
    I count on an honest opinion written in a nice mile: jakubwirfel@gmail.com. I am asking for some tips to make
the site worked better.
## Author
> Jakub Wirfel
## Thanks
> Shadow - help with PHP on main.php
> Karina and testers
> Awa - help to find impossible to find error