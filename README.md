Prixy
=====

A Symfony project created on September 8, 2016, 9:31 pm.
Prixy Groupe G BTS SIO 2e année

tuto openclassroom symfony 2.8 :
https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony

Developeurs : 
Mathias Kulhandjian
William Graver (CypressKill)
Jules GROSPEILLER (PepperSniffer)

pour deployer le site il faut 
creer un alias sous apache et le configurer avec comme dossier de base "web/" 
configurer le fichier parameters avec les logs de sa bdd MySQL en laissant le nom de la bdd comme configuré ( a ne jamais commiter)
ajouter le repertoire php en variable d'environement 
la console est ensuite accessible via "php bin\console <options de commande>"
"php bin\console " sans arguments sert à lister les commande que l'on peut realiser sur le site (creer les bdd, les tables, ou commandes perso )

/!\ NE JAMAIS COMMITER LES DOSSIERS SUIVANT :
(supprimer les dossier avant de commit)
var/logs
var/cache
var/session 

Tuto installation Symfony : 
-1 cloner le dépot git où vous voulez.
-2 Copier le dossier Prixy téléchargé.
-3 Déplacez le dans le dosssier de Wamp( théoriquement C:\wamp\apps\ )
-4 Copiez le fichier "prixy.conf" présent à la racine de Prixy
-4 Revenez à la racine de wamp et accédez a wamp/alias
-5 Collez ici "prixy.conf" 
-6 Dans le dossier de Prixy, faites clic-droit, et ouvrez un invite de commande, puis entrez deploy.bat 