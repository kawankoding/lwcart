<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">Cart</div>
      <div class="card-body">
        <ul class="list-group">
          @foreach ($cart['products'] as $product)
          <li class="list-group-item">
            <span>{{ $product->name }} | Price : {{ $product->price }}</span>
            <div class="float-right">
              <a wire:click="removeItem({{$product->id}})" class="btn btn-danger text-white">Remove</a>
            </div>
          </li>
          @endforeach
        </ul>
      </div>
      <div class="card-footer">
        <button wire:click="checkout()" class="btn btn-success float-right">Checkout</button>
      </div>
    </div>
  </div>
</div>
