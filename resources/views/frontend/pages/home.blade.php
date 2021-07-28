@extends('frontend.layouts.default')
@section('title','Dustless Blasting Machine for Sale in India | Sandblasting Equipment for Sale')
@section('description','Dustlessblastingmachine: Dustless Blasting Machine for Sale, Sand Blasting Machine for Sale and Sand Blasting Equipment Sale in India. Buy now Dustless Blasting Machines at a reliable price. Call us at - +91-741389713')
@section('keywords', ' dustless blasting machine, dustless blasting equipment for sale, dustless blasting machine for sale, dustless sandblasting machine, sand blasting machine manufacturer, shot blasting machine manufacturer,sand blasting machine for sale, dustless blasting machine for sale, sand blasting equipments for sale, sandblasting machine for sale, sandblasting equipment for sale')
@section('canonical',URL::current())
@section('contant')
       <div class="responsive my-4" style="margin:10px 0;">
       @foreach($product as $list)
            <div class="col-lg-3 col-sm-6 mb-1">
                <div class="product-item">
                    <div class="pi-pic">
                        <div class="card">
                            <a href="{{ url('product/'. $list->slug)}}">
                                @if($list->image!='')
								<img src="{{url('imgs/product/'.$list->image)}}" alt="{{ $list->title }}">
								@else
								<img class="" src="{{url('imgs/unavailable-image-300x225.jpg')}}" alt="{{ $list->title }}">
								@endif
                            </a>
                            <div class="pi-text" style="min-height:50px;">
                                <a href="{{ url('product/'. $list->slug)}}" style="padding:0">
                                    <p class="text-center font-weight-bold my-3 font-color">{{$list->title}}</p>
                                </a>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
            
        @endforeach
     
  </div>
  
	<div class="mt-0" style="margin-bottom: 100px;">
    <div class="row self-adhesive-head">
      <a href="" style="width: 20px;"><img src="{{ url('imgs/zero.gif')}}" alt="Self-Adhesive Specialty Tapes &amp; Labels"></a>
      <strong>
        <span class="cpo">
          <a href="#">Sand Blasting Machine & Blast Rooms Labels</a>
        </span>
      </strong>
    </div>
    <div class="adhesive-list mt-4">
      <ul>
        @foreach($category as $list)  
       <li><a href="{{url('category/'.$list->slug_category)}}"> {{ $list-> category }}</a></li>
        @endforeach
      </ul>
    </div>
    <!--<a href="" class="btn btn-link float-right home-view" style="text-decoration: none;">View All</a>/-->
  </div>
<div>
  <div>
    <div>
    <span style="font-size:1.5rem">Welcome to </span><h1 class="my-4 text-center" style="display:inline-block;font-size:1.2rem;">Sand Blasting Machine | Shot Blasting Machine Manufacturer's in India</h1>
   
    <div class="cosmos-list">
      <ul>
        <li>
          <span></span>Nature of Business<br>
          <span class="btm">Manufacturer</span>
        </li>
        <li>
          <span></span>Total Number of Employees<br>
          <span class="btm">26 to 50 People</span>
        </li>
        <li>
          <span></span>Year of Establishment<br>
          <span class="btm">2000</span>
        </li>
        <li>
          <span></span>Legal Status of Firm<br>
          <span class="btm">Limited Company (Ltd./Pvt.Ltd.)</span>
        </li>
        <li>
          <span></span>Annual Turnover<br>
          <span  class="btm">Rs. 2 - 5 Crore</span>
        </li>
        <li>
          <span class="blow etaSpt gstn"></span>GST No.<br>
          <span  class="btm">09AACCC5777D1ZK</span>
        </li>
      </ul>
    </div>
      <!-- Start Section -->
    <div class="row" id="data_align">
      <div class="col-lg-7">
        <p>Dustless Blasting Machine Engineering provide dustless blasting systems that can be employed to quickly and efficiently remove a variety of coatings, corrosion and residues, leaving surfaces pristine, contaminant free and profiled ready for re-coating or painting.Dustless blasting employs both the simplicity of a standard dry blasting system along with ultra-high pressure water jetting, producing increased power and efficiency without the associated hazards and complications of conventional dry blast methods.</p>
        <p> Our company is manufacturing a good range of Sand Blasting Machine, Shot Blasting Machine, <a href="https://www.sandblastingmachine.in/sand-blasting-cabinet/" target="_blank">Sand Blasting Cabinet</a>,<a href="http://www.blaster.co.in/shot-blasting-room/" target="_blank">Blast Room</a>, Dust Collector Unit, Industrial Blowers, etc</b>, and supplier of pneumatically operated & wheel operated <a href="https://www.shotblastingmachines.in/airless-shot-blasting/" target="_blank">shot blasting machines</a> which are at par fulfilling international quality standards. Except for standardized models, it manufactures custom-built machines as per consumer requirements. The products are thoroughly tested by the quality department & rigorous development is achieved by a professional design team in bringing new concepts. The company offers Cost-Effective, Genuine, and Unmatched Spares for all kind of Sand/Shot Blasting Machines. We also supply superior quality safety wears and we are the leading suppliers and exporters of premium quality Abrasives.</p>
        
        
      </div>
      <div class="col-lg-5">
        <div class="side-contant">
          <div class="m8 sw1">
            <img src="imgs/sandblastingmachine.jpg" alt="sand blasting machine for sale" class="side-img-brdr" ></div>
            <div style="clear:both"></div>
          </div>
      </div>
      <div class="col-md-12">
         <h2>Dustless Blasting Machine Strengths</h2>
        <p>Backed by huge industry experience and business policies, we have acquired a preeminent position in the market. Our clients have appreciated our efforts and showed their support by placing repetitive order of products. Following factors helped us make a mark in the industry:</p>
        <ul>
            <li>Ethical Business Practices</li>
            <li>Quality Products</li>
            <li>Precision Work</li>
            <li>Competitive Prices</li>
            <li>Timely Delivery</li>
        </ul>
        <h3>Application of Dustless blasting machine:</h3>
        <p>Dustless blasting is very cost effective in terms of consumption and waste removal costs. Dustless blasting is extremely versatile and can be used in a wide variety of situations, including:</p>
        <ul>
            <li>Industrial steel preparation</li>
            <li>Rust and paint removal</li>
            <li>Graffiti removal </li>
            <li>Deposit, mark and stain removal</li>
            <li>Road marking removal and cleaning</li>
            <li>Steel, wood and fibreglass cleaning</li>
            <li>Removal of limpet residue and textured coatings</li>
        </ul>
        <h3>Benefits of Dustless blasting machine:</h3>
        <p>Other benefits of dustless blasting over conventional blasting methods include: Dustless  Machine is a great invention because of its great advantages to the entire shot or <a href="https://www.airoshotblast.net/main-product/41-Sand-Blasting-Machine" target="_blank">sand blasting machine</a> industry. It has great benefits over traditional blasting machine methods. Dustless blasting machine also meets the needs of the cleaning industry since the dustless blasting machines provide several features which require professionalism during their operation. All machines are easily fitted to the well-designed piece of the remote controllers to make them easy to operate. Dustless blasting machine contains a dead man switch and the silencer which particularly help in reducing the cost of labor. Some of the benefits are discussed below.</p>
        <ul>
            <li>Non-sparking – Safe in hazardous environments</li>
            <li>Highly productive – Short time frames and reduced      labour costs</li>
            <li>No plant shutdown required – Items can be blasted on site</li>
            <li>Very little residue – Fast clean up</li>
            <li>Significantly less noise than conventional blasting</li>
            <li>De-paint and de-grease all in one step</li>
            <li>Inhibits rust for 72 hours after blasting</li>
            <li>Produces a feathered edge to blast area – Seamless quality repairs</li>
            <li>Improved profiling of substrate for superior adhesion of paint or coatings</li>
            <li>Removes soluble salts and chlorides</li>
        </ul> 
      </div>
    </div> 
    <!-- End Section -->
        <!--</section>-->
    <section class="row product-filter-section py-5 my-4" style="background: #f1f1f1;">
        <div class="container">
            <div class="section-title">
                <p class="text-center other-heading mb-4">BLOGS</p>
                <p class="pb-4 text-center">Our machines with international standards, Due to the design, the machines are economical, robust, more efficient and wore out spares are easily replaceable. The company  have dedicated service engineers in field for erection and post sales.</p>
            </div>
            <div class="row">
                @foreach($blog as $list)
                    <div class="col-lg-3 col-6 col-sm-6 mb-1">
                        <div class="product-item">
                            <div class="pi-pic">
                                <div class="card">
                                    <a href="{{ url('blog/'. $list->slug)}}">
                                        @if($list->image!='')
        								<img src="{{url('imgs/blogs/'.$list->image)}}" alt="{{ $list->title }}" >
        								@else
        								<img class="" src="{{url('imgs/unavailable-image-300x225.jpg')}}" alt="{{ $list->title }}">
        								@endif
                                    </a>
                                    <div class="pi-text my-3" style="min-height:50px;">
                                        <a href="{{ url('blog/'. $list->slug)}}" style="padding:0">
                                            <p class="text-center font-weight-bold  blog-title font-color">{{$list->title}}</p>
                                        </a>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

      <!-- Start Section -->
    <div class="tell-us-contant mt-5">
      <p class="tell-us-head">Tell Us What Are You Looking For ?</p>
      <form class="mx-3">
        
        <textarea class="form-control form-group" rows="4" cols="100" placeholder="Describe Your requirement in details :"></textarea>
        <input type="number" name="number" class="form-control form-group" placeholder="Enter Your Number">
        <input type="text" name="name" class="form-control form-group" placeholder="Enter Your Name">
        <button class="btn search-btn mb-3" style="margin: auto;">Send it Now</button>
      </form>
    </div>

 
@stop