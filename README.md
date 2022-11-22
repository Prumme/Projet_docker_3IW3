# INSTRUCTIONS

Cloner le projet

## Build

Taper la commande: `docker-compose up -d --build`

## Migrer la base de données

Taper la commande: `docker ps`

Récupérer l'ID du container `tp-final-3iw-esgi-php1`

Taper la commande: `docker exec -it <ID> /bin/sh`

Taper la commande: `php artisan migrate:fresh`

## Accéder à l'application

Se rendre sur le site: `http://localhost:80` et `http://localhost:81`

Se créer un compte sur un site et essayer de se connecter avec le second site

### Traveau effectué par

- Aurélien Prudhomme
- Youri Ghlis
- Hugo Lemerle
