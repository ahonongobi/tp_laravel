@extends('layouts/_index')

@section('content')
<div class="container">
    <div id="cards" class="card">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    
                    <div class="preview-pic tab-content">
                      <div class="tab-pane active" id="pic-1"><img src={{asset('voiture/'.$specifiqueCarDetails[0]->voiture_image)}} /></div>
                      <div class="tab-pane" id="pic-2"><img src={{asset('voiture/'.$specifiqueCarDetails[0]->voiture_image)}} /></div>
                      <div class="tab-pane" id="pic-3"><img src={{asset('voiture/'.$specifiqueCarDetails[0]->voiture_image)}} /></div>
                      <div class="tab-pane" id="pic-4"><img src={{asset('voiture/'.$specifiqueCarDetails[0]->voiture_image)}} /></div>
                      <div class="tab-pane" id="pic-5"><img src={{asset('voiture/'.$specifiqueCarDetails[0]->voiture_image)}} /></div>
                    </div>
                    <ul class="preview-thumbnail nav nav-tabs">
                      <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src={{asset('voiture/'.$specifiqueCarDetails[0]->voiture_image)}} /></a></li>
                      <li><a data-target="#pic-2" data-toggle="tab"><img src={{asset('voiture/'.$specifiqueCarDetails[0]->voiture_image)}} /></a></li>
                      <li><a data-target="#pic-3" data-toggle="tab"><img src={{asset('voiture/'.$specifiqueCarDetails[0]->voiture_image)}} /></a></li>
                      <li><a data-target="#pic-4" data-toggle="tab"><img src={{asset('voiture/'.$specifiqueCarDetails[0]->voiture_image)}} /></a></li>
                      <li><a data-target="#pic-5" data-toggle="tab"><img src={{asset('voiture/'.$specifiqueCarDetails[0]->voiture_image)}} /></a></li>
                    </ul>
                    
                </div>
                <div class="details col-md-6">
                    <h3 class="product-title">{{$specifiqueCarDetails[0]->voiture_nom}}</h3>
                    <div class="rating">
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <span class="review-no">41 reviews</span>
                    </div>
                    <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
                    <h4 class="price">Prix de location: <span>$180</span></h4>
                    <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                    <h5 class="sizes">sizes:
                        <span class="size" data-toggle="tooltip" title="small">s</span>
                        <span class="size" data-toggle="tooltip" title="medium">m</span>
                        <span class="size" data-toggle="tooltip" title="large">l</span>
                        <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
                    </h5>
                    <h5 class="colors">colors:
                        <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
                        <span class="color green"></span>
                        <span class="color blue"></span>
                    </h5>
                    <div class="action">
                        <a href="{{'/louer/'.$specifiqueCarDetails[0]->id}}" class="add-to-cart btn btn-default" type="button">Louer</a>
                        <button class="like btn btn-default" type="button"><span class="fa fa-phone"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
 <h2 class="text-dark mx-auto">De la même categories</h2>
 <ul class="preview-thumbnail nav nav-tabs">
    <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src={{asset('voiture/'.$specifiqueCarDetails[0]->voiture_image)}} /></a></li>
    <li><a data-target="#pic-2" data-toggle="tab"><img src={{asset('voiture/'.$specifiqueCarDetails[0]->voiture_image)}} /></a></li>
    <li><a data-target="#pic-3" data-toggle="tab"><img src={{asset('voiture/'.$specifiqueCarDetails[0]->voiture_image)}} /></a></li>
    <li><a data-target="#pic-4" data-toggle="tab"><img src={{asset('voiture/'.$specifiqueCarDetails[0]->voiture_image)}} /></a></li>
    <li><a data-target="#pic-5" data-toggle="tab"><img src={{asset('voiture/'.$specifiqueCarDetails[0]->voiture_image)}} /></a></li>
  </ul>
</div>
@endsection