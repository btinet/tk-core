# Fälle

## Beispiel

$$
A(m, n) =
\begin{cases}
n + 1 & \text{wenn } m = 0 \\\
A(m-1, 1) & \text{wenn } m > 0 \text{ und } n = 0 \\\
A(m-1, A(m, n-1)) & \text{wenn } m > 0 \text{ und } n > 0 \\\
\end{cases}
$$