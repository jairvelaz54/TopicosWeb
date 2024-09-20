@extends('layouts.e-commerce')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <hr>DATATABLES<hr>
            <table id="tblProducts" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>PRICE</th>
                        <th>SIZE</th>
                        <th>COLOR</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->sale_price }}</td>
                            <td>{{ $product->size }}</td>
                            <td>{{ $product->color }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


        </div>

        <div class="col-md-6">
            <hr>DATATABLES USING AJAX<hr>
            <!--<select name="cboxcategory" id="cboxcategory">
            </select>-->
            
            <select id="cmbCategoryList" class="js-data-example-ajax" style="width: 100%"></select>
            <table id="tblProducts2" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>PRICE</th>
                        <th>SIZE</th>
                        <th>COLOR</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>


        </div>
    </div>
</div>
@endsection
