<?php

$tableCountry = [
    'Code',
    'Name',
    'Continent',
    'Region',
    'SurfaceArea',
    'IndepYear',
    'Population',
    'LifeExpectancy',
    'GNP',
    'GNPOld',
    'LocalName',
    'GovernmentForm',
    'HeadOfState',
    'Capital',
    'Code2'
];

?>

<div class="l-docs__title" id="main-content">
    <div class="p-section--shallow">
        <div class="row">
            <div class="col-12">
                <h1>SQL-Abfragen</h1>
            </div>
        </div>
    </div>
</div>

<div class="l-docs__meta" id="main-content">
    <div class="l-docs__sticky-container">
        <aside class="p-table-of-contents">
            <div class="p-table-of-contents__section p-strip is-shallow">
                <h2 class="p-table-of-contents__header">Auf dieser Seite</h2>
                <nav class="p-table-of-contents__nav" aria-label="Table of contents">
                    <ul class="p-table-of-contents__list" id="list">
                        <li class="p-table-of-contents__item"><a class="p-table-of-contents__link is-active" href="#link3">Datenbanken</a></li>
                        <li class="p-table-of-contents__item"><a class="p-table-of-contents__link" href="#formular">Abfrageformular</a></li>
                        <li class="p-table-of-contents__item"><a class="p-table-of-contents__link" href="#result">Ergebnistabelle</a></li>
                    </ul>
                </nav>
            </div>
        </aside>
    </div>
</div>

<main>

    <section class="p-section">
        <div class="row">
            <div class="col">
                <h2 id="link3">Datenbanken</h2>
                <p>
                    In diesem Beispiel können SQL-Abfragen über eine API an die angeschlossene Datenbank gestellt werden.
                    Als Rückmeldung erhält man ein Array, das in Tabellenform dargestellt wird.
                </p>
                <p>
                    Im Folgenden werden die verfügbaren Datenbanken beschrieben.
                </p>
                <h3>Schul-Datenbank</h3>
                <ul>
                    <li><a href="/docs/img/abitraining.pdf" target="_blank">Struktur</a> der Abitur-Training-Datenbank.</li>
                    <li><a href="/docs/img/abitrainingAufgaben.pdf" target="_blank">Aufgaben</a> zur Prüfungsvorbereitung.</li>
                    <li><a href="/docs/img/1_SQLAbiturvorbereitungLoesung.pdf" target="_blank">Lösungen</a> zu den Aufgaben.</li>
                </ul>
                <details>
                    <summary>ERM (Schule)</summary>
                    <img src="/docs/img/abitraining.png" alt="ERM Abitraining-Datenbank">
                </details>


                <h3>Wagner Pictures-Datenbank</h3>
                <ul>
                    <li><a href="/docs/img/tk04.pdf" target="_blank">Struktur</a> der Wagner Pictures-Datenbank.</li>
                </ul>
                <details>
                    <summary>ERM (Wagner Pictures)</summary>
                    <img src="/docs/img/wagner_erm.png" alt="ERM Wagner Pictures">
                </details>
            </div>
            <div class="col">
                <h2 id="formular">Formular</h2>
                <form method="post" action="#form" class="p-form p-form--stacked" id="form">
                    <div class="p-form__group row">
                        <div class="col-12">
                            <label for="db">Datenbank</label>
                            <select class="u-text-max-width" id="db" name="db" required>
                                <?php if(isset($_POST['db'])):?>
                                    <option value="">Datenbank wählen...</option>
                                    <option value="tk01" <?=$_POST['db'] == 'tk01' ? 'selected' : '' ?>>Schule</option>
                                    <option value="tk04" <?=$_POST['db'] == 'tk04' ? 'selected' : '' ?>>Wagner Pictures</option>
                                    <?php else: ?>
                                        <option value="">Datenbank wählen...</option>
                                        <option value="tk01">Schule</option>
                                        <option value="tk04">Wagner Pictures</option>

                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="p-form__group row">
                        <div class="col-12">
                            <label for="query">SQl-Query</label>
                            <textarea style="font-family: monospace" rows="8" class="u-text-max-width" id="query" name="query" required><?= trim($response['origin']['query'] ?? '') ?></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="p-button--positive" name="sql">SQL-Query ausführen</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col">
                <?php if (isset($message) and !empty($message)): ?>
                <?php $messages = explode(':',$message) ?>
                    <div class="p-notification--caution">
                        <div class="p-notification__content">
                            <h5 class="p-notification__title">Rückmeldung</h5>
                            <p class="p-notification__message">
                                <ul class="p-list">
                                    <?php foreach ($messages ?? [] as $item): ?>
                                         <li class="p-list__item"><?=$item?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col">
                <h2 id="result">Ergebnistabelle</h2>
                <table>
                    <thead>
                        <tr>
                        <?php foreach ($columns ?? [] as $column): ?>
                            <th><?=$column?></th>
                        <?php endforeach; ?>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($response['response'] ?? [] as $row): ?>
                        <tr>
                            <?php foreach ($row as $value): ?>
                                <td><?=$value?></td>
                            <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col">
                <pre>
                    <code class="language-sql"><?php print_r($response['query'] ?? '') ?></code>
                </pre>
            </div>
        </div>
    </section>

</main>