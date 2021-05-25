@extends('layouts.public')



{{  Form::open(array('route' => 'aggiungiEvento.store', 'id' => /*nome-funzione*/, 'files' => true, 'class' => /*some-bollocks*/))  }}
   
   <div>
<<<<<<< HEAD
    {{  Form:label ('name', 'Titolo', /*class-type*/)}}
    {{  Form:text ('name', '', /*class-type*/)  }}
=======
    {{  Form:label ('titolo', 'Nome Evento', /*class-type*/)}}
    {{  Form:text ('titolo', '', /*class-type*/)  }}
>>>>>>> 97e0b5b807948cfec4f3fd0f458bac383e2eda82
    </div>

    <div>
    {{  Form:label ('artista', 'Artista', /*class-type*/)  }}
    {{  Form:text ('artista', '', /*class-type*/)  }}
    </div>

    <div>
    {{  Form:label ('immagine', 'Artista', /*class-type*/)  }}
    {{  Form:image ('immagine', '', /*class-type*/)  }}
    </div>

    <div>

    {{  Form:label ('luogo', 'Luogo', /*class-type*/)}}
    {{  Form:text ('luogo', '', /*class-type*/)  }}

    </div>
    <div>
    {{  Form:label ('regione', 'Regione', /*class-type*/)}}
    {{  Form:select ('regione', $regione, '', /*class-type*/)  }
    
    </div>
    <div>
    {{  Form:label ('data', 'Data', /*class-type*/)}}
    {{  Form:date ('data', '',  /*class-type*/ ) }}
    </div>
    <div>
    {{  Form:label ('BigliettiDisp', 'Biglietti Disponibili', /*class-type*/ )}}
    {{  Form:integer ('BigliettiDisp', '', /*class-type*/) }}

    </div>
    <div>
    {{  Form:label ('prezzo', 'Prezzo Biglietto', /*class-type*/ )}}
    {{  Form:integer ('prezzo', '', /*class-type*/) }}

    </div>
    <div>
    {{  Form:label ('sconto', 'Sconto', /*class-type*/ )}}
    {{  Form:tinyinteger ('sconto', '', /*class-type*/) }}

    </div>
    <div>

<<<<<<< HEAD
    {{  Form:label ('descShort', 'Programma', /*class-type*/)}}
    {{  Form:text ('descShort', '', /*class-type*/)}}
=======
    {{  Form:label ('descBreve', 'Descrizione Breve', /*class-type*/)}}
    {{  Form:text ('descBreve', '', /*class-type*/)}}
>>>>>>> 97e0b5b807948cfec4f3fd0f458bac383e2eda82

    </div>
    <div>

<<<<<<< HEAD
    {{  Form:label ('descLong', 'Descrizione', /*class-type*/)}}
    {{  Form:textarea ('descLong', '',  /*class-type*/)}}
=======
    {{  Form:label ('programma', 'Descrizione Completa', /*class-type*/)}}
    {{  Form:textarea ('programma', '',  /*class-type*/)}}
>>>>>>> 97e0b5b807948cfec4f3fd0f458bac383e2eda82

    </div>

    <div>

    {{  Form:label ('location', 'Sconto', /*class-type*/)}}
    {{  Form:text ('location', '', /*class-type*/)  }}

    </div>

    <div>

    {{  Form:label ('location', 'Url', /*class-type*/)}}
    {{  Form:text ('location', '', /*class-type*/)  }}

    </div>

    <div>
    {{  Form:submit ('Conferma', /*class-type*/)}}
    </div>

    <div>
    {{  Form:reset ('Annulla', /*class-type*/)}}
    </div>
{{Form::close}}