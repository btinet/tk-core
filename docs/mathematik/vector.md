# Vektoren

## Was ist ein Vektor

Ein **Vektor** ist eine mathematische Größe, die durch zwei Merkmale beschrieben wird:

- **Betrag** (Länge oder Magnitude)
- **Richtung**

Man kann sich einen Vektor als einen Pfeil im dreidimensionalen Raum vorstellen, der eine bestimmte Länge und Richtung hat.

![vec_01.svg](/docs/img/vec_01.svg)

Ein Vektor im dreidimensionalen Raum wird üblicherweise durch seine Komponenten entlang der $ x $-, $ y $- und $ z $-Achse beschrieben. Zum Beispiel:

$$
\vec{v} = \begin{pmatrix} v_x \\\ v_y \\\ v_z \end{pmatrix}
$$

Hierbei sind $ v_x $, $ v_y $ und $ v_z $ die Komponenten des Vektors $ \vec{v} $ in den jeweiligen Richtungen.

## Addition von Vektoren

![vec_01.svg](/docs/img/vec_add.svg)

Die Addition von Vektoren erfolgt komponentenweise. Wenn wir zwei Vektoren $ \vec{a} $ und $ \vec{b} $ haben, die wie folgt definiert sind:

$$
\vec{a} = \begin{pmatrix} a_x \\\ a_y \\\ a_z \end{pmatrix}, \quad \vec{b} = \begin{pmatrix} b_x \\\ b_y \\\ b_z \end{pmatrix}
$$

Dann ist die Summe der Vektoren $ \vec{a} + \vec{b} $:

$$
\vec{a} + \vec{b} = \begin{pmatrix} a_x + b_x \\\ a_y + b_y \\\ a_z + b_z \end{pmatrix}
$$

## Skalarmultiplikation

![vec_01.svg](/docs/img/vec_scalar.svg)

Ein Vektor kann mit einem Skalar (einer reellen Zahl) multipliziert werden. Wenn $ c $ ein Skalar und $ \vec{v} $ ein Vektor ist, dann ist die Skalarmultiplikation:

$$
c \cdot \vec{v} = c \cdot \begin{pmatrix} v_x \\\ v_y \\\ v_z \end{pmatrix} = \begin{pmatrix} c \cdot v_x \\\ c \cdot v_y \\\ c \cdot v_z \end{pmatrix}
$$

## Betrag eines Vektors

![vec_01.svg](/docs/img/vec_amount.svg)

Der Betrag (oder die Länge) eines Vektors $ \vec{v} = \begin{pmatrix} v_x \\\ v_y \\\ v_z \end{pmatrix} $ im dreidimensionalen Raum ist durch den Satz des Pythagoras gegeben:

$$
|\vec{v}| = \sqrt{v_x^2 + v_y^2 + v_z^2}
$$

## Skalarprodukt

![vec_01.svg](/docs/img/vec_product.svg)

Das **Skalarprodukt** (oder **innere Produkt**) von zwei Vektoren $ \vec{a} $ und $ \vec{b} $ im dreidimensionalen Raum ist eine reelle Zahl und wird wie folgt berechnet:

$$
\vec{a} \cdot \vec{b} = a_x \cdot b_x + a_y \cdot b_y + a_z \cdot b_z
$$

Das Skalarprodukt ist nützlich, um den Winkel zwischen zwei Vektoren zu berechnen.

## Winkel zwischen Vektoren

Der Winkel $ \theta $ zwischen zwei Vektoren $ \vec{a} $ und $ \vec{b} $ kann über das Skalarprodukt bestimmt werden:

$$
\cos(\theta) = \frac{\vec{a} \cdot \vec{b}}{|\vec{a}| \cdot |\vec{b}|}
$$

## Kreuzprodukt

![vec_01.svg](/docs/img/vec_cross.svg)

Das **Kreuzprodukt** von zwei Vektoren $ \vec{a} $ und $ \vec{b} $ ist ein Vektor, der senkrecht zu beiden Ausgangsvektoren steht. Das Kreuzprodukt wird wie folgt berechnet:

$$
\vec{a} \times \vec{b} = \begin{pmatrix} a_y b_z - a_z b_y \\\ a_z b_x - a_x b_z \\\ a_x b_y - a_y b_x \end{pmatrix}
$$

Das Kreuzprodukt ist besonders nützlich in der Physik und Geometrie, um Flächen- und Volumenberechnungen durchzuführen.

## Fläche berechnen

![vec_01.svg](/docs/img/vec_area.svg)

### Schritt 1: Definition der Vektoren

Die Vektoren $ \vec{a} $ und $ \vec{b} $ seien definiert als:

$$
\vec{a} =
\begin{pmatrix}
a_1 \\\
a_2 \\\
a_3
\end{pmatrix}, \quad
\vec{b} =
\begin{pmatrix}
b_1 \\\
b_2 \\\
b_3
\end{pmatrix}
$$

### Schritt 2: Berechnung des Kreuzprodukts

Das Kreuzprodukt $ \vec{a} \times \vec{b} $ ist gegeben durch:

$$
\vec{a} \times \vec{b} =
\begin{pmatrix}
a_2 b_3 - a_3 b_2 \\\
a_3 b_1 - a_1 b_3 \\\
a_1 b_2 - a_2 b_1
\end{pmatrix}
$$

### Schritt 3: Betrag des Kreuzprodukts

Der Betrag des Kreuzprodukts, der die Fläche des Parallelogramms darstellt, wird berechnet als:

$$
A = |\vec{a} \times \vec{b}| = \sqrt{(a_2 b_3 - a_3 b_2)^2 + (a_3 b_1 - a_1 b_3)^2 + (a_1 b_2 - a_2 b_1)^2}
$$

### Schritt 4: Fläche des Parallelogramms

Somit ist die Fläche $ A $ des Parallelogramms gegeben durch:

$$
A = |\vec{a} \times \vec{b}|
$$

Das bedeutet, dass die Fläche des Parallelogramms gleich dem Betrag des Kreuzprodukts der beiden Vektoren ist.

### Dreieck

Um die Fläche $ A_D $ eines beliebigen Dreiecks, das von den Vektoren $ \vec{a} $ und $ \vec{b} $ aufgespannt wird, zu berechnen, wird folgende Formel verwendet:

$$
A_D = \frac{1}{2} |\vec{a} \times \vec{b}|
$$

# Zusammenfassung

- Vektoren im dreidimensionalen Raum haben drei Komponenten: $ x $-, $ y $- und $ z $-Richtung.
- Vektoren können addiert und mit einem Skalar multipliziert werden.
- Der Betrag eines Vektors gibt seine Länge an.
- Das Skalarprodukt hilft dabei, den Winkel zwischen Vektoren zu berechnen.
- Das Kreuzprodukt erzeugt einen neuen Vektor, der senkrecht zu zwei gegebenen Vektoren steht.
