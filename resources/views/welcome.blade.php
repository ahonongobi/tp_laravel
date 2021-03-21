
  @extends('layouts/_index')
  
  @section('content')
  <main>

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          @if ($isAUth=="GobiEncryptnotAuthenticatedAndAcessTemporallyDeniedUntilYouLogINIsOk.")
          <h1>
            <span>Bonjour, {{Auth::user()->name}}</span>
          </h1>
          @else
          <h1>
            <span>Location de vehicule</span>
          </h1>
          @endif
          
          
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
          <p>
            <a href="{{'/register'}}" class="btn btn-primary my-2"> <i class=" fa fa-user-plus"></i> S'inscrire</a>
            @if($isAUth=="GobiEncryptnotAuthenticatedAndAcessTemporallyDeniedUntilYouLogINIsOk.")
            <a href="{{'/logout'}}" class="btn btn-danger my-2"><i class=" fa fa-power-off"></i> Se deconnecter</a>
  
          @else
          <a href="{{'/login'}}" class="btn btn-secondary my-2"><i class=" fa fa-user"></i> Se connecter</a>
  
          @endif
          </p>
        </div>
      </div>
    </section>
  
    <div class="album py-5 bg-light">
      <div class="container">
  
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
       @foreach ($car as $cars)
       <div class="col">
        <div class="card shadow-sm">
          <img src="{{asset('voiture/'.$cars->voiture_image)}}" class="bd-placeholder-img card-img-top" width="100%" height="225" />
  
          <div class="card-body">
            <p class="card-text">{{$cars->voiture_description}}</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                @if ($isAUth=="GobiEncryptnotAuthenticatedAndAcessTemporallyDeniedUntilYouLogINIsOk.")
                <a href="{{'/details/'.$cars->id}}" type="button" class="btn btn-sm btn-outline-secondary">Voir</a>
                <a href="{{'/louer/'.$cars->id}}" type="button" class="btn btn-sm btn-outline-secondary">Louer</a>
                @else
                <a href="{{'/login'}}" type="button" class="btn btn-sm btn-outline-secondary">Voir</a>
                <a href="{{'/login'}}" type="button" class="btn btn-sm btn-outline-secondary">Louer</a>
                @endif
               
              </div>
              <small class="text-muted">{{date('d-m-Y',strtotime($cars->created_at))}}</small>
            </div>
          </div>
        </div>
      </div>
       @endforeach
  
         
          
          
          
        </div>
      </div>
    </div>
    <div class="fab-wrapper">
      <input id="fabCheckbox" type="checkbox" class="fab-checkbox" />
      <label class="fab" for="fabCheckbox">
        <span class="fab-dots fab-dots-1"></span>
        <span class="fab-dots fab-dots-2"></span>
        <span class="fab-dots fab-dots-3"></span>
      </label>
      <div class="fab-wheel">
        <a href="mailto:abyssiniea@gmail.com" class="fab-action fab-action-1">
          <i class="fa fa-question"></i>
        </a>
        <a class="fab-action fab-action-2">
          <i class="fa fa-book"></i>
        </a>
            <a class="fab-action fab-action-3">
          <i class="fa fa-address-book"></i>
        </a>
        @if($isAUth=="GobiEncryptnotAuthenticatedAndAcessTemporallyDeniedUntilYouLogINIsOk.")
          <a href="{{route('logout')}}" class="fab-action fab-action-4">
            <i class="fa fa-power-off"></i>
          </a>
       
            
        @else
        <a style="display: none;" href="{{route('logout')}}" class="fab-action fab-action-4">
          <i class="fa fa-power-off"></i>
        </a>
        @endif
  
           
      </div>
    </div>
  </main>
  @endsection





