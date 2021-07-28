@extends('frontend.layouts.default')
@section('title','About - Portable Shot blasting machine | sand blasting machine | Grit blasting machine')
@section('keywords','sand blasting machine, shot blasting machine, grit blasting machine, sand blasting machine manufacturer')
@section('description','About us - Dustless blasting machine are offering a wide collection of Airless Shot Blasting Machines, Sandblasting machine, Thermal Spray Guns, Coating Wires, and Abrasive Blasting material to the clients in best quality. sand blasting machine, shot blasting machine, grit blasting machine, sand blasting machine manufacturer.')

@section('canonical',URL::current())
@section('contant')

    <!-- section -->
         <div class="section about_section layout_padding padding_top_0">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 pb-5">
                     <div class="full">
                        <div class="heading_main text_align_center pt-5">
                           <!--<h2 class="margin-bottom_30"><strong class="small theme_color">Increase your client for</strong> &nbsp; Better position of Business</h2>-->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                     <div class="full text_align_center">
                        <img class="img-responsive" src="{{url('imgs/abouts/'.$about->image)}}" alt="Adhesive Tape Manufacturer in India"/>   
                      </div>
                  </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pt-5">
                     <div class="full">
                        <div class="heading_small pb-4">
                          <p class="other-heading">{{ $about->title }}</p>
                        </div>
                    </div>
                    <p>{!! $about->description !!}</p>
                  </div>
                 
               </div>
            </div>
         </div>
         <!-- end section -->

@stop