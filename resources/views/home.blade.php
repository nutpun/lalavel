@extends('layout.master')
@section("content")
<div class="container">
            <div class="carousel slide" data-ride="carousel" id="carousel-1">
                <div class="carousel-inner" role="listbox">
                  @php($i=0)
                @foreach($banners as $banner)
                    <div class="carousel-item @if($i == 0) active @endif">
                      <img class="w-100 d-block" src="{{$banner->path}}"
                            alt="{{$banner->title}}">
                      </div>
                      @php($i++)
                 @endforeach
                </div>
           
                <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span
                            class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button"
                        data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                
            </div>
        </div>
        <div class="container mt-md-4">
            <div class="row">
                <div class="col-md-8">
                    <h4>News :</h4>
                    <div class="block-content">
                        <div class="clean-blog-post">
                            <div class="row">
                                <div class="col-lg-5"><img class="rounded img-fluid" src="assets/img/tech/image4.jpg"></div>
                                <div class="col-lg-7">
                                    <h3>Lorem Ipsum dolor sit amet</h3>
                                    <div class="info"><span class="text-muted">Jan 16, 2018 by&nbsp;<a href="#">John
                                                Smith</a></span></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna,
                                        dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis
                                        vitae leo.</p><a href="/blog-post.html" class="btn btn-outline-primary btn-sm"
                                        type="button">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="clean-blog-post">
                            <div class="row">
                                <div class="col-lg-5"><img class="rounded img-fluid" src="assets/img/tech/image4.jpg"></div>
                                <div class="col-lg-7">
                                    <h3>Lorem Ipsum dolor sit amet</h3>
                                    <div class="info"><span class="text-muted">Jan 16, 2018 by&nbsp;<a href="#">John
                                                Smith</a></span></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna,
                                        dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis
                                        vitae leo.</p><button class="btn btn-outline-primary btn-sm" type="button">Read
                                        More</button>
                                </div>
                            </div>
                        </div>
                        <div class="clean-blog-post">
                            <div class="row">
                                <div class="col-lg-5"><img class="rounded img-fluid" src="assets/img/tech/image4.jpg"></div>
                                <div class="col-lg-7">
                                    <h3>Lorem Ipsum dolor sit amet</h3>
                                    <div class="info"><span class="text-muted">Jan 16, 2018 by&nbsp;<a href="#">John
                                                Smith</a></span></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna,
                                        dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis
                                        vitae leo.</p><button class="btn btn-outline-primary btn-sm" type="button">Read
                                        More</button>
                                </div>
                            </div>
                        </div>
                        <div class="clean-blog-post">
                            <div class="row">
                                <div class="col-lg-5"><img class="rounded img-fluid" src="assets/img/tech/image4.jpg"></div>
                                <div class="col-lg-7">
                                    <h3>Lorem Ipsum dolor sit amet</h3>
                                    <div class="info"><span class="text-muted">Jan 16, 2018 by&nbsp;<a href="#">John
                                                Smith</a></span></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna,
                                        dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis
                                        vitae leo.</p><button class="btn btn-outline-primary btn-sm" type="button">Read
                                        More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <form action="#" method="POST">
                        <div class="input-group mb-3">
                            <input name="query" type="text" class="form-control" placeholder="Search.." aria-label="Search"
                                aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                            </div>
                        </div>
                    </form>
                    <div class="text-center mt-4">

                        <a target="_blank" href="http://www.cmru.ac.th" title="มหาวิทยาลัยราชภัฏเชียงใหม่ : Chiang Mai Rajabhat University - สถาบันอุดมศึกษาเพื่อพัฒนาท้องถิ่น"><img
                                src="https://www.cmru.ac.th/assets/images/link/exchange/300_250.jpg" style="width: 100%"
                                alt="มหาวิทยาลัยราชภัฏเชียงใหม่"></a>


                    </div>
                    <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-title">Latest Comment ::</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="/" class="text-muted">Bundit Nuntates ใน Lorem
                                        ipsum
                                        dolor sit amet, consectetur adipiscing elit</a></li>
                                <li class="list-group-item"><a href="/" class="text-muted">Bundit Nuntates ใน Lorem
                                        ipsum
                                        dolor sit amet, consectetur adipiscing elit</a></li>
                                <li class="list-group-item"><a href="/" class="text-muted">Bundit Nuntates ใน Lorem
                                        ipsum
                                        dolor sit amet, consectetur adipiscing elit</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mt-md-4">
                        <div class="card-body">
                            <h5 class="card-title">Categories ::</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="/" class="text-muted">Crime</a></li>
                                <li class="list-group-item"><a href="/" class="text-muted">Game</a></li>
                                <li class="list-group-item"><a href="/" class="text-muted">Science</a></li>
                                <li class="list-group-item"><a href="/" class="text-muted">Sport</a></li>
                                <li class="list-group-item"><a href="/" class="text-muted">Fashion</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <section class="clean-block features">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Features</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor
                        in, mattis vitae leo.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 feature-box"><i class="icon-star icon"></i>
                        <h4>Bootstrap 4</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec
                            auctor in, mattis vitae leo.</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-pencil icon"></i>
                        <h4>Customizable</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec
                            auctor in, mattis vitae leo.</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-screen-smartphone icon"></i>
                        <h4>Responsive</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec
                            auctor in, mattis vitae leo.</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-refresh icon"></i>
                        <h4>All Browser Compatibility</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec
                            auctor in, mattis vitae leo.</p>
                    </div>
                </div>
            </div>
        </section>
@endsection

