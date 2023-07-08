@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detail Checkout</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Isian Form</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>{{ $validate['donor_name'] }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $validate['donor_email'] }}</td>
                                </tr>
                                <tr>
                                    <td>Tipe Donasi</td>
                                    <td>{{ $validate['donation_type'] }}</td>
                                </tr>
                                <tr>
                                    <td>Jumlah Donasi</td>
                                    <td>{{ $validate['amount'] }}</td>
                                </tr>
                                <tr>
                                    <td>Catatan</td>
                                    <td>{{ $validate['note'] }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <button class="btn btn-primary" id="pay-button">Checkout</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('snap-script')
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    alert("payment success!");
                    $userKey = '{{ $snapToken }}';
                    window.location.href = "/after-payment?userKey=" + $userKey;
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
@endsection
