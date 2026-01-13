# Gestion de contacts (CRUD) – Laravel PHP

## 🎯 Objectif
Ce mini-projet a été réalisé avec Laravel.  
Il permet de gérer une liste de contacts à travers les fonctionnalités principales :  
ajout, affichage, modification, suppression et recherche de contacts.

---

## 🛠 Stack utilisée
- **Backend :** PHP 8.x, Laravel 10.x  
- **Base de données :** SQLite  
- **Frontend :** Blade (Laravel) + Bootstrap 5  
- **Gestion des dépendances :** Composer  
- **Versioning :** Git & GitHub  

---

## 🔗 Routes principales

| Route               | Méthode | Description |
|---------------------|---------|------------|
| /                   | GET     | Redirection vers /contacts |
| /contacts           | GET     | Affichage de la liste des contacts |
| /contacts/create    | GET     | Formulaire d’ajout d’un contact |
| /contacts           | POST    | Enregistrer un nouveau contact |
| /contacts/{id}/edit | GET     | Formulaire de modification |
| /contacts/{id}      | PUT     | Mettre à jour un contact |
| /contacts/{id}      | DELETE  | Supprimer un contact |

---

## 📂 Structure du projet

```text
Gestion_contacts/
 ┣ 📂 app
 ┃ ┣ 📂 Http
 ┃ ┃ ┗ 📂 Controllers
 ┃ ┃   ┗ 📄 ContactController.php
 ┃ ┗ 📂 Models
 ┃   ┗ 📄 Contact.php
 ┣ 📂 bootstrap
 ┣ 📂 config
 ┣ 📂 database
 ┃ ┣ 📂 migrations
 ┃ ┃ ┗ 📄 xxxx_create_contacts_table.php
 ┃ ┣ 📂 seeders
 ┃ ┃ ┗ 📄 DatabaseSeeder.php
 ┃ ┣ 📂 factories
 ┃ ┃ ┗ 📄 UserFactory.php
 ┃ ┗ 📄 database.sqlite
 ┣ 📂 public
 ┃ ┣ 📄 index.php
 ┃ ┣ 📄 favicon.ico
 ┃ ┗ 📄 robots.txt
 ┣ 📂 resources
 ┃ ┣ 📂 views
 ┃ ┃ ┣ 📂 contacts
 ┃ ┃ ┃ ┣ 📄 index.blade.php
 ┃ ┃ ┃ ┣ 📄 create.blade.php
 ┃ ┃ ┃ ┗ 📄 edit.blade.php
 ┃ ┃ ┗ 📂 layouts
 ┃ ┃   ┗ 📄 app.blade.php
 ┣ 📂 routes
 ┃ ┗ 📄 web.php
 ┣ 📂 storage
 ┣ 📂 tests
 ┣ 📄 .env
 ┣ 📄 .env.example
 ┣ 📄 composer.json
 ┣ 📄 composer.lock
 ┣ 📄 package.json
 ┣ 📄 vite.config.js
 ┗ 📄 README.md
