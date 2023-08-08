@csrf
<div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" value='{{  $customer->name ?? old('name') }}' class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name" >
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">E-Mail</label>
    <input type="email" value='{{  $customer->email ?? old('email') }}' class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="E-Mail" >
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Note</label>
    <textarea class="form-control" id="note" name="note" rows="3">{{  $customer->note ?? old('note') }}</textarea>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('customers') }}" class="btn btn-primary">LIST</a>
</div>