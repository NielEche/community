@extends('layouts.app')

@section('title')
Home
@endsection
@section('custom-style')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
@endsection

@section('content')

<div class="container">
    <hr>
</div>

<section>
    <div class="container">
        <div style="display: flex; justify-content: center;">
            <img style="width:55% !important;" src="{{asset('files/img/cd.png')}}">
        </div>
        <h3 class="text-center f-bold">28TH NOVEMBER 2021</h3>
    </div>
</section>

<section>
    <div class="container text-center py-5 mt-3">
        <!-- Noscript content for added SEO -->
        <noscript><a href="https://www.eventbrite.com/e/the-community-show-tickets-195952297597"
                rel="noopener noreferrer" target="_blank"></noscript>
        <!-- You can customize this button any way you like -->
        <button style="padding: 10px 25px; border-width: 2px;
        border-style: solid; background-color: transparent !important; border-color: #000; color:#000 !important;" class="text-center btn btn-success" id="eventbrite-widget-modal-trigger-195952297597" type="button">Buy Tickets</button>
        <noscript></a>Buy Tickets on Eventbrite</noscript>

        <script src="https://www.eventbrite.com/static/widgets/eb_widgets.js"></script>

        <script type="text/javascript">
            var exampleCallback = function () {
                console.log('Order complete!');
            };

            window.EBWidgets.createWidget({
                widgetType: 'checkout',
                eventId: '195952297597',
                modal: true,
                modalTriggerElementId: 'eventbrite-widget-modal-trigger-195952297597',
                onOrderComplete: exampleCallback
            });

        </script>
    </div>
</section>

<div class="container">
    <hr>
</div>

<section class="py-4">
    <div class="container" style="display: flex; justify-content:center;">
        <img style="width:700px !important;" src="{{asset('files/img/mp.jpg')}}" alt="">
    </div>
</section>

<div class="container">
    <hr>
</div>

<section class="py-5">
    <div class="container" style="display:flex; justify-content:center;">
        <div class="px-4">
            <h4>LISTEN TO THE <br> COMMUNITY <br> PLAYLIST</h4>
            <button style="padding: 5px 20px; border-width: 2px;
            border-style: solid; background-color: transparent !important; border-color: #000; color:#000 !important;" class="text-center btn btn-success"> <a target="_blank" href="https://thecommunityshow.fanlink.to/Playlist" style="color: #000 !important;">Here</a></button>    
        </div>
        <div class="px-4">
            <div class="container-fluid">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item bnw-filter carousel-item active">
                            <img style="width:300px !important;" src="{{asset('files/img/playlist.jpg')}}" class="img-fluid">
                        </div>
                        <div class="item bnw-filter carousel-item ">
                            <img style="width:300px !important;" src="{{asset('files/img/playlist1.jpg')}}" class="img-fluid">
                        </div>
                        <div class="item bnw-filter carousel-item ">
                            <img style="width:300px !important;" src="{{asset('files/img/playlist2.jpg')}}" class="img-fluid">
                        </div>
                    </div>
                </div><br>
            </div>
        </div>
    </div>
</section>

<!--<section>
    <div class="container text-center py-5">
        <h4 class="pt-3 f-bold MAK">THE COMMUNITY PRESS </h4>
        <p class="MAK">The Community is a healthy and engaging cluster of creative individuals, identified and based
            together in
            Port Harcourt, Nigeria. </p>
        <p class="MAK">We understand the value placed upon creative exploration and expression which over time has lead
            to an
            increasing sense of togetherness in us as a unit to create a solid ecosystem that will be both sustainable
            and beneficial to our needs as creative people.</p>
        <p class="MAK">We present The Community Show, a flag bearer event that aims to showcase the plethora of
            creativity by
            individuals that make up The Community especially in areas of Music, Fashion and Culture.</p>
    </div>
</section>-->

<style>

    hr {
        border-color: #000;
    }
</style>

<div class="container">
    <hr>
</div>

<section>
    <style>
        .alert-success {
            background-color: #dff0d8 !important;
            border-color: transparent !important;
            width: 100%;
            top: 0px;
            text-align: center;
        }

        .alert-danger {
            border-color: transparent !important;
            width: 100%;
            top: 0px;
            text-align: center;
        } 

    </style>
    <div class="container">
        @if (\Session::has('success'))
        <div id="alert" class="alert alert-success">

            <p>{{ \Session::get('success') }}</p>
        </div><br />
        @endif
        @if (\Session::has('failure'))
        <div id="alert" class="alert alert-danger">

            <p>{{ \Session::get('failure') }}</p>
        </div><br />
        @endif
        <h3 class="text-center py-4 MAK ">SUBSCRIBE FOR UPDATES</h3>
        <form method="post" action="{{url('newsletter')}}">
            @csrf
            <div style="display:flex;  justify-content: center;" class="py-5">
                <div class="px-2">
                    <div class="form-group">
                        <input placeholder="Email Address" type="text" style="outline: none !important;
                        box-shadow: none !important; border-color: #fff !important; padding: 28px; border-radius:0px;"
                            class="form-control" name="email">
                    </div>
                </div>
                <div class="px-2">
                    <div class="form-group mt-1">
                        <button type="submit" style="border-radius:25px; padding: 15px 25px; border-width: 2px;
                        border-style: solid; background-color: transparent !important; border-color: #fff;"
                            class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        setTimeout(function () {

            // Adding the class dynamically
            $('#alert').addClass('hide');
        }, 5000);

    </script>
</section>


<div class="container px-3 py-5 mt-5">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
        <a target=”_blank” href="https://www.instagram.com/thecommunityshw/">
            <p class="MAK f-12 text-black text-decoration-none">INSTAGRAM</p>
        </a>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
        <a target=”_blank” href="{{route('contact')}}">
            <p class="MAK f-12 text-black text-decoration-none">TWITTER</p>
        </a>
    </div>
</div>
</section>
@endsection
