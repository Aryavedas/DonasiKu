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
                                <td>Donation Type</td>
                                <td>{{ $validate['donation_type'] }}</td>
                            </tr>
                            <tr>
                                <td>Amount</td>
                                <td>{{ $validate['amount'] }}</td>
                            </tr>
                            <tr>
                                <td>Note</td>
                                <td>{{ $validate['note'] }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn btn-primary">Checkout</a>
            </div>
        </div>
    </div>
</div>
@endsection
