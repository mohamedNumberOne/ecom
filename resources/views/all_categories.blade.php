@extends('layouts.template')

@section('content_page')

    @include('layouts.nav') 

    <div class="container  " style="margin-top: 150px" >
        
        @foreach ($all_categories as $category)
            s

            <hr> 
        @endforeach
      
   
    </div>
 
    @include('layouts.footer')
@endsection
