# Control Flow

Um den Systemzustand während eines Funktionsaufrufs konsistent zu halten, legt der Compiler eine Reihe von Daten im Arbeitsspeicher ab.

Welche Daten werden abgelegt?

- Processor State
- Rücksprungadresse 
- Funktionsparameter
- Lokale Variablen der Funktion

Lokale Variablen der Funktion

## Schleifen

Der Programmcode der aller Schleifenvarianten liegt in einem eigenen Scope.

## Arten der Programmflusssteuerung

- Nicht-lokale Sprünge → sehr problematisch
- Lokale Sprünge nach vorne im Programmfluss → tendentiell problematisch 
- Bedingte Verzweigungen → überwiegend unkritisch 
- Lokale Rücksprünge → relativ unproblematisch