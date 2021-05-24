@extends('layouts.public')



{{  Form::open(array('route' => /*nome-rotta*/, 'id' => /*nome-funzione*/, 'files' => true, 'class' => /*some-bollocks*/))  }}
   
   <div>
    {{  Form:label ('name', 'Titolo', /*class-type*/)}}
    {{  Form:text ('name', '', /*class-type*/)  }}
    </div>
    <div>

    {{  Form:label ('location', 'Luogo', /*class-type*/)}}
    {{  Form:text ('location', '', /*class-type*/)  }}

    </div>
    <div>
    {{  Form:label ('regione', 'Regione', /*class-type*/)}}
    {{  Form:select ('regione', $regione, '', /*class-type*/)  }
    
    </div>
    <div>
    {{  Form:label ('date', 'Data', /*class-type*/)}}
    {{  Form:date ('date', '',  /*class-type*/ ) }}
    </div>

    {{  Form:label ('tickets', 'Biglietti Disponibili', /*class-type*/ )}}
    {{  Form:integer ('tickets', '', /*class-type*/) }}

    </div>
    <div>

    {{  Form:label ('descShort', 'Programma', /*class-type*/)}}
    {{  Form:text ('descShort', '', /*class-type*/)}}

    </div>
    <div>

    {{  Form:label ('descLong', 'Descrizione', /*class-type*/)}}
    {{  Form:textarea ('descLong', '',  /*class-type*/)}}

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