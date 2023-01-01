<div>
    <?php $snapToken = Session::get('snapToken'); ?>
    <section class="section-header pb-7 pb-lg-11 bg-soft">
        <div class="container">
            <table class="table table-light table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $totalprice = 0;
                    $index = 1;
                    ?>
                    @forelse ($carted as $cart)
                        <tr>
                            <th scope="row">{{ $index }}</th>
                            <td>{{ $cart->product_name }}</td>
                            <td>$ {{ $cart->price }}</td>
                            <td>{{ $cart->quantity }} / Month</td>
                            <td><a onclick="return confirm('Are you sure to unsubscribe the product?')"
                                    href="{{ url('remove_cart', $cart->id) }}" class="btn btn-danger btn-sm">Remove</a>
                            </td>
                        </tr>
                        <?php $totalprice = $totalprice + $cart->price;
                        $index++; ?>
                    @empty
                        <tr>
                            <th scope="row">{{ $index }}</th>
                            <td></td>
                            <td>Nothing's items here</td>
                            <td></td>
                        </tr>
                    @endforelse
                </tbody>
                <tr>
                    <th scope="row">Total Price: </th>
                    <td></td>
                    <th class="text-warning">$ {{ $totalprice }}</th>
                </tr>
            </table>
        </div>
        <div class="container">
            <table class="table table-light table-hover">
                <thead>
                    <h2 class="pt-2 text-center mb-2">Transaction History</h2>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Status Payment</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($order as $order)
                        <?php $totalprice = 0; ?>
                        <tr>
                            <th scope="row">{{ $index }}</th>
                            <td>{{ $order->product_name }}</td>
                            <td>$ {{ $order->price }}</td>
                            <td>{{ $order->quantity }} Month</td>
                            <td>{{ $order->payment_status }}</td>
                            <td><a href="{{ url('pay', $order->id) }}"
                                    class="btn btn-success text-white btn-sm">Remove</a>
                            </td>
                        </tr>
                        <?php $totalprice = $totalprice + $order->price; ?>
                        <? $index++; ?>
                    @empty
                        <tr>
                            <th scope="row">{{ 1 }}</th>
                            <td></td>
                            <td>Nothing's items here</td>
                            <td></td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="container">
            <h2>Proceed to order</h2>
            <a href="{{ url('payment', $totalprice) }}" class="btn btn-primary text-white">Continue</a>
        </div>
    </section>
</div>
