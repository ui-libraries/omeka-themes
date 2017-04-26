<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <?php if ( $description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <?php endif; ?>
    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <!-- Plugin Stuff -->
    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>

    <!-- Stylesheets -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <?php
    queue_css_file(array('style'));
    echo head_css();
    queue_js_file(array('main.min'));
    echo head_js();
    ?>


</head>

<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>

        <header class="header">
        <div class="container">
            <a href="<?php echo WEB_ROOT; ?>" class="logo" title="DADA">DADA</a>
            <nav class="menu">
                <div class="trigger"><span></span><span></span><span></span></div>
                <ul class="main-nav">
                    <li><a href="#" class="call-sub">DIGITAL DADA LIBRARY</a></li>
                    <li><a class="sub-scroll" href="<?php echo WEB_ROOT; ?>#BIBLIOGRAPHY">BIBLIOGRAPHY/CATALOG</a></li>
                    <li><a class="sub-scroll" href="<?php echo WEB_ROOT; ?>#DADAISTS">DADAISTS</a></li>
                    <li><a class="sub-scroll" href="<?php echo WEB_ROOT; ?>#DADA">DADA/ SURREALISM JOURNAL</a></li>
                    <li><a class="sub-scroll" href="<?php echo WEB_ROOT; ?>#RESOURCES">RESOURCES</a></li>
                    <li><a href="mailto:timothy-shipe@uiowa.edu">CONTACT</a></li>
                </ul>
                <div class="sub-nav">
                    <ul>
                        <li><a href="#"><span>PERIODICALS</span></a>
                            <div class="cols">
                                <ul>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/1">291</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/2">391</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/3">ACTION</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/4">AESTHETE 1925</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/5">ALMANACH DER<br>FREIEN ZEITUNG</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/6">ALMANACH DER<br>NEUEN JUGEND</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/7">DER ARARAT</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/8">AVENTURE</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/9">BLINDMAN</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/10">DER BLUTIGE ERNST</a></li>
                                </ul>
                                <ul>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/11">CABARET VOLTAIRE</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/12">CANNIBALE</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/13">LE COEUR À BARBE</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/14">DADA</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/15">DER DADA</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/16">L'ÉLAN</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/17">FREIE STRASSE</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/18">DIE FREUDE</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/19">LITTÉRATURE</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/20">MAINTENANT</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/21">MANUSCRIPTS (MSS)</a></li>
                                </ul>
                                <ul>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/22">DER MARSTALL</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/23">MÉCANO</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/24">MENSCHEN</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/25">MERZ</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/26">NEUE JUGEND</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/27">PEREVOZ DADA</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/28">DIE PLEITE</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/29">PROJECTEUR</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/30">PROVERBE</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/31">DIE SCHAMMMADE</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/32">SIC</a></li>
                                </ul>
                                <ul>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/33">DE STIJL</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/34">Z</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/35">ZENIT</a></li>
                                    <li><a href="<?php echo WEB_ROOT; ?>/collections/show/36">DER ZWEEMANN</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#"><span>BOOKS BY AUTHOR</span></a>
                            <div class="cols-2">
                                <ul>
                                    <li>
                                        <span>PIERRE ALBERT-BIROT:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/360">LAROUNTALA</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>CELINE ARNAULD:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/364">TOURNEVIRE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>JEAN ARP:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/365">NEUE FRANZÖSISCHE MALEREI</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/366">DIE WOLKENPUMPE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>LOUIS ARAGON:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/358">ANICET</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/367">LES AVENTURES DE TÉLÉMAQUE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/368">FEU DE JOIE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>JOAHNNES BAADER:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/356">[POSTKARTE HINDENBURG]</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>HUGO BALL:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/354">FLAMETTI</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/353">ZUR KRITIK DER DEUTSCHEN INTELLIGENZ</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>SERGE CHARCHOUNE:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/350">DADAIZM: KOMPILIATSIIA</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>THEO VAN DOESBURG:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/340">ANTHOLOGIE-BONSET</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/369">CLASSIQUE BAROQUE MODERNE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/348">DE NIEUWE BEWEGING IN DE SCHILDERKUNST</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/345">DRIE VOORDRACHTEN OVER DE NIEUWE BEELDENDE KUNST</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/344">WAT IS DADA?</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>CARL EINSTEIN:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/343">AFRIKANISCHE PLASTIK</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/342">NEGERPLASTIK</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>PAUL ELUARD:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/339">LES ANIMAUX ET LEURS HOMMES</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/336">LES NÉCESSITÉS DE LA VIE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>MAX ERNST:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/328">EXPOSITION MAX ERNST</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>JULIUS EVOLA:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/326">ARTE ASTRATTA</a></li>
                                        </ul>
                                    </li>
                                    <li class="long">
                                        <span>EDGAR FIRN (KARL DÖHMAN) (DAIMONIDES):</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/325">BIBERGEIL</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>GEORGE GROSZ:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/323">DAS GESICHT DER HERRSCHENDEN KLASSE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/322">MIT PINSEL UND SCHERE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>MARSDEN HARTLEY:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/321">ADVENTURES IN THE ARTS</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>RAOUL HAUSMANN:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/320">PRÉSENTISMUS</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>EMMY HENNINGS:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/319">DAS BRANDMAL</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/318">GEFÄNGNIS</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/317">DIE LETZTE FREUDE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>WIELAND HERZFELDE:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/315">SCHUTZHAFT</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/311">TRAGIGROTESKEN DER NACHT</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>RICHARD HUELSENBECK:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/310">DADA ALMANACH</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/308">DADA SIEGT</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/307">DEUTSCHLAND MUSS UNTERGEHEN</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/306">DOCTOR BILLIG AM ENDE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/305">EN AVANT DADA</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/304">PHANTASTISCHE GEBETE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/303">SCHALABEN, SCHALABAI, SCHALAMEZOMAI</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/302">VERWANDLUNGEN</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>Iliazd (Ilia Zdanevich):</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/247">LIDANTIU FARAM (LEDANTU LE PHARE)</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>MATTHEW JOSEPHSON:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/301">GALIMATHIAS</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>FRANZ JUNG:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/300">ARBEITSFRIEDE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/299">HUNGER AN DER WOLGA</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/298">OPFERUNG</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/297">PROLETARIER</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/296">DIE ROTE WOCHE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/295">SAUL</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/294">SOPHIE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/292">DER SPRUNG AUS DER WELT</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/290">DIE TECHNIK DES GLÜCKS</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/289">DAS TROTTELBUCH</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>LAJOS KÁSSAK</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/288">NOVELLÁSKÖNYV</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>JULIUS KREKEL<br>(CLÉMENT PANSAERS):</span>
                                        <ul>
                                            <li></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/263">ZIEK; EENE MOEDER; HERTETOLKEN</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>MAN RAY:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/287">UNE BONNE NOUVELLE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/286">EXPOSITION DADA MAN RAY</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>WALTER MEHRING:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/275">ALGIER</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/274">DAS KETZERBREVIER</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/273">DAS POLITISCHE CABARET</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>Paul van Ostaijen:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/270">BEZETTE STAD</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>CLÉMENT PANSAERS:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/268">L'APOLOGIE DE LA PARESSE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/266">BAR NICANOR</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/265">LE PAN PAN AU CUL DU NU NÈGRE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/263">ZIEK; EENE MOEDER; HERTETOLKEN</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>WALTER PETRY:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/261">DIE DADAISTISCHE KORRUPTION</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>FRANCIS PICABIA:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/260">L'ATHLÈTE DES POMPES FUNÈBRES</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/258">EXPOSITION DADA FRANCIS PICABIA</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/256">JÉSUS CHRIST RASTAQUOUÈRE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/255">PENSÉES SANS LANGAGE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/251">POÈMES ET DESSINS DE LA FILLE NÉE SANS MÈRE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/248">UNIQUE EUNUQUE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>GEORGES<br>RIBEMONT-DESSAIGNES:</span>
                                        <ul>
                                            <li></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/245">EMPEREUR DE CHINE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/244">EXPOSITION DADA GEORGES RIBEMONT-DESSAIGNES</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/247">LEDANTU LE PHARE (PREFACE TO THE POEM BY ILIAZD)</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>ALFRED SAUERMANN</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/246">DADA-ENZYKLOPAEDIE DES OSIRIS</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>BRUNO SCHÖNLANK:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/242">SONNIGES LAND</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>KURT SCHWITTERS:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/240">ANNA BLUME DICHTUNGEN (1ST PRINTING)</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/241">ANNA BLUME DICHTUNGEN (2ND PRINTING)</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/239">MEMOIREN ANNA BLUMES IN BLEIE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>ARTHUR SEGAL:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/238">VOM STRANDE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>WALTER SERNER:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/237">LETZTE LOCKERUNG: MANIFEST DADA</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/233">DIE SITTENVERDERBNIS</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/231">ZUM BLAUEN AFFEN</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>PHILIPPE SOUPAULT:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/230">GARAGE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/229">ROSE DES VENTS</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/228">WESTWEGO</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>CHRISTOF SPENGEMANN:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/227">KUNST KÜNSTLER PUBLIKUM</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/226">DIE WAHRHEIT ÜBER ANNA BLUME</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>SHINKICHI TAKAHASHI:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/225">DADA</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>TRISTAN TZARA:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/224">VINGT-CINQ POÈMES</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/223">LA PREMIÈRE AVENTURE CÉLÉSTE DE MR. ANTIPYRINE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>JACQUES VACHÉ:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/222">LETTRES DE GUERRE</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>MELCHIOR VISCHER</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/221">DER TEEMEISTER</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>HERMYNIA ZUR MÜHLEN:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/220">WAS PETERCHENS FREUNDE ERZÄHLEN</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span>EPHEMERA:</span>
                                        <ul>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/219">DADA AUSSTELLUNG: DADA VORFRÜHLING</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/218">ERSTE INTERNATIONALE DADA-MESSE: KATALOG</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/items/show/217">EXCURSIONS & VISITES DADA: 1 ÈRE VISITE</a></li>
                                            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/132">PAPILLONS DADA</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- / navigation -->
        </div>
        <!-- / container -->
    </header>

        <article id="content" role="main" tabindex="-1">

            <?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
