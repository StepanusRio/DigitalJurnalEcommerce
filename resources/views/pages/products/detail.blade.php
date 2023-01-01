<div>
    <section class="section-header pb-2 pb-md-2 bg-soft">
        <div class="container align-items-center">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-md">
                        <div class="card-header">
                            <h1 class="h3 fw-bold text-center">Details Product</h1>
                            @if ($product->id == 2)
                                <img src="home/assets/img/saas-platform-3.jpg" alt="--Image--">
                            @elseif($product->id == 3)
                                <img src="home/assets/img/saas-platform-4.jpg" alt="--Image--">
                            @else
                                <img src="home/assets/img/saas-platform-5.jpg" alt="--Image--">
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <label for="productname" class="form-label">Product Name</label>
                                    <label for="productname" class="form-label">Product Price</label>
                                    <label for="productname" class="form-label">Product Description</label>
                                </div>
                                <div class="col">
                                    <label for="productname" class="form-label">{{ $product->product_name }} ||
                                        {{ $product->id }}</label>
                                    <label for="productname" class="form-label">$ {{ $product->product_price }} /
                                        month</label>
                                    <label for="productname" class="form-label">{{ $product->product_desc }}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow-md">
                        <div class="card-header">
                            <h2 class="text-center">User Information and Details checkout</h2>
                        </div>
                        <div class="card-body">
                            @csrf
                            <form method="POST" action="{{ url('add_cart', $product->id) }}">
                                <div class="mb-3 row">
                                    <label for="username" class="col-md-4 col-form-label">Username</label>
                                    <div class="col-sm-7">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        {{-- {{ dd($user) }} --}}
                                        <input readonly class="form-control-plaintext" id="username" name="username"
                                            value="{{ $user->name }}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="email" class="col-md-4 col-form-label">Email</label>
                                    <div class="col-sm-7">
                                        <input class="form-control" id="email" name="email"
                                            value="{{ $user->email }}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="phone" class="col-md-4 col-form-label">Phone</label>
                                    <div class="col-sm-7">
                                        <input class="form-control" id="phone" name="phone"
                                            value="{{ $user->phone }}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="address" class="col-md-4 col-form-label">Address</label>
                                    <div class="col-sm-7">
                                        <input class="form-control" id="address" name="address"
                                            value="{{ $user->address }}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="quantity" class="col-md-4 col-form-label">Quantity / Log Subcribe
                                        (Month)</label>
                                    <div class="col-sm-7">
                                        <input class="form-control-plaintext" id="quantity" type="number"
                                            name="quantity" value="1" min="1">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <input class="btn btn-success text-slate-600" type="submit"
                                        value="Continue To Purchased">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
<section class="section-header pb-7 pb-lg-11 bg-soft">
    <div class="container">
        <div class="card shadow-lg">
            <div class="card-header">
                <h2>User Says</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        User Information
                    </div>
                    <div class="col">
                        User Comment
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
