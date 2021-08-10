@php 
use App\Models\Resources\Product;
$products = Product::all();
@endphp
<div id = "prodotti-section" class = "form" style = "margin-left:50px;">
@can('isAdmin')
<div style="display: flex;justify-content:flex-start;align-items: center;gap:20px">
    <h3>AGGIUNGI UN MEMBRO DELLO STAFF</h3>
{{ link_to_route('insert-product', 'AGGIUNGI', $parameters = [], ['class'=>'user-btn', 'style' => ''])}}
    <br>
    <br>
</div>
@endcan

@foreach($products as $product)

        <div class = "utenti-liv-2" style = " padding: 0px 25px; width: 950px;">
            <div class = "row-direction" style = "display:flex; justify-content:space-between; align-items:center;">
            <div>
            <div style="margin-left:30px; margin-top:20px;">Id</div>
            <div style="margin-left:30px; margin-top:10px;">{{$product->productsId}}</div>
            </div>
            <div>
            <div style="margin-left:30px; margin-top:20px;">Nome</div>
            <div style="margin-left:30px; margin-top:10px;">{{$product->nome}}</div>
            </div>
            <div style = "display: flex;flex-direction:column;align-items:center">
                <div>
            
            @can('isAdmin')
            {!!  Form::open(['action' => ['AdminController@eliminaProd', $product->productsId] , 'files' => true, 'method'=>'POST','onsubmit' => 'return ConfirmDelete()'])  !!}
                        {!!Form::hidden('_method','DELETE')!!}
                        {!!Form::submit('ELIMINA', ['class'=>'delete user-btn','style' => 'text-align:center;height:30px;width:200px;height:35px;'])!!}
                    {!!  Form::close()  !!}
            </div>
            <div>
           
            {{ link_to_route('modificaProd', 'MODIFICA', $parameters = ['productsId' => $product->productsId],['class'=>'user-btn','style' => 'text-align:center;height:30px;width:200px;height:35px;margin-top:0'] )}}
</div>

<div>
            {{ link_to_route('insert-malfunction', 'INSERISCI MALFUNZIONAMENTO', $parameters = ['productsId' => $product->productsId],['class'=>'user-btn','style' => 'text-align:center;height:30px;width:200px;height:35px;margin-top:0;line-height:0.9'] )}}
            @endcan
        </div>
            </div>
            </div>
            </div>
       <br>
       
        @endforeach
        </div>