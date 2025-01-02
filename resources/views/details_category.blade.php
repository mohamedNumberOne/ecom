@extends('layouts.template')

@section('content_page')

    @include('layouts.nav') 

    <div class="container  " style="margin-top: 150px" >
        
     {{ $category -> nom_category }}
     {{ $category -> nom_category }} 
   
    </div>
 
    @include('layouts.footer')
@endsection
