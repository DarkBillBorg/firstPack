MyFirstPackage
======

**Package for learn how to make php package**

Dans l'ensemble, le package PHP **MyFirstPackage** fournit une liste de prenoms selon le sexe.

----
## Installation facile

### Installer avec composer

Pour installer avec [Composer](https://getcomposer.org/), il vous suffit d'installer la
dernière version de ce package avec composer.

```bash
composer require odl/first-pack
```

### Télécharger et installer

Téléchargez une archive packagée de MyFirstPackage et extrayez-la dans le
répertoire où résidera MyFirstPackage
 

### Installer avec git

À partir de la ligne de commande, basculez vers le répertoire où BjNumberValidation
résident et exécutez les commandes suivantes :

```sh
git clone https://github.com/DarkBillBorg/firstPack.git
cd MyFirstPackage

```

## Usage

**MyFirstPackage renvoie un array  de nom**

```php
 $sexe = "M";
 
 $firstNames = new FirstPack();
 
 $result = $firstNames->generateFirstName($sexe);
 
 return response($result,200);
```

---

*I hope this project will be useful for you.*

