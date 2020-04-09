# Friendship system like Facebook

This is a simple application builded with Laravel and Passport for API Authntication , You are able to send and accept request as well reject unwanted friend invitaion .

## Getting started

### Launch the project 

*(Assuming you've [installed Laravel](https://laravel.com/docs/5.5/installation))*

Assuming that you have background about running laravel projects with artisan or on your localhost , but here we use artisan , after pulling this project you may get inside the project directory .

You need to **Configure Your Database** to go to .**env** or in **Config** file 


Then **seed** your **Database** with users 

###### *Command below will seed your **User** table with **5** users
```
php artisan db:seed --class=UsersTableSeeder    --5 users will be seeded

```


##### Password for any User will be password 



Then you import you migration files by running 

```
php artisan migrate
```

then you start your project 

``` bash
php artisan serve
```


then simply by using **POSTMAN** for example to deal with the **APIs**
I need to mention that in this app we have **Passport auth Package ** installed ,  so you may need previous knowlege inorder to use it , 

First you may face we you want to log in , is laravel ask you about secret key is not there so you may run this line below 
```bash
$ php artisan passport:client --personal

```

***Now Let Us Go And Start Using The App! ***



### Register new User 

You may want to Signup , here I show the route , 
as well you can find it in **routes/api.php**

```bash
http://127.0.0.1:8000/api/regitser      

```
```bash
keys you may need to register new user 

name
email   
password 
c_password 

```



### Add a Friend 

We Assume that you are **Authnticated** and did not **forget!! t**o use **Token** after 
log in and use this token for every request as **authorization **

```bash
http://127.0.0.1:8000/api/adduser/5        * 5 is choosed id to add as friend

```
in this case , the **Authenticated **user is sending **Add Friend** to user with id = 5.

### Accept Friend 

in the second function we are authinticted and we request from sender 
with id = 2 

```bash
http://127.0.0.1:8000/api/acceptNewFriend/2        * 2 is sender id

```

### Reject Friend 

 we are authinticted and we reject the unwanted sender 
with id = 2 

```bash
http://127.0.0.1:8000/api/reject/2        * 2 is sender id

```

The request in deleted form the Frienships table completely ,
and in this way we have simply took an idea about how things works 
with social media application .

thank you ,

**Mustafa al-shamari**






