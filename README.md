# Partiel_Users

Se sont les methode GET et POST

include: renvoie un warning et continue le script
require: renvoie un fatal error et stop le script
include_once / require_once: ils inclue le fichier seulement si il n'a pas deja ete utilisé. 
				Renvoie les meme erreurs que precedement.
C'est la fonction session_start()
DSN: Data Source Name , il est utilisé pour se connecter à la base de données
preparer ses requete nous permet de ne pas etre faillible a l'injection dans un input
La methode POST permet de recuperer les données d'un formulaire rempli
La methode GET permet l'envoie d'information par l'URL
