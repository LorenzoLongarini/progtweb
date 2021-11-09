<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run() {

    DB::table('users')->insert([

        ['usersId'=>01,
        'nome'=>'TECNICO',
        'cognome'=>'TECNICO',
        'ivacf'=>'PPPBNC17PZ129I',
        'email'=>'info@tecntecn.it',
        'username'=>'tecntecn',
        'sottocategoria'=>'',
        'role'=>'tecnico',
        'telefono'=>'3200713901',
        'cap'=>'13222',
        'città'=>'Fano',
        'via'=>'Fano',
        'password'=>Hash::make('sHRHmwHk')],

        ['usersId'=>02,
        'nome'=>'STAFF',
        'cognome'=>'STAFF',
        'ivacf'=>'KKKBNC17PZ129I',
        'email'=>'info@staffstaff.it',
        'username'=>'staffstaff',
        'sottocategoria'=>'',
        'role'=>'staff',
        'telefono'=>'3200713901',
        'cap'=>'13222',
        'città'=>'Fano',
        'via'=>'Macerata',
        'password'=>Hash::make('sHRHmwHk')],

        ['usersId'=>03,
        'nome'=>'ADMIN',
        'cognome'=>'ADMIN',
        'ivacf'=>'JJJBNC17PZ129I',
        'email'=>'info@adminadmin.it',
        'username'=>'adminadmin',
        'sottocategoria'=>'',
        'role'=>'admin',
        'telefono'=>'3200713901',
        'cap'=>'13222',
        'città'=>'Macerata',
        'via'=>'Macerata',
        'password'=>Hash::make('sHRHmwHk')],

        

        ['usersId'=>04,
        'nome'=>'tecnico',
        'cognome'=>'tecnico',
        'ivacf'=>'CRLBNC17PZ129I',
        'email'=>'info@tecnico.it',
        'username'=>'tecnico',
        'sottocategoria'=>'',
        'role'=>'tecnico',
        'telefono'=>'3200713901',
        'cap'=>'13222',
        'città'=>'Ancona',
        'via'=>'Ancona',
        'password'=>Hash::make('tecnico')],

        
        ['usersId'=>05,
        'nome'=>'admin',
        'cognome'=>'admin',
        'ivacf'=>'2000198343',
        'email'=>'info@admin.it',
        'username'=>'admin',
        'sottocategoria'=>'',
        'role'=>'admin',
        'telefono'=>'3200715789',
        'cap'=>'14222',
        'città'=>'Fermo',
        'via'=>'Fermo',
        'password'=>Hash::make('admin')],

        ['usersId'=>06,
        'ivacf'=>'12344554421',
        'nome'=>'staff',
        'cognome'=>'staff',
        'email'=>'info@staff.it',
        'username'=>'staff',
        'sottocategoria'=>'',
        'role'=>'staff',
        'telefono'=>'3200744712',
        'cap'=>'19222',
        'città'=>'Ferrara',
        'via'=>'Ferrara',
        'password'=>Hash::make('staff')],
    ]);

    DB::table('products')->insert([

        [   'productsId'=>1,
            'nome' => 'computer  15s-qc009485ASl Notebook (nero)',
            'prezzo'=>'23.4',
            'noteTecniche'=>'notebook con schermo Full HD da 15.6 pollici, processore AMD Ryzen 7 5700U, chip grafico integrato AMD Radeon Graphics Vega 8, SSD da 512 gigabyte, HDD da 1 terabyte e 16 gigabyte di RAM', 
            'descrizione'=>' siamo in presenza di un portatile che offre: uno schermo IPS Full HD da 15.6 pollici; un potente processore octa-core dotato di multithreading appartenente all’ultima serie AMD Ryzen 7 5000 dal suffisso U, che indica anche consumi relativamente contenuti, basato su architettura Zen2+ denominata Lucienne; chip grafico integrato AMD Radeon Graphics Vega 8 in versione, appunto, Lucienne da 512 Core Radeon; SSD M.2 PCIe NVMe da 512 gigabyte e HDD da 2.5 pollici SATA III da 1 terabyte, uniti a 16 gigabyte di RAM in dual channel',
            'modInstallaz'=>'All’accensione comparirà a schermo la configurazione guidata di Windows. La prima schermata che comparirà sarà quella per selezionare la lingua: scegli quella che preferisci (presumibilmente Italiano) e premi il tasto Invio.Windows ti presenterà Cortana, il suo assistente vocale introdotto su Windows 10. Se vuoi disabilitare la sua voce, puoi fare clic sull’icona del microfono, in basso a sinistra. Al termine del discorso di Cortana, devi scegliere la zona in cui ti trovi e premere di nuovo il tasto Invio.

            Seleziona poi il layout di tastiera e il secondo layout (questo serve se magari sei abituato anche a scrivere con un tipo di tastiera diverso da quello che hai scelto come predefinito).
            
            Ecco, adesso, un passaggio fondamentale: bisogna connettersi a Internet per completare la configurazione. Se disponi di una rete Wi-Fi, seleziona la casella con il nome della tua rete, fai clic sul pulsante connetti e inserisci la chiave di accesso; infine, premi su Avanti.

            ',  
            'imgName'=>'computer.jpg',
            'sottocategoria'=>'televisori'],

            [   'productsId'=>2,
            'nome' => 'telefono Android',
            'prezzo'=>'21.4',
            'noteTecniche'=>'è dotato di un display di 6.67 pollici,una risoluzione di 1080 x 2400 pixel e un schermo AMOLED. Per quanto riguarda l hardware ha un processore 2x 2.5 GHz Cortex-A78 + 6x 2.0 GHz Cortex-A55 e una GPU Mali-G68 MC4,la memoria dello smartphone può arrivare fino a 128 gb.', 
            'descrizione'=>'è un smartphone Android di buon livello, fortemente votato all imaging, in grado di soddisfare anche l utente più esigente. Sorprende il display Touchscreen da 6.67 pollici che pone questo smartphone al vertice della categoria. Risoluzione di 2400x1080 pixel. Sul versante delle funzionalità a questo smartphone non manca davvero nulla. A cominciare dal modulo 5G che permette un trasferimento dati e una navigazione in internet eccellente, passando per la connettività Wi-fi e il GPS.',
            'modInstallaz'=>'Una volta stabilita la connessione a Internet, attendi che eventuali aggiornamenti di sistema vengano scaricati e installati e, successivamente, scegli se copiare app e dati da un backup già esistente (pulsante Avanti) oppure se evitare questo passaggio e riconfigurare il telefono da zero (pulsante Non copiare).

            Se hai scelto di procedere con l’importazione di un backup, specifica se recuperare i dati da un altro telefono Android, dal cloud oppure da un iPhone e segui le istruzioni fornite a schermo per procedere con il trasferimento dei dati (ti verrà chiesto di accedere al cloud, di selezionare il file di backup, oppure di inserire le credenziali dell’ID Apple configurato sull’iPhone "sorgente").
            
            Se, invece, hai optato per la configurazione "da zero", provvedi a effettuare l’accesso con il tuo account Google inserendo le tue credenziali all’interno degli appositi moduli.',  
            'imgName'=>'telefono.jpg',
            'sottocategoria'=>'telefonia'],

            [   'productsId'=>3,
            'nome' => 'televisore 65OLED855/12',
            'prezzo'=>'128.4',
            'noteTecniche'=>'È dotato di uno schermo Led con un Formato 16:9 e una Diagonale da 42 pollici.
                            Ha una risoluzione massima Full hd (1080p).
                            Il suo Peso [KG], escludendo il piedi stallo, è di 13,4 ed ha una Dimensione [L*H*S][mm] di 1009 x 622 x 29,9.', 
            'descrizione'=>' è uno dei nuovi televisori LED  in grado di riprodurre immagini 2D e 3D estremamente fluide, dinamiche e naturali grazie alla tecnologia TruMotion 200 Hz. Il design del televisore è raffinato ed elegante, grazie alla più sottile cornice del mondo dei televisori al plasma. Il televisore è inoltre dotato di una speciale funzione di conversione che permette di trasformare qualsiasi segnale in 2D in 3D senza perdita significativa di qualità. Il televisore dispone anche di ottime caratteristiche multimediali e Smart che lo rendono un vero e proprio Smart TV. Valore aggiunto del televisore è il telecomando Magic Motion che funge, in pratica, da mouse giroscopico',
            'modInstallaz'=>'er prima cosa, premi il tasto Menu/Home del telecomando e, se necessario, seleziona il pulsante Impostazioni che compare su schermo, per poi schiacciare il tasto OK/Enter; ora, seleziona la voce Trasmissione dal menu che compare su schermo, scegli la voce Sintonizzazione automatica per due volte consecutive e premi sul pulsante Avvio mostrato a schermo.
            seguito di questa operazione, dovrebbe aprirsi la schermata relativa alla sintonizzazione dei canali TV: per prima cosa, utilizza la voce Antenna per specificare la tipologia di antenna da te in uso (digitale, satellitare oppure scheda Tivùsat), imposta le opzioni aggiuntive in base alla tipologia di antenna da te in uso (per esempio, se ti interessa effettuare la ricerca dei canali del digitale terrestre, devi selezionare la voce Digitale dal menu Tipo canale), assicurati che il menu Ordinamento canali sia impostato su Ordinamento automatico e, per finire, premi sul pulsante Ricerca, per avviare la ricerca dei canali.

            Adesso, attendi che la sintonizzazione automatica venga portata a termine e, se necessario, risolvi eventuali conflitti di numerazione, selezionando quello che preferisci aggiungere alla lista, tra le scelte proposte; una volta completata l’operazione, pigia sul pulsante Chiudi e premi più volte il tasto Back/Exit del telecomando, per uscire dal menu di configurazione.
            
            Per quanto riguarda, invece, la sintonia manuale, devi selezionare la voce Sintonizzazione manuale dal menu Trasmissione e, dopo aver indicato la frequenza delle emittenti da sintonizzare, avviare la scansione, premendo sull’apposito pulsante.',  
            'imgName'=>'televisore.jpg',
            'sottocategoria'=>'televisori'],

            [   'productsId'=>4,
            'nome' => 'stampante A235DS',
            'prezzo'=>'51.4',
            'noteTecniche'=>'rea di stampa massima 4 mm da tutti i bordi o 207,7 mm x 347,4 mm (impostazione predefinita), 215,9 mm x 255,6 mm con modalità da bordo a bordo Memoria (std/max) 1 GB / 1 GB Processore 525 MHz Linguaggi di descrizione pagina Emulazioni PCL® 5e e 6 Emulazione PostScript® 3™ Emulazione PDF Connettività Ethernet 10/100/1000Base-T High Speed USB 2.0 Direct Print Wi-Fi opzionale (con il kit di connettività wireless Xerox®) Funzioni di stampa Stampa booklet Proporzioni Adattamento alla pagina Filigrane Pagine di formato personalizzato Immagini multiple Modalità Risparmio toner Stampa protetta Fascicolazione Stampa da unità di memoria USB Sistemi operativi supportati Microsoft® Windows® XP SP1, Vista, 7, 2008 Server, 2003 Server Mac OS® 10.5 and later Varie distribuzioni Linux® e UNIX®, quali: • IBM® AIX® 5 • HP-UX® 11i v2 • openSUSE® 11 • Red Hat® Fedora® Core 11-1', 
            'descrizione'=>'Ideale sia per casa sia per i piccoli uffici, ha un display LCD e risulta particolarmente silenziosa. Ha la stampa fronte/retro automatica e il toner incluso dura fin o a 700 pagine. Stampa fino a 30 pagine al minuto e scansiona, fotocopia e ha anche la funzione fax. Si connette tramite WiFi o via cavo',
            'modInstallaz'=>'Se la stampante è pronta, è possibile procedere con l’installazione. Persino i neofiti del computer possono affrontare la cosa senza aiuti esterni. La marca della stampante è irrilevante. Persino modelli vecchi possono essere collegati a PC moderni senza grossi problemi. Tuttavia, in caso di complicazioni, le soluzioni sono generalmente a portata di mano. Il collegamento della stampante è molto facile.

            Un cavo va collegato alla presa per fornire corrente alla periferica. Il secondo cavo collega la stampante al computer. Solo così è possibile trasmettere la stampa desiderata alla periferica. Una volta effettuato il collegamento, è possibile installare la stampante. In questo caso, il cosiddetto “driver della stampante” gioca un ruolo importante. Si tratta di un programma che garantisce la compatibilità tra PC e stampante. Se manca il driver della stampante, non è possibile stampare le pagine desiderate.
            ',  
            'imgName'=>'stampante.jpg',
            'sottocategoria'=>'stampanti'],

            [   'productsId'=>5,
            'nome' => 'stampante M775DN',
            'prezzo'=>'74.4',
            'noteTecniche'=>'Velocità di stampa Fino a 45 ppm A4 / 210 x 297 mm Fronte/retro automatica Fino a 28 ppm A4 / 210 x 297 mm Gestione carta - Ingresso Alimentatore automatico fronte/retro (DADF) Capacity1 60 fogli Formati Da 140 x 140 mm a 216 x 356 mm Grammature Solo fronte: da 50 a 125 g/m² Fronte/retro: da 50 a 125 g/m² Vassoio multiuso Capacity1 150 fogli Formati Formati personalizzati: da 76 x 127 mm a 216 x 356 mm Grammature Da 60 a 216 g/m² Tipi di supporti Comune Comune spessa Altro Cartoncini Carta leggera Carta pesante Ruvida Etichette Buste Carta intestata Perforata Vassoio 1 Capacity1 550 fogli Formati Formati personalizzati: da 148 x 210 mm a 216 x 356 mm Grammature Da 60 a 216 g/m² Tipi di supporti Comune Comune spessa Altro Cartoncini Carta leggera Carta pesante Ruvida Etichette Carta intestata Perforata', 
            'descrizione'=>'Si tratta di un prodotto che non consente solo di ottenere copie, ma anche scansioni, stampe e di inviare e ricevere fax, rivelandosi ideale non solo per casa ma anche per l’ufficio.

            Prevede funzioni come il fronte retro automatico e ha un cassetto ADF da 20 fogli, che assicura grande libertà. Il classico invece prevede un massimo di 100 fogli, che verranno caricati in totale autonomia dalla stampante.',
            'modInstallaz'=>'Se la stampante è pronta, è possibile procedere con l’installazione. Persino i neofiti del computer possono affrontare la cosa senza aiuti esterni. La marca della stampante è irrilevante. Persino modelli vecchi possono essere collegati a PC moderni senza grossi problemi. Tuttavia, in caso di complicazioni, le soluzioni sono generalmente a portata di mano. Il collegamento della stampante è molto facile.

            Un cavo va collegato alla presa per fornire corrente alla periferica. Il secondo cavo collega la stampante al computer. Solo così è possibile trasmettere la stampa desiderata alla periferica. Una volta effettuato il collegamento, è possibile installare la stampante. In questo caso, il cosiddetto “driver della stampante” gioca un ruolo importante. Si tratta di un programma che garantisce la compatibilità tra PC e stampante. Se manca il driver della stampante, non è possibile stampare le pagine desiderate.
            ',  
            'imgName'=>'',
            'sottocategoria'=>'stampanti'],

            [   'productsId'=>6,
            'nome' => 'televisore 32ES855/12',
            'prezzo'=>'96.4',
            'noteTecniche'=>'È dotato di uno schermo Led con un Formato 16:9 e una Diagonale da 32 pollici.
            Ha una risoluzione massima Full hd (1080p).
            Il suo Peso [KG], escludendo il piedi stallo, è di 10,8 ed ha una Dimensione [L*H*S][mm] di 804 x 510 x 73.8.', 
            'descrizione'=>'è un televisore LCD HD Ready dotato di un design moderno e bombato, adatto agli arredamenti moderni. Quanto a specifiche tecniche, il televisore è provvisto di uno schermo da 32 pollici con una risoluzione di 1366x768 pixel, un rapporto di contrasto dinamico pari a 30.000:1 e una luminosità che si misura in 450 candele per metro quadrato. Dispone, inoltre, di 2 ingressi HDMI, porta USB, due altoparlanti da 10 W ciascuno e del sistema Smart Energy Saving, con sensore intelligente, che assicura una maggiore efficienza energetica riducendo i consumi',
            'modInstallaz'=>'Per sintonizzare i canali: chiaccia il tasto Home del telecomando (quello raffigurante una casetta) per accedere al menu principale del dispositivo, seleziona l’icona relativa alle Impostazioni tra quelle proposte e premi il tasto OK.

            Ora, spostati sull’icona Canali (si trova nella barra laterale di sinistra del menu che compare su schermo), schiaccia il tasto OK e, allo stesso modo, apri il menu Sintonizzazione e impostazioni canali. Assicurati, dunque, che il menu tendina Modalità programma sia impostato sul tipo di antenna da te in uso (antenna oppure satellite), controlla che l’aggiornamento automatico dei canali sia attivo (altrimenti fallo tu) e, quando sei pronto, seleziona la voce Sintonia automatica e schiaccia il tasto OK, per avviare la sintonizzazione automatica dell’elenco canale.
            
            Se, invece, vuoi sintonizzare soltanto alcuni canali, devi scegliere l’opzione Sintonizzazione Manuale dal menu Sintonizzazione canali e, quando richiesto, indicare il canale, la frequenza e la banda, avvalendoti degli appositi menu. Per avviare la ricerca dei nuovi canali, premi il pulsante Aggiorna e attendi che la procedura venga portata a termine.',  
            'imgName'=>'',
            'sottocategoria'=>'televisori'],

            [   'productsId'=>7,
            'nome' => 'telefono IOS',
            'prezzo'=>'55.4',
            'noteTecniche'=>' ha una dimensione di 163.9 x 75.9 x 8.9 mm ed un peso di 210 grammi.L hardware è composto da un proessore 2x 2.80 GHz Cortex-X1 + 2x 2.25 GHz Cortex-A76 + 4x1.80 GHz Cortex-A55 e la una GPU Mali-G78 MP20.La sua memoria può arrivare fino ad un massimo di 512 GB. ', 
            'descrizione'=>'è un prodotto con pochi competitor per ciò che riguarda la multimedialità grazie alla fotocamera da ben 50 megapixel che permette allo smartphone di scattare foto di alta qualità con una risoluzione di 8165x6124 pixel e di registrare video in 4K alla risoluzione di 3840x2160 pixel. Lo spessore di 8.9mm è contenuto e rende questo smartphone molto interessante.',
            'modInstallaz'=>'Dopo aver inserito la SIM nell’apposito alloggiamento e aver acceso lo smartphone, puoi procedere con la configurazione iniziale di Android.

            Per prima cosa, seleziona dunque la lingua da usare nel sistema operativo dall’apposito menu a tendina; dopodiché fai tap sul pulsante Inizia, per avviare la procedura guidata di impostazione del telefono.
            
            Come primo passo, ti verrà chiesto di scegliere una rete Wi-Fi alla quale collegarsi per scaricare le app o copiare i dati: seleziona la rete di tuo interesse dalla lista proposta e, quando richiesto, immettine la chiave d’accesso. Se desideri continuare con la configurazione del telefono senza usare una rete Wi-Fi ma avvalendoti della connessione dati disponibile sulla tua SIM, tocca la voce Utilizza la rete mobile per la configurazione. Per continuare, invece, senza collegamento a Internet (questa opzione potrebbe però influire sugli step disponibili successivamente), fai tap sul pulsante Ignora, posto in basso a sinistra.',  
            'imgName'=>'',
            'sottocategoria'=>'telefonia'],

        
         
    ]);

    DB::table('malfunctions')->insert([
        [   'malfunctionsId'=>1,
            'productsId'=>1,
            'nomeMalf'=>'malfunzionamento1',
            'problema'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. ',
            'soluzione'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. '
            
            ],
            [   'malfunctionsId'=>2,
            'productsId'=>1,
            'nomeMalf'=>'malfunzionamento2',
            'problema'=>'Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.',
            'soluzione'=>'Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.'
            
            ],
            [   'malfunctionsId'=>3,
            'productsId'=>1,
            'nomeMalf'=>'malfunzionamento3',
            'problema'=>'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?',
            'soluzione'=>'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?'
            
            ],
            [   'malfunctionsId'=>4,
            'productsId'=>2,
            'nomeMalf'=>'malfunzionamento4',
            'problema'=>'At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga.',
            'soluzione'=>'At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga.'
            
            ],
            [   'malfunctionsId'=>5,
            'productsId'=>2,
            'nomeMalf'=>'malfunzionamento5',
            'problema'=>'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.',
            'soluzione'=>'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.'
            
            ],
            
    ]);

    DB::table('faqs')->insert([
        [
            'faqId'=>1,
            'domanda'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.',
            'risposta' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.'
        ],
        [
            'faqId'=>2,
            'domanda'=>'Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. ',
            'risposta' => 'Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. '
        ],
        [
            'faqId'=>3,
            'domanda'=>'At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga.',
            'risposta' => 'At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga.'
        ],
        [
            'faqId'=>4,
            'domanda'=>'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.',
            'risposta' => 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.'
        ],
    ]);
    DB::table('assistence_centers')->insert([

        [   'centersId'=>1,
            'città' => 'Ancona',
            'regione' => 'Marche',
            'nome' => 'Centro numero uno',
            'via' => 'Scrima 12',
            'telefono'=>'3204948580',
            'email'=>'info@centrouno.it'
            
            ],

            [   'centersId'=>2,
            'nome' => 'Centro numero due',
            'città' => 'Milano',
            'regione' => 'Lombardia',
            'via' => ' Anfossi 45',
            'telefono'=>'3256785800',
            'email'=>'info@centrodue.it'
        ],

            [    'centersId'=>3,
            'città' => 'Firenze',
            'regione' => 'Toscana',
            'nome' => 'Centro numero tre',
            'via' => 'Colombo 25',
            'telefono'=>'3223485878',
            'email'=>'info@centrotre.it'],

            [  'centersId'=>4,
            'città' => 'Napoli',
            'regione' => 'Campania',
            'nome' => 'Centro numero quattro',
            'via' => 'Garibaldi 19',
            'telefono'=>'3763485878',
            'email'=>'info@centroquattro.it'],
    ]);
}
}
