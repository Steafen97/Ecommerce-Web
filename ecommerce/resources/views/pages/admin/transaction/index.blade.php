@extends('layouts.master')

@section('content')

<div class="orders ml-20 ">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Pembelian Terbaru </h4>
                            </div>
                            <div class="card-body--">
                                <div class="table-stats order-table ov-h">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th class="serial">#</th>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="serial">1.</td>
                                                <td> #5469 </td>
                                                <td> <span class="name">Louis Stanley</span> </td>
                                                <td> <span class="product">Uniqlo</span> </td>
                                                <td><span class="count">1</span></td>
                                                <td>
                                                    <span class="badge badge-complete">Complete</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="serial">2.</td>
                                                <td> #5468 </td>
                                                <td> <span class="name">Gregory Dixon</span> </td>
                                                <td> <span class="product">ZARA</span> </td>
                                                <td><span class="count">1</span></td>
                                                <td>
                                                    <span class="badge badge-complete">Complete</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="serial">3.</td>
                                                <td> #5467 </td>
                                                <td> <span class="name">Catherine Dixon</span> </td>
                                                <td> <span class="product">H&M</span> </td>
                                                <td><span class="count">1</span></td>
                                                <td>
                                                    <span class="badge badge-complete">Complete</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="serial">4.</td>
                                                <td> #5466 </td>
                                                <td> <span class="name">Mary Silva</span> </td>
                                                <td> <span class="product">Pull&Bear</span> </td>
                                                <td><span class="count">1</span></td>
                                                <td>
                                                    <span class="badge badge-pending">Pending</span>
                                                </td>
                                            </tr>
                                            <tr class=" pb-0">
                                                <td class="serial">5.</td>
                                                <td> #5465 </td>
                                                <td> <span class="name">Johnny Stephens</span> </td>
                                                <td> <span class="product">Bershka</span> </td>
                                                <td><span class="count">1</span></td>
                                                <td>
                                                    <span class="badge badge-complete">Complete</span>
                                                </td>
                                            </tr>
                                            <tr class=" pb-0">
                                                <td class="serial">5.</td>
                                                <td> #5466 </td>
                                                <td> <span class="name">Kim Ratchet</span> </td>
                                                <td> <span class="product">Nama</span> </td>
                                                <td><span class="count">1</span></td>
                                                <td>
                                                    <span class="badge badge-complete">Complete</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- /.table-stats -->
                            </div>
                        </div> <!-- /.card -->
                    </div> <!-- /.col-lg-8 -->

@endsection