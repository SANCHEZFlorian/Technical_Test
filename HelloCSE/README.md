# Technical Test for HelloCSE

This is the initial speech for the technical test, in French, but translate to english bellow :

[French]

```Markdown
À l’aide de Laravel 10/11 créer une API qui possède :
- Une entité “administrateur” (seuls utilisateurs authentifiés sur le projet). Les
champs composant cette entité ne sont pas importants, l’idée étant simplement de
protéger certains endpoints de l’application.
- Un endpoint protégé par authentification, qui permet de créer une entité “profil”.
Ces profils possèderont les champs suivants :
- nom,
- prénom,
- image (un véritable fichier),
- statut (inactif, en attente, actif),
- timestamps classique.
- Un endpoint public qui permet de récupérer l’ensemble des profils uniquement
dans le statut “actif”, et qui ne retourne pas le champ “statut” (champ accessible
uniquement pour les utilisateurs authentifiés).
- Un endpoint protégé par authentification, qui permet de modifier un profil ou de le
supprimer
Indications :
- Les données doivent être typées et validées (FormRequest)
- L’utilisation de seeders, factories, tests unitaires est un plus
- N’hésitez pas à commenter votre code et créer des commits sur Git au fur et à
mesure de votre progression
```

[English]

```Markdown
Using Laravel 10/11 create an API that has:
- An “administrator” entity (only authenticated users on the project). THE
fields making up this entity are not important, the idea being simply to
protect certain endpoints of the application.
- An endpoint protected by authentication, which allows you to create a “profile” entity.
These profiles will have the following fields:
- name,
- first name,
- image (a real file),
- status (inactive, waiting, active),
- classic timestamps.
- A public endpoint which allows you to retrieve all profiles only
in the “active” status, and which does not return the “status” field (field accessible
only for authenticated users).
- An endpoint protected by authentication, which allows you to modify a profile or to
DELETE
Indications:
- The data must be typed and validated (FormRequest)
- The use of seeders, factories, unit tests is a plus
- Feel free to comment on your code and create commits on Git as you go
measuring your progress
```

## Explication

For this technical test, i need to build a API for manage user, with authentificate.

I'm happy for this technical test, because I will use Laravel API, and not just Laravel. And for my futur project, like the website and app of my non-profit organization will use Laravel API and VueJS, like this test.

So, I work more than one year with Laravel in 3G Immo, so I know a little Laravel. And I like Laravel, so I'm motivate for this test !

The test, like the speech say, need to have 3 endpoint, including 2 endpoint protected by authentification, and 1 for the public.
And the API need to make, modify, delete , and read the list of user.
All I have more, it's I need an entity "Administrator" for authentificate.

The rest, I can do all I want.
So, because the job are on Laravel and VueJS, and because I like it too, I will use VueJS for the front part. And because I have the choice, I use Laravel 11. Because it's the last version.

Let's go !

## Resources and tools I used

- GitHub for storage online my code and versionning
- [WAMP](https://www.wampserver.com/), for my environnement of Laravel _(I'd use Laragon in the past, but now I use WAMP because I want to use one software for my local server for all my project)_
- The official documentation of [Laravel](https://laragon.org/docs/)
- The official documentation of [PHP](https://www.php.net/)
- The official documentation of [VueJS](https://vuejs.org/guide/introduction.html)
- Code from the website of my non-profit organization _(the construction of the website is in progress)_ [OctoLama](https://twitter.com/OctoLama)
- YouTube for learn Laravel API with video _(I used [this video](https://www.youtube.com/watch?v=2JxLgiLIdTg) from [Laravel Jutsu](https://www.youtube.com/@LaravelJutsu))_

## What the project learn me

- A new technology : Laravel **API**
- An upgrade on my skill with VueJS

## The different stages of creation

Ok, so first, I update this repo, and update all readme.
Second, I create this readme, and start to think about how build this API and the front.
So, I receive the test the 10/04/2024 at 1pm.
Like the other readme, I explain my day for explain on what part of the day I work on this test :

- I'm at work all the day, and come back to home at 6:30pm or 7:30pm
- 3 day on week, at 9pm to 11pm, I'm with my Rocket League team for the training
- Like 1 or 2 hour all the 2 days, I work on OctoLama

So I have like 8 to 10 hour on the weekdays, and all the week-end for finish this. I think I can do it.

### 10/04/2024 : Read and update the readme

So this day, I just have the time for read the test, ask my question about it, and start to search some information in Laravel documentation for build an API.

### 11/04/2024 : Again the readme

OK, I'm perfectionist, I update again the readme, and now, I start to commit and install the 2 folders : helloCSE-API and helloCSE-front.
I think about the design, but for now, I don't care. I have to prove I can build and API with Laravel and to build a front with VueJS.
If I have the time, I will build a CSS from scratch. Otherwise, I will use bootstrap.

## List of potentiel future feature
