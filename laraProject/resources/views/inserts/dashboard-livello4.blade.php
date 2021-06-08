@php 
use App\Models\Resources\User;
$utente3 = User::where('role','=','organizzatore')->get();
@endphp
<div id="dashboard-section" class="form">
    
   
    <h2>Statistiche Organizzatori</h2>
    <div class="multiple-input">
        <div class="wrap-input">
        <select name="organizations" id="organizations">
            @foreach( $utente3 as $user3)
            <option value='{{ $user3->utenteId }}'>{{ $user3->ragioneSociale }}</option>
             @endforeach
        </select>
            
        </div>
    </div>
    <div id="bigliettiVenduti">
        <h3 id="totaleBiglietti">Numero totale di biglietti venduti: <span></span></h3>
        <h3 id="totaleGuadagno">Incasso totale: € <span></span></h3>
        </div>
    <script>
        $(function(){
            $('#organizations').change(function(){
        var id = $(this).children("option:selected").val();
        $.ajax({
          url : "{{ route('organizzatoreStats') }}",
          data: {
            "utenteId": id,
            "_token": "{{ csrf_token() }}"
            },
          type: 'POST',
          dataType: 'json',
          success: function( result )
          {
            $('#bigliettiVenduti h3#totaleBiglietti span').text(result.bigliettiVenduti);
            $('#bigliettiVenduti h3#totaleGuadagno span').text(result.guadagnoTotale);
          },
          error: function()
         {
             alert('error');
         }
       });
    });
});
</script> 
</div>

