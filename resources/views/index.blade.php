@extends('layouts.frontend')
@section('content')   
   <style>
    .btn-primary{
    color: #ffffff!important;
    background-color: #2083fb!important;
    border-color: #2083fb!important;
    }
    .title-center1{
        text-align: center;
        margin-left: 257px;
        font-size: 30px;
        line-height: 40px;
        font-weight: 600;

    }
    .title-center2{
        text-align: center;
        margin-left: 257px;

    }
    .class-dot{
        font-size: 26px;
        font-weight: bold;
    }
    .slogan1{
        max-width: 479px;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }
    .slogan2{
        text-align: center;
        font-weight: 800;
    }
    </style>
<section class="w3l-index3" id="about">
    <div class="midd-w3 py-5">
        
        <div class="container py-lg-5 py-md-3">
            <div class="pa-medicine-box">
                <div class="row">
                    <div class="col-lg-7 mb-lg-0 mb-md-5 mb-4 align-self">
                        <h3 class="title-left mx-0">Start your journey for a healthy body & peaceful mind</h3>
                        <p class="mt-md-4 mt-3">Using AI enabled tongue assessment & Get personalized recommendation.</p>
                        <div class="slogan">
                                <h3 style="text-align: center; padding: 10px;">SWASTHA</h3>
                                <div class="slogan1">
                                    <p>"sama dosha<span class="class-dot">.</span>sama agni<span class="class-dot">.</span>sama dhatu<span class="class-dot">.</span>mala kriya<span class="class-dot">.</span>prasanna atma<span class="class-dot">.</span>indriya<span class="class-dot">.</span>mana swastha iti abhidheeyate"</p>
                                    
                                </div>
                                <div class="slogan2">
                                    <p>Sushruta Samhita 15,41</p>
                                </div>
                              
                        </div>
                        <p> </p>
                    </div>
                    <div class="col-lg-5">
                        <div class="position-relative">
                            <img src="{{asset('frontend/images/tree.jpeg')}}" alt="" class="radius-image img-fluid" id="first_img">
                        </div>
                    </div>
                    <div class="flex-parent jc-center">
                    <a href="{{url('/user-login')}}" class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2 margin-right" > Check yourself</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="midd-w3 py-5">
        
        <div class="container py-lg-5 py-md-3">
            <div class="pa-medicine-box">
                <div class="row">
                <div class="col-lg-12">
                <h3 class="title-center1" >Assess your real self</h3><br>
                <h4 class="title-center2" >Create your Ayurvedic profile & know imabalance of body & mind</h4>
                
                </div>
                <div class="col-lg-5">
                        <div class="position-relative">
                            <img src="{{asset('frontend/images/anulom_vilom.jpg')}}" alt="" class="radius-image img-fluid" id="second_image" style="max-width:250px;">
                        </div>
                    </div>
                    <div class="col-lg-7 mb-lg-0 mb-md-5 mb-4 align-self">
                       
                      
                        <p class="mt-md-4 mt-3">Understanding yourself is first step for a healthy life & peaceful mind</p>
                        <p class="mt-md-4 mt-3"><strong>Tridosh Imbalace</strong>  lead to various ailmnents & chronic disease</p>
                        <p class="mt-md-4 mt-3"><strong>Triguna assessment -</strong> Our AI will help you to recognize your traits, desires & influences which will be otherwise difficult for you & will help you to find inner peace(emotional & spiritual)</p>
                        
                    </div>
                
                   
                </div>
            </div>
        </div>
    </div>

    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3">
            <div class="pa-medicine-box">
                <div class="row">
                    <div class="col-lg-12">
                    <h3 class="title-left mx-0">Personalised recommendation  to achieve Body & mind balance</h3>
                    <p class="mt-md-4 mt-3">Ayurveda says each person is unique so its problems therefore solution has to be personalized & holistic.</p>
                        
                    </div>
                    <div class="col-lg-7 mb-lg-0 mb-md-5 mb-4 align-self" id="left_section">
                        <div class="last_section">
                        <h2>Our expert recommend you:</h2>
                        <ul class="content-list">
                            <li>Aahar (Diet)</li>
                            <li>Vihar ( Lifestyle)</li>
                            <li>Aushadhi (herbal mixture/supp)</li>
                        </ul>
                         <h4><strong>First step will focus on Aahar & Vihar for next 15 days</strong></h4>
                        </div>
                        <div class="flex-parent jc-center">
                            <a href="{{url('/user-login')}}" class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2 margin-right" > Check yourself</a>
                        </div>
                    </div>
                    <div class="col-lg-5" id="right-section">
                        <div class="position-relative" id="last_img">
                            <img src="{{asset('frontend/images/bujang_asan.jpg')}}" alt="" class="radius-image img-fluid" id="center_image">
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</section>
   
   
   
   
   
   
    <!-- <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="pa-medicine-box">
                <img src="{{asset('frontend/images/xdOHsE.png')}}" alt="image" class="img-fluid">
                <h2><a href="#">Start your journey for a healthy body & peaceful mind</a></h2>
                <a href="#">Using AI enabled tongue assessment & Get personalized recommendation</a>
                <img src="{{asset('frontend/images/lpdBqA.png')}}" alt="image" class="img-fluid">
                
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="pa-medicine-box">
                <img src="{{asset('frontend/images/A0USL5.png')}}" alt="image" class="img-fluid">
                <h2><a href="#">Assess your real self </a></h2>
                <a href="#">Create your Ayurvedic profile & know imabalance of body & mind</a>
                <p>Understanding yourself is first step for a healthy life & peaceful mind</p>
                <p><strong>Tridosh Imbalace</strong>  lead to various ailmnents & chronic disease</p>
                <p><strong>Triguna assessment -</strong> Our AI will help you to recognize your traits, desires & influences which will be otherwise difficult for you & will help you to find inner peace(emotional & spiritual)</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="pa-medicine-box">
                <img src="{{asset('frontend/images/s84hkf.png')}}" alt="image" class="img-fluid">
                <h2><a href="#">Personalised recommendation  to achieve Body & mind balance </a></h2>
                
                <a href="#"> Ayurveda says each person is unique so its problems therefore solution has to be personalized & holistic</a>
                <h2>Our expert recommend you:</h2>
                    <ul class="content-list">
                    <li>Aahar (Diet)</li>
                    <li>Vihar ( Lifestyle)</li>
                    <li>Aushadhi (herbal mixture/supp)</li>

                    </ul>
                <h6>Firsrt step will focus on Aahar & Vihar for next 15 days</h6>
            </div>
        </div>                
    </div> -->
@endsection