# GLOSSAIRE

- [Général](#général)
- [Front-end](#front-end)
- [UX / UI](#ux-ui)
- [Architecture](#architecture)
- [Modélisation / Base de données](#modélisation---base-de-données)
- [Symfony](#symfony)
- [Sécurité](#sécurité)
- [RGPD](#rgpd)
- [SEO](#seo)
- [Gestion de projets / DevOps](#gestion-de-projets---devops)
- [English](#english)

## Général
1.	Quel est l’environnement à installer pour exécuter un script PHP ? Citer 2 exemples de logiciels permettant ce contexte
    Dossier PHP qui contient les sources pour faire fonctionner une application PHP. S'y trouve aussi (sinon il 
    faut le créer) le fichier php.ini qui sert à customiser votre environnement PHP. Si le chemin (path) de ce
    dossier est inclus dans les variables d'environnement du système, vous aurez accés à l'environnement php
    partout dans votre OS, notamment dans les shells comme cmd, powershell, bash...
    R: Vagrant, Wamp, Xamp, Laragon.

2.	Qu’est-ce qu’un algorithme ?  
    R: C'est une suite d'instructions exécutées par un programme, du haut vers le bas et de droite vers la 
       gauche : 
       - séquencielles = à la suite l'une des autres
       - procédurales = appels de fonctions, de propriétés ou d'évènements.

3.	Qu’est-ce qu’une variable ? Par quel symbole est préfixée une variable en PHP ?
    R: Emplacement mémoire où l'on va stocker une valeur. 
    Avec le symbole dollar : $

4.	Qu’est-ce que la portée d’une variable ?

    R:  dépend du contexte dans lequel la variable est définie > fonction = dans la fonction , boucle = dans la boucle, sinon global au fichier.
5.	Qu’est-ce qu’une constante ? Quelle est la différence avec une variable ?
    R: emplacement mémoire dont le contenu reste inchangé.

6.	Qu’est-ce qu’une superglobale, combien en existent-ils et donner un exemple d’utilisation 
    R: Une superglobale est une variable globale intégrée, disponible dans tous les contextes du script. Il y a neuf superglobales :
    $GLOBALS : tableau associatif qui stocke les données globales (déconseillé car moins sécurisé). Les données 
    sont disponibles uniquement pendant l'exécution du script.
    $_SERVER : Tableau associatif qui contient les informations relatives au server : nom, méthode HTTP
    utilisée... 
    $_REQUEST : Tableau associatif qui contient les données issues de $_GET, $_POST, et $_COOKIE. Elle permet 
    donc d'accéder aux infos soumises via ces trois méthodes sans avoir à spécifier laquelle est utilisée.
    $_POST :  Tableau associatif qui contient les données envoyées au serveur avec la méthode POST.
    $_GET : Tableau associatif qui contient les données envoyées au serveur avec la méthode GET (URL).
    $_FILES : Tableau associatif qui contient les fichiers (champs type file) envoyés au serveur via un 
    formulaire.
    $_ENV :  Tableau associatif qui contient les données d'environnement (.env).
    $_COOKIE : Tableau associatif qui contient les cookies envoyés par le navigateur au serveur.
    $_SESSION :  Les données de session persistent entre plusieurs requêtes. Elles permettent de conserver des
    informations pour un utilisateur d'une page à l'autre (tant que la session est active).
    // Supposons l'URL: http://exemple.com?nom=Jean
    echo "Bonjour, " . $_GET['nom']; // Affichera : Bonjour, Jean

7.	Quels sont les différents types (primitifs) que l’on peut associer à une variable en PHP ? Les citer et en
    donner des exemples (ne pas oublier le type d’une variable sans valeur)
    R: integer, string, boolean, double, float, NULL, tableaux, objets.

8.	Existe-t-il plusieurs types de tableaux en PHP, si oui lesquels ?
    R: Oui. Tableaux indexés classiques - Tableaux associatifs (clef-valeur) - Tableaux multidimentionnels.

9.	Quelles sont les différentes structures de contrôles qu’il existe en algorithmie ? Donner un exemple pour chacune d’entre elles
    R: En algorithmie, les structures de contrôle sont des instructions qui permettent de diriger le flux d'exécution du code. 
       Il existe principalement trois types de structures de contrôle :
       - Séquentielle : Exécute les instructions l'une après l'autre dans l'ordre où elles apparaissent.
         echo "Bonjour, ";
         echo "le monde !";
       - Conditionnelle : if...else :$age = 20; if ($age >= 18) {} else {} ou switch : switch ($jour) {case "":...}
       - Répétitive  : for ($i = 0; $i < 5; $i++) {} ou while, do...while : ($i < 5) { $i++;}
    
10.	Quelle est la fonction PHP permettant de demander la longueur d’une chaîne de caractères ?
    R: strlen($chaine);

11.	Qu’est-ce qu’une session ? Quelle fonction permet de démarrer une session en PHP ? Donner un exemple d’utilisation en PHP
    R : Une session permet de conserver les variables accessibles sur plusieurs pages. 
        Au lieu de stocker les infos sur le navigateur, la session est conservée sur le serveur. 
        session_start(); > fonction qui permet de démarrer une session.
        $_SESSION['utilisateur'] = 'nomUtilisateur'; // Définition d'une variable de session 
        echo 'Utilisateur : ' . $_SESSION['utilisateur'];// Accès à la variable de session sur une autre page.
12.	Qu’est-ce qu’un cookie ? Donner un exemple d’utilisation en PHP
    R : Un cookie est un petit fichier de données qu'un site web peut enregistrer sur le navigateur d'un utilisateur. 
        Il est utilisé pour conserver des informations entre les visites sur un même site, comme les préférences de l'utilisateur ou son statut de connexion.
        setcookie("utilisateur", "nomUtilisateur", time() + 3600);
        if(isset($_COOKIE["utilisateur"])) { echo 'Utilisateur : ' . $_COOKIE["utilisateur"];

13.	Quelle est la différence entre les instructions « require » et « include » en PHP
    R : require et include sont utilisées pour inclure et exécuter le code contenu dans un fichier spécifique.
        require produira une erreur fatale (E_COMPILE_ERROR) et arrêtera l'exécution du script si le fichier spécifié ne peut pas être trouvé ou lu.
        include générera une alerte (E_WARNING) si le fichier spécifié ne peut pas être trouvé ou lu, mais le script continuera à s'exécuter.

14.	Comment effectuer une redirection en PHP ?
    R : Pour effectuer une redirection en PHP, on peut utiliser la fonction header() avec l'instruction
        Location : header("Location: http://www.exemple.com"); exit;
    Il est recommandé d'utiliser 'exit' juste après l'appel à header().

15.	Définir la partie « front-end » et « back-end » d’une application
    R : Le "front-end" d'une application se réfère à la partie visible par l'utilisateur, tout ce qui concerne l'interface et l'interaction avec l'utilisateur.
        (conception graphique ,  éléments d'interface (boutons, menus, animations) avec HTML, CSS, et JavaScript.
        Le "back-end",désigne la partie serveur de l'application, qui traite la logique métier, les opérations sur les données (requêtes base de données), et les échanges avec le front-end.

16.	Définir le contrôle de version ? Qu’est-ce que Git ?
    R : Le contrôle de version est un système qui enregistre les modifications apportées à un fichier ou à un ensemble de fichiers au fil du temps, 
        de sorte qu'il est possible de rappeler des versions spécifiques ultérieurement.
        Git est un système de contrôle de version distribué, conçu pour gérer tout type de projet avec rapidité et efficacité. 
        Git permet à plusieurs développeurs de travailler ensemble sur un même projet en gérant et en suivant les modifications de leurs fichiers.

17.	Qu’est-ce qu’un CMS ? Citer au moins 2 exemples
    R : Un CMS (Content Management System) est un système de gestion de contenu qui permet de créer, gérer, et modifier des sites web sans avoir besoin de coder directement en HTML ou dans d'autres langages de programmation. Il offre une interface utilisateur graphique pour faciliter ces opérations, rendant la gestion de sites web accessible aux non-développeurs.
        WordPress : Très populaire pour la création de blogs, de sites d'entreprise, boutiques en ligne.
        Joomla : Utilisé pour des sites web complexes et des applications en ligne, offrant une flexibilité et de nombreuses fonctionnalités.

## Front-end
18.	Définir HTML :
    L'HTML est un langage informatique utilisé sur l'internet. Ce langage est utilisé pour créer des pages web. L'acronyme signifie HyperText Markup Language, ce qui signifie en français "langage de balisage d'hypertexte". Ce langage permet de réaliser de l'hypertexte à base d'une structure de balisage.

19.	Définir CSS : 
    CSS est l'acronyme anglais de Cascading Style Sheets "feuilles de style en cascade". Le CSS est un langage informatique utilisé sur l'internet pour mettre en forme (mise en page) les fichiers HTML ou XML. Ainsi, les feuilles de style, aussi appelé les fichiers CSS, comprennent du code qui permet de gérer le design d'une page en HTML.

20.	Définir Javascript : 
    JavaScript est un langage de programmation principalement utilisé sur Internet, en complément de HTML et CSS. Il utilise des scripts pour créer du contenu dynamique. Il complémente ainsi	les deux autres langages de base du Web et peut stocker des valeurs, faire des opérations ou encore exécuter du code selon certains évènements. C'est un langage orienté prototype, c'est-à-dire semblable à un langage orienté objet, mais sans classe.

22.	Définir JSON. Dans quel contexte ce format est-il utilisé ? : 
    Il s'agit d'un moyen textuel de représenter des objets, des tableaux et des données scalaires JavaScript. JSON (JavaScript Object Notation) est relativement facile à lire et à écrire, tout en restant facile à analyser et à générer pour les logiciels. JSON ou JavaScript Object Notation est une représentation sans schéma, en texte clair, de données structurées basées sur des paires nom/valeur et des listes ordonnées. Même si le format JSON est dérivé de JavaScript, il est supporté soit nativement, soit par l'intermédiaire de bibliothèques dans la plupart des principaux langages de programmation.

23. Peut-on interpréter du Javascript côté serveur ? Si oui, comment ?
R : Oui, JavaScript peut être interprété côté serveur grâce à Node.js, un environnement qui permet d'exécuter du JavaScript en dehors d'un navigateur.

24. Qu’est-ce qu’un sélecteur CSS ?
R : Un sélecteur CSS est une partie de la syntaxe CSS qui cible des éléments HTML pour les styliser. Par exemple, .classe cible tous les éléments avec la classe "classe", tandis que #id cible l'élément avec l'identifiant "id".

25. Quelle balise HTML permet de créer un lien hypertexte ?
R : La balise <a> (anchor) est utilisée pour créer un lien hypertexte. Par exemple, <a href="https://www.example.com">Cliquez ici</a> crée un lien vers "https://www.example.com".

26. Qu’est-ce qu’une requête AJAX ?
R : AJAX (Asynchronous JavaScript and XML) est une technique qui permet de charger des données en arrière-plan sans recharger la page web. Elle est souvent utilisée pour créer des applications web interactives.

27. Quel sélecteur CSS permet de sélectionner tous les éléments d’une classe spécifique ? D’un identifiant spécifique ?
R : Pour sélectionner tous les éléments d'une classe spécifique, on utilise .nomDeClasse. Pour un identifiant spécifique, on utilise #nomDeID.

28. Définir le responsive design.
R : Le responsive design est une approche de la conception web qui rend les pages web adaptatives à la taille de l'écran de l'utilisateur, qu'il s'agisse d'un smartphone, d'une tablette ou d'un ordinateur de bureau.

29. Qu’est-ce que le templating ?
R : Le templating est une technique qui permet de générer des pages HTML dynamiques en utilisant des modèles (templates) qui contiennent des balises de code pour insérer des données dynamiques.

30. Qu’est-ce qu’une fonction anonyme en Javascript ?
R : Une fonction anonyme est une fonction sans nom, souvent utilisée pour des tâches temporaires ou pour être passée en argument à une autre fonction. Exemple : function() { console.log('Salut !'); }.

31. Quelle méthode JavaScript est utilisée pour ajouter un élément à la fin d'un tableau ?
R : La méthode push() est utilisée pour ajouter un élément à la fin d'un tableau. Exemple : tableau.push('nouvel élément');.

32. Qu’est-ce qu’un « media query » ?
R : Un media query est une technique en CSS qui permet d'appliquer des styles différents selon les caractéristiques du périphérique, comme la largeur de l'écran. Par exemple, @media (max-width: 600px) { /* styles ici */ }.

33. Qu’est-ce qu’un pseudo-élément en CSS ?
R : Un pseudo-élément est une fonctionnalité CSS qui permet de styliser une partie spécifique d'un élément HTML. Par exemple, ::before permet d'ajouter du contenu avant un élément.

34. Qu’est-ce que Bootstrap ? Donner d’autres exemples équivalents.
R : Bootstrap est un framework CSS open-source qui facilite le développement rapide de sites web réactifs et stylisés. D'autres frameworks similaires incluent Foundation, Bulma, et Tailwind CSS.

35. Quand un formulaire HTML est créé, quelles sont les 2 méthodes qui peuvent lui être associées ? Donner la différence entre ces 2 méthodes.
R : Les deux méthodes sont GET et POST. GET envoie les données via l'URL, tandis que POST envoie les données dans le corps de la requête. GET est utilisé pour récupérer des données, tandis que POST est utilisé pour soumettre des données.

## UX UI
36. Quelle est la différence entre UX Design et UI Design ?
R : L'UX Design (User Experience) se concentre sur l'expérience globale de l'utilisateur lors de l'utilisation d'un produit, tandis que l'UI Design (User Interface) se concentre sur la conception visuelle et interactive de l'interface utilisateur.

37. Qu’est-ce qu’un wireframe ?
R : Un wireframe est une maquette simplifiée qui représente la structure d'une page ou d'une interface, sans détails visuels. Il sert de guide pour le placement des éléments et la navigation.

38. Qu’est-ce qu’un prototype ?
R : Un prototype est une version préliminaire d'un produit ou d'une interface, créée pour tester et valider des concepts avant la production finale. Il peut être interactif pour simuler l'expérience utilisateur.

39. Qu’est-ce que la hiérarchie visuelle en UI Design ?
R : La hiérarchie visuelle est l'organisation des éléments visuels d'une interface pour guider l'attention de l'utilisateur. Elle utilise la taille, la couleur, l'emplacement et d'autres techniques pour mettre en avant les éléments importants.

40. Qu’est-ce que l’accessibilité en UX Design ?
R : L'accessibilité en UX Design consiste à concevoir des produits qui peuvent être utilisés par le plus grand nombre de personnes possible, y compris celles ayant des handicaps. Cela inclut des pratiques comme l'utilisation de texte alternatif pour les images ou des contrastes de couleurs suffisants.

41. Qu’est-ce qu’une grille de mise en page ?
R : Une grille de mise en page est un ensemble de lignes directrices utilisées pour organiser les éléments d'une page de manière cohérente et harmonieuse. Elle aide à structurer le contenu et à maintenir l'alignement visuel.

42. Qu’est-ce que la notion d’affordance en UX Design ?
R : L'affordance fait référence à la capacité d'un élément d'interface à suggérer son usage. Par exemple, un bouton en relief indique qu'il peut être cliqué.

43. Qu’est-ce qu’un « mobile first design » ?
R : Le "mobile first design" est une approche de conception où le développement commence par la version mobile, puis est étendu aux versions pour des écrans plus larges. Cela garantit que le site fonctionne bien sur les appareils mobiles.

44. Donner une définition de la programmation orientée objet.
R : La programmation orientée objet (POO) est un paradigme de programmation qui organise le code en objets, chaque objet représentant une instance d'une classe, qui est une abstraction modélisant des concepts réels ou logiques.

45. Qu’est-ce qu’une classe ? Comment la déclare-t-on ?
R : Une classe est un modèle ou un plan à partir duquel des objets sont créés. En PHP, on la déclare avec le mot-clé class. Exemple : class Animal {}.

46. Qu’est-ce qu’un objet ?
R : Un objet est une instance d'une classe. C'est une entité autonome avec des propriétés (attributs) et des méthodes (fonctions) qui définissent son comportement.

47. Définir la notion de propriété / attribut / méthode.
R : Une propriété ou un attribut est une variable associée à un objet, représentant une caractéristique. Une méthode est une fonction associée à un objet, définissant un comportement ou une action.

48. Qu’est-ce que la visibilité d’une propriété ou d’une méthode ? Citer les différents types de visibilité.
R : La visibilité détermine l'accès aux propriétés ou méthodes d'une classe. Les types de visibilité sont public (accessible partout), protected (accessible dans la classe et ses sous-classes), et private (accessible uniquement dans la classe elle-même).

49. Quelle est la méthode spécifique utilisée pour créer un nouvel objet à partir d’une classe ?
R : La méthode spécifique est le constructeur, généralement nommée __construct() en PHP. Elle est appelée lors de la création d'un nouvel objet avec new.

50. Qu’est-ce que l’encapsulation ?
R : L'encapsulation est un principe de la POO qui consiste à restreindre l'accès direct aux propriétés d'un objet et à utiliser des méthodes pour les modifier, protégeant ainsi l'intégrité des données.

51. Que signifie « étendre une classe » ? Quelle est le concept clé mis en œuvre ? Donner un exemple.
R : Étendre une classe signifie créer une nouvelle classe qui hérite des propriétés et méthodes d'une autre classe. Le concept clé est l'héritage. Exemple : class Chien extends Animal {}.

52. Définir l’opérateur de résolution de portée.
R : L'opérateur de résolution de portée (::) en PHP permet d'accéder aux méthodes et propriétés statiques d'une classe, ou de faire référence à la classe parente dans une classe dérivée.

53. Définir une méthode / propriété statique.
R : Une méthode ou propriété statique appartient à la classe elle-même, plutôt qu'à une instance de la classe. On y accède en utilisant l'opérateur ::.

54. Définir le polymorphisme en POO.
R : Le polymorphisme permet d'utiliser une méthode ou un objet de manière interchangeable, même si les objets ou méthodes appartiennent à des classes différentes, tant qu'ils partagent une interface ou héritent de la même classe : S'il y a une classe 'vehicule' qui implémente le méthode 'rouler' et si deux classes héritent (enfants) de cette classe vehicule, par exemple voiture et velo, lorsque velo ou voiture appellent rouler : c'est du polymorphisme.

55. Définir une méthode / classe abstraite ?
R : Une classe abstraite est une classe qui ne peut pas être instanciée directement et est conçue pour être étendue par d'autres classes. Une méthode abstraite est une méthode déclarée sans implémentation dans une classe abstraite, qui doit être implémentée dans les sous-classes.

56. Définir le chaînage de méthodes.
R : Le chaînage de méthodes permet d'appeler plusieurs méthodes sur le même objet en une seule instruction. Chaque méthode doit retourner l'objet lui-même ($this). Exemple : $objet->methode1()->methode2();.

57. Qu’est-ce que la méthode __toString() ? Existe-t-il d’autres méthodes « magiques » ?
R : La méthode __toString() permet de définir comment un objet est converti en chaîne de caractères. Il existe d'autres méthodes magiques en PHP, comme __construct() pour le constructeur, __destruct() pour le destructeur, et __get() pour l'accès dynamique aux propriétés.

58. Qu’est-ce qu’un « autoload » ?
R : L'autoload est un mécanisme en PHP qui permet de charger automatiquement les classes nécessaires lors de leur première utilisation, sans avoir besoin d'inclure manuellement les fichiers.

59. Comment appelle-t-on en français les « getters » et les « setters » ?
R : En français, les « getters » sont appelés accesseurs et les « setters » sont appelés mutateurs.

60. Qu’est-ce que la sérialisation en PHP ?
R : La sérialisation en PHP est le processus de conversion d'un objet en une chaîne de caractères pour le stockage ou la transmission. La désérialisation est l'opération inverse, qui recrée l'objet à partir de la chaîne.

## Architecture 
61. Qu’est-ce que l’architecture client / serveur ? Grâce à quel type de requête peut-on interroger le serveur. Définir l’acronyme de ce type de requête. Si on ajoute un « S » à cet acronyme, expliquer la différence.
R : L'architecture client/serveur est un modèle où un client (comme un navigateur) envoie des requêtes à un serveur pour obtenir des ressources. Le type de requête utilisé est HTTP (HyperText Transfer Protocol). HTTPS (HTTP Secure) est la version sécurisée, qui chiffre les données pour protéger la confidentialité.

62. Donner la définition d’un design pattern. Citer au moins 3 exemples de design pattern.
R : Un design pattern est une solution réutilisable à un problème de conception récurrent. Exemples : Singleton, Factory, Observer.

63. Qu’est-ce que l’architecture MVC ?
R : L'architecture MVC (Model-View-Controller) est un modèle de conception qui sépare une application en trois couches : le modèle (gestion des données), la vue (interface utilisateur) et le contrôleur (logique d'application).

64. Quel est le rôle de chaque couche du design pattern MVC : Model, View, Controller ?
R : Le modèle gère les données et la logique d'accès aux données, la vue affiche les données et l'interface utilisateur, et le contrôleur traite les entrées utilisateur et met à jour le modèle et la vue en conséquence.

65. Quels sont les avantages de l’architecture MVC ?
R : L'architecture MVC sépare les préoccupations, ce qui facilite la maintenance, la réutilisation du code, et le travail en équipe (chaque développeur peut se concentrer sur une couche spécifique).

66. Existe-t-il des variantes à l’architecture MVC ?
R : Oui, il existe des variantes comme MVVM (Model-View-ViewModel), MVP (Model-View-Presenter), et HMVC (Hierarchical Model-View-Controller).

67. Qu’est-ce qu’une API ? Définir l’architecture REST.
R : Une API (Application Programming Interface) est un ensemble de règles qui permet à différentes applications de communiquer entre elles. L'architecture REST (Representational State Transfer) est un style d'architecture qui utilise HTTP pour manipuler des ressources représentées par des URI.

## Modélisation - Base de données
68. Qu’est-ce que la modélisation de données ? Définir la méthode Merise.
R : La modélisation de données est le processus de création d'un modèle visuel pour représenter les structures de données. La méthode Merise est une méthodologie française pour la conception de systèmes d'information, incluant la modélisation des données.

69. Quelles sont les 3 étapes principales de la méthode Merise ?
R : a. Analyse, conception et réalisation.

70. Qu’est-ce qu’un modèle conceptuel de données (MCD) en Merise ?
R : Un MCD est une représentation la plus abstraite du système d'informations des entités et des relations dans un système d'information, sans se soucier des contraintes
techniques.

71. Qu’est-ce qu’un modèle logique de données (MLD) en Merise ?
R : Un MLD est une traduction du MCD en termes techniques, en tenant compte des contraintes du SGBD (Système de Gestion de Base de Données).

72. Donner la définition des mots suivants :
    a. Entité : Un objet ou un concept identifiable dans un système d'information.
    b. Relation : Un lien entre deux ou plusieurs entités.
    c. Cardinalité : Le nombre de relations possibles entre des entités.
    d. Clé primaire / clé étrangère : Une clé primaire identifie de manière unique un enregistrement dans une table, tandis qu'une clé étrangère est une référence à une clé primaire dans une autre table.

73. Que devient une relation de type « Many To Many » dans le modèle logique de données ?
R : Une relation "Many To Many" devient généralement deux relations "One To Many" avec une table associative pour gérer les liens entre les entités.

74. Qu’est-ce qu’une base de données ?
R : Une base de données est un ensemble organisé de données structurées, stockées électroniquement dans un système informatique.

75. Définir les notions suivantes :

    a. SQL : Structured Query Language, un langage standard pour interroger et manipuler des bases de données.
    b. MySQL : Un système de gestion de bases de données relationnelles open-source basé sur SQL.
    c. SGBD : Système de Gestion de Base de Données, un logiciel qui permet de créer, gérer et interroger des bases de données (exemples : MySQL, PostgreSQL).

76. Dans une base de données, les données sont stockées dans des ___. Celles-ci sont constituées de lignes appelées ___ et de colonnes appelées ___.
R : Les données sont stockées dans des tables. Celles-ci sont constituées de lignes appelées enregistrements et de colonnes appelées champs.

77. Quelle est la différence entre une base de données relationnelle et non relationnelle ?
R : Une base de données relationnelle organise les données en tables liées entre elles par des relations, tandis qu'une base de données non relationnelle (NoSQL) stocke les données sous des formats plus flexibles, comme des documents, des graphes, ou des colonnes.

78. Qu’est-ce qu’une jointure dans une base de données ? En existe-t-il plusieurs ? Si oui lesquelles ?
R : Une jointure est une opération SQL qui combine des enregistrements de deux tables basées sur une colonne commune. Il existe plusieurs types de jointures : INNER JOIN, LEFT JOIN, RIGHT JOIN, FULL JOIN.

79. A quoi sert une vue dans une base de données ?
R : Une vue est une requête SQL stockée qui permet de présenter les données sous une certaine forme, sans stocker les données réellement. Elle simplifie l'accès à des données complexes.

80. Qu’est-ce que l’intégrité référentielle dans une base de données ?
R : L'intégrité référentielle est une contrainte qui garantit que les relations entre les tables restent cohérentes, par exemple en empêchant la suppression d'un enregistrement référencé par une clé étrangère.

81. Quelles sont les fonctions d’agrégation en SQL ?
R : Les fonctions d'agrégation en SQL sont des fonctions qui opèrent sur un ensemble de valeurs pour en retourner une seule. Exemples : 
SUM() : somme totale d'une colonne d'une table (ou jeu de résultat)
AVG() : moyenne totale d'une colonne d'une table (ou jeu de résultat)
COUNT() : nombre de lignes (rows) dans une table (ou jeu de résultat)
MAX() : retourne le nombre maximum d'une colonne
MIN() : retourne le nombre minimum d'une colonne

82. Qu’est-ce qu’un CRUD dans le contexte d’une base de données ?
R : CRUD signifie Create, Read, Update, Delete, qui sont les quatre opérations de base pour manipuler des données dans une base de données.

83. Quelles sont les clauses qui permettent de :
    a. Insérer un nouvel enregistrement dans une table : INSERT INTO
    b. Modifier un enregistrement dans une table : UPDATE
    c. Supprimer un enregistrement dans une table : DELETE
    d. Supprimer la base de données : DROP DATABASE
    e. Filtrer les résultats d’une requête SQL : WHERE
    f. Trier les résultats d’une requête SELECT : ORDER BY
    g. Regrouper les résultats d'une requête SELECT en fonction d'une colonne spécifique : GROUP BY
    h. Concaténer 2 chaînes de caractères : CONCAT()

84. Comment se connecter à une base de données en PHP ? Quelle est la classe native utilisée ?
R : Pour se connecter à une base de données en PHP, on utilise la classe PDO (PHP Data Objects). Exemple : $pdo = new PDO('mysql:host=localhost;dbname=test', 'username', 'password');.

## Symfony
85. Qu’est-ce que Symfony ?
R : Symfony est un framework PHP open-source qui facilite le développement d'applications web robustes et maintenables.

86. Sur quel langage de programmation et design pattern repose Symfony ?
R : Symfony repose sur le langage PHP et implémente principalement le design pattern MVP (Model View Presenter).

87. Quelle est la dernière version en date de Symfony ?
R : La dernière version de Symfony est la version 6.4 (août 2024).

88. Qu’est-ce qu’un bundle ?
R : Un bundle dans Symfony est un paquetage de fonctionnalités regroupées ensemble, similaire à un plugin. Il permet de réutiliser des fonctionnalités spécifiques dans plusieurs projets.

89. Quel est le moteur de template utilisé par défaut dans Symfony ?
R : Le moteur de template utilisé par défaut dans Symfony est Twig.

90. Qu’est-ce qu’un ORM ? Quel est son utilité et comment s’appelle-t-il au sein de Symfony ?
R : Un ORM (Object-Relational Mapping) est un outil qui permet de manipuler une base de données en utilisant des objets plutôt que des requêtes SQL. Dans Symfony, l'ORM s'appelle Doctrine. C'est un système qui simplifie l'interaction avec les éléments sous-jacents en masquant les détails complexes. Avec Doctrine (ou Eloquent) le développeur n'a plus besoin d'écrire des requêtes SQL explicites.

91. Qu’est-ce que l’injection de dépendances ? Quel est l’outil utilisé dans ce contexte et quel fichier contient l’intégralité des dépendances du projet ?
R : L'injection de dépendances est un concept où un objet reçoit les dépendances dont il a besoin au lieu de les créer lui-même. Dans Symfony, cela est géré par le conteneur de services. Le fichier services.yaml contient les dépendances du projet.

92. Que permet le bundle Maker au sein de Symfony ?
R : Le bundle Maker permet de générer automatiquement du code (comme des entités, des contrôleurs, des formulaires) pour accélérer le développement en suivant les bonnes pratiques.

93. Quel est le langage de requêtage exploité au sein d’un projet Symfony ?
R : Le langage de requêtage utilisé est DQL (Doctrine Query Language), qui est similaire à SQL mais adapté aux entités.

94. Quel est le composant qui garantit l’authentification et l’autorisation des utilisateurs ?
R : Le composant Security de Symfony gère l'authentification et l'autorisation des utilisateurs.

## Sécurité
95. Qu’est-ce que l’injection SQL ? Comment s’en prémunir ?
R : L'injection SQL est une vulnérabilité qui permet à un attaquant d'exécuter des requêtes SQL malveillantes sur une base de données. Pour s'en prémunir, il faut utiliser des requêtes préparées et des paramètres liés.

96. Qu’est-ce que la faille XSS ? Comment s’en prémunir ?
R : La faille XSS (Cross-Site Scripting) permet à un attaquant d'injecter du code malveillant dans une page web consultée par d'autres utilisateurs. Pour s'en prémunir, il faut bien valider et échapper les entrées utilisateur.

97. Qu’est-ce que la faille CSRF ? Comment s’en prémunir ?
R : La faille CSRF (Cross-Site Request Forgery) permet à un attaquant de faire exécuter des actions à un utilisateur authentifié sans son consentement. Pour s'en prémunir, on utilise des tokens CSRF pour valider les requêtes.
Pour s'en prémunir on crée un jeton unique (token) que l'on envoie au serveur à chaque requête envoyé par l'utilisateur pour validation auprés de celui-ci.
Génération du token :
Le serveur génère un jeton unique et le stocke dans la session de l'user.
Le même jeton est ensuite inclus dans les formulaires ou les requêtes de l'application côté client (souvent dans un champ caché ou un en-tête HTTP).
Validation du token :
Lorsqu'une requête est envoyée, le serveur vérifie que le token fourni dans la requête correspond à celui stocké dans la session.
Si le jeton est valide la requête est acceptée sinon elle est rejetée. 

98. Définir l’attaque par force brute et l’attaque par dictionnaire.
R : L'attaque par force brute consiste à essayer toutes les combinaisons possibles de mots de passe jusqu'à trouver le bon. L'attaque par dictionnaire essaie une liste de mots de passe courants.
On peut se prémunir contre ces attaques en complexifiant les mots de passe (min 8 caractères, maj-min, caractères spéciaux, pas de noms courants...), aussi en les modifiant fréquemment.

99. Existe-t-il d’autres failles de sécurité ? Citer celles-ci et expliquer simplement leur comportement.
R : Oui, d'autres failles incluent :

    Injection de commandes : permet à un attaquant d'exécuter des commandes système malveillantes.
    Manque d'authentification : permet l'accès non autorisé à des ressources protégées.
    Exposition de données sensibles : permet à un attaquant d'accéder à des informations confidentielles.

100. A quoi servent l’authentification et l’autorisation dans un contexte d’application web ?
R : L'authentification vérifie l'identité de l'utilisateur, tandis que l'autorisation détermine les ressources et actions auxquelles l'utilisateur peut accéder.

101. Définir la notion de hachage d’un mot de passe et citer des algorithmes de hachage.
R : Le hachage est le processus de transformation d'un mot de passe en une chaîne fixe de caractères via un algorithme. Exemples d'algorithmes : MD5, SHA-256, bcrypt.

102. Qu’est-ce qu’une politique de mots de passe forts ?
R : Une politique de mots de passe forts impose des règles pour créer des mots de passe difficiles à deviner, comme la longueur minimale, l'utilisation de caractères spéciaux, et l'interdiction des mots courants.

103. Qu’est-ce que l’hameçonnage ?
R : L'hameçonnage (phishing) est une technique utilisée par des attaquants pour tromper les utilisateurs et les inciter à révéler des informations confidentielles, comme des mots de passe ou des numéros de carte de crédit, en se faisant passer pour une entité de confiance.

104. Définir la « validation des entrées ».
R : La validation des entrées consiste à vérifier que les données fournies par les utilisateurs sont correctes et sécurisées avant de les traiter, afin de prévenir les failles de sécurité.

## RGPD
105. Qu’est-ce que le RGPD ?
R : Le RGPD (Règlement Général sur la Protection des Données) est une réglementation européenne visant à protéger les données personnelles des citoyens de l'UE.

106. Quel est son objectif principal ?
R : L'objectif principal du RGPD est de garantir la protection des données personnelles des individus et de donner aux citoyens un contrôle accru sur leurs informations personnelles.

107. Quelle est la date d’entrée en vigueur du RGPD ?
R : Le RGPD est entré en vigueur le 25 mai 2018.

108. Quelles sont les sanctions possibles en cas de non-respect du RGPD ?
R : Les sanctions peuvent aller jusqu'à 20 millions d'euros ou 4% du chiffre d'affaires annuel mondial de l'entreprise, selon le montant le plus élevé.

109. En France, quel est l’autorité administrative qui s’occupe de faire appliquer le RGPD ?
R : En France, c'est la CNIL (Commission Nationale de l'Informatique et des Libertés) qui s'occupe de faire appliquer le RGPD.

110. Quel est le consentement valide selon le RPGD ?
R : Un consentement valide selon le RGPD doit être libre, éclairé, spécifique et univoque, signifiant que l'utilisateur doit clairement comprendre et accepter l'utilisation de ses données.

111. Qu’est-ce qu’une politique de confidentialité ?
R : Une politique de confidentialité est un document qui explique comment une organisation collecte, utilise, protège et partage les données personnelles des utilisateurs.

112. Quelle est la durée de conservation maximale des données personnelles selon le RGPD ?
R : Le RGPD ne fixe pas de durée maximale universelle, mais stipule que les données personnelles ne doivent pas être conservées plus longtemps que nécessaire au regard des finalités pour lesquelles elles sont traitées.

113. Quels sont les droits des utilisateurs selon le RGPD ?
R : Les droits des utilisateurs incluent le droit d'accès, le droit de rectification, le droit à l'effacement (droit à l'oubli), le droit à la portabilité des données, et le droit de s'opposer au traitement de leurs données.

114. Qu’est-ce que le principe de minimisation des données selon le RGPD ?
R : Le principe de minimisation des données stipule que seules les données personnelles nécessaires pour atteindre une finalité spécifique doivent être collectées et traitées.

## SEO
115. Qu’est-ce que le SEO ?
R : Le SEO (Search Engine Optimization) est l'ensemble des techniques visant à améliorer le classement d'un site web dans les résultats des moteurs de recherche.

116. Quel est l’objectif principal du SEO ?
R : L'objectif principal du SEO est d'accroître la visibilité d'un site web dans les résultats de recherche, afin d'attirer plus de visiteurs qualifiés.

117. Existe-t-il plusieurs types de référencement ? Lesquels ?
R : Oui, il existe plusieurs types de référencement, dont le SEO (référencement naturel), le SEA (référencement payant via des annonces), et le SMO (optimisation pour les réseaux sociaux).

118. Qu’est-ce que la densité de mots-clés en SEO ?
R : La densité de mots-clés est le pourcentage de fois qu'un mot-clé spécifique apparaît sur une page web par rapport au nombre total de mots de la page. Elle influence le classement de la page dans les résultats de recherche.

119. Qu’est-ce qu’une balise « alt » ?
R : Une balise "alt" est un attribut HTML utilisé pour décrire le contenu d'une image. Elle est essentielle pour l'accessibilité et peut aussi contribuer au SEO en fournissant des mots-clés pertinents pour les moteurs de recherche.

120. Qu’est-ce que la balise « meta description » ?
R : La balise "meta description" est un élément HTML qui fournit un résumé concis du contenu d'une page web. Elle est affichée dans les résultats de recherche sous le titre de la page et influence le taux de clic.

121. Qu’est-ce que le « nofollow » en SEO ?
R : Le "nofollow" est un attribut HTML ajouté à un lien pour indiquer aux moteurs de recherche de ne pas suivre ce lien ou de ne pas transférer de valeur de référencement à la page cible.

122. Quelle est l'importance du contenu de qualité pour le référencement d'un site web ?
R : Un contenu de qualité est essentiel pour le référencement car il répond aux attentes des utilisateurs, réduit le taux de rebond, augmente le temps passé sur le site, et incite les autres sites à créer des liens vers lui, ce qui améliore le classement dans les moteurs de recherche.

123. Pourquoi est-il important d'utiliser des balises de titre (h1, h2, h3, etc.) de manière structurée ?
R : Les balises de titre structurent le contenu d'une page, facilitant la compréhension pour les utilisateurs et les moteurs de recherche. Une bonne structure améliore le SEO en rendant la page plus lisible et en aidant à l'indexation.

124. Quelle est la recommandation pour les URL d'un site web bien référencé ?
R : Les URL doivent être courtes, descriptives, contenir des mots-clés pertinents, et éviter les caractères spéciaux ou les paramètres inutiles. Cela améliore la lisibilité pour les utilisateurs et le classement SEO.

125. Qu'est-ce que le maillage interne et pourquoi est-il important pour le référencement ?
R : Le maillage interne consiste à créer des liens entre les pages d'un même site web. Il aide à distribuer l'autorité des pages, facilite la navigation pour les utilisateurs, et aide les moteurs de recherche à découvrir et à indexer toutes les pages du site.

126. Qu'est-ce que l'optimisation des images pour le référencement ?
R : L'optimisation des images implique de réduire leur taille pour un chargement plus rapide, d'utiliser des balises "alt" descriptives, et de nommer les fichiers de manière pertinente. Cela améliore l'expérience utilisateur et le SEO.

127. Qu'est-ce qu'un plan de site (sitemap) et pourquoi est-il important pour le référencement ?
R : Un plan de site (sitemap) est un fichier XML qui liste toutes les pages d'un site web. Il aide les moteurs de recherche à découvrir et à indexer les pages, améliorant ainsi le référencement.

## Gestion de projets - DevOps
128. Qu’est-ce que la gestion de projet ?
R : La gestion de projet est le processus de planification, d'organisation et de gestion des ressources pour atteindre les objectifs d'un projet dans les délais et le budget impartis.

129. Qu’est-ce qu’une méthode Agile de gestion de projet ?
R : Une méthode Agile est une approche itérative et flexible de la gestion de projet qui se concentre sur la collaboration, l'adaptation rapide aux changements, et la livraison continue de valeur.

130. Expliquer la méthode MoSCoW en quelques lignes et citer ses avantages.
R : La méthode MoSCoW est une technique de priorisation des tâches en quatre catégories : Must have, Should have, Could have, et Won't have. Elle aide à concentrer les efforts sur les éléments essentiels et à gérer les attentes des parties prenantes.

131. A quoi sert la méthodologie MVP ? Citer les caractéristiques clés.
R : Le MVP (Minimum Viable Product) est une version de produit avec les fonctionnalités de base nécessaires pour répondre aux besoins des utilisateurs et obtenir des retours rapides. Il permet de valider une idée avant d'investir davantage.

132. Qu’est-ce que la planification itérative ?
R : La planification itérative est une approche où le projet est divisé en petites parties (itérations) qui sont planifiées, développées, et revues successivement. Cela permet d'adapter le projet en continu en fonction des retours et des évolutions.

133. Citer 3 méthodes Agiles dans le cadre d’un projet informatique.
R : Scrum, Kanban, et Extreme Programming (XP).

134. Qu’est-ce qu’une réunion de revue de projet ?
R : Une réunion de revue de projet est un moment où l'équipe se réunit pour évaluer l'avancement du projet, identifier les problèmes et ajuster les plans pour les prochaines étapes.

135. Qu’est-ce qu’un livrable dans un projet ?
R : Un livrable est un produit ou un résultat spécifique à fournir à un client ou à une partie prenante à la fin d'une étape du projet.

136. Quels sont les 3 piliers SCRUM ? Définir chacun d’entre eux.
R : Les 3 piliers Scrum sont :

    Transparence : Les processus et résultats sont visibles pour tous les membres de l'équipe.
    Inspection : Évaluer régulièrement l'avancement du projet pour détecter les écarts.
    Adaptation : Ajuster les processus en réponse aux découvertes faites lors des inspections.

137. Qu’est-ce que le DevOps et quel est son objectif principal ?
R : DevOps est une culture et un ensemble de pratiques qui unifient le développement logiciel (Dev) et les opérations (Ops). Son objectif principal est d'améliorer la collaboration entre ces équipes pour livrer des logiciels plus rapidement et de manière plus fiable.

138. Qu’est-ce que l’intégration continue ?
R : L'intégration continue est une pratique DevOps où le code est régulièrement intégré dans un dépôt partagé et testé automatiquement. Cela aide à détecter les bugs plus tôt et à maintenir un codebase stable.

139. Qu’est-ce que Docker ? Et en quoi est-il utile dans le cadre du DevOps ?
R : Docker est une plateforme qui utilise des conteneurs pour exécuter des applications de manière isolée et cohérente. Il est utile en DevOps pour assurer que le code fonctionne de la même manière en développement, en test, et en production.

140. Qu’est-ce qu’un test unitaire ?
R : Un test unitaire est un test qui vérifie le bon fonctionnement d'une petite unité de code, comme une fonction ou une méthode, de manière isolée.

141. Quelle est l'unité de code testée lors d'un test unitaire ?
R : L'unité de code testée est généralement une fonction ou une méthode.

142. Quelles sont les caractéristiques d'un bon test unitaire ?
R : Un bon test unitaire doit être isolé, rapide, répétable, et vérifier une seule fonctionnalité à la fois.

143. Qu'est-ce qu'une assertion dans un test unitaire ?
R : Une assertion est une déclaration qui vérifie si une condition spécifique est vraie dans un test unitaire. Si l'assertion échoue, le test échoue également.
 
## English
1. What does JavaScript enable you to do on a website ?
R : a. Add interactive behavior and dynamic content.

2. Which programming language is primarily used for server-side web development ?
R : a. PHP.

3. What is the purpose of a web browser ?
R : a. To render and display web pages.

4. What is the difference between GET and POST methods in HTTP ?
R : a. GET retrieves data from a server, while POST submits data to a server.

5. What is the purpose of version control systems (e.g., Git) in web development ?
R : a. To track changes and manage collaborative development.

6. What is the purpose of a framework in web development ?
R : a. To provide a structured environment for building web applications.

7. What does NoSQL stand for ?
R : a. Not Only SQL.

8. Which of the following is a characteristic of NoSQL databases ?
R : c. Scalability and flexible data models.
