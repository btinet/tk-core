# Zahlendarstellungen

- Morris Mano, Ciletti: Digital Design
- Contemporary Logic Design (Katz)
- Logischer Entwurf digitaler Systeme (Hans Liebig)

## Gray Code 

Sicherheit und Zuverlässigkeit bei Überträgen in der
Digitaltechnik.

- Bildungsvorschrift

Es ändert sich immer nur ein Bit/eine Position

| Dezimalzahl | Gray-Code |
|-------------|-----------|
| $0_{10}$    | $000$     |
| $1_{10}$    | $001$     |
| $2_{10}$    | $011$     |
| $3_{10}$    | $010$     |

Entgegen der eigentlich üblichen Binär-Folge
darf sich beim Übergang nur ein BIt ändern.

- Rechts-Shift: Teilung durch 2
- Links-Shift: Multiplikation mit 2


- $A_1 = 5_{10} = 101$
- R-Shift: $A_2 = 010$
- $A_3 = A_1 \oplus A_2 = 111$