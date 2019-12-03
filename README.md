# kinect-web-api

## Description

This program was created for [H37kouya/kinect-unity](https://github.com/H37kouya/kinect-unity).  
H37kouya/kinect-web-api processes the Database prepared for counting the number of people detected by Kinect.  
The Database Table is very simple. id, created_at, and updated_at are saved in the table.

## Environment

- PHP 7.3
- Laravel 6

## Documention

### What's Routes?

This is only api routes(api.php).  
For example,
- api/detected
- api/get-people-count and api/get-people-count?date=yesterday

#### detected

This Route is for POST.  
This is a main Route. If you send this Route, new column is created to save the count of people.

#### get-people-count

This Route is for GET.  
This can contain no query or query(date=yesterday). If you get no query, it will return today people count. If you get query(date=yesterday), it will return yesterday people count.
