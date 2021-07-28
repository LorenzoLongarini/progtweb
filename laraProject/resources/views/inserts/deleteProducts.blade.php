@php 
use App\Models\Resources\Product;
$products = Product::all();
@endphp
<div id = "prodotti-section" class = "form" style = "margin-left:50px;">

{{ link_to_route('insert-product', 'AGGIUNGI PRODOTTO', ['class'=>'user-btn'])}}


@foreach($products as $product)

        <div class = "utenti-liv-2" style = " padding: 0px 25px;">
            <div class = "row-direction" style = "display:flex; justify-content:space-between; align-items:center;">
            <div>
            <div style="margin-left:30px; margin-top:20px;">Id</div>
            <div style="margin-left:30px; margin-top:10px;">{{$product->productsId}}</div>
            </div>
            <div>
            <div style="margin-left:30px; margin-top:20px;">Nome</div>
            <div style="margin-left:30px; margin-top:10px;">{{$product->nome}}</div>
            </div>
            <div>
            <div style="margin-left:30px; margin-top:20px;">Creato il</div>
            <div style="margin-left:30px; margin-top:10px;">{{$product->dataCreazione}}</div>
            </div>
            <div>
            {!!  Form::open(['action' => ['AdminController@eliminaProd', $product->productsId] , 'files' => true, 'method'=>'POST','onsubmit' => 'return ConfirmDelete()'])  !!}
                        {!!Form::hidden('_method','DELETE')!!}
                        {!!Form::submit('ELIMINA PRODOTTO', ['class'=>'delete user-btn'])!!}
                    {!!  Form::close()  !!}
            </div>
            <div>
            {{ link_to_route('modificaProd', 'MODIFICA PRODOTTO', $parameters = ['productsId' => $product->productsId],['class'=>'user-btn'] )}}
            {{ link_to_route('insert-malfunction', 'INSERISCI MALFUNZIONAMENTO', $parameters = ['productsId' => $product->productsId],['class'=>'user-btn'] )}}
            </div>
            </div>
            </div>
       <br>
       
        @endforeach
        </div>