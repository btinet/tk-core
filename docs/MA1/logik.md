# Logik

## Einleitung
Differenzierbare Funktion:
$f: [a,b] \to \mathbb{R}$

$m$ ist Teiler von $m$: $m|n$

Eine Aussage $A$ ist ein sprachliches Gebilde, welches einen der beiden Wahrheitswerte **wahr** ($W$) oder
**falsch** ($F$) hat.

## Symbole

| Zeichen                     | $\LaTeX$ | Name        | Bedeutung                     |
|-----------------------------|----------|-------------|-------------------------------|
| $\land$                     | \land    | Konjunktion | Und-Verknüpfung               |
| $\lor$                      | \lor     | Disjunktion | Oder-Verknüpfung (inklusiv)   |
| $\veebar$                   | \veebar  | Disjunktion | Oder-Verknüpfung (exklusiv)   |
| $\lnot$ oder $\overline{A}$ | \lnot    | Negation    | Verneinung                    |
| $\iff$                      | \iff     | Äquivalenz  | Übereinstimmung               |
| $\implies$                  | \implies | Implikation | hinreichende Schlussfolgerung |

### Wahrheitstabelle

| $A$ | $B$ | $\lnot A$ | $A \land B$ | $A \lor B$ | $A \veebar B$ | $A \iff B$ | $A \implies B$ |
|-----|-----|-----------|-------------|------------|---------------|------------|----------------|
| $w$ | $w$ | $f$       | $w$         | $w$        | $f$           | $w$        | $w$            |
| $w$ | $f$ | $f$       | $f$         | $w$        | $w$           | $f$        | $f$            |
| $f$ | $w$ | $w$       | $f$         | $w$        | $w$           | $f$        | $w$            |
| $f$ | $f$ | $w$       | $f$         | $f$        | $f$           | $w$        | $w$            |

## Sprache

$A \iff B$ heißt:

**Beispiel**: 12 ist positiv **genau dann, wenn** 12 durch 4 teilbar ist.

## Regeln

### Hierarchie

1. $\lnot$
2. $\land$
3. $\lor$

### Kontraposition

$(A \implies B) \iff (\overline{B} \implies \overline{A})$

**Beispiel**: Wenn es regnet ($A$), ist die Straße nass ($B$).

### Allgemein

$\lnot(\lnot A) \iff A$

$A \lor A \iff A$

$A \land A \iff A$

$A \land B \iff B \land A$

$A \lor B \iff B \lor A$

$(A \lor B) \lor C \iff A \lor (B \lor C)$

$A \land (B \lor C) \iff (A \land B) \lor (A \land C)$

$A \lor (B \land C) \iff (A \lor B) \land (A \lor C)$

### Morgan'sche Regeln

## Aussageformen

Konstanten können durch Variablen ersetzt werden. Dann entsteht eine Aussageform. Werden Variablen
durch Konstanten ersetzt, entsteht eine Aussage, die wahr oder falsch ist.

**Beispiele:**

$A(x): x \leq 10\$

$A(1): 1 \leq 10 \iff (F)$

### Quantoren

- **All-Aussage**: *Für alle $x$ gilt $A(x)$*
- **Existenz-Aussage**: *Es existiert ein $x$ mit $A(x)$* (mindestens ein)