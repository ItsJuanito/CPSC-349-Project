# CPSC-349-Project: Team Benchwarmers Project

# Project sumbission for CSUF 349-01 Session B Summer

# Css Folder
  - bootstrap.min.ss              : calls a bootstrap style. Credits given in file.
  - stlye.cc                      : contains styling for the results after searching for a movie. Creates neat boxes and centers them about the page.
    
# Img Folder
  - gallery folder                : contains local users uploads to the wesbite. Data here can be deleted as it is stored in the database
    
# Includes Folder
  - dbh.inc.php                   : Stands for Database includes. This connects to the databse with admin login credentials.
  - gallery-upload.inc.php        : Stands for Gallery Databse includes. This file handles a user uploading a photo ensuring its of                                           type jpg, jpeg, or png. It
                                  also checks to see it doesn't hit a file size too large for the database to handle. Error                                           handling is echo to user 
                                            "File size is too big!"
                                            "You had an error!";
                                            "You need to upload a proper file type!";

# Js Folder
  - axios.min.js              : Grabbing API. Credit given in code
  - bootstrap.min.js          : Grabbing the style sheet for the above the API. Credits given in code
  - jquery-3.2.1.min.js       : Granning java script code to handle API search results. Credits given in code
  - main.js                   : Called when user tpyes a search query in the searchbar. Using the API it checks the results and
                                displauys all results found. If user select a ceratain movie, functions are called to give the 
                                following options:
                                          IMDb      Go Back to Search
                                If user selects IMDb it attaches the name of the grabbed movie and adds it to the end of the url  
                                https://www.imdb.com/find?
                                
# Pages Folder
  - Currently empty
    
# Master Folder
  - config                    : This connects to the databse with admin login credentials. Specifically the login databse
  - database.sql              : a copy of the databse for gallery
  - gallery.php               : This is the account page that handles the layout of the page. It takes most of its code from
                              welcome.php
  - index.php                 : This php file checks if a user is login or not. If the user is logged in it redirects to 
                              welcome.php, which is the home page of the website. If the the user is not logged in it requires
                              the user to login or click "Register" which will redirect to register.php
  - movie.html                : This is the redirected page after the user enters a search query and clicks enter. This will load
                              all movies that fill that query.
  - register.php              : Handles users who wish to make an account. The error chekcing is enuring that the user is not
                              already created and that the password is more than 6 characters / match.
  - style.cc                  : This is the style sheet for the home page, account page, footer, and header. Smooth boxes and lines
                              are done by another authour. Credits given in code.
  - welcome.php               : The home page of the website. This calls an isset function to ensure the user is currently logged
                              in. This page currenlty only displays a banner that is located in the image folder. The search bar
                              is handled by the API and its style sheets.
  

Regarding adding comments: Rather than working hours to develop a commenting system that allows ratings and administrator oversight, I suggest we use the Disqus API once the sight is published. This API allows for moderation, threaded comments, and ratings for individual comments. This API can only be added once the wesbite is published to a hosting service so I'll add that once its all finalized.
- Anthony

Regarding Personilzed Accounts: We might want to push back this feature as it can become too time consuming to get all the features we mentioned. I push we make the website stylish and functioning 100% before adding a social media aspect to it. 
- Anthony

Regarding About and Contact Pages: Feel free to modify and add code to those pages. Those are reserved for members to work and experiment with CSS and Java Script. Feel free to message me on discord with questions and concerns regarding those pages.
- Anthony

Lastly, if you have concerns about anything regarding this project or class please message me. I'll do my best to reply within the day you contact me.
- Anthony
