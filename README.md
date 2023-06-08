<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).





### Commande pour Eloquent 

- Créer la table 
php artisan make:model Actor
Remplir les relations 
- Créer la migration 
php artisan make:migration create_actors_table
sudo docker-compose exec php artisan make:model Subscriber -m -> permet de créer le model et sa migration
Remplir le fichier afin de définir les différents champs de la bdd
Envoyer la migration : docker-compose exec web php artisan migrate 
docker-compose exec web php artisan migrate:refresh
- Créer du Factory 
php artisan make:factory ActorFactory
Remplir le factory afin de définir la taille du champ de la fausse donnée
- Créer le seeder (pour de la fausse donnée)
php artisan make:seeder ActorSeeder 
Remplir le seeder afin de déterminé le nombre de fausse donnée envoyé 
- Ajouter dans le fichier Database Seeder le Seeder qui vient d'être créer afin d'envoyer la bonne donnée 
- Envoyer la fausse donnée : docker-compose exec web php artisan db:seed
sudo docker-compose exec web php artisan db:seed --class=HollywoodSeeder

- permet de rajouter un attrivu à une table déjà existante : 
sudo docker-compose exec web php artisan make:migration add_director_id_to_movies_table --table=movies


# Api 

php artisan make:controller --api ActorAPIController

Pour rattacher le modele
php artisan make:controller --api ActorAPIController --model=Actor 


Générer la documentation de l'api avec Scribe:
docker-compose exec web composer require --dev knuckleswtf/scribe
php artisan vendor:publish --tag=scribe-config
config/scribe
modifier la description, le type static en type laravel pour avoir des blades, modifier doc-url si besoin, ajouter dans example-language le language qu'on souhaite, postman enabled to false
docker-compose exec web php artisan scribe:generate


# Authentification 
sudo docker-compose exec web composer require laravel/ui
php artisan ui bootstrap --auth