<?php
    // Snack 1
    // Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    // Olimpia Milano - Cantù | 55-60

    $giornata_di_campionato = [
        [
            'casa' => [
                'squadra' => 'Olimpia Milano',
                'punteggio' => 55
            ],
            'ospiti' => [
                'squadra' => 'Cantù',
                'punteggio' => 60
            ]
        ],
        [
            'casa' => [
                'squadra' => 'Olimpia Milano',
                'punteggio' => 55
            ],
            'ospiti' => [
                'squadra' => 'Cantù',
                'punteggio' => 60
            ]
        ],
        [
            'casa' => [
                'squadra' => 'Olimpia Milano',
                'punteggio' => 55
            ],
            'ospiti' => [
                'squadra' => 'Cantù',
                'punteggio' => 60
            ]
        ],
        [
            'casa' => [
                'squadra' => 'Olimpia Milano',
                'punteggio' => 55
            ],
            'ospiti' => [
                'squadra' => 'Cantù',
                'punteggio' => 60
            ]
        ]
    ];

    // Snack 4
    // Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

    $array_numeri = range(0, 100);

    shuffle($array_numeri);
    $array_numeri_random = array_slice($array_numeri, 7, 16);


    // Snack 5
    // Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

    $testo_lungo = "Come descritto dai socio-psicologi David Dunning e Justin Kruger, la distorsione deriva da un'illusione interna nelle persone con scarse abilità e dalla loro errata percezione esterna delle persone estremamente abili, concludendo che: «l'errore di valutazione dell'incompetente deriva da un giudizio errato sul proprio conto, mentre quello di chi è altamente competente deriva da un equivoco sul conto degli altri».

    La distorsione è legata al pregiudizio cognitivo della superiorità illusoria e deriva dall'incapacità delle persone di riconoscere la propria mancanza di capacità. Senza l'autoconsapevolezza della metacognizione, le persone non possono infatti, oggettivamente, valutare il loro livello di competenza. Dunning e Kruger decisero di testare queste ipotesi sugli studenti dei primi anni dei corsi di psicologia della Cornell University. In una serie di studi, esaminarono l'autovalutazione che i soggetti davano sulle proprie capacità di ragionamento logico, grammaticale e umoristico. Dopo essere venuti a conoscenza del proprio punteggio nei test, ai soggetti veniva nuovamente chiesto di dare una valutazione del proprio livello: il gruppo dei competenti lo stimava correttamente, mentre quello dei non competenti continuava a sopravvalutare il proprio livello. Secondo quanto annotarono i due psicologi. Per contro, persone in realtà più esperte di altre, tendevano a «sottovalutare» la propria competenza. I partecipanti di questo tipo che si trovavano davanti a domande relativamente semplici per la propria preparazione, erano portati nella maggior parte dei casi a ritenere che tali problemi si rivelassero semplici anche per gli altri.

    Uno studio successivo, riportato nello stesso articolo, suggerisce che gli studenti altamente incompetenti miglioravano la propria abilità nell'autovalutazione a seguito di una seppur minima introduzione alla materia o alla competenza nella quale difettavano, e questo a prescindere dai risibili miglioramenti nella competenza vera e propria. Nel 2003 lo stesso Dunning, insieme a Joyce Ehrlinger, anch'egli della Cornell University, pubblicò uno studio che descriveva il cambiamento del modo in cui le persone vedono sé stesse quando sono influenzate da stimoli esterni. Ai partecipanti all'esperimento, studenti della Cornell, furono somministrati test sulla conoscenza della geografia: alcuni di essi miravano a influenzare l'autostima in positivo, altri in negativo. Fu quindi chiesto loro di valutare la propria prestazione, e coloro che avevano avuto il test positivo valutarono il proprio lavoro in modo molto più lusinghiero rispetto a quanti avevano dovuto affrontare il test negativo. Daniel Ames e Lara Kammrath estesero questo studio alla sensibilità nei confronti degli altri, e alla percezione della propria sensibilità che i soggetti avevano. A riprova dell'esattezza della teoria, Dunning portò ad esempio uno studio commissionato dal Dipartimento del tesoro degli Stati Uniti d'America su un campione di circa 25 000 statunitensi, intervistati in merito alla loro competenza finanziaria; dalle risposte dei circa ottocento di questi che erano incappati in fallimenti economici, emergeva che essi si ritenevano, al contrario, più esperti degli altri in campo finanziario. Un'altra ricerca ha suggerito che l'effetto non sia così scontato e dovrebbe essere ascritto a distorsioni cognitive. In una serie di tre studi e dodici test i ricercatori trovarono che, in situazioni di difficoltà moderata, coloro che ottenevano prestazioni migliori e peggiori differivano molto poco in accuratezza, mentre in caso di difficoltà maggiore, i migliori risultavano meno accurati dei peggiori, nel proprio giudizio. Questo comportamento suggerirebbe che a ogni livello di abilità si è soggetti al medesimo grado di inaffidabilità";

    $frasi = explode('.', $testo_lungo);