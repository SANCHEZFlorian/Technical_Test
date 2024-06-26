# Technical Test for 3G IMMO

This is the initial speech for the technical test, in French, but translate to english bellow :

[French]
```
Réalisation d'un CRUD sur le thème de l'immobilier avec le Framework LARAVEL :


- Les fonctionnalités suivantes doivent être présente :

- Affichage des annonces (ref_annonce,prix_annonce,surface_habitable,nombre_de_piece,nom_agent,prenom_agent)

- Modification des annonces

- Création d'une annonce

- Suppression d'une annonce


- Une annonce immobilière se compose des éléments suivants :

- ref_annonce (varchar) -> exemple "123654FG"

- prix_annonce (float) -> exemple "125.05"

- surface_habitable (float) -> exemple "12.25"

- nombre_de_piece (int) -> exemple "5"


- Un agent immobilier se compose des éléments suivants :

- nom_agent (varchar) -> exemple "DUPONT"

- prenom_agent (varchar) -> exemple "Toto"



Chaque annonce doit être rattachée au minimum à 1 agent et au maximum à 1 agent.

Un agent peut avoir au minimum 0 annonce et au maximum une infinité d'annonces.


- Techno back : LARAVEL 8

- Techno front : libre (Html, Js natif, Jquery, scss, css, vueJS, ...)


- Rendu sur GitHub avant le 31/08/2022 9H00.

- Me transmettre un export de votre base de données (.sql)

- Ne pas oublier le README et de commenter votre code.


- Fonctionnalité bonus : possibilité de trier les annonces par prix et/ou surface.
```

[English]
```
Creation of a CRUD on the theme of real estate with the LARAVEL Framework:


- The following functionalities must be present:

- Display of advertisements (ad_ref, ad_price, living_space, number_of_rooms, agent_name, agent_first_name)

- Modification of announcements

- Creation of an ad

- Deleting an ad


- A real estate advertisement consists of the following elements:

- ad_ref (varchar) -> example "123654FG"

- ad_price (float) -> example "125.05"

- habitable_surface (float) -> example "12.25"

- number_of_pieces (int) -> example "5"


- A real estate agent consists of the following elements:

- agent_name (varchar) -> example “DUPONT”

- agent_firstname (varchar) -> “Toto” example



Each ad must be attached to a minimum of 1 agent and a maximum of 1 agent.

An agent can have a minimum of 0 listings and a maximum of infinite listings.


- Techno back: LARAVEL 8

- Techno front: free (Html, native JS, Jquery, scss, css, vueJS, ...)


- Rendered on GitHub before 08/31/2022 9:00 a.m.

- Send me an export of your database (.sql)

- Don't forget the README and comment on your code.


- Bonus feature: ability to sort ads by price and/or size.
```


## Explication

For this technical test, i need to build a CRUD for a property website.

It's a very hard challenge for me, because the constraint is to use Laravel, and **I never use a Framework of PHP**, just PHP Vanilla. So I have one week for learn and create this website.

This test need to have :

- List of all estate ad with some information (reference, price, living space, number of piece, agent who have this ad)
- Creation of an estate ad
- Modification of an estate ad
- Deletion of an estate ad

I need to use :

- Laravel 8 for back-end
- All I want for front-end

And, as a bonus, I can add a filter by price and/or living space.

So, let's do it !

## Resources and tools I used :

- GitHub for storage online my code and versionning
- Gitmind for build a visual view of User Story, Route and Data Base
- [Laragon](https://laragon.org/), for a configuration of my environment to Laravel
- YouTube for learn Laravel with video _(I used [this playlist](https://www.youtube.com/playlist?list=PLeeuvNW2FHVj4vHJRj9UDeDsXshHlnHJk) from [Nord Coders](https://www.youtube.com/c/NordCoders))_
- The official documentation of [Laravel](https://laragon.org/docs/)
- The official documentation of [PHP](https://www.php.net/)
- [Mocodo](http://www.mocodo.net/) for have an "official" visual of my data base
- Code from my school [O'Clock](https://oclock.io/) I used

## What the project learn me :

- A new technology : Laravel
- A new vision : Before this project, I was sure I just want to develop in JavaScript, Front and Back. But I realize I like PHP too, and Laravel too
- An improve of my english : Yes, because I write this readme in english, and no just translate. Of course, I use translator when I was stuck in my word. But it improve my english and selftrust for write in english
- The proof I can learn and develop with technology I never code
- Use Trello more time, even for a "small" project

## The different stages of creation :
First, I receive the technical test the 23/08/2022, at, approximatly, 4pm.
If I say that, it's because I will write here what I did every day.
And second information : I was in training from 9 a.m. to 5 p.m. on weekdays, and with a part-time job _(21 hours a week)_ in the evenings _(usually from 6 p.m. to 11 p.m.)_ and weekends. So I did this project on my remaining time, as well as on a few hours of training _(I know, it's not good, but shh ;) )_. This information is just for say I don't work on this project 8 hours a day.

N.B.: My project is create by Laragon, so the path isn't the same of my folder where I push on GitHub. So I just copy the project at the end on this folder.

So, let's go !

### 23/08/2022 : Start to get some videos and documentation of Laravel

I found [this playlist](https://www.youtube.com/playlist?list=PLeeuvNW2FHVj4vHJRj9UDeDsXshHlnHJk) and start to watch this, the 2 first episod.
I install Laragon for pre-built my environment.
I'm on Windows for know.
I just test the system of view and route for print an "Hello World" first.

### 24/08/2022 : Start to write data base

This day, I start to write with my word and with GitMind the data base, the route and the user story.
For the data base, it was _easy_ because there are only two table, the estate ad and the estate agent.
There are two relation :

- one-to-one from estate ad to estate agent
- zero-to-many from estate agent to estate ad

So, it gives that _(one in english for you, and one une french because the project is for the french job)_ :
![mcd english](img/mcd_EN.png)
![mcd français](img/mcd_FR.png)

But I need to join the 2 tables with a foreign key, because just one agent is on the estate ad, but an agent can have a lot of estate ad. So I decide to contact my recruiter for have the approbation for create an over field on the table.

### 25/08/2022 : Continue the database and problems

So, this day, I had the answer of my recruiter : the fields he gave me are the necesary fields, and I can add more field, like ID, foreign key and over.
So, I decide to add others fields, like ID for estate agent, and "ID_agent" for the estate ad.
I know we can add more, like "create by/at", or "modify by/at", and over, but I focus on the main objectif, just the CRUD, without login or sign in, because I have no time for this now.
But, I can add this in the roadmap for the application, and talk to this with the recruiter for proof I think about it.
And if I have the time, I add some features, like more esthetic, or the other fielsd in the database ;)

But I have one little problem : I don't know how, but phpMyAdmin tell me a lot of error with "depreciad syntax" and other. So, I decide to ignore all, but I want to build correctly my database, so I decide to write SQL, it takes me a more time, but I decide this for don't waste a lot of time I have for build the project.

It's continue to have problem ! It's the job, always a problem and search for a solution X)
This time, it's to make my foreign key, but I follow my know and the document for this.
But it's time to go to bed, I think I can fix it tomorrow, with a good night :)

Oh, and I have 2 more day for do the project, becaue there is a big problem with network on my region, so this day, I just have internet 2 hours this afternoon, and after 8 p.m. So I can't learn and fix all my problems. It's life ;) I am not discouraged and will redouble my efforts in the next few days to catch up.

### 26/08/2022 : Reinstall my environment and finish database

I thing about my error, and I decide to reinstall Laragon. I had WAMP before, and I think some problems I had is because I install Laragon with WAMP installed before. So I start to uninstall WAMP and reinstall Laragon.

And I found one solution for my foreign key :
I don't know why, but create the table, and after alter this table for add the constraint of foreign key make my problem. So I try to add my foreign key directly on the creation of the table and it's work !

### 27/08/2022 : Not very work

I admit it, I don't work this day on the project, because of lack of time :/

### 28/08/2022 : Reinstall Laragon and start to learn

So, this day, I reinstall Laragon and configure it for create a project with Laravel 8.0.
First, I need to configure the quick action for create a project for specify the version of Laravel. I found how by looking at the config file and finding the composer command for Laravel 8.0.
After this, I import my database in phpMyAdmin. It's OK, it's working. I have my differents tables and data _(I put 5 estate agents and 10 fake estate ad for testing)_.

I continue to wath the YouTube playlist from [Nord Corders](https://www.youtube.com/c/NordCoders) for learn Laravel.
I create TestController and Test Blade view for apply what I learn, and for now, I understand all I have. I think about PDO I learned from my formation on O'Clock, and I thing about I really need to review this for the futur. But first, I continue the video, and watch about controllers and view with blade.

I create the layout for the views, and I test a lot of thing for give array with data for the view. All works, with a little of test because I just learn and I make some wrong thing, like forget ";" or wrong route, etc. But it work, and somewhere, I'm proud of me, I recognize, because it's a little success, but a success.

I create also the partials template for add, for exemple, the navbar.
And I also name my route for re-applied every where I need and for change easely my route or controllers without change all the files where route are specified.

### 29/08/2022 : Search for PDO

This day, I don't continue the playlist of [Nord Corders](https://www.youtube.com/c/NordCoders), because I want to write the code of connexion and retrieve my data from the database.

So first, I review the code of a project with my school _([O'Clock](https://oclock.io/))_. I remember PDO and PDOstatement, and I search how use it, or a different way, in Laravel.
And I found 2 ways :
- Use PDO
- Use Eloquent

So, I have difficult choice to make..... So I take the 2 way ! :D
So, first, I will try with PDO.
And after, I will try with Eloquent.
And if all 2 way works, I will just comment one of them. But I want to prove I can do the 2 way.
And because I don't have many time, I start with PDO.
If it's work, I finish the project. Because it's _"only"_ create, update or delete an estate ad. And in bonuse, filter by price or living surface. After I do all of this, I will work on Eloquent and esthetic.

So, let's do it !

Before, I need to read the documentation of Laravel about [database](https://laravel.com/docs/8.x/database).

So, now, I configure the .env file with my database name and conenct it. But I have an error of "htmlspecialchars() expects parameter 1 to be string, object given". So I know the problem is I give an object and not a string, but I need to fix it.

I watch a lot of videos too, and I see we have "php artisan" for create table, delete, and all, but because I write the database, I want to just connect and read the database. Not to create the database or table with php artisan.
So, I need to fix it tomorrow, now it's time to go to bed ;)

### 30/08/2022 : I'm stuck... and change my way to Eloquent

N.B.: My project is create by Laragon, so the path isn't the same of my folder where I push on GitHub. So I just copy the project at the end on this folder.

So, I'm stuck. It's hard, but i admid it.
I don't have many time, so I decide to use php artisan and other, instead of use my know with PDO and over. I just want to finish the project before the deadline come, and if I have time, I will see what I do _(esthetic, over filter or repare my problem with other way)_.

I continue the [Nord Corders playlist](https://www.youtube.com/playlist?list=PLeeuvNW2FHVj4vHJRj9UDeDsXshHlnHJk) for understand how make factories, seeders and models.
I create a model for estate agent and estate ad. So php artisan make with this a migration for each.
But, when I make migration, I have some error with the default migration of user, failed job, and password reset _(SQLSTATE[42000]: Syntax error or access violation: 1071 La clé est trop longue. Longueur maximale: 1000 (SQL: alter table `failed_jobs` add unique `failed_jobs_uuid_unique`(`uuid`)))_.
So I just delete this migration.
After this, my migration of agent and ad work.

I learn I use Eloquent for this, so it's good, not my first  choice, but I want my project work.
So I add the function data() to my TestController, and I see with the function dd() I retrieve my data of agent. Continue to watch and learn with the doc for learn how see my data.
But just now, I'm very happy, because I didn't have error, and my route work well with my controller for now :D
Ok, I'm very very very happy : I list of all ad in my page :D I see all of my ad !! YES !!
Ok, so I have the R of CRUD, but I need the C,U,D of CRUD. Let's do it !

I add a link on the ad reference for display a new page with the information of the ad, and modify them or delete the ad. And the link is work !
Ok, ok, I need to calm down. But I'm very proud of what I do, because it's a new framework for me, and I admit, if I want to be a web developper, it's because the sensation of proud and satisfaction when you have finally what you want.

Oh, I push my project now on the folder "3gimmo". So you can now read the code I make. I comment in French, because it's for a french job, but after, if I have time, I will translate in english.
I comment more in my test files, like TestController, testAgent.blade, testAnnonce.blade and other. But I comment too the other files, but less than the test files.

### 31/08/2022 : Create an estate ad

I start to create the feature to add an estate ad. So I create the view, the route, and modify my AdController.
But I have one problem for now : Because my field of agent_ID don't have a default value, and because I didn't configure the foreign key, I can't create an ad. So I create the creation of an estate agent. And it's work ! :D
I continue to watch video of [Nord Corders playlist](https://www.youtube.com/playlist?list=PLeeuvNW2FHVj4vHJRj9UDeDsXshHlnHJk), for found how can I create correctly my table estate ad with my foreign key agent_ID.

N.B.: I didn't very sleep for work on this project, so I update the files now, and continue in the day ;)
So, I continue. I will update an estate agent, for understnd the process. And after, I will see how delete an estate agent.
And after all, I will search for the foreign key on my table estate ad.
Before all, I just add view for say when agent was created.

So, for the update, I will create on my page where we can see a specific agent a form with new input and a button for submit the modification.
But first, I will modify my folder of view. I have a lot of view, and I decide to reorganize with a folder "test", "ad" and "estate" for more lisibility.
I see I have an error because he didn't find the view. So I review my code, and I think it's come from the controller. I just need to add the folder in the view, so now, I have like

``` php
return view('ad/Ad', [
    'title' => $title,
    'annonce' => $annonce
]);
```

Before I just have this, because the view was in the folder view:

``` php
return view('Ad', [
    'title' => $title,
    'annonce' => $annonce
]);
```

I also reorganize my code of controllers and routes, for more lisibility, and add function on ad controller and agent controller who come from the testcontroller.
I test when I add nothing for modification or creation, and I have an error _(yeah, logic)_. I need to fix it, but after the CRUD of ad.

### 01/09/2022 : Last day

So this day is my last day for the project.
For achieve the project, I need to have :

- Create an ad
- Modify an ad
- Delete an ad
- Ad must be lock with one agent and only one

So, I need to fix the problem with the foreign key, and add the function of delete an ad, because I already have the view and function controller for create and modify.
I try to modify an agent, but I'm stuck.

Ok, I found my problem for modify an agent :
I use ::where for search the agent to modify, and for this, I use `$request->nom_agent`. BUT ! When I send the information, the "nom_agent" change to the new "nom_agent", and I need the older name.
So I thing I go to use the ID of the agent.
YEAH ! It work !
So I use the Request, but also the ID in the URL.
Let's start the delete of an agent.
And I used the same method for found the agent who we want to delete _(with ID in the URL)_ and it work !

Now, I need to do all this things for an ad.
First, I add list of agent for create and modify ad, for choose who agent is on the ad.
After, I reorganize my route for the ad like I organized my route for agent. Same for the controller.
So now, I can read the database of estate ad, and delete an ad.
But I need to know how modify and ad, or create an ad, but for this, I need to establish correctly the foreign key.

So I try to reset my database, add the foreign key, and migrate. But I have an error _(again)_. This error is :
`SQLSTATE[HY000]: General error: 1215 Cannot add foreign key constraint (SQL: alter table annonces add constraint annonces_agent_id_foreign foreign key (agent_ID) references agent_IDs (id))`
I used `$table->foreignId('agent_ID')->constrained();` in my table of ad.
And if I use

```php
$table->unsignedBigInteger('agent_ID');
$table->foreign('agent_ID')->references('id')->on('agents');
```

I have the same error.
But I haven't time, so I thing I send my project like this, with information about my error, and I continue to work on this error, because I want to find the solution.

## List of potentiel future feature :

- Confirmation message when we press "delete" for ad and estate
- New type of input for more semantic _(like number for price)_
- CSS for esthetic