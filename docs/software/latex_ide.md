# Entwicklungsumgebung für $\LaTeX$

## Chocolatey

*Überspringe diesen Schritt, falls du bereits Chocolatey installiert hast.*

Für die Installation erforderlicher Software für die $\LaTeX$-Entwicklung, aber auch für andere
Programmiersprachen, benötigen wir einen Softwarepaketmanager. Ein einfacher Paketmanager
**Chocolatey**.

Öffne die Windows Powershell mit Administratorrechten und gib folgenden Befehl ein:

````shell
Get-ExecutionPolicy
````

Sollte ''Restricted'' zurückgegeben werden, führe
````shell
Set-ExecutionPolicy AllSigned
````
oder
````shell
Set-ExecutionPolicy Bypass -Scope Process
````
aus.

Installiere abschließend **Chocolatey** mit:

````shell
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://community.chocolatey.org/install.ps1'))
````

Wenn alles geklappt hat, kannst du mit dem Befehl ``choco -?`` überprüfen, ob **Chocolatey** nun verfügbar ist.

Sollte beim späteren Ausführen eine Fehlermeldung ausgegeben werden
wie ``xxx.ps1 cannot be loaded because the execution of scripts is disabled on this system``
sollten die Sicherheitsrichtlinien für externe Quellen angepasst werden:

````shell
Set-ExecutionPolicy -ExecutionPolicy RemoteSigned -Scope LocalMachine
````

Danach sollte das Ausführen funktionieren.

## Compiler

Lade das $\LaTeX$-Paket von [https://miktex.org/download](https://miktex.org/download) herunter.
Für die vollständige Installation empfehle ich den Net-Installer. Alternativ kannst du
aber auch mit dem Basic-Installer starten.

Alternativ geht das auch über choco:

````shell
choco install miktex.install --params '"/Set:complete"'
````

## Texstudio

Zum Erstellen von $\LaTeX$-Dokumenten würde theoretisch ein einfacher Texteditor
ausreichen. Doch was für PHP gilt, lässt sich auch hier anwenden. Eine IDE vereinfacht
erheblich deinen Arbeitsprozess. Obwohl es zahlreiche IDEs für $\LaTeX$ gibt, hat
mich persönlich das **Texstudio** überzeugt. Installiere es mit:

````shell
choco install texstudio
````

Und schon kannst du loslegen und beeindruckende Dokumente erstellen.