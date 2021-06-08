@php 
use App\Models\Resources\User;
$utente3 = User::where('role','=','organizzatore')->get();
@endphp
<div id="dashboard" class="form">
    
   
    <h2>Statistiche Organizzatori</h2>
    <div class="multiple-input">
        <div class="wrap-input">
        <select name="organizations" id="organizations">
            <option> ---Seleziona---</option>
            @foreach( $utente3 as $user3)
            <option value='{{ $user3->utenteId }}'>{{ $user3->ragioneSociale }}</option>
             @endforeach
        </select>
            
        </div>
        <div id="bigliettiVenduti">
        <h3 id="totaleBiglietti"></h3>
        <h3 id="totaleGuadagno"></h3>
        </div>
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
            $('#bigliettiVenduti h3#totaleBiglietti').text(result.bigliettiVenduti);
            $('#bigliettiVenduti h3#totaleGuadagno').text(result.guadagnoTotale);
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

