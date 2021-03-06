@extends('layouts.main')

@section('preloader')
    @include('partials._preloader1')
@endsection

@section('content')

            <!--Home Sections-->

            <section id="hello" class="blog-banner bg-mega">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home text-center">
                            <div class="about_text">
                                <h1 class="text-white text-uppercase">Blog</h1>
                                <ol class="breadcrumb">
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li class="active"><a href="{{route('blog')}}">Blog</a></li>
                                </ol>
                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->


            <!--Blog Features Section-->
            <section id="blog_fashion" class="blog_fashion roomy-100">
                <div class="container">
                    <div class="row">
                        <div class="main_blog_fashion">
                            <div class="col-md-8">
                                <div class="blog_fashion_left">
                                    <div class="blog_fashion_img">
                                        <img src="{{asset('/images/fashion-img1.jpg')}}" alt="" />
                                    </div>
                                    <div class="blog_fashion_content">
                                        <ol class="breadcrumb">
                                            <li><a href="#" class="text-black">Fashion</a></li>
                                            <li><a href="#" class="text-black">Feb 28th 2015</a></li>
                                            <li><a href="#" class="text-black">2 comments</a></li>
                                        </ol>
                                        <a href="{{route('blog-details')}}"><h2>International Fashion week 2015</h2></a>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                            suscipit lobortis nisl aliquip commodo consequat.Duis autem vel
                                            eum iriure dolor...</p>


                                        <a href="{{route('blog-details')}}" class="btn btn-default m-top-20"> Read More <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="blog_fashion_right">
                                    <div class="fashion_test text-center">
                                        <img class="img-circle" src="{{asset('/images/blog-test-img1.jpg')}}" alt="" />

                                        <h6 class="m-top-20">Pouseidon - From OCean</h6>
                                        <p class="m-top-20">With the waves from somewhere so far.
                                            We comes with elegants and beautiful.
                                            Just do what we love and always love what we do</p>
                                        <img class="m-top-20" src="{{asset('/images/blog-sign.png')}}" alt="" />
                                    </div>

                                    <div class="fashion_praspect m-top-40">
                                        <div class="fashion_praspect_inner bg-black">
                                            <p class="text-white">Good design is making something intelligible and memorable.
                                                Great design is making something memorable and meaningful.</p>
                                            <p class="text-white">_ Dieter Rams</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- End off row -->

                    <hr />

                    <div class="row">
                        <div class="blog_area fix">
                            <div class="col-md-4">
                                <div class="blog_item m-top-30">
                                    <div class="blog_item_img">
                                        <img src="{{asset('/images/blog/1.jpg')}}" alt="" />
                                    </div>
                                    <ol class="breadcrumb">
                                        <li><a href="#" class="text-black">Fashion</a></li>
                                        <li><a href="#" class="text-black">Feb 28th 2015</a></li>
                                    </ol>
                                    <h5>Street Girl with skate</h5>
                                    <p class="m-top-20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat....</p>
                                </div>
                            </div><!-- End off col-md-4 -->
                            <div class="col-md-4">
                                <div class="blog_item m-top-30">
                                    <div class="blog_item_img">
                                        <img src="{{asset('/images/blog/2.jpg')}}" alt="" />
                                    </div>
                                    <ol class="breadcrumb">
                                        <li><a href="#" class="text-black">Fashion</a></li>
                                        <li><a href="#" class="text-black">Feb 28th 2015</a></li>
                                    </ol>
                                    <h5>Street Girl with skate</h5>
                                    <p class="m-top-20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat....</p>
                                </div>
                            </div><!-- End off col-md-4 -->
                            <div class="col-md-4">
                                <div class="blog_item m-top-30">
                                    <div class="blog_item_img">
                                        <img src="{{asset('/images/blog/3.jpg')}}" alt="" />
                                    </div>
                                    <ol class="breadcrumb">
                                        <li><a href="#" class="text-black">Fashion</a></li>
                                        <li><a href="#" class="text-black">Feb 28th 2015</a></li>
                                    </ol>
                                    <h5>Street Girl with skate</h5>
                                    <p class="m-top-20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat....</p>
                                </div>
                            </div><!-- End off col-md-4 -->
                            <div class="col-md-4">
                                <div class="blog_item m-top-30">
                                    <div class="blog_item_img">
                                        <img src="{{asset('/images/blog/4.jpg')}}" alt="" />
                                    </div>
                                    <ol class="breadcrumb">
                                        <li><a href="#" class="text-black">Fashion</a></li>
                                        <li><a href="#" class="text-black">Feb 28th 2015</a></li>
                                    </ol>
                                    <h5>Street Girl with skate</h5>
                                    <p class="m-top-20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat....</p>
                                </div>
                            </div><!-- End off col-md-4 -->
                            <div class="col-md-4">
                                <div class="blog_item m-top-30">
                                    <div class="blog_item_img">
                                        <img src="{{asset('/images/blog/5.jpg')}}" alt="" />
                                    </div>
                                    <ol class="breadcrumb">
                                        <li><a href="#" class="text-black">Fashion</a></li>
                                        <li><a href="#" class="text-black">Feb 28th 2015</a></li>
                                    </ol>
                                    <h5>Street Girl with skate</h5>
                                    <p class="m-top-20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat....</p>
                                </div>
                            </div><!-- End off col-md-4 -->
                            <div class="col-md-4">
                                <div class="blog_item m-top-30">
                                    <div class="blog_item_img">
                                        <img src="{{asset('/images/blog/6.jpg')}}" alt="" />
                                    </div>
                                    <ol class="breadcrumb">
                                        <li><a href="#" class="text-black">Fashion</a></li>
                                        <li><a href="#" class="text-black">Feb 28th 2015</a></li>
                                    </ol>
                                    <h5>Street Girl with skate</h5>
                                    <p class="m-top-20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat....</p>
                                </div>
                            </div><!-- End off col-md-4 -->
                            <div class="col-md-4">
                                <div class="blog_item m-top-30">
                                    <div class="blog_item_img">
                                        <img src="{{asset('/images/blog/7.jpg')}}" alt="" />
                                    </div>
                                    <ol class="breadcrumb">
                                        <li><a href="#" class="text-black">Fashion</a></li>
                                        <li><a href="#" class="text-black">Feb 28th 2015</a></li>
                                    </ol>
                                    <h5>Street Girl with skate</h5>
                                    <p class="m-top-20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat....</p>
                                </div>
                            </div><!-- End off col-md-4 -->
                            <div class="col-md-4">
                                <div class="blog_item m-top-30">
                                    <div class="blog_item_img">
                                        <img src="{{asset('/images/blog/8.jpg')}}" alt="" />
                                    </div>
                                    <ol class="breadcrumb">
                                        <li><a href="#" class="text-black">Fashion</a></li>
                                        <li><a href="#" class="text-black">Feb 28th 2015</a></li>
                                    </ol>
                                    <h5>Street Girl with skate</h5>
                                    <p class="m-top-20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat....</p>
                                </div>
                            </div><!-- End off col-md-4 -->
                            <div class="col-md-4">
                                <div class="blog_item m-top-30">
                                    <div class="blog_item_img">
                                        <img src="{{asset('/images/blog/9.jpg')}}" alt="" />
                                    </div>
                                    <ol class="breadcrumb">
                                        <li><a href="#" class="text-black">Fashion</a></li>
                                        <li><a href="#" class="text-black">Feb 28th 2015</a></li>
                                    </ol>
                                    <h5>Street Girl with skate</h5>
                                    <p class="m-top-20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat....</p>
                                </div>
                            </div><!-- End off col-md-4 -->
                        </div>
                    </div>

                </div><!-- End off container -->
            </section><!-- End off blog Fashion -->

@endsection
