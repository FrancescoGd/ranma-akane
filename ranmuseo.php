<?php
$_PAGE_TITLE = 'Il RanMuseo,';
require_once '_header.php';
?>
            <p>Il <strong>RanMuseo</strong> (nome poco fantasioso
            nato ovviamente come <em>portmanteau</em> delle parole <em>Ranma</em>
            e <em>Museo</em>) non è altro che il luogo dove tenterò
            di raccogliere, documentare e catalogare il materiale
            in mio possesso riguardante l'Opera, siano essi
            fumetti, anime, cd, libri, gadget, videogiochi e così
            via.</p>

            <p>Ci tengo <strong>a sottolineare</strong> che comunque questo non è
            un compendio per catalogare tutto ciò che è uscito: sia
            perché purtroppo non possiedo tutto sia perché questo
            compito eventualmente è di pertinenza delle altre
            sezioni di questo ed altri siti (e comunque, negli anni, ho capito che sarebbe
            materialmente impossibile perché nei decenni è uscito veramente di tutto) ma più semplicemente
            cataloga le cose possedute da me. <strong>Tutto quello
            che finirà qua dentro, lo possiedo realmente</strong>
            (anche se per il momento non è molto perché ci vuole il
            tempo di fare foto/scan e ho un archivio abbastanza vasto ^_^;).</p>

            <p>La suddivisione delle categorie non è detto che
            rimanga sempre questa, comunque per il momento eccola.
            La sezione "Altro" contiene tutto ciò che al momento
            dell'inserimento non sapevo bene dove mettere e che
            eventualmente in futuro sposterò.</p>

            <p class="highlight_section">
              <strong>Nota sulle Immagini del RanMuseo:</strong> scannerizzare, fotografare e documentare le immagini per il
              RanMuseo è un lavoro abbastanza lungo e laborioso, come detto sopra <strong>ricordo infatti che sono tutte immagini
              originali di materiale in mio possesso (ne ho molto 😅), e non cose prese a caso dalla rete</strong>.<br>
              Per questo motivo ho deciso di rilasciarle con una licenza abbastanza permissiva che consente
              di utilizzarle liberamente (eventualmente è gradita notifica del loro utilizzo).<br>
              Al netto della parte concernente il mio lavoro di catalogazione ed archiviazione, ricordo sempre che, invece,
              i personaggi ritratti sono soggetti al copyright degli autori originali (Rumiko Takahashi, Shogakukan, Kitty Film e Ranma ½ Project)<br>
              <span class="pt-2" xmlns:cc="http://creativecommons.org/ns#" >This work by <a rel="cc:attributionURL dct:creator" property="cc:attributionName" href="https://ranma.furinkan.org">Nibunnoichi</a> is licensed under <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/?ref=chooser-v1" target="_blank" rel="license noopener noreferrer" style="display:inline-block;">CC BY-NC-SA 4.0<img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1" alt=""><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1" alt=""><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1" alt=""><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/sa.svg?ref=chooser-v1" alt=""></a></span>
            </p>

            <h2 id="RanMuseo">RanMuseo</h2>
            <p class="text-center small text-secondary">(le immagini presenti nelle varie sezioni sono
            ingrandibili cliccando sulle anteprime)</p>

            <p class="lead text-center">Oggetti Presenti nel RanMuseo: <span class="badge text-bg-success">
              <?php
                $files = glob('resources/ranmuseo/thumbnails/th_*.*');
                echo count(array_filter($files, function($value) { if (!in_array(substr($value, -6, 2), ['-b', '-c', '-d', '-e'])) { return $value; } }));
              ?>
            </span></p>

            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4">
                  <h5 class="text-center">Materiale Cartaceo</h5>
                  <ul>
                    <li>
                      <a href="ranmuseo_rivistasettimanale.php">Manga su rivista settimanale</a>
                    </li>
                    <li>Manga edizioni giapponesi</li>
                    <li>Manga edizioni italiane</li>
                    <li>
                      <a href="ranmuseo_mangaesteri.php">Manga edizioni altri paesi (USA, ecc.)</a>
                    </li>
                    <li>
                      <a href="ranmuseo_animecomics.php">Anime comics</a>
                    </li>
                    <li>
                      <a href="ranmuseo_libri.php">Libri</a>
                    </li>
                    <li>
                      <a href="ranmuseo_videogamesguides.php">Guide videogiochi</a>
                    </li>
                    <li>
                      <a href="ranmuseo_movement.php">ムーヴメント - Movement</a>
                    </li>
                    <li>Fanzines italiane</li>
                    <li>Fanzines altri paesi (USA, ecc.)</li>
                    <li>Calendari</li>
                    <li>
                      <a href="ranmuseo_cartoline.php">Cartoline</a>
                    </li>
                    <li>
                      Altre pubblicazioni
                    </li>
                  </ul>
                </div>

                <div class="col-md-4">
                  <h5 class="text-center">Materiale Video</h5>
                  <ul>
                    <li>
                      <a href="ranmuseo_vhs_jp.php">VHS edizioni giapponesi</a>
                    </li>
                    <li>
                      VHS edizioni italiane
                    </li>
                    <li>
                      <a href="ranmuseo_vhs_other.php">VHS edizioni altri paesi (USA, ecc.)</a>
                    </li>
                    <li>DVD</li>
                    <li>LaserDisc</li>
                  </ul>
                </div>

                <div class="col-md-4">
                  <h5 class="text-center">Materiale Audio</h5>
                  <ul>
                    <li>CD</li>
                    <li>Musicassette</li>
                    <li>
                      <a href="ranmuseo_vinili.php">Vinili</a>
                    </li>
                  </ul>
                </div>

                <div class="col-md-4">
                <h5 class="text-center">Materiale Ludico</h5>
                <ul>
                    <li>Videogiochi</li>
                    <li>Carte da gioco</li>
                    <li>Giochi da tavolo</li>
                  </ul>
                </div>

                <div class="col-md-4">
                  <h5 class="text-center">Materiale Vario</h5>
                  <ul>
                    <li>Cel</li>
                    <li>Gashapon / Figures</li>
                    <li>Diorama</li>
                    <li>
                      <a href="ranmuseo_cancelleria.php">Cancelleria</a>
                    </li>
                    <li>
                      <a href="ranmuseo_shitajiki.php">Shitajiki</a>
                    </li>
                    <li>Wallscroll</li>
                    <li>Noren</li>
                    <li>
                      <a href="ranmuseo_ventagli.php">Ventagli</a>
                    </li>
                    <li>
                      <a href="ranmuseo_varie.php">Varie / non classificate</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
<?php require_once '_footer.php'; ?>