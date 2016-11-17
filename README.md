Prixy
=====

A Symfony project created on September 8, 2016, 9:31 pm.
Prixy Groupe G BTS SIO 2e année

tuto openclassroom symfony 2.8 :<br/>
https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony<br/><br/>

Developeurs : <br/>
Mathias Kulhandjian<br/>
William Graver (CypressKill)<br/>
Jules GROSPEILLER (PepperSniffer)<br/>

pour deployer le site il faut 
creer un alias sous apache et le configurer avec comme dossier de base "web/" 
configurer le fichier parameters avec les logs de sa bdd MySQL en laissant le nom de la bdd comme configuré ( a ne jamais commiter)
ajouter le repertoire php en variable d'environement 
la console est ensuite accessible via "php bin\console <options de commande>"
"php bin\console " sans arguments sert à lister les commande que l'on peut realiser sur le site (creer les bdd, les tables, ou commandes perso )

/!\ NE JAMAIS COMMITER LES DOSSIERS SUIVANT : <br/>
(supprimer les dossier avant de commit)
var/logs
var/cache
var/session 
<br/>

Tuto installation Symfony :<br/> 
-1 cloner le dépot git où vous voulez. <br/>
-2 Copier le dossier Prixy téléchargé. <br/>
-3 Déplacez le dans le dosssier de Wamp( théoriquement C:\wamp\apps\ ) <br/>
-4 Copiez le fichier "prixy.conf" présent à la racine de Prixy <br/>
-5 Revenez à la racine de wamp et accédez a wamp/alias<br/>
-6 Collez ici "prixy.conf" <br/>
-7 Dans le dossier de Prixy, faites clic-droit, et ouvrez un invite de commande, puis entrez deploy.bat  <br/>
-8 Enfin allez dans le panneau de configuration de windows > Système et sécurité > Système <br/>
-9 Ici dans le menu de gauche cliquez sur Propriétés Système > Variable d'environnement, trouvez "Path", cliquez sur "modifier", dans "Valeur de la variable" ajoutez ";C:\wamp\bin\php\php5.5.12" si wamp est sur l'emplacement par default, sinon indiquez l'emplacement <br/>