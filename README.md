##itp405 Spring 2015: Assignment 1
#####Important Note:
I had some trouble with json_encode in my rating.php for some reason I recieved a utf8 error and json_encode would return nothing. I've attached a list to the bottom of this read me as well as instructions to reproduce the error. My work around right now is to remove these from the array and just return the working indexes to myself. Please take a look and let me know Danielis@usc.edu


Greetings!
This assignments pulls from one of two sql databases set up by the professor.

#####To RUN:

* download file
* go into directory using terminal
* type: php -S localhost:3000
* then go to browser and type in localhost:3000

##Assignment Instructions:
####DVD Search with PDO
Create search and results pages using the dvd database and PDO. Name your search page search.php and your results page results.php.

#####Search page
* Your search page should have a search field for the dvd_title field using an HTML input of type 'text'.
* This page should submit to results.php using the GET method

#####Results page
Your results page should display what the user searched, like this:

"You searched for 'em':"

Display the following fields on the results page in divs or an HTML table

* title
* genre
* format
* rating

When joining tables in your query, use the INNER JOIN syntax. Also, be sure to use the LIKE operator so that if I type in "Die" in the search form, all movies that contain "Die" in the title will show up (like Die Hard). If no results are returned from the query, display a message to the user saying Nothing was found with a link back to the search page.

If a user navigates to results.php directly without any query string data, redirect back to the search page.

#####Rating Page
Next, make each rating on the results page a link to ratings.php. This page should show all dvds for the particular rating clicked.

#####Styling
Lastly, style your pages a little bit so that they are organized and somewhat presentable. Feel free to use something like Bootstrap.

#####Submission
Create a repository on Github or Bitbucket called itp405-spring2015-pdo-dvd all lowercase and push your code up to it. Email dtang@usc.edu the URL to your profile so that I can list it on the class site.


####Errors:
#####Rating: G
9
* object(stdClass)#12 (5) { ["title"]=> string(12) "A Bug’s Life" ["label"]=> string(16) "Columbia TriStar" ["genre"]=> string(9) "Animation" ["format"]=> string(22) "Fullscreen, Widescreen" ["rating"]=> string(1) "G" }

#####Rating: NC-17

#####Rating: NR

#####Rating: PG

#####Rating: PG-13

#####Rating: R
#####Rating: test
#####Rating: UR
