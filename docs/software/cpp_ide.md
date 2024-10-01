# Entwicklungsumgebung für C++

## Paketmanager

### Windows

#### Chocolatey

*Überspringe diesen Schritt, falls du bereits Chocolatey installiert hast.*

Für die Installation erforderlicher Software für die Java-Entwicklung, aber auch für andere
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

### Windows

### Ubuntu und Debian

## Entwicklungsumgebung

### Windows

### Ubuntu und Debian