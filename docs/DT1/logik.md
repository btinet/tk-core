# Logik 
Digitaltechnik

## Operatoren

| Mathematisch                            | Technisch                                | Name         | Bedeutung                   |
|-----------------------------------------|------------------------------------------|--------------|-----------------------------|
| $\land$                                 | ![img](/docs/img/IEC_AND_label.svg.png)  | Konjunktion  | Und-Verknüpfung             |
| $\lor$                                  | ![img](/docs/img/IEC_OR_label.svg.png)   | Disjunktion  | Oder-Verknüpfung (inklusiv) |
| $\veebar$ bzw. $\dot\lor$ bzw. $\oplus$ | ![img](/docs/img/IEC_XOR_label.svg.png)  | Disjunktion  | Oder-Verknüpfung (exklusiv) |
| $\overline\land$                        | ![img](/docs/img/IEC_NAND_label.svg.png) | Konjunktion  | Nicht-Und-Verknüpfung       |

### Wahrheitstabelle

| $A$ | $B$ | $A \land B$ | $A \lor B$ | $A \oplus B$ | $A \overline\land B$ |
|-----|-----|-------------|------------|--------------|----------------------|
| $W$ | $W$ | $W$         | $W$        | $F$          | $F$                  |
| $W$ | $F$ | $F$         | $W$        | $W$          | $F$                  |
| $F$ | $W$ | $F$         | $W$        | $W$          | $F$                  |
| $F$ | $F$ | $F$         | $F$        | $F$          | $W$                  |

## Funktionen

\begin{flalign}
Y &= (\overline{X1} \land X2) \lor (X1 \land \overline{X2} ) & \\\
\end{flalign}

## Algebra

## Vollständige Systeme

## Karnaugh-Veitch-Diagramme

## Disjunktive Normalform

## Kanonische DNF
