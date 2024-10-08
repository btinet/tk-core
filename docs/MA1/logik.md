# Logik

## Einleitung

**Beispiele für logisch nachvollziehbare Sprache**:

Differenzierbare Funktion:
$f: [a,b] \to \mathbb{R}$

$m$ ist Teiler von $m$: $m|n$

Eine Aussage $A$ ist ein sprachliches Gebilde, welches einen der beiden Wahrheitswerte **wahr** ($W$) oder
**falsch** ($F$) hat.

## Symbole

| Zeichen                     | $\LaTeX$                | Name        | Bedeutung                     |
|-----------------------------|-------------------------|-------------|-------------------------------|
| $\land$                     | \land                   | Konjunktion | Und-Verknüpfung               |
| $\lor$                      | \lor                    | Disjunktion | Oder-Verknüpfung (inklusiv)   |
| $\veebar$ bzw. $\dot\lor$   | \veebar bzw. \dot\lor   | Disjunktion | Oder-Verknüpfung (exklusiv)   |
| $\lnot$ bzw. $\overline{A}$ | \lnot bzw. \overline{A} | Negation    | Verneinung                    |
| $\iff$                      | \iff                    | Äquivalenz  | Übereinstimmung               |
| $\implies$                  | \implies                | Implikation | hinreichende Schlussfolgerung |

### Wahrheitstabelle

| $A$ | $B$ | $\overline{A}$ | $A \land B$ | $A \lor B$ | $A \dot\lor B$ | $A \iff B$ | $A \implies B$ |
|-----|-----|----------------|-------------|------------|----------------|------------|----------------|
| $W$ | $W$ | $F$            | $F$         | $W$        | $F$            | $W$        | $W$            |
| $W$ | $F$ | $F$            | $F$         | $W$        | $W$            | $F$        | $F$            |
| $F$ | $W$ | $W$            | $F$         | $W$        | $W$            | $F$        | $W$            |
| $F$ | $F$ | $W$            | $F$         | $F$        | $F$            | $W$        | $W$            |

## Sprache

$A \iff B$ heißt: $A$ ist äquivalent zu $B$ bzw. $B$ ist äquivalent zu $A$

**Beispiel**

- $A$: $12$ ist positiv.
- $B$: $12 $ ist durch $4 $ teilbar.
- $12 $ ist positiv **genau dann, wenn** $12 $ durch $4 $ teilbar ist.

## Regeln

### Hierarchie

1. $\lnot A$ bzw. $\overline{A}$
2. $A \land B$
3. $A \lor B$

### Allgemein

$\overline{(\overline{A})} \iff A$

$A \lor A \iff A$

$A \land A \iff A$

$A \land B \iff B \land A$

$A \lor B \iff B \lor A$

$(A \lor B) \lor C \iff A \lor (B \lor C)$

$A \land (B \lor C) \iff (A \land B) \lor (A \land C)$

$A \lor (B \land C) \iff (A \lor B) \land (A \lor C)$

### Morgan'sche Regeln

$\overline{(A \lor B)} \iff \overline{A} \land \overline{B}$

$\overline{(A \land B)} \iff \overline{A} \lor \overline{B}$

$A \implies B \iff \overline{A} \lor B$

$\overline{(A \implies B)} \iff A \land \overline{B}$

$(A \iff B) \iff ((A \implies B) \land (B \implies A))$


### Kontraposition

$(A \implies B) \iff (\overline{B} \implies \overline{A})$

**Beispiel**: Wenn es regnet ($A$), ist die Straße nass ($B$).

## Aussageformen

Konstanten können durch Variablen ersetzt werden. Dann entsteht eine Aussageform. Werden Variablen
durch Konstanten ersetzt, entsteht eine Aussage, die wahr oder falsch ist.

**Beispiel:**

$A(x): x \geq 10$

$A(1): 1 \geq 10 \iff (F)$

### Quantoren

- **All-Aussage**: *Für alle $x$ gilt $A(x)$*
- **Existenz-Aussage**: *Es existiert ein $x$ mit $A(x)$* (mindestens ein)

### Negation von Quantoren

#### Negation der All-Aussage

Alle Schafe sind weiß: Für alle Schafe $x$ gilt, dass $x$ weiß ist:

$A(x): x$

1. Nicht alle Schafe sind weiß
2. Es existiert ein $x$, sodass $\overline{A(x)}$

#### Negation der Existenz-Aussage

Es existiert ein Schaf, das weiß ist.

Für ein $x$ gilt $A(x)$

1. Kein Schaf ist weiß
2. Für alle $x$ gilt $\overline{A(x)}$