@extends('frontend.layouts.default')
@section('title','Blog - sand blasting machine | Shot blasting machine | Grit blasting machine')
@section('keywords','sand blasting machine, shot blasting machine, grit blasting machine, sand blasting machine manufacturer')
@section('description','Blog - sand blasting machine, shot blasting machine, grit blasting machine, sand blasting machine manufacturer. Contact us for more details.')
@section('canonical',URL::current())
@section('contant')

<div class="page-top-info row">
<div class="container">
<h4>Blog</h4>
<div class="site-pagination">
<a href="{{ url('/') }}">Home</a> / Blog
</div>
</div>
</div>

        <!--</section>-->
<section class="row product-filter-section py-5">
    <div class="container">
        <div class="section-title">
            <h2 class="text-center">BLOGS</h2>
            <p class="pt-2 text-center my-5"> Shot Blasting is a surface treatment process using high velocity steel abrasive. Shot blasting is method through which it is possible to obtain excellent cleaning and surface preparation for secondary finishing operations. A shot blasting machine is used in a closed circuit for the surface treatment of cast or forged metal products. Shot blasting is commonly used for: • The cleaning of iron, steel, non-cast parts, forgings, etc. We offer shot blasting machines in various models of tumblast, swing table, spinner hanger, multitable, dust collectors & custom built machines.</p>
        </div>
        <div class="row">
            @foreach($blog as $list)
                <div class="col-lg-3 col-sm-6 mb-1">
                    <div class="product-item">
                        <div class="pi-pic">
                            <div class="card">
                                <a href="{{ url('blog/'. $list->slug)}}">
                                    @if($list->image!='')
    								<img src="{{url('imgs/blogs/'.$list->image)}}" alt="{{ $list->title }}" width="251">
    								@else
    								<img class="" src="{{url('imgs/unavailable-image-300x225.jpg')}}" alt="{{ $list->title }}">
    								@endif
                                </a>
                                <div class="pi-text my-3" style="min-height:50px;">
                                    <a href="{{ url('blog/'. $list->slug)}}" style="padding:0">
                                        <p class="text-center font-weight-bold">{{$list->title}}</p>
                                    </a>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $blog->links() }}
    </div>
</section>

@stop
