@extends("layout")

@section('pageTitle', "Customers Create")

@section('content')
    <h1 class="display-5 fw-bold">Customer Create [customers/create]</h1>

    <form method="POST" action="{{ route('customers.store') }}" >

        @include('customer.partial.form')
        
    </form>
@endsection
