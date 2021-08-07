@extends('frontend.layouts.default')
@section('title','Sand blasting machine | Shot blasting machine | Grit blasting machine manufacturer')
@section('keywords','sand blasting machine, shot blasting machine, grit blasting machine, sand blasting machine manufacturer')
@section('description','Product- sand blasting machine, shot blasting machine, grit blasting machine, sand blasting machine manufacturer. Dustless blasting machine are offering a wide collection of Airless Shot Blasting Machines, Sandblasting machine, Thermal Spray Guns, Coating Wires, and Abrasive Blasting material to the clients in best quality.')

@section('canonical',URL::current())
@section('contant')
<div class="row">
    <div class="col-lg-3 pt-4 pb-0 mt-1" id="sidebar_data">
        <div class="sticky">

            <p class="product-range my-0">Filter By Categories</p>
            <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                <!-- Accordion card -->

                <div class="custom-card">

                    <!-- Card header -->

                    <div class="mx-2" role="tab" id="headingOne1">
                        @foreach( $category1 as $list )
                        <div class="form-check productfilter mt-2">
                            <div class="row">
                                <div class="col-2">
                                    <input type="checkbox" name="searchtext[]" class="form-check-input filter" id="{{ $list->id }}" value="{{ $list->id }}">
                                    <input type="hidden" name="name" class="form-check-input name" id="{{ @$name }}" value="{{ @$name->id }}">
                                    <input type="hidden" name="namec" class="form-check-input namec" id="{{ @$c }}" value="{{ @$c }}">
                                </div>
                                <div class="col-10">
                                    <label style="overflow: hidden; min-width: 5ch;  max-width: 25ch; text-overflow: ellipsis; white-space: nowrap;" for="{{ $list->id }}" class="form-check-label">{{ $list->category }}</label>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <span id="baseUrl" data-url="{{ route('productfilter') }}"></span>

    </div>

    <div class="col-lg-9 mt-1">

        <div class="page-top-info row">
            <div class="container">
                @if(isset($name))
                <h4>{{ $name->name  }}</h4>
                @else
                <h4>Products</h4>
                @endif
                <div class="site-pagination">
                    <a href="{{ url('/') }}">Home</a> /
                    @if(isset($name)) {{ $name->name  }} @else Product @endif
                </div>
            </div>
        </div>


        <!--</section>-->
        @if(!$product->isEmpty())
        <section class="row product-filter-section py-5" id="prod_list">
            @include('frontend.templates.product', compact('product'))
        </section>
        @else
        <section class="row product-filter-section py-5">
            <div class="container">
                <div class="row">

                    <div class="col-12 text-center">No Products Found</div>
                </div>
            </div>
        </section>
        @endif
    </div>
</div>
@stop