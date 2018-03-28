@extends('layouts.default')

@section('content')



    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Nature photography</h1>
            <p>Nature photography is a wide range of photography taken outdoors and devoted to displaying natural elements such as landscapes, wildlife, plants, and close-ups of natural scenes and textures.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <h2>Image Gallery</h2>
        <p>NATURE IMAGE</p>
        <p>Click on the images to enlarge them.</p>
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail" class="col-md-1 col-sm-1 col-xs-1">
                    <a href="http://www.freeimageslive.com/galleries/nature/abstract/pics/abstract01863.jpg" target="_blank">
                        <img src="http://www.freeimageslive.com/galleries/nature/abstract/pics/abstract01863.jpg" class="rounded float-left" alt="Lights" style="width:100%; height:350px">
                        <div class="caption">
                            <p>Abstract pattern in nature formed by the intricate tracery of intertwined tree branches against a blue sky.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="http://www.freeimageslive.com/galleries/nature/abstract/pics/autumn_background.jpg" target="_blank">
                        <img src="http://www.freeimageslive.com/galleries/nature/abstract/pics/autumn_background.jpg" class="rounded float-left" alt="Nature" style="width:100%;height:350px">
                        <div class="caption">
                            <p>Autumn or fall background of colorful red and orange leaves depicting the changing of the seasons.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="http://www.freeimageslive.com/galleries/nature/animals/pics/birds_on_wire.jpg" target="_blank">
                        <img src="http://www.freeimageslive.com/galleries/nature/animals/pics/birds_on_wire.jpg" class="rounded float-left" alt="Fjords" style="width:100%; height:350px">
                        <div class="caption">
                            <p>Small flock of birds sitting perched on overhead cables against a blue sky with copyspace</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>




@endsection