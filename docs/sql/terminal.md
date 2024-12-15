# Terminal-Übungen

Für diese Übung wird ein **MySQL**- oder **MariaDB**-Server benötigt.
Da **MariaDB**-Server auf nahezu jedem Webserver für private, aber auch kleine
und mittelständische Unternehmen installiert sind, werden wir ebenfalls diesen
Server verwenden.

**Fun-Fact:** Oracle DB ist aktuell auf Platz 1, gefolgt von MySQL. MariaDB liegt
immerhin auf Platz 15 (von ca. 400 Datenbank Engines).

## Installation

MariaDB-Server
````shell
choco install mariadb
````

PhpMyAdmin-Weboberfläche (optional)
````shell
choco install phpmyadmin
````

## Verwendung

Um Datenbanken zu managen, öffnen wir zuerst das Terminal und geben folgenden
Befehl ein:
````shell
mariadb -u root
````

- -u sagt, dass nicht der aktuelle Systembenutzer eingeloggt werden soll
- root ist der User, der stattdessen verwendet werden soll

Wir werden nach keinem Passwort gefragt, da ``root`` ohne Passwort eingerichtet
wurde. Für lokale Übungen reicht das auch so aus.

Hat alles geklappt, sollte nun folgende Maske zu sehen sein.

![Login](/docs/img/mariadb01.png)

## Kaufhausumsätze

Die Filialen einer Kaufhauskette haben dem Rechnungswesen ihre Umsätze übermittelt.
Die Daten sind nach folgendem Muster aufbereitet worden:

| Datum      | Standort  | Produkt     | Kategorie   | Einzelpreis (in Cents) | Anzahl | Art           |
|------------|-----------|-------------|-------------|------------------------|--------|---------------|
| 2024-02-15 | Berlin    | Plüschtier  | Kleinkinder | 599                    | 2      | PayPal        |
| 2024-03-10 | München   | Lego-Set    | Kinder      | 1999                   | 1      | Kreditkarte   |
| 2024-04-20 | Hamburg   | Brettspiel  | Familie     | 1499                   | 3      | Geschenkkarte |
| 2024-05-05 | Frankfurt | Actionfigur | Kreativität | 999                    | 4      | Bar           |
| 2024-06-12 | Köln      | Puzzle      | Bildung     | 799                    | 2      | EC-Karte      |

Da die Software-Lizenz für Excel leider abgelaufen ist, soll die Auswertung nun
mithilfe einer Datenbank erfolgen.

### Schema erstellen

Zuerst erstellen wir eine Datenbank (Schema), in der dann alle Kaufhaustabellen
angelegt werden.

````sql
create schema if not exists kaufhaus collate utf8mb4_general_ci;
````

Hat alles geklappt, wird uns das mit einem ``QUERY OK`` quittiert:

![Query OK](/docs/img/mariadbok.png)

### Schema auswählen

Da wir nun nur in der Datenbank **kaufhaus** arbeiten wollen, nutzen wir diese
mit dem Befehl:

````sql
use kaufhaus;
````

### Tabelle erstellen

**Frage**: Sollten wir jetzt einfach die obige Tabelle 1:1 übernehmen?

- Was spricht dafür?
- Was spricht dagegen?

<details> 
<summary>Hinweis</summary>
<p>Die Tabelle sollte nicht 1:1 übernommen werden, da es hier zu sogenannten Anomalien kommen kann. Zu Übungszwecken tun wir das aber trotzdem.</p>
</details>

````sql
CREATE TABLE IF NOT EXISTS umsatz
(
    datum DATE NOT NULL,
    standort VARCHAR(50) NOT NULL,
    produkt VARCHAR(255) NOT NULL,
    kategorie VARCHAR(50) NOT NULL,
    einzelpreis int NOT NULL,
    anzahl int NOT NULL,
    art VARCHAR(50) NOT NULL
)
````

### Daten importieren

Lade dir zunächst folgende Datei herunter: [umsatz.csv](/docs/img/umsatz.csv)

Diese Datei bzw. deren Datensätze wollen wir nun in unsere neue erstellte
Tabelle importieren. Dazu geben wir Folgendes in der Konsole ein:

````sql
LOAD DATA INFILE 'C:/Users/public/umsatz.csv'
INTO TABLE umsatz
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(datum, standort, produkt, kategorie, einzelpreis, anzahl, art);
````

### Abfrage

Wir wollen nun wissen, wie viel Umsatz die einzelnen Standorte gemacht haben und
wie viel Einkäufe (Anzahl Umsätze) getätigt wurden:

````sql
SELECT 
    standort,
    count(standort) AS "Anzahl Umsätze",
    FORMAT(sum(einzelpreis * anzahl/100),2,'de_DE') AS Umsatz
FROM umsatz
GROUP BY standort
ORDER BY standort
````

````text
+-------------+-----------------+-----------+
| standort    | Anzahl Umsätze  | Umsatz    |
+-------------+-----------------+-----------+
| Berlin      |              61 | 10.090,18 |
| Dresden     |              59 | 10.703,45 |
| Düsseldorf  |              38 | 5.544,81  |
| Frankfurt   |              37 | 5.232,58  |
| Hamburg     |              54 | 10.152,00 |
| Hannover    |              38 | 7.107,81  |
| Köln        |              52 | 6.870,07  |
| Leipzig     |              44 | 6.128,52  |
| München     |              57 | 9.813,95  |
| Stuttgart   |              59 | 10.802,26 |
+-------------+-----------------+-----------+
10 rows in set (0.001 sec)
````

## Beste Lösung

### Tabelle Standort
| Standort-ID | Standort   |
|-------------|------------|
| 1           | Berlin     |
| 2           | München    |
| 3           | Hamburg    |
| 4           | Frankfurt  |
| 5           | Köln       |


### Tabelle Kategorie
| Kategorie-ID | Kategorie     |
|--------------|---------------|
| 1            | Kleinkinder   |
| 2            | Kinder        |
| 3            | Familie       |
| 4            | Kreativität   |
| 5            | Bildung       |


### Tabelle Produkt
| Produkt-ID | Produkt      | Kategorie-ID | Einzelpreis (in Cents) |
|------------|--------------|--------------|------------------------|
| 1          | Plüschtier   | 1            | 599                    |
| 2          | Lego-Set     | 2            | 1999                   |
| 3          | Brettspiel   | 3            | 1499                   |
| 4          | Actionfigur  | 4            | 999                    |
| 5          | Puzzle       | 5            | 799                    |



### Tabelle Verkauf
| Verkauf-ID | Datum       | Standort-ID | Produkt-ID | Anzahl |
|------------|-------------|-------------|------------|--------|
| 1          | 2024-02-15 | 1           | 1          | 2      |
| 2          | 2024-03-10 | 2           | 2          | 1      |
| 3          | 2024-04-20 | 3           | 3          | 3      |
| 4          | 2024-05-05 | 4           | 4          | 4      |
| 5          | 2024-06-12 | 5           | 5          | 2      |
