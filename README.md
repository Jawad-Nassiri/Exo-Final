# Application de Gestion des Messages

## Introduction 

Cette application permet aux utilisateurs de soumettre des messages à travers un formulaire simple. Les utilisateurs peuvent entrer leur nom, adresse e-mail et message. Les données sont ensuite stockées dans une session pour un traitement ultérieur. L'application utilise PHP pour le backend et Docker pour l'environnement de déploiement.



### Prérequis
- Docker installé sur votre machine.
- Un éditeur de code pour modifier les fichiers si nécessaire.


### Construction du conteneur
1. Clonez ce dépôt sur votre machine :
   ```bash
   git clone https://github.com/Jawad-Nassiri/Exo-Final.git


### Accédez au répertoire du projet :
- cd Exo-Final
---
### Construisez l'image Docker :

- docker build -t gestion_messages .
---
### Pour exécuter le conteneur, utilisez la commande suivante :

- docker run -p 8080:80 gestion_messages
---

### Une fois le conteneur en cours d'exécution, ouvrez votre navigateur et allez à l'adresse suivante :

- http://localhost:8080

--- 





![Description of the image](images/pexels-luis-gomes-166706-546819.jpg)
