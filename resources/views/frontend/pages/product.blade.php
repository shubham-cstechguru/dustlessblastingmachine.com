@extends('frontend.layouts.default')
@section('title','Sand blasting machine | Shot blasting machine | Grit blasting machine manufacturer')
@section('keywords','sand blasting machine, shot blasting machine, grit blasting machine, sand blasting machine manufacturer')
@section('description','Product- sand blasting machine, shot blasting machine, grit blasting machine, sand blasting machine manufacturer. Dustless blasting machine are offering a wide collection of Airless Shot Blasting Machines, Sandblasting machine, Thermal Spray Guns, Coating Wires, and Abrasive Blasting material to the clients in best quality.')

@section('canonical',URL::current())
@section('contant')

<div class="page-top-info row">
<div class="container">
<h4>Product</h4>
<div class="site-pagination">
<a href="{{ url('/') }}">Home</a> / Product
</div>
</div>
</div>

        <!--</section>-->
<section class="row product-filter-section py-5">
    <div class="container">
        <div class="section-title">
            <h2 class="text-center">PRODUCTS</h2>
            <p class="pt-2 text-center my-5">We are manufacturer of different types of sand blasting machine, shot blasting machines.Our company manufacturing of two types of blasting related machine one is 'airblast' and second is 'wheelblast' machine.</p>
        </div>
        <div class="row">
            @foreach($product as $list)
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="product-item">
                        <div class="pi-pic">
                            <div class="card">
                                <a href="{{url('product/'.$list->slug) }}">
                                    @if($list->image!='')
    								<img src="{{url('imgs/product/'.$list->image)}}" alt="{{ $list->title }}" width="251">
    								@else
    								<img class="" src="{{url('imgs/unavailable-image-300x225.jpg')}}" alt="{{ $list->title }}" >
    								@endif
                                </a>
                                <div class="pi-text my-3" style="min-height:50px;">
                                    <a href="{{ url('product/'.$list->slug) }}" style="padding:0">
                                        <p class="text-center font-weight-bold">{{$list->title}}</p>
                                    </a>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $product->links() }}
    </div>
</section>

@stop
