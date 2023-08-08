@extends("layout")

@section('pageTitle', "Customers List")

@section('content')
    <h1 class="display-5 fw-bold">Customer List [customers]</h1>

    <a href="{{ route('customers').'?active=1' }}">Active</a>
    ||
    <a href="{{ route('customers').'?active=0' }}">Inactive</a>

    <ul class="list-group">
        @if ( isset($allCustomerData) )
            @forelse ($allCustomerData as $customer)
                <a href="{{ route('customers.show', $customer) }}">
                    <li class="list-group-item">{{ $customer->name }} <a href="{{ route('customers.edit', $customer) }}">[EDIT]</a></li>
                </a>
            @empty
                <p>No Customers</p>
            @endforelse
        @else
            <p>Records are not visible</p>
        @endif
    </ul>
    <br />
    
    
    <a href="{{ route('customers.create') }}" class="btn btn-primary">CREATE</a>
@endsection
