To run:
```angular2html
git clone https://github.com/ebadiere/a2zsync.git
cd a2zsync
composer install
php artisan serv
```

In your browser navigate to: http://localhost:8000/.  You should be redirected to the 
login page.

The login is "ebadiere@gmail.com" and the password is "code_exercise".


First requirement: 

"Requires authentication (un-authenticated users are redirected to a login page)."

Generated new project with --auth option
```$xslt
    laravel new movies --auth
```


Second requirement:

"Upon successful authentication, a user is redirected to a page that lists 
ﬁve(5) of your favorite movies with titles in title case, sorted by release year, 
descending. In parentheses next to the release year, it should state how many years 
ago the movie was released (see example below). These movies should be retrieved 
from a database." 

Updated the existing LoginController to redirect to the existing home view.  Reused 
the existing HomeController and Home blade to save time.

Created a migration to create a table called "movies" with the title and release year.
It uses sqlite which is checked in to github.

Updated the HomeController to get the movie titles from the DB using the Model, ordered 
by year descending.  It also iterates through the movie titles and converts them to Title Case.

Updated the existing Home Blade to display the movies, year released and in parentheses, 
how many years ago.

Third requirement: 

"There should also be a route to retrieve the list of movies in JSON format."
 

The route to retrieve the movies in the api is: /movies

Example call from postman:
```angular2html
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost:8000/api/movies?api_token=5QRVwnYIKoFwLcainYjES03dAFtcbFcGutMIbKsOFlgAc7Ow35kajgjnv1xR",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
```

Response:
```
[
    {
        "id": 1,
        "title": "Step Brothers",
        "year_released": "2008",
        "created_at": null,
        "updated_at": null
    },
    {
        "id": 2,
        "title": "Black Hawk Down",
        "year_released": "2002",
        "created_at": null,
        "updated_at": null
    },
    {
        "id": 3,
        "title": "Dumb and Dumber",
        "year_released": "1994",
        "created_at": null,
        "updated_at": null
    },
    {
        "id": 4,
        "title": "Last of the Mochicans",
        "year_released": "1992",
        "created_at": null,
        "updated_at": null
    },
    {
        "id": 5,
        "title": "The Godfather",
        "year_released": "1972",
        "created_at": null,
        "updated_at": null
    }
]
```

