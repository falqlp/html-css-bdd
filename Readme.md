
https://github.com/falqlp/html-css-bdd/assets/136916564/8b50fce5-29ae-4dbe-81b2-62b3a536b529

Pour exécuter le projet en local, il faut :
    ●	Télécharger le serveur web local Wamp (lien disponible https://www.wampserver.com/en/download-wampserver-64bits/).
    ●	Installer Wamp.
    ●	Lancer le serveur Wamp
    ●	Copier/cloner le dépôt (dossier) de notre projet (sous le nom “html-css-bdd”) dans le dossier “C:\wamp64\www”.

Pour ce faire, réaliser les manipulations suivantes :
    -	Ouvrez l’invite de commandes ou PowerShell en appuyant sur la touche Windows + R, en tapant "cmd" ou "powershell" dans la boîte de dialogue, puis en appuyant sur Enter.
    -	Exécuter à tour de rôles les lignes de commandes suivantes :
        ●	Pour s’assurer d’être dans le bon dic : “C:”
        ●	Pour accéder dans le bon répertoire : “cd C:\wamp64\www”
        ●	Pour cloner le projet : “git clone https://github.com/falqlp/html-css-bdd.git”
        ●	Pour accéder au répertoire cloné : “cd html-css-bdd”
        ●	Si le serveur de base de données MariaDB n’est pas installé sur votre local, vous pouvez installer docker est exécuter le fichier docker-compose avec la ligne de commande “docker compose up --build”. Il faut pour cela que le port 3306 soit disponible.
        ●	Exécuter le script de création de la base de données disponible dans le fichier “objects.txt“
        ●	Lancer dans le navigateur de votre choix le lien “localhost/html-css-bdd“

