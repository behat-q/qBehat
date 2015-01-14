# qBehat
behat repo for workshop

Inainte de a incepe sa va asigurati ca aveti instalap php, java si git.

deschideti o consola, preferabil git bash
navigati in folderul clonat qBehat
executati comanda:

php composer.phar install


pentru a vedea daca a mers putem incerca:

bin/behat -di


pentru a executa un scenariu in browser avem nevoie de selenium server stand alone
descarcati selenium si pentru a porni serverul de sselenium din consola executati:

java -jar selenium-server-standalone-2.38.0.jar

daca vrem sa executam pe chrome avem nevoie de chrome driver pentru sistemul de operare pe care rulam
pentru a porni selenium sever cu chrome driver executati

java -jar selenium-server-standalone-2.38.0.jar -Dwebdriver.chrome.driver=chromedriver.exe