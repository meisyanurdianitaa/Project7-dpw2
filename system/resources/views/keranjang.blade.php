<style>
    @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');

    body {
        font-family: 'Manrope', sans-serif;
        background: #eee
    }

    .size span {
        font-size: 11px
    }

    .color span {
        font-size: 11px
    }

    .product-deta {
        margin-right: 70px
    }

    .gift-card:focus {
        box-shadow: none
    }

    .pay-button {
        color: #fff
    }

    .pay-button:hover {
        color: #fff
    }

    .pay-button:focus {
        color: #fff;
        box-shadow: none
    }

    .text-grey {
        color: #a39f9f
    }

    .qty i {
        font-size: 11px
    }

</style>
<link rel="stylesheet" href="{{url('public')}}/css/bootstrap.min.css">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <div class="p-2">
                <h4>Keranjang Saya</h4>
            </div>


            <table width="100%">
                <!-- star loop -->
                <tr height=100px>
                    <td width="25%"><img class="rounded" src="{{url('public')}}/icon/taszara.png" width="70"></td>
                    <td width="25%"><span class="font-weight-bold">Tas Zara</span></td>
                    <td width="25%">
                        <h5 class="text-grey mt-1 mr-1 ml-1"> <button class="btn btn-light"><i class="fa fa-minus"></i> </button> 2 <button class="btn btn-light"><i class="fa fa-plus"></i></h5>
                    </td>
                    <td width="25%">
                        <h5 class="text-grey">Rp. 275.000</h5>
                    </td>
                    <td><a href="" class="btn btn-danger"><i class="fa fa-trash-o"></i></a></td>
                </tr>
                <!-- end loop -->

                <tr height=100px>
                    <td width="25%"><img class="rounded" src="icon/shoeshermes.png" width="70"></td>
                    <td width="25%"><span class="font-weight-bold">Shoes Hermes</span></td>
                    <td width="25%">
                    <h5 class="text-grey mt-1 mr-1 ml-1"> <button class="btn btn-light"><i class="fa fa-minus"></i> </button> 2 <button class="btn btn-light"><i class="fa fa-plus"></i></h5>
                    </td>
                    <td width="25%">
                        <h5 class="text-grey">Rp. 245.000</h5>
                        <td><a href="" class="btn btn-danger"><i class="fa fa-trash-o"></i></a></td>
                    </td>
                </tr>

                <tr height=100px>
                    <td width="25%"><img class="rounded" src="icon/tasck.png" width="70"></td>
                    <td width="25%"><span class="font-weight-bold">Tas Charles&Keith</span></td>
                    <td width="25%">
                    <h5 class="text-grey mt-1 mr-1 ml-1"> <button class="btn btn-light"><i class="fa fa-minus"></i> </button> 2 <button class="btn btn-light"><i class="fa fa-plus"></i></h5>
                    </td>
                    <td width="25%">
                        <h5 class="text-grey">Rp. 244.900</h5>
                    </td>
                    <td><a href="" class="btn btn-danger"><i class="fa fa-trash-o"></i></a></td>
                </tr>

                <tr height=100px>
                    <td width="25%"><img class="rounded" src="{{url('public')}}/icon/shoesgucci.png" width="70"></td>
                    <td width="25%"><span class="font-weight-bold">Shoes Gucci</span></td>
                    <td width="25%">
                    <h5 class="text-grey mt-1 mr-1 ml-1"> <button class="btn btn-light"><i class="fa fa-minus"></i> </button> 2 <button class="btn btn-light"><i class="fa fa-plus"></i></h5>
                    </td>
                    <td width="25%">
                        <h5 class="text-grey">Rp. 400.000</h5>
                    </td>
                    <td><a href="" class="btn btn-danger"><i class="fa fa-trash-o"></i></a></td>
                </tr>
            </table>


           
            <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><input type="text"
                    class="form-control border-0 gift-card" placeholder="Voucher Faeyza"><button
                    class="btn btn-outline-warning btn-sm ml-2" type="button">Gunakan</button></div>
            <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><button
                    class="btn btn-warning btn-block btn-lg ml-2 pay-button" type="button">CheckOut</button></div>
        </div>
    </div>
</div>
