@php 
use App\Models\Resources\Evento;
$eventi = Evento::where('utenteId','=', Auth::id())->get();
@endphp
<div id="dashboard-section" class="form">
    
   
    <h2>Statistiche Eventi</h2>
    <div class="multiple-input">
        <div class="wrap-input">
        <select name="eventi" id="eventi">
            <option> ---Seleziona---</option>
            @foreach( $eventi as $evento)
            <option value='{{ $evento->eventoId }}'>{{ $evento->titolo }} di {{$evento->artista}}</option>
             @endforeach
        </select>
            
        </div>
    </div>
    <div id="statistiche-eventi">
        <h3 id="totaleBiglietti">Numero totale di biglietti venduti: <span></span></h3>
        <h3 id="totaleGuadagno">Incasso totale: € <span></span></h3>
        <h3 id="bigliettiPercentuale">Percentuale di vendita:  <span></span> % </h3>
    </div>
</div>
<script>
$(function () {
    $('select#eventi').change(function () {
        var id = $(this).children("option:selected").val();
        $.ajax({
            url: "{{ route('eventiStats') }}",
            data: {
                "eventoId": id,
                "_token": "{{ csrf_token() }}"
            },
            type: 'POST',
            dataType: 'json',
            success: function (result) {
                $('#statistiche-eventi h3#totaleBiglietti span').text(result.bigliettiVenduti);
                $('#statistiche-eventi h3#totaleGuadagno span').text(result.incassoTotale);
                $('#statistiche-eventi h3#bigliettiPercentuale span').text(result.quantitàBigliettiPerc);

            },
            error: function () {
                alert('error');
            }
        });
    });
});
</script>
