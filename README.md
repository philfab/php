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
    R: Vagrant, Wamp, Xamp, Laragon.
2.	Qu’est-ce qu’un algorithme ?  
    R: Suite d'instructions :
       - séquencielles = à la suite l'une des autres
       - procédurales = appels fonctions
3.	Qu’est-ce qu’une variable ? Par quel symbole est préfixée une variable en PHP ?
    R: Emplacement mémoire où l'on va stocker une valeur. Avec le symbole dollar : $
4.	Qu’est-ce que la portée d’une variable ?
    R:  dépend du contexte dans lequel la variable est définie > fonction = dans la fonction , boucle = dans la boucle, sinon global au fichier.
5.	Qu’est-ce qu’une constante ? Quelle est la différence avec une variable ?
    R: variable dont le contenu reste inchangé.
6.	Qu’est-ce qu’une superglobale, combien en existent-ils et donner un exemple d’utilisation 
    R: Une superglobale est une variable globale intégrée, disponible dans tous les contextes du script. Il y a neuf superglobales :
    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
    // Supposons l'URL: http://exemple.com?nom=Jean
    echo "Bonjour, " . $_GET['nom']; // Affichera : Bonjour, Jean

7.	Quels sont les différents types (primitifs) que l’on peut associer à une variable en PHP ? Les citer et en donner des exemples (ne pas oublier le type d’une variable sans valeur)
    R: integer, string, boolean, double, NULL.
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
    R : Un CMS (Content Management System) est un système de gestion de contenu qui permet de créer, gérer, et modifier des sites web sans avoir besoin de coder directement en HTML 
        ou dans d'autres langages de programmation. Il offre une interface utilisateur graphique pour faciliter ces opérations, rendant la gestion de sites web accessible aux non-développeurs.
        WordPress : Très populaire pour la création de blogs, de sites d'entreprise, boutiques en ligne.
        Joomla : Utilisé pour des sites web complexes et des applications en ligne, offrant une flexibilité et de nombreuses fonctionnalités.
## Front-end
18.	Définir HTML :
    L'HTML est un langage informatique utilisé sur l'internet. Ce langage est utilisé pour créer des pages web. L'acronyme signifie HyperText Markup Language, ce qui signifie en français 
    "langage de balisage d'hypertexte". Ce langage permet de réaliser de l'hypertexte à base d'une structure de balisage.
19.	Définir CSS : 
    CSS est l'acronyme anglais de Cascading Style Sheets "feuilles de style en cascade". Le CSS est un langage informatique utilisé sur l'internet pour mettre en forme
    les fichiers HTML ou XML. Ainsi, les feuilles de style, aussi appelé les fichiers CSS, comprennent du code qui permet de gérer le design d'une page en HTML.
20.	Définir Javascript : 
    JavaScript est un langage de programmation principalement utilisé sur Internet, en complément de HTML et CSS. Il utilise des scripts pour créer du contenu dynamique. Il complémente ainsi
   	les deux autres langages de base du Web et peut stocker des valeurs, faire des opérations ou encore exécuter du code selon certains évènements. C'est un langage orienté prototype, c'est-à-
   	dire semblable à un langage orienté objet, mais sans classe.
22.	Définir JSON. Dans quel contexte ce format est-il utilisé ? : 
    Il s'agit d'un moyen textuel de représenter des objets, des tableaux et des données scalaires JavaScript. JSON (JavaScript Object Notation) est relativement facile à lire et à écrire,
   	tout en restant facile à analyser et à générer pour les logiciels.JSON ou JavaScript Object Notation est une représentation sans schéma, en texte clair, de données
   	structurées basées sur des paires nom/valeur et des listes ordonnées. Même si le format JSON est dérivé de JavaScript, il est supporté soit nativement, soit par l'intermédiaire de
   	bibliothèques dans la plupart des principaux langages de programmation.
23. Peut-on interpréter du Javascript côté serveur ? Si oui, comment ?
R : Oui, JavaScript peut être interprété côté serveur grâce à Node.js, un environnement qui permet d'exécuter du JavaScript en dehors d'un navigateur.

24. Qu’est-ce qu’un sélecteur CSS ?
R : Un sélecteur CSS est une partie de la syntaxe CSS qui cible des éléments HTML pour les styliser. Par exemple, .classe cible tous les éléments avec la classe "classe", tandis que #id cible l'élément avec l'identifiant "id".

25. Quelle balise HTML permet de créer un lien hypertexte ?
R : La balise <a> est utilisée pour créer un lien hypertexte. Par exemple, <a href="https://www.example.com">Cliquez ici</a> crée un lien vers "https://www.example.com".

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
R : Le polymorphisme permet d'utiliser une méthode ou un objet de manière interchangeable, même si les objets ou méthodes appartiennent à des classes différentes, tant qu'ils partagent une interface ou héritent de la même classe.

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
60.	Qu’est-ce que l’architecture client / serveur ? Grâce à quel type de requête peut-on interroger le serveur. Définir l’acronyme de ce type de requête. Si on ajoute un « S » à cet acronyme, expliquer la différence
61.	Donner la définition d’un design pattern. Citer au moins 3 exemples de design pattern
62.	Qu’est-ce que l’architecture MVC ?
63.	Quel est le rôle de chaque couche du design pattern MVC : Model, View, Controller ?
64.	Quels sont les avantages de l’architecture MVC ?
65.	Existe-t-il des variantes à l’architecture MVC ?
66.	Qu’est-ce qu’une API ? Définir l’architecture REST

## Modélisation - Base de données
67.	Qu’est-ce que la modélisation de données ? Définir la méthode Merise
68.	Quelles sont les 3 étapes principales de la méthode Merise ? 
a.	Analyse, conception et réalisation
b.	Planification, exécution et contrôle
c.	Création, modification et suppression
69.	Qu’est-ce qu’un modèle conceptuel de données (MCD) en Merise ?
70.	Qu’est-ce qu’un modèle logique de données (MLD) en Merise ?
71.	Donner la définition des mots suivants :
a.	Entité
b.	Relation
c.	Cardinalité
d.	Clé primaire / clé étrangère
72.	Que devient une relation de type « Many To Many » dans le modèle logique de données ?
73.	Qu’est-ce qu’une base de données ?
74.	Définir les notions suivantes : 
a.	SQL
b.	MySQL
c.	SGBD (donner 2 exemples de SGBD)
75.	Dans une base de données, les données sont stockées dans des ___. Celles-ci sont constituées de lignes appelées ___ et de colonnes appelées ___
76.	Quelle est la différence entre une base de données relationnelle et non relationnelle ?
77.	Qu’est-ce qu’une jointure dans une base de données ? En existe-t-il plusieurs ? Si oui lesquelles ?
78.	A quoi sert une vue dans une base de données ?
79.	Qu’est-ce que l’intégrité référentielle dans une base de données ?
80.	Quelles sont les fonctions d’agrégation en SQL ?
81.	Qu’est-ce qu’un CRUD dans le contexte d’une base de données ?
82.	Quelles sont les clauses qui permettent de :
a.	Insérer un nouvel enregistrement dans une table
b.	Modifier un enregistrement dans une table
c.	Supprimer un enregistrement dans une table
d.	Supprimer la base de données
e.	Filtrer les résultats d’une requête SQL
f.	Trier les résultats d’une requête SELECT
g.	Regrouper les résultats d'une requête SELECT en fonction d'une colonne spécifique
h.	Concaténer 2 chaînes de caractères 
83.	Comment se connecter à une base de données en PHP ? Quelle est la classe native utilisée ?

## Symfony
84.	Qu’est-ce que Symfony ?
85.	Sur quel langage de programmation et design pattern repose Symfony ? 
86.	Quelle est la dernière version en date de Symfony ?
87.	Qu’est-ce qu’un bundle ? 
88.	Quel est le moteur de template utilisé par défaut dans Symfony ?
89.	Qu’est-ce qu’un ORM ? Quel est son utilité et comment s’appelle-t-il au sein de Symfony ?
90.	Qu’est-ce que l’injection de dépendances ? Quel est l’outil utilisé dans ce contexte et quel fichier contient l’intégralité des dépendances du projet ?
91.	Que permet le bundle Maker au sein de Symfony ? 
92.	Quel est le langage de requêtage exploité au sein d’un projet Symfony ?
93.	Quel est le composant qui garantit l’authentification et l’autorisation des utilisateurs ?

## Sécurité
94.	Qu’est-ce que l’injection SQL ? Comment s’en prémunir ?
95.	Qu’est-ce que la faille XSS ? Comment s’en prémunir ?
96.	Qu’est-ce que la faille CSRF ? Comment s’en prémunir ?
97.	Définir l’attaque par force brute et l’attaque par dictionnaire
98.	Existe-t-il d’autres failles de sécurité ? Citer celles-ci et expliquer simplement leur comportement
99.	A quoi servent l’authentification et l’autorisation dans un contexte d’application web ?
100.	Définir la notion de hachage d’un mot de passe et citer des algorithmes de hachage
101.	Qu’est-ce qu’une politique de mots de passe forts ?
102.	Qu’est-ce que l’hameçonnage ?
103.	Définir la « validation des entrées »

## RGPD
104.	Qu’est-ce que le RGPD ?
105.	Quel est son objectif principal ?
106.	Quelle est la date d’entrée en vigueur du RGPD ?
107.	Quelles sont les sanctions possibles en cas de non-respect du RGPD ?
108.	En France, quel est l’autorité administrative qui s’occupe de faire appliquer le RGPD ?
109.	Quel est le consentement valide selon le RPGD ?
110.	Qu’est-ce qu’une politique de confidentialité ?
111.	Quelle est la durée de conservation maximale des données personnelles selon le RGPD ?
112.	Quels sont les droits des utilisateurs selon le RGPD ?
113.	Qu’est-ce que le principe de minimisation des données selon le RGPD ?

## SEO
114.	Qu’est-ce que le SEO ? 
115.	Quel est l’objectif principal du SEO ?
116.	Existe-t-il plusieurs types de référencement ? Lesquels ?
117.	Qu’est-ce que la densité de mots-clés en SEO ?
118.	Qu’est-ce qu’une balise « alt » ?
119.	Qu’est-ce que la balise « meta description » ?
120.	Qu’est-ce que le « nofollow » en SEO ?
121.	Quelle est l'importance du contenu de qualité pour le référencement d'un site web ?
122.	Pourquoi est-il important d'utiliser des balises de titre (h1, h2, h3, etc.) de manière structurée ?
123.	Quelle est la recommandation pour les URL d'un site web bien référencé ?
124.	Qu'est-ce que le maillage interne et pourquoi est-il important pour le référencement ?
125.	Qu'est-ce que l'optimisation des images pour le référencement ?
126.	Qu'est-ce qu'un plan de site (sitemap) et pourquoi est-il important pour le référencement ?

## Gestion de projets - DevOps
127.	Qu’est-ce que la gestion de projet ?	
128.	Qu’est-ce qu’une méthode Agile de gestion de projet ? 
129.	Expliquer la méthode MoSCoW en quelques lignes et citer ses avantages
130.	A quoi sert la méthodologie MVP ? Citer les caractéristiques clés
131.	Qu’est-ce que la planification itérative ?
132.	Citer 3 méthodes Agiles dans le cadre d’un projet informatique
133.	Qu’est-ce qu’une réunion de revue de projet ?
134.	Qu’est-ce qu’un livrable dans un projet ? 
135.	Quels sont les 3 piliers SCRUM ? Définir chacun d’entre eux
136.	Qu’est-ce que le DevOps et quel est son objectif principal ?
137.	Qu’est-ce que l’intégration continue ? 
138.	Qu’est-ce que Docker ? Et en quoi est-il utile dans le cadre du DevOps ?
139.	Qu’est-ce qu’un test unitaire ? 
140.	Quelle est l'unité de code testée lors d'un test unitaire ?
141.	Quelles sont les caractéristiques d'un bon test unitaire ?
142.	Qu'est-ce qu'une assertion dans un test unitaire ?
 
## English
1)	What does JavaScript enable you to do on a website ?
a.	Add interactive behavior and dynamic content
b.	Define the layout and design of web pages
c.	Handle server-side operations
2)	Which programming language is primarily used for server-side web development ?
a.	PHP
b.	JavaScript
c.	HTML
3)	What is the purpose of a web browser ?
a.	To render and display web pages
b.	To execute serve-side code
c.	To manage databases
4)	What is the difference between GET and POST methods in HTTP ?
a.	GET retrieves data from a server, while POST submits data to a server
b.	GET submits data to a server, while POST retrieves data from a server
c.	GET and POST methods are interchangeable
5)	What is the purpose of version control systems (e.g., Git) in web development ?
a.	To track changes and manage collaborative development
b.	To optimize website loading speed
c.	To handle server-side scripting
6)	What is the purpose of a framework in web development ?
a.	To provide a structured environment for building web applications
b.	To handle network protocols and data transfer
c.	To create visual designs and layouts for websites
7)	What does NoSQL stand for ?
a.	Not Only SQL
b.	Non-Structured Query Language
c.	New Object-Oriented Language
8)	Which of the following is a characteristic of NoSQL databases ?
a.	Strict schema enforcement
b.	Support for complex transactions
c.	Scalability and flexible data models
