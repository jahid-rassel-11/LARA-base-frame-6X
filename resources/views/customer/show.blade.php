@extends("layout")

@section('pageTitle', "Customers Details")

@section('content')
    <div class="container-fluid py-3">
        <div class="card">
            <div class="card-header">
                Customer Details
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $customer->id." - ".$customer->name }}</h5>
                <p class="card-text">{{ $customer->email }}</p>
                <p class="card-text">{{ $customer->note }}</p>
                <a href="{{ route('customers') }}" class="btn btn-primary">Customers List</a>
                <a href="{{ route('customers.edit', $customer->id ) }}" class="btn btn-primary">Customers EDIT</a>
                
                <form action="{{ route('customers.destroy', $customer->id) }}" method="POST">
                    @csrf
                
                    @method('DELETE')
                
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
