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
---
###Errors:
Any without anything in them have no errors, but those included below were not able to be json_encoded for some reason and would return empty.
####How To Test:
1. Download the repository and make your way to the directory in terminal
2. Set up your local server with php -S localhost:3000
3. Go into ratings.php and comment out line48 while removing the comment on lines 39 and 40.
4. Head to http://localhost:3000/rating.php?genre=G
  * You should notice that 9 plus some code appears.
5. Head to ratings.php again and this time comment out line 40 and comment in line 41.
  * Notice how this time only the key is shown but the line after is not produced.
6. Repeat for each Rating below and you should have similar results.

#####Rating: G
* **9:** object(stdClass)#12 (5) { ["title"]=> string(12) "A Bug’s Life" ["label"]=> string(16) "Columbia TriStar" ["genre"]=> string(9) "Animation" ["format"]=> string(22) "Fullscreen, Widescreen" ["rating"]=> string(1) "G" }

#####Rating: NC-17

#####Rating: NR

#####Rating: PG

#####Rating: PG-13
* **75:** object(stdClass)#78 (5) { ["title"]=> string(33) "Cookie’s Fortune: Special Edition" ["label"]=> string(25) "U.S.A. Home Entertainment" ["genre"]=> string(6) "Comedy" ["format"]=> string(22) "Fullscreen, Widescreen" ["rating"]=> string(5) "PG-13" }

#####Rating: R
* **303:** object(stdClass)#306 (5) { ["title"]=> string(13) "Bustin’ Loose" ["label"]=> string(9) "Goodtimes" ["genre"]=> string(6) "Comedy" ["format"]=> string(4) "test" ["rating"]=> string(1) "R" }
* **1812:** object(stdClass)#1815 (5) { ["title"]=> string(11) "Ulee’s Gold" ["label"]=> string(3) "MGM" ["genre"]=> string(5) "Drama" ["format"]=> string(10) "Widescreen" ["rating"]=> string(1) "R" }
 
#####Rating: test
* **56:** object(stdClass)#59 (5) { ["title"]=> string(69) "Chaplin: Special Edition: The Kid/The Rink/The Emmigrant/A Dog’s Life" ["label"]=> string(19) "Delta Entertainment" ["genre"]=> string(6) "Action" ["format"]=> string(4) "test" ["rating"]=> string(4) "test" } 
* **159:** object(stdClass)#162 (5) { ["title"]=> string(12) "Hitman’s Run" ["label"]=> string(9) "Avalanche" ["genre"]=> string(16) "Action Adventure" ["format"]=> string(4) "test" ["rating"]=> string(4) "test" } 
* **165:** object(stdClass)#168 (5) { ["title"]=> string(13) "Hunter’s Moon" ["label"]=> string(7) "Monarch" ["genre"]=> string(6) "Action" ["format"]=> string(4) "test" ["rating"]=> string(4) "test" } 
* **215:** object(stdClass)#218 (5) { ["title"]=> string(24) "Linnea in Monet’s Garden" ["label"]=> string(18) "First Run Features" ["genre"]=> string(6) "Action" ["format"]=> string(4) "test" ["rating"]=> string(4) "test" } 
* **256:** object(stdClass)#259 (5) { ["title"]=> string(30) "NOVA: Everest – The Death Zone" ["label"]=> string(17) "WGBH Boston Video" ["genre"]=> string(6) "Action" ["format"]=> string(4) "test" ["rating"]=> string(4) "test" }

#####Rating: UR

