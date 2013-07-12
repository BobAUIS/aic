Artificial Intelligence Challenge
===

## Les commandes de base

Avant toute chose, il faut le client git. Un petit `apt-get install git`
en root suffit.

* `git clone git@github.com:<USER>/<REPO>.git` va copier les fichiers du
  dépôt dans un répertoire portant le nom du dépôt ;
* `git add/rm <FICHIER>` va ajouter (ou supprimer) le fichier précisé de
  l'arborescence du dépôt ;
* `git commit` va ouvrir un éditeur de texte (pour le message de commit)
  puis commiter les changements ;
* `git push <REMOTE> <BRANCH>` va envoyer les commits sur le dépôt
  central. En gros, les commits restent locaux tant qu'on a pas fait un
  `git push` ;
* `git pull` va récupérer la dernière version du dépôt et la fusionner
  avec la copie locale.

Quelques autres commandes utiles :

* `git log`, pour afficher la liste chronologique des changements, avec
  l'auteur et le message de commit ;
* `git status` affiche l'état de la copie locale du dépôt. On y voit les
  changements non commités, les fichiers en staging (pas encore rajoutés
  avec `git add`), les iformations sur la branche courante...
* `git branch -l` permet de manipuler les branches du projet;
* `git checkout` permet soit de récupérer la version du dépôt d'un
  fichier (`git checkout <FICHiER>`) soit de changer de branche (`git
  checkout <BRANCHE>`)

En cas de doute, `git help <COMMANDE>` ou `man git` pour la liste des
commandes.

## Quelques bonnes pratiques

* Ne jamais faire de `git push` directement sur la branche master. Il
  vaut mieux faire une branche distincte pour chaque chamngement. Par
  exemple : `git checkout -b interface-administrateur` ;
* Toujours mettre un message de commit résumant les modifications
  effectuées ;
* Séparer au maximum les commits.

## Comment contribuer

1. Fork le projet
2. Créer une nouvelle branche (`git checkout -b ma-branche`)
3. Commit les changements (`git commit -am 'Message de commit'`)
4. Push les commits sur la branche crée précédemment (`git push origin
   ma-branche`)
5. Faire une pull request via l'interface web de github

## Configurer son client

Sous linux, modifier le fichier `~/.gitconfig`. Voici le mien, avec
quelques alias utiles :

```
[user]
name = Julien Gamba
email = jgamba@aius.u-strasbg.fr
[credential]
helper = cache
[core]
editor = vim
[alias]
l = log --graph --pretty=format:'%Cred%h%Creset -%C(yellow)%d%Creset %s %Cgreen(%cr) %C(bold blue)<%an>%Creset' --abbrev-commit --date=relative
st = status
co = checkout
diff = diff --color
[color]
diff = always
```
