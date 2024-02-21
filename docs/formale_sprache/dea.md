# Formale Sprache

## Deterministische endliche Automaten

### Mealy-Automaten

Ein Mealy Automat ist ein endlicher Automat, der sich durch eine Besonderheit auszeichnet: Die Ausgaben sind nicht nur vom aktuellen Zustand abhängig, sondern auch vom aktuellen Eingabewert. Dies unterscheidet ihn von anderen Automatenarten, wie dem Moore-Automaten, bei dem die Ausgabe ausschließlich vom Zustand abhängig ist.

#### Formale Definition

$A=(Q,\Sigma,\Delta,\phi,z_0)$

- $Q$ Zustandsmenge
- $\Sigma$ Eingabealphabet
- $\Delta$ Ausgabealphabet
- $\phi: Q \times \Sigma \rightarrow Q \times \Delta$ Überführungs- und Ausgabefunktion
- $z_0$ Startzustand

Zustand | Eingabe | Nächster Zustand | Ausgabe
--------|---------|------------------|--------
\(q_0\)  |   '0'   |      \(q_0\)      |   '0'
\(q_0\)  |   '1'   |      \(q_1\)      |   '1'
\(q_1\)  |   '0'   |      \(q_1\)      |   '0'
\(q_1\)  |   '1'   |      \(q_0\)      |   '1'

