# Gestion de contacts (CRUD) - Laravel PHP

##  Objectif
Mini-projet Laravel pour gérer des contacts : création, lecture, modification, suppression et recherche.  
---

##  Stack utilisée
- **Backend :** PHP 8.x, Laravel 10.x  
- **Base de données :** SQLite   
- **Frontend :** Blade + Bootstrap 5  
- **Gestion des dépendances :** Composer  


##  Installation

1. **Cloner le projet**  :
```bash
git clone https://github.com/Salmamezouari/Gestion_contacts.git
cd Gestion_contacts
Installer les dépendances :

composer install


Copier le fichier .env.example en .env :

cp .env.example .env


Créer la base SQLite :

touch database/database.sqlite


Configurer la connexion dans .env :

DB_CONNECTION=sqlite
DB_DATABASE=/full/path/to/database/database.sqlite


Générer la clé Laravel :

php artisan key:generate


Lancer les migrations :

php artisan migrate


Démarrer le serveur local :

php artisan serve


Ouvre ton navigateur sur http://127.0.0.1:8000

 Fonctionnalités

Liste de tous les contacts

Ajouter un contact

Modifier un contact

Supprimer un contact

Rechercher un contact par nom, prénom ou email

Messages de succès après chaque action

Interface responsive grâce à Bootstrap 5

 Routes principales
Route	Méthode	Description
/	GET	Redirige vers /contacts
/contacts	GET	Liste tous les contacts
/contacts/create	GET	Formulaire pour ajouter un contact
/contacts	POST	Enregistrer un nouveau contact
/contacts/{id}/edit	GET	Formulaire pour modifier un contact
/contacts/{id}	PUT	Mettre à jour un contact
/contacts/{id}	DELETE	Supprimer un contact

 Structure du projet
app/
    Http/
        Controllers/
            ContactController.php
    Models/
        Contact.php
database/
    migrations/
        xxxx_create_contacts_table.php
resources/
    views/
        contacts/
            index.blade.php
            create.blade.php
            edit.blade.php
        layouts/
            app.blade.php
routes/
    web.php
.env.example
composer.json
composer.lock
package.json
README.md

 Vues principales

index.blade.php : liste des contacts avec boutons modifier/supprimer et formulaire de recherche

create.blade.php : formulaire pour ajouter un contact

edit.blade.php : formulaire pour modifier un contact existant

layouts/app.blade.php : template de base avec Bootstrap 5

 Recherche

La barre de recherche permet de filtrer les contacts par nom, prénom ou email.
Elle fonctionne directement depuis la page de listing.

 Auteur

Salma Mezouari
