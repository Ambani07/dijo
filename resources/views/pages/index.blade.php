@extends('layouts.app')

@section('top-section')
<header class="header">

  <div class="header__text-box mt-5">
      <h1 class="heading-primary">
          <span class="heading-primary--main">Dijo</span>
          <span class="heading-primary--sub">africa at it's best</span>
      </h1>
      <a href="#" class="custom-btn--white btn custom-btn btn--animated">Reservation</a>
  </div>
  
</header>
@endsection

@section('content')

<div class="container menu">
    
        <div class="row">
                
            <div class="col-md-6 meals">
                <div class="sub-menu">
                    <h5 class="card-title text-center drinks"><span class="heading-primary--sub">Drink</span></h5>

                    <ul class="list-group list-group-flush text-center">
                      @foreach ($drinks as $drink)
                          <li class="list-group-item">{{$drink->name}} <span></span>R {{ $drink->price }}</li>
                      @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-6 meals ">
                <div class="sub-menu">
                    
                    <h5 class="card-title text-center drinks"><span class="heading-primary--sub">Main Dishes</span></h5>

                    <ul class="list-group list-group-flush text-center">
        
                        @foreach ($meals as $meal)
                          <li class="list-group-item">{{ $meal->name }} <span> R {{ $meal->price }}</span></li>
                        @endforeach
                    </ul>
                </div>
                
            </div>
        </div>



            <div class="row">
                <div class="parallax col-md-3" data-parallax="scroll" data-z-index="1" data-image-src="{{asset('../images/dishfour.jpg')}}">
        
                </div>
                <div class="col-md-3 text-center">
                    
                    <h6 class="card-title text-center drinks"><span class="heading-primary--sub">CHEF'S SPECIAL</span></h6>
                    <h6>The Perfect Choice</h6>
                    <p class="lead ">
                    With our Chef's Special we’ve managed to put a new
                    spin on an old classic. Simplicity is the word: we use
                        fresh ingredients and offer a variety of extras on the side.
                        Are you ready for this culinary sensation?
                    </p>
        
                </div>
                <div class="parallax col-md-3 img-responsive" data-parallax="scroll" data-z-index="1" data-image-src="{{ asset('images/dishseven.jpg') }}">
        
                </div>
                <div class="col-md-3 text-center">
                    <h6 class="card-title text-center drinks"><span class="heading-primary--sub">DISH OF ALL DAYS</span></h6>
                    <h6>The Perfect Choice</h6>
                    <p class="lead">
                    This latest addition to our menu has already become our customers’
                        favorite. Day or night, our Dish of the Day is the dish you’ve
                        been craving for. Don’t forget to ask your server for our special extras!
                    </p>
        
                </div>
                </div>


                <div class="row mb-5">

                        <div class="col-md-3 text-center">
                          
                          <h6 class="card-title text-center drinks"><span class="heading-primary--sub">SNACK DELIGHT</span></h6>
                          <h6>Served All Day</h6>
                          <p class="lead ">
                            Many restaurants have their own take on this recipe, but we’re
                            confident that ours is the best, always prepared to perfection.
                             Share it with friends or have it all to yourself - you’ll enjoy
                             every bite of this special dish.
                          </p>
              
                        </div>
                        <div class="parallax col-md-3" data-parallax="scroll" data-z-index="1" data-image-src="{{ asset('images/dishten.jpeg') }}">
              
                        </div>
              
                        <div class="col-md-3 text-center">
                          <h6 class="card-title text-center drinks"><span class="heading-primary--sub">CHEF'S SPECIAL</span></h6>
                          <h6>The Perfect Choice</h6>
                          <p class="lead">
                            With our Chef's Special we’ve managed to put a new spin on an old
                             classic. Simplicity is the word: we use fresh ingredients and offer
                              a variety of extras on the side. Are you ready for this culinary
                              sensation?
                          </p>
              
                        </div>
                        <div class="parallax col-md-3 img-responsive" data-parallax="scroll" data-z-index="1" data-image-src="{{ asset('images/disheight.jpg') }}">
              
                        </div>
                      </div>



                    <div class="row mb-5 mt-5">
                        <div class="col-md-12 contact-lead mt-5 ">
                            <p class="contact-lead">
                                    Learn more about our menu by getting in touch with us today. 
                                    <span><a class="btn btn-warning" href="#">Get In Touch</a></span></p>
                                    
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="parallax col-md-5 img-responsive" data-parallax="scroll" data-z-index="1" data-image-src="{{ asset('images/wine.jpg')}}">
                  
                            </div>
                            <div class="col-md-7">
                            <h6 class="card-title text-center drinks"><span class="heading-primary--sub">About Us</span></h6>
                              <p class="lead" >Headquarters café was founded by a team of like-minded foodies;
                                a group of friends who have always liked to eat, drink, imagine, and create great
                                food together. Our hobby quickly led us to opening a restaurant, a place where people
                                 from all over town can meet to enjoy our special dishes and comfortable atmosphere. </p>
                              <p class="lead">Freshness and creativity are our favorite ingredients. Our menu is varied and the service
                                is unmatched. If you’re looking for a superb culinary experience, call us today to make a reservation!</p>
                        </div>
                
                    </div>

                    <h5 class="card-title text-center drinks mt-5 mb-t"><span class="heading-primary--sub">Gallary</span></h5>
                    <!-- Grid row -->

                    @include('inc.gallary')

                
                {{-- FORM START --}}
                <div class="row form-book mb-5 mt-5">
                    <h3 class="card-title text-center drinks mt-5 mb-t"><span class="heading-primary--sub-2">Reservation</span></h3>
                  <div class="col-md-12">
                    <div class="row">
                        
                        <div class="col-md-6 col-md-offset-3">
                            <form class="form">
                                <div class="form-group">
                                  <input type="text" class="form-control" id="name" aria-describedby="email" placeholder="Full Name" required>
                                  <label class="form-label" for="name">Full Name</label>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter email">
                                    <label class="form-label" for="email">Email address</label>
                                  </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning text-white btn-md">NEXT STEP &rarr;</button>
                                </div>

                                
                              </form>
                        </div>
                    </div>
                  </div>
                    
                </div>

                <div class="row">
                    <div class="col-md-5">
                      <img class="img-responsive" src="{{asset('images/warrior.png')}}" alt="">
                    </div>
          
                    <div class="col-md-7 mt-5">
                      <h5 class="featurette-heading">OPENING HOURS</h5>
                      <h6>Dine In. Take Away.</h6>
                      <p class="lead">
                        Monday - Sunday 07:00am - 23:00pm
                      </p>
                      <button type="button" class="btn btn-warning" name="contact-us">Get In Touch</button>
                    </div>
          
          
                  </div>


@endsection

@section('extra-js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ asset('js/parallax.min.js') }}"></script>
<script>

    $(window).scroll(function(){
        var scrollTop = $(this).scrollTop();
        
        $('.header').css('top', -(scrollTop * 0.4) + 'px');
        $('.food').css('top', -(scrollTop * 0.4) + 'px')
    });
</script>
@endsection