# Grundlagen

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

## Strukturen