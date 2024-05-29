<div class="card" style="width: 18rem;">
    <img src="{{ $product->image_url ?? 'https://imgs.search.brave.com/zcY98pwZATPIr60oB3aREAqfongQhv6-kbX_qjagDPA/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWcu/ZnJlZXBpay5jb20v/ZnJlZS1waG90by9j/YXJkYm9hcmQtYm94/XzE0NDYyNy0zNzAy/My5qcGc_c2l6ZT02/MjYmZXh0PWpwZw' }}"
        class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
        <p>Rs. {{ $product->amount }}</p>
        <p class="card-text">{{ $product->description }}</p>
        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary"> Details </a>
    </div>
</div>
