# Simple Query Language

![sql-logo](/docs/img/Sql_data_base_with_logo.png)

Live-Abfragen für einige Datenbanken können [hier getätigt werden](https://it.treptowkolleg.de/?page=docs-sql).

## Grundlagen

Um ein Gefühl für SQL zu bekommen, erstmal eine *Select-Query* üblichen Ausmaßes:
`````sql
SELECT person.name AS Name, election.label AS Wahl, COUNT(*) AS Stimmen
FROM person
    INNER JOIN election_result_person
        ON person.id = election_result_person.person_id
    INNER JOIN election_result_election
        ON election_result_person.election_result_id = election_result_election.election_result_id
    INNER JOIN election
        ON election_result_election.election_id = election.id
GROUP BY election_result_person.person_id;
`````

Die obige Abfrage ergibt folgendes Ergebnis (als Diagramm dargestellt):

![Diagramm](/docs/img/diagramm.jpg)

Unter manchen Konfigurationen gibt das obige Beispiel eine Fehlermeldung aus, da es
sich nicht um ein vollständig qualifiziertes ``GROUP BY`` handelt (ohne ``HAVING``). Die Konfiguration
kann folgendermaßen geändert werden:

````sql
mysql > SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));
````

Um diese Konfiguration auch nach einem Neustart des Datenbankservice zu behalten,
wird folgendes Kommando benötigt:

````sql
mysql > SET PERSIST sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));
````

## Normalformen

### 1. Normalform

<div class="p-notification--information">
    <div class="p-notification__content">
        <h5 class="p-notification__title">Definition</h5>
        <p class="p-notification__message">
            Eine Relation (Tabelle) ist in der ersten Normalform (1. NF), wenn die Werte der Attribute elementar (atomar) sind,
d.h. pro Datenfeld darf nur maximal ein Wert enthalten sein.
        </p>
    </div>
</div>

![1. Normalform](/docs/img/1nf.png)

Prüfung (**MNr**, Name, **PrüfFachNr**, PrüfFachBezeichung, ProfNr, ProfName, Note)

### 2. Normalform

<div class="p-notification--information">
    <div class="p-notification__content">
        <h5 class="p-notification__title">Definition</h5>
        <p class="p-notification__message">
            Eine Relation ist in der zweiten Normalform (2.NF), wenn sie sich in der 1.NF befindet und jedes nicht zum Primärschlüssel gehörige Attribut voll von diesem abhängig ist.
        </p>
    </div>
</div>

![2. Normalform](/docs/img/2nf.png)

Prüfung (**↑MNr**, **↑PrüfFachNr**, Note)

Studenten (**MNr**, Name)

Prüfungsfächer (**PrüfFachNr**, PrüfFachBezeichung, ProfNr, ProfName)

### 3. Normalform

<div class="p-notification--information">
    <div class="p-notification__content">
        <h5 class="p-notification__title">Definition</h5>
        <p class="p-notification__message">
            Eine Relation befindet sich dann in der dritten Normalform (3.NF), wenn sie sich in der 1.NF und in der 2.NF befindet und wenn alle Nichtschlüssel-Attribute ausschließlich vom Primärschlüssel funktional abhängig sind, und nicht transitiv über ein Nichtschlüssel-Attribut.
        </p>
    </div>
</div>

![3. Normalform](/docs/img/3nf.png)

Prüfung (**↑MNr**, **↑PrüfFachNr**, Note)

Studenten (**MNr**, Name)

Prüfungsfächer (**PrüfFachNr**, PrüfFachBezeichung, ↑ProfNr)

Prüfer (**ProfNr**, ProfName)