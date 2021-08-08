@php 
use App\Models\Resources\Product;
$products = Product::all();
@endphp
<div id = "prodotti-section" class = "form" style = "margin-left:50px;">
@can('isAdmin')
{{ link_to_route('insert-product', 'AGGIUNGI PRODOTTO', $parameters = [], ['class'=>'user-btn', 'style' => 'width: 150px;
    margin-left: 400px;'])}}
    <br>
    <br>
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
            <div style = "display:flex;">
            <div>
            @can('isAdmin')
            {!!  Form::open(['action' => ['AdminController@eliminaProd', $product->productsId] , 'files' => true, 'method'=>'POST','onsubmit' => 'return ConfirmDelete()'])  !!}
                        {!!Form::hidden('_method','DELETE')!!}
                        {!!Form::submit('ELIMINA PRODOTTO', ['class'=>'delete user-btn','style' => 'width: 170px;'])!!}
                    {!!  Form::close()  !!}
            </div>
            <div>
           
            {{ link_to_route('modificaProd', 'MODIFICA PRODOTTO', $parameters = ['productsId' => $product->productsId],['class'=>'user-btn','style' => 'width: 130px;'] )}}
</div>
<div>
            {{ link_to_route('insert-malfunction', 'INSERISCI MALFUNZIONAMENTO', $parameters = ['productsId' => $product->productsId],['class'=>'user-btn','style' => 'width: 180px;'] )}}
            @endcan
        </div>
            </div>
            </div>
            </div>
       <br>
       
        @endforeach
        </div>