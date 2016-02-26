# Loginsystem
###################
Danke für den Download dieses simplen Loginsystems. Bevor sie es benutzen können, müssen sie aber sichergehen, dass sie
PHP Zugriff haben und sie eine MYSQL Datenbank besitzen. Wenn sie nicht im Besitz eines Servers sind, der diese Funktionen unterstützt installieren
sie es auf diesem oder installieren sie PHP mit dem Programm 'xammp' auf ihrem heimischen Computer und legen sie sich eine Datenbank an.
Des weiteren sollten sie PHP, Javascript und HTML Erfahrungen besitzen, denn sonst bringt ihnen dieses Paket nicht viel, da sie es nicht verstehen bzw.
benutzen können. 

#####

Inhalt des Loginsystems: login.html ; register.html ; connect.php ; logincheck.php ; checkname.php ; checkemail.php ; jquery.js

#WICHTIG

MYSQL EMPFEHLUNG: Ich rate dringend, in der Mysql Datenbank die folgenden Dinge zu übernehmen. 
                - TABELLENNAME "user"
                - SPALTE 1: "firstname"
                - SPALTE 2: "lastname"
                - SPALTE 3: "username"
                - SPALTE 4: "email"
                - SPALTE 5: "password"
Falls sie diese Dinge nicht in dieser Reihenfolge kann und wird es zu Fehlern kommen, wenn sie nicht in jeder PHP Datei die jeweiligen vars ändern.

#BEVOR BENUTZUNG:

Bevor sie die Websides benutzen können, müssen sie diese auf Ihre Ansprüche individualisieren. Das heisst, sie müssen oder können bei manchen vorgegebenen Variablen Werte einsetzten.
                
                |
                |
                |
                V


#LOGIN.HTML
login.html:6 - Hintergrundfarbe oder -bild festlegen.
login.html:93 - Link der Seite einfügen, auf die der Nutzer nach erfolgreichem Login geleitet werden soll.
login.html:94 & login.html:95 - Bei Aufrufen der login.html Seite angezeigter Text (Kann ausgestellt werden, indem sie die "function info()" löschen)

Bei der Login.html habe ich die Funktion, dass man sich nur mithilfe der Email Adresse einloggen kann unwirksam gemacht. Indem sie in login.html:103,131,136,159 und 167 die Kommentarzeichen entfernen,
können sie die funktion allerdings aktivieren.


#REGISTER.HTML
register.html:128 - Sie können die Anforderungen an das einzugebende Passwort ändern. Default : Pass muss mindestens 7 Zeichen lang sein, eine Zahl, einen Klein- und einen Großbuchstaben enthalten.
               |
                - pass.length>6 = Passwort länge 
                - pass.match(/\d{x,}/) - Mindestens x Zahlen
                - pass.match(/[a-z]{x,}/) - Mindestens x Kleinbuchstaben
                - pass.match(/[A-Z]{x,}/) - Mindestens x Großbuchstaben
    
    Durch löschen der jeweiligen Einträge oder ändern des x Wertes können sie die Stärke, die das Passwort haben muss, ändern.
register.html:138 - Hier können sie den Text ändern, der Ausgegeben wird, wenn das Passwort die Anforderungen nicht einhält. Bei löschen der Zeile wird keine Nachricht ausgegeben.
register.html:149 - Sie können hier die maximal Länge des Benutzernamens ändern. (Am besten abgestimmt auf die Länge des Varchars in ihrer MYSQL Datenbank)

#CONNECT.PHP
connect.php:3 - Ändern sie die Server Adresse, den Benutzernamen und das Passwort auf ihre Ansprüche
        - mysql_connect(server, username, passwort);
connect.php:4 - Ändern sie den Namen auf den Namen ihrer Datenbank


Nachdem sie diese Änderen vorgenommen haben, sollen die Seiten reibungslos funktionieren. 



BetterHTMLDev - 2016