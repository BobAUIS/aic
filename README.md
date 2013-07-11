Artificial Intelligence Challenge
===

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
