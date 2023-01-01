<div>
    <section class="section-header pb-7 pb-lg-11 bg-soft">
        <div class="container">
            <div class="row">
                <div class="col-4-sm">
                    <div class="card align-items-center">
                        <div class="card-header">
                            <p>Details Order to Pay</p>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 d-flex ">
                                <label for="nameproduct" class="form-label mr-4">Product Name </label>
                                <label class="form-label"> : {{ $dorder->product_name }}</label>
                            </div>
                            <div class="mb-3 d-flex ">
                                <label for="nameproduct" class="form-label mr-4">Product Quantity </label>
                                <label class="form-label"> : {{ $dorder->quantity }}</label>
                            </div>
                            <div class="mb-3 d-flex ">
                                <label for="nameproduct" class="form-label mr-4">Name Order </label>
                                <label class="form-label"> : {{ $dorder->name }}</label>
                            </div>
                            <div class="mb-3 d-flex ">
                                <label for="nameproduct" class="form-label mr-4">Phone Order </label>
                                <label class="form-label"> : {{ $dorder->phone }}</label>
                            </div>
                            <div class="mb-3 d-flex ">
                                <label for="nameproduct" class="form-label mr-4">Status Order </label>
                                <label class="form-label"> : {{ $dorder->payment_status }}</label>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success text-white" id="pay-button">Pay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    alert("payment success!");
                    console.log(result);
                },
                onPending: function(result) {
                    /* You may add your own implementation here */
                    alert("wating your payment!");
                    console.log(result);
                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    alert("payment failed!");
                    console.log(result);
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        });
    </script>
</div>
