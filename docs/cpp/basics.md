# C++ Grundlagen

Die Programmiersprache C++ gehört zu den etabliertesten Programmiersprachen in der
Industrie.

C++ wird als **ISO-Standard** entwickelt und seit 2011 erscheinen neue Versionen in einem
drei-jahres Rhythmus.

Der C++ Sprachumfang deckt eine breite Auswahl an **Abstraktionsmechanismen** ab:

- Imperative Programmierung
- objektorientierte Programmierung
- generische Programmierung
- Metaprogrammierung

Es gibt **keinen** singulären bzw. dominanten **Programmierstil** für C++.

Eines der wichtigsten Leitprinzipien: **zero cost abstractions**

Trotz vielfältiger **Abstraktionsmechanismen** sollen Programmierer_Innen immer einen **hohen Grad an
Kontrolle** über den resultierenden Maschinencode haben. Dieser hohe Grad an Kontrolle erfordert
eine **solide Vorstellung** davon, wie C++ Sprachelemente auf Maschinencode **abgebildet** werden.

Die **Verknüpfung** von Sprachelementen mit unserem **mentalen Rechnermodell** ist hierbei essenziell.

## Beispiel

````cpp
// test.cpp
#include<print>

int main()
{
    std::println("Hello HTW-Berlin!");
    return 0;
}
````

````shell
clang++ -std=c++23 -stdlib=libc++ -lc++ test.cpp
````