@php 
use App\models\user;
$utente3 = User::where('role','=','organizzatore')->get();
@endphp
<div id="dashboard" class="form">
    
   
    <h2>Statistiche Organizzatori</h2>
    <div class="multiple-input">
        <div class="wrap-input">
        <select name="organizations" id="organizations">
            @foreach( $utente3 as $user3)
            <option value='{{ $user3->utenteId }}'>{{ $user3->ragioneSociale }}</option>
             @endforeach
        </select>
            
        </div>
        <div id="bigliettiVenduti">  </div>
    </div>
    <script>
        $(function(){
            $('#organizations').change(function(){
                $("#bigliettiVenduti").remove();
        var id = $(this).value();
        $.ajax({
          url : '{{ route( 'stats' ) }}',
          data: {
            "_token": "{{ csrf_token() }}",
            "id": id
            },
          type: 'post',
          dataType: 'json',
          success: function( result )
          {
               $.each( result, function(k, v) {
                    $('#bigliettiVenduti').append($({value:k, text:v}));
               });
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

