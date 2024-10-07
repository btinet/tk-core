# Logik

## Symbole

| Zeichen    | $\LaTeX$ | Name        | Bedeutung                     |
|------------|----------|-------------|-------------------------------|
| $\land$    | \land    | Konjunktion | Und-Verknüpfung               |
| $\lor$     | \lor     | Disjunktion | Oder-Verknüpfung (inklusiv)   |
| $\veebar$  | \veebar  | Disjunktion | Oder-Verknüpfung (exklusiv)   |
| $\lnot$    | \lnot    | Negation    | Verneinung                    |
| $\iff$     | \iff     | Äquivalenz  | Übereinstimmung               |
| $\implies$ | \implies | Implikation | hinreichende Schlussfolgerung |

### Wahrheitstabelle

| $A$ | $B$ | $\lnot A$ | $A \land B$ | $A \lor B$ | $A \veebar B$ | $A \iff B$ | $A \implies B$ |
|-----|-----|-----------|-------------|------------|---------------|------------|----------------|
| $w$ | $w$ | $f$       | $w$         | $w$        | $f$           | $w$        | $w$            |
| $w$ | $f$ | $f$       | $f$         | $w$        | $w$           | $f$        | $f$            |
| $f$ | $w$ | $w$       | $f$         | $w$        | $w$           | $f$        | $w$            |
| $f$ | $f$ | $w$       | $f$         | $f$        | $f$           | $w$        | $w$            |

## Regeln

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