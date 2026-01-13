# Gestion de contacts (CRUD) - Laravel PHP

##  Objectif
Mini-projet Laravel pour gérer des contacts : création, lecture, modification, suppression et recherche.

## Stack utilisée
- **Backend :** PHP 8.x, Laravel 10.x  
- **Base de données :** SQLite  
- **Frontend :** Blade + Bootstrap 5  
- **Gestion des dépendances :** Composer  

---

## Routes principales

| Route                  | Méthode | Description                        |
|------------------------|---------|------------------------------------|
| /                      | GET     | Redirige vers /contacts            |
| /contacts              | GET     | Voir la liste des contacts         |
| /contacts/create       | GET     | Formulaire pour ajouter un contact |
| /contacts              | POST    | Ajouter un contact                 |
| /contacts/{id}/edit    | GET     | Formulaire pour modifier un contact|
| /contacts/{id}         | PUT     | Mettre à jour un contact           |
| /contacts/{id}         | DELETE  | Supprimer un contact               |

---

## Structure du projet

Gestion_contacts/
 ┣ 📂 app
 ┃ ┣ 📂 Http
 ┃ ┃ ┗ 📂 Controllers
 ┃ ┃   ┗ 📄 ContactController.php
 ┃ ┗ 📂 Models
 ┃   ┗ 📄 Contact.php
 ┣ 📂 database
 ┃ ┣ 📂 migrations
 ┃ ┃ ┗ 📄 xxxx_create_contacts_table.php
 ┃ ┣ 📂 seeders
 ┃ ┃ ┗ 📄 DatabaseSeeder.php
 ┃ ┣ 📂 factories
 ┃ ┃ ┗ 📄 UserFactory.php
 ┃ ┗ 📄 database.sqlite
 ┣ 📂 resources
 ┃ ┗ 📂 views
 ┃   ┣ 📂 contacts
 ┃   ┃ ┣ 📄 index.blade.php
 ┃   ┃ ┣ 📄 create.blade.php
 ┃   ┃ ┗ 📄 edit.blade.php
 ┃   ┗ 📂 layouts
 ┃     ┗ 📄 app.blade.php
 ┣ 📂 routes
 ┃ ┗ 📄 web.php
 ┣ 📂 public
 ┃ ┣ 📄 index.php
 ┃ ┣ 📄 favicon.ico
 ┃ ┗ 📄 robots.txt
 ┣ 📂 storage
 ┣ 📂 bootstrap
 ┣ 📂 config
 ┣ 📂 tests
 ┣ 📄 .env.example
 ┣ 📄 composer.json
 ┣ 📄 package.json
 ┗ 📄 README.md
