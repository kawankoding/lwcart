<div>
  <div class="row">
    <div class="col-md-12">
      <input type="text" wire:model="search" placeholder="Search something..." class="form-control mb-3">
    </div>
    @foreach ($products as $product)
      <div class="col-md-3 mt-2">
        <div class="card">
          <div class="card-header">{{ $product->name }}</div>
          <div class="card-body">{{ $product->description }}</div>
          <div class="card-footer">
            <button class="btn btn-primary" wire:click="addToCart({{$product->id}})">Add to Cart</button>
          </div>
        </div>
      </div>
    @endforeach
  </div>
  {{ $products->links() }}
</div>
