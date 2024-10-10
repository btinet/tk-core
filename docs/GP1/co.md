# Rechnerorganisation

## Einleitung

>It ain’t what you don’t know that gets you into trouble.
>It’s what you know for sure that just ain’t so.

**Implizite Annahmen** sind eine der häufigsten Fehlerursachen in Programmen.

````php
<?php

function summe($a, $b): void
{
    echo $a + $b;
}
````

Das obige Beispiel addiert zwei Variablen und gibt das Ergebnis aus. Der Programmierer nimmt an,
dass nur Variablen vom Typ ``int`` als Parameter übergeben werden. Jedoch wird das im Quellcode
nicht überprüft, was zu Fehlern führen kann. Besser geht das so:

````php
<?php

function summe(int $a, int $b): void
{
    echo $a + $b;
}
````

## Abstraktion

Die Verwendung von Abstraktionen ist das wichtigste Werkzeug in der Programmierung,
um die Komplexität von Software zu managen.

**Beispiele für Abstraktionen ausgehend von Maschinencode**:

- Assembler
- Imperative Programmierung
- Objektorientierte Programmierung
- Generische Programmierung
- Metaprogrammierung

## Abstraktes Rechnermodell

![img.png](/docs/img/abstract-computer.png)

### Arbeitsspeicher

- Ein Arbeitsspeicher besteht aus einer Folge von Speicherzellen
- Jede Speicherzelle hat eine Adresse
- Jede Speicherzelle kann eine Anzahl an Bits speichern, typischerweise $8 \text{Bits} = 1 \text{Byte}$.

![img.png](/docs/img/img_1.png)

### Prozessor

- Ein Prozessor hat eine begrenzte Anzahl an **Registern**
- Ein Prozessor hat eine arithmetisch-logische Einheit
  (**ALU**), die arithmetische und logische Operationen auf
  den Registern ausführen kann.
- Ein Prozessor hat ein **Steuerwerk**, welches die ALU
  steuert und mit dem Arbeitsspeicher kommunizieren
  kann.

![img.png](/docs/img/img_2.png)

#### Prozessablauf

<div class="row--25-25-25-25">
<div class="col">
<img src="/docs/img/img_4.png" alt="cpu-2">
</div>
<div class="col">
<img src="/docs/img/img_5.png" alt="cpu-3">
</div>
<div class="col">
<img src="/docs/img/img_6.png" alt="cpu-4">
</div>
<div class="col">
<img src="/docs/img/img_7.png" alt="cpu-5">
</div>
</div>

1. Das Steuerwerk nutzt ein Register als **instruction pointer (IP)** bzw. **program counter (PC)**.
2. **Fetch**: Das Steuerwerk lädt den Inhalt der Speicherzelle, auf dessen Adresse der IP zeigt.
3. **Decode**: Das Steuerwerk konfiguriert die ALU gemäß dem geladenen Bitmuster.
4. **Execute**: Die ALU tut das, wozu sie konfiguriert wurde. Anschließend wird der nächste Fetch ausgeführt.

