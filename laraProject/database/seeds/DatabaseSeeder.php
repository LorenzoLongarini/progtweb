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
            'nome' => 'computer',
            'prezzo'=>'23.4',
            'noteTecniche'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.', 
            'descrizione'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.',
            'modInstallaz'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.',  
            'imgName'=>'computer.jpg',
            'sottocategoria'=>'televisori'],

            [   'productsId'=>2,
            'nome' => 'telefono',
            'prezzo'=>'21.4',
            'noteTecniche'=>'Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.', 
            'descrizione'=>'Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.',
            'modInstallaz'=>'Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.',  
            'imgName'=>'telefono.jpg',
            'sottocategoria'=>'telefonia'],

            [   'productsId'=>3,
            'nome' => 'televisore',
            'prezzo'=>'18.4',
            'noteTecniche'=>' Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?', 
            'descrizione'=>' Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?',
            'modInstallaz'=>' Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?',  
            'imgName'=>'televisore.jpg',
            'sottocategoria'=>'televisori'],

            [   'productsId'=>4,
            'nome' => 'stampante',
            'prezzo'=>'11.4',
            'noteTecniche'=>'At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga.', 
            'descrizione'=>'At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga.',
            'modInstallaz'=>'At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga.',  
            'imgName'=>'stampante.jpg',
            'sottocategoria'=>'stampanti'],

            [   'productsId'=>5,
            'nome' => 'prodotto1',
            'prezzo'=>'14.4',
            'noteTecniche'=>'Et harum quidem rerum facilis est et expedita distinctio.', 
            'descrizione'=>'Et harum quidem rerum facilis est et expedita distinctio.',
            'modInstallaz'=>'Et harum quidem rerum facilis est et expedita distinctio.',  
            'imgName'=>'',
            'sottocategoria'=>''],

            [   'productsId'=>6,
            'nome' => 'prodotto2',
            'prezzo'=>'66.4',
            'noteTecniche'=>'Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae.', 
            'descrizione'=>'Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae.',
            'modInstallaz'=>'Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae.',  
            'imgName'=>'',
            'sottocategoria'=>''],

            [   'productsId'=>7,
            'nome' => 'prodotto3',
            'prezzo'=>'55.4',
            'noteTecniche'=>'Tuttavia, perché voi intendiate da dove sia nato tutto questo errore, di quelli che incolpano il piacere ed esaltano il dolore, io spiegherò tutta la questione, e presenterò le idee espresse dal famoso esploratore della verità, vorrei quasi dire dal costruttore della felicità umana.', 
            'descrizione'=>'Tuttavia, perché voi intendiate da dove sia nato tutto questo errore, di quelli che incolpano il piacere ed esaltano il dolore, io spiegherò tutta la questione, e presenterò le idee espresse dal famoso esploratore della verità, vorrei quasi dire dal costruttore della felicità umana.',
            'modInstallaz'=>'Tuttavia, perché voi intendiate da dove sia nato tutto questo errore, di quelli che incolpano il piacere ed esaltano il dolore, io spiegherò tutta la questione, e presenterò le idee espresse dal famoso esploratore della verità, vorrei quasi dire dal costruttore della felicità umana.',  
            'imgName'=>'',
            'sottocategoria'=>''],

            [   'productsId'=>8,
            'nome' => 'prodotto4',
            'prezzo'=>'44.4',
            'noteTecniche'=>'Al contrario, però, noi con indignazione denunciamo e riteniamo meritevoli di odio quelli che, rammolliti e corrotti dai piaceri del momento, accecati dal desiderio, non prevedono a quali dolori e a quali sofferenze andranno incontro, e uguale colpa hanno quelli che abbandonano i propri doveri per pigrizia danimo, cioè per evitare le fatiche e i dolori.', 
            'descrizione'=>'Al contrario, però, noi con indignazione denunciamo e riteniamo meritevoli di odio quelli che, rammolliti e corrotti dai piaceri del momento, accecati dal desiderio, non prevedono a quali dolori e a quali sofferenze andranno incontro, e uguale colpa hanno quelli che abbandonano i propri doveri per pigrizia danimo, cioè per evitare le fatiche e i dolori.',
            'modInstallaz'=>'Al contrario, però, noi con indignazione denunciamo e riteniamo meritevoli di odio quelli che, rammolliti e corrotti dai piaceri del momento, accecati dal desiderio, non prevedono a quali dolori e a quali sofferenze andranno incontro, e uguale colpa hanno quelli che abbandonano i propri doveri per pigrizia danimo, cioè per evitare le fatiche e i dolori.',  
            'imgName'=>'',
            'sottocategoria'=>''],
         
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

    DB::table('assistence_centers')->insert([
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
            'via' => 'Ancona 12',
            'telefono'=>'320494858',
            'email'=>'info@centrouno.it'
            
            ],

            [   'centersId'=>2,
            'nome' => 'Centro numero due',
            'città' => 'Milano',
            'regione' => 'Lombardia',
            'via' => 'Milano 45',
            'telefono'=>'3256785800',
            'email'=>'info@centrodue.it'
        ],

            [    'centersId'=>3,
            'città' => 'Firenze',
            'regione' => 'Toscana',
            'nome' => 'Centro numero tre',
            'via' => 'Firenze 25',
            'telefono'=>'3223485878',
            'email'=>'info@centrotre.it'],

            [  'centersId'=>4,
            'città' => 'Napoli',
            'regione' => 'Campania',
            'nome' => 'Centro numero quattro',
            'via' => 'Napoli 19',
            'telefono'=>'3763485878',
            'email'=>'info@centroquattro.it'],
    ]);
}
}
