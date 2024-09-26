# Grundlagen

$\LaTeX$ eignet sich nicht nur für wissenschaftliche Arbeiten und
technische Dokumente, sondern auch hervorragend für Schüler und 
Schülerinnen, die Hausaufgaben und Arbeiten wie die 5. Prüfungskomponente 
im Abitur (z. B. Präsentationen oder Facharbeiten) schreiben müssen.
$\LaTeX$ bietet dabei zahlreiche Vorteile, die das Schreiben und 
Formatieren dieser Arbeiten erleichtern und die Ergebnisse professionell 
aussehen lassen.

## Was ist LaTeX

LaTeX ist ein textbasiertes Textsatzsystem, das vor allem dann nützlich ist, wenn man auf sauber formatierten Text, mathematische Formeln und ein klares Layout angewiesen ist. Es wird häufig in Wissenschaft und Technik eingesetzt, ist aber auch bei Schülern beliebt, die strukturiert und ordentlich arbeiten wollen.

Im Bereich **Software** ist beschrieben, wie du $\LaTeX$ installieren kannst.

## LaTeX im Schulalltag

### Hausaufgaben in Mathematik oder Naturwissenschaften

Wenn in Fächern wie Mathematik oder Physik Aufgaben mit komplizierten Formeln gestellt werden, bietet LaTeX eine übersichtliche und präzise Darstellung. Hier ein Beispiel einer mathematischen Formel, die in LaTeX einfach darstellbar ist:

$a^2 + b^2 = c^2$

Auch chemische Prozesse lassen sich darstellen: 

$$
\ce{Zn^2+  <=>[+ 2OH-][+ 2H+]
$\underset{\text{zinc hydroxide}}{\ce{Zn(OH)2 v}}$  <=>[+ 2OH-][+ 2H+]
$\underset{\text{tetrahydroxozincate(II)}}{\ce{[Zn(OH)4]^2-}}$}$$

Ein weiteres Beispiel einer Formel aus der Physik:

$$\int^1_\kappa \left[\bigl(1-w^2\bigr)\bigl(\kappa^2-w^2\bigr)\right]^{-1/2} dw = \frac{4}{\left(1+\sqrt{\kappa}\,\right)^2} K \left(\left(\frac{1-\sqrt{\kappa}}{1+\sqrt{\kappa}}\right)^{\!\!2}\right)$$

Dies ist besonders hilfreich für Hausaufgaben, bei denen Klarheit und Korrektheit der Formeln entscheidend sind.

### Arbeiten für die 5. Prüfungskomponente im Abitur

In der gymnasialen Oberstufe müssen viele Lernende eine Facharbeit oder eine Präsentation im Rahmen der 5. Prüfungskomponente anfertigen. Hier punktet $\LaTeX$ mit:

- **Strukturierter Gliederung**: $\LaTeX$ kann automatisch Inhaltsverzeichnisse, Abbildungsverzeichnisse und Literaturverzeichnisse erstellen, was für solche Projekte sehr nützlich ist.
- **Professionelle Formatierung**: Die Arbeit sieht von Anfang an professionell aus, da $\LaTeX$ standardmäßig auf hochwertigen Textsatz setzt und sich an typografische Regeln hält.
- **Einfaches Referenzieren**: Bei der Facharbeit müssen oft Quellen zitiert werden. Mit $\LaTeX$ und dem Tool BibTeX lässt sich das Literaturverzeichnis einfach verwalten. Zitate können im Text automatisch referenziert und in das Literaturverzeichnis übernommen werden.

### Projekte in Sprachen oder Gesellschaftsfächern

Auch wenn das Dokument keine mathematischen Formeln enthält, eignet sich $\LaTeX$ für Präsentationen oder Facharbeiten, z. B. in Geschichte, Deutsch oder Geografie, weil es den Fokus auf die Struktur und Klarheit des Textes legt. Es gibt viele Vorlagen, die perfekt auf den Schulalltag und solche Projekte zugeschnitten sind.

### Diagramme und Abbildungen

$\LaTeX$ kann leicht mit Bildern und Diagrammen umgehen, was besonders bei Präsentationen oder schriftlichen Arbeiten hilfreich ist, in denen visuelle Elemente benötigt werden.

## Vorteile von LaTeX für Lernende

- **Saubere Formatierung ohne großen Aufwand**: Lernende müssen sich nicht darum kümmern, Abstände, Überschriften oder Seitenzahlen manuell anzupassen – das übernimmt $\LaTeX$ automatisch.
- **Automatisierte Verzeichnisse**: $\LaTeX$ erstellt automatisch Inhalts-, Abbildungs- und Literaturverzeichnisse, was bei größeren Arbeiten wie der 5. Prüfungskomponente im Abitur eine enorme Zeitersparnis ist.
- **Klare Struktur**: Besonders bei Arbeiten, die einer festen Struktur folgen (Einleitung, Hauptteil, Fazit), kann $\LaTeX$ helfen, alles ordentlich zu gliedern.
- **Mathematische Genauigkeit**: Gerade für Lernende in naturwissenschaftlichen Leistungskursen (Mathematik, Physik, Chemie) ist die Darstellung von Formeln ein großer Vorteil. LaTeX stellt diese Formeln korrekt und optisch ansprechend dar.
- **Kostenlos und Plattformunabhängig**: $\LaTeX$ ist kostenlos und läuft auf nahezu allen Betriebssystemen, darunter Windows, macOS und Linux. Es gibt auch Online-Editoren wie Overleaf, die keine Installation erfordern und direkt im Browser genutzt werden können.

## Beispieldokument

Dokumentenvorlage mit folgenden Einstellungen:

- A4-Format
- Schriftgröße 11
- Ränder: links und oben 2,5 cm / rechts und unten 2 cm
- 1,5-facher Zeilenabstand
- kein Einzug am Absatzanfang
- neue deutsche Rechtschreibung
- deutsche Begriffe für Titel, Kapitel etc.

````tex
\documentclass[ngerman,11pt,a4paper]{article}
\usepackage[T1]{fontenc}
\usepackage[left=2.5cm, right=2cm, top=2.5cm, bottom=2cm]{geometry}
\usepackage[onehalfspacing]{setspace}
\renewcommand{\arraystretch}{1.5}
\setlength{\parindent}{0em}
\usepackage{babel}

\title{Titel}
\author{Autor}

\begin{document}

	
\end{document}
````

Der eigentliche Inhalt des Dokuments landet zwischen:

````tex
\begin{document}
    % Inhalt	
\end{document}
````

Man spricht hier davon der **document**-Umgebung. Es gibt noch weitere
Umgebungen. Etwa **Tabellen**-, **Bilder**- oder **Mathematik**-Umgebungen.

````tex
\documentclass[ngerman,11pt,a4paper]{article}
\usepackage[T1]{fontenc}
\usepackage[left=2.5cm, right=2cm, top=2.5cm, bottom=2cm]{geometry}
\usepackage[onehalfspacing]{setspace}
\renewcommand{\arraystretch}{1.5}
\setlength{\parindent}{0em}
\usepackage{babel}

\title{Titel}
\author{Autor}

\begin{document}
	\begin{math}
		f(x) = x^2 + 2x + 3
	\end{math}		
\end{document}
````

Das obige Beispiel ergibt: $ f(x) = x^2 + 2x + 3 $

LaTeX ist ein mächtiges Werkzeug für Schüler, die saubere und professionell formatierte Hausaufgaben, Präsentationen oder Facharbeiten schreiben möchten. Gerade bei komplexen Arbeiten wie der 5. Prüfungskomponente im Abitur kann LaTeX helfen, Struktur und Übersichtlichkeit zu bewahren. Obwohl der Einstieg eine kleine Lernkurve hat, zahlt sich der Aufwand durch die Qualität und Automatisierung der fertigen Dokumente aus. Es ist kostenlos, flexibel und eignet sich für nahezu jede Art von Textarbeit – egal ob Mathematik, Naturwissenschaften oder Geisteswissenschaften.