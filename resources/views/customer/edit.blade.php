@extends("layout")

@section('pageTitle', "Customers Create")

@section('content')
    <h1 class="display-5 fw-bold">Customer Edit [customers/edit]</h1>

    <form method="POST" action="{{ route('customers.update', $customer) }}" >
        
        @method('PUT')
        @include('customer.partial.form')

    </form>
@endsection
