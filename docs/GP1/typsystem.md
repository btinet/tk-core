# Typsystem

Typen erlauben es uns, die **Struktur und das Verhalten einzelner
Programmelemente präzise zu beschreiben**. Wir ermöglichen es dem Compiler,
uns **frühzeitig über inkonsistenten oder fehlerhaften Programmcode zu
informieren**.

## Fundamentale Typen

- nullptr_t
- void
- int
- float
- bool
- char

## Zusammengesetzte Typen

- Referenztypen 
- Zeigertypen 
- Arraytypen 
- Funktionstypen
- Aufzählungstypen
- Klassen

## Qualifizierung von Typen

- const
- volatile

## Speicher

### Bitmuster anlegen

Ein Bitmuster vom Typ float wird im Heap-Segment des Arbeitsspeichers
angelegt, wenn der ``new``-Operator verwendet wird:

````cpp
float var = new float;
````

### Größe des Bitmusters

Wie groß das Bitmuster ist, hängt beim Typ "int" von der jeweiligen Plattform ab.
Man kann es also rein von diesem Ausdruck her nicht sagen.

Auch die Größe der Ganzzahl- und Fließkommazahl-Typen in C++ hängt von der
Zielplattform ab.

Die Bedeutung des Bitmusters hängt von seiner Größe ab.

vorzeichenlose 8-Bit Zahl (also einen Wertebereich von 0 bis 255) wird mit
uint8_t umgesetzt.

### Bitmuster analysieren

- Wie groß ist das Bitmuster der Variablen?
- Was bedeutet das Bitmuster der Variablen?
- Wo liegt das Bitmuster der Variablen?
- Wann existiert das Bitmuster der Variablen?