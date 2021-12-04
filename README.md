# ocuris_backend
This is a modified version of the frontend whereby the data is actually being stored in a database locally.

To ensure the database is working, make sure your database is named as "userinfo" and it has 2 subunits named "userinformation" which 
contains "id"[type int with auto increment], {"name", "email", "birthday", "country", "gender"}[type varchar(255)].

Meanwhile, the other subunit is named "inquire" which contains "id"[type int with auto increment], {"firstname", "lastname", "email", "question"}[type varchar(255)].

XAMPP is used and for module "Apache" and " MySQL" is activated.

Make sure save "Ocuris folder" inside "htdocs folder" Eg: /xammp/htdocs/Ocuris 

In the folder htdocs, change for line that is "header('Location: '.$uri.'/whatever_yours_is/')" to "header('Location: '.$uri.'/Ocuris/')" in my case its at the 8th line.
