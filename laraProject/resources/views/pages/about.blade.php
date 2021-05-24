@extends('/layouts.public')

@section('content')

@include('helpers/cover-page', [
        'title' => 'Chi siamo', 
        'description' => 'Tutte le informazioni di cui hai bisogno per contattarci o per assistenza',
        'url' => 'about-cover.jpg'])

<div>
    <h1>chi simao</h1>
</div>
@endsection