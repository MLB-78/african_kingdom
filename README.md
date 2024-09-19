# Lock-Town Bell

## Description

**Lock-Town Bell** est une application web de petites annonces en ligne. Elle permet aux utilisateurs de :
- Créer un compte et se connecter.
- Publier, modifier et supprimer des annonces (vente, location, services, etc.).
- Rechercher des annonces par catégorie, prix, localisation, etc.
- Contacter les vendeurs via une messagerie interne.
- Voir et répondre aux annonces en fonction de leur emplacement.
- Authentification avec **2FA** (double authentification).
- Intégration continue pour automatiser les tests et déploiements.

## Fonctionnalités

- **Gestion des utilisateurs** : Inscription, Connexion, Profil utilisateur avec authentification 2FA.
- **Publication d'annonces** : Ajout, édition et suppression d'annonces avec photos.
- **Recherche et filtrage** : Recherche d'annonces avec filtres (catégorie, prix, localisation).
- **Messagerie** : Système de messagerie interne pour permettre la communication entre acheteurs et vendeurs.
- **Système de géolocalisation** : Annonces affichées en fonction de la localisation.
- **Gestion des catégories** : Annonces classées par catégories.
- **Affichage des annonces** : Annonces listées avec pagination et tri par pertinence, prix, etc.
- **Intégration continue** : Pipeline CI pour tests automatiques et déploiement (utilisation de GitLab CI, GitHub Actions, etc.).

## Technologies Utilisées

- **Backend** : Symfony 7.1
- **Base de données** : MongoDB
- **Frontend** : Bootstrap 5, HTML, CSS, JavaScript
- **Virtualisation** : Docker
- **Authentification** : JWT (JSON Web Token), 2FA (Two-Factor Authentication)
- **CI/CD** : GitHub Actions ou GitLab CI
- **Autres** : API Google Maps pour la géolocalisation

## Prérequis

Avant de commencer, assurez-vous d'avoir installé :

- Docker et Docker Compose
- PHP 8 ou version supérieure
- Composer
- Node.js et npm
- MongoDB

## Installation

### 1. Cloner le dépôt

```bash
git clone https://github.com/ton-depot/lock-town-bell.git
cd lock-town-bell
