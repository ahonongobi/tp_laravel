<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div style="display: none">
                        <x-jet-application-logo class="block h-12 w-auto" />
                    </div>
                
                    <div class="mt-8 text-2xl">
                        
                            @if (Session::has('sucess'))
                                <h2 class="aler alert-success" style="color: green;">
                                    {{Session::get('sucess')}}
                                </h2>
                            @endif
                            @if (Session::has('danger'))
                            <h2 style="color: red;">
                                {{Session::get('danger')}}
                            </h2>
                        @endif
                        
                      
                    </div>
                
                    <div class="container-lg">
                        <div class="table-responsive">
                            <div class="table-wrapper">
                                <div class="table-title">
                                    <div class="row d-flex">
                                       
                                        
                                        <div class="col-sm-4">

                                        </div>
                                        
                                    </div>
                                    <div>
                                        <form method="post" enctype="multipart/form-data" action="{{'/edit/'.$checkdata[0]->id}}">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Nom de voiture</label>
                                                    <input value={{$checkdata[0]->voiture_nom}} type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    @if($errors->has('nom'))
                                                    <div id="emailHelp" class="form-text">{{ $errors->first('nom') }}</div>
                
                                                     @endif
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">code de la voiture</label>
                                                    <input value={{$checkdata[0]->code_voiture}} type="number" name="code" class="form-control" placeholder="ex:1010" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    @if($errors->has('code'))
                                                    <div id="emailHelp" class="form-text">{{ $errors->first('code') }}</div>
                
                                                     @endif                                  </div>
                                                 
                                                  <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Cout de location</label>
                                                    <input value="{{old('cout')}}" type="number" name="cout" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    @if($errors->has('cout'))
                                                    <div id="emailHelp" class="form-text">{{ $errors->first('cout') }}</div>
                
                                                     @endif                                 
                                                 </div>
                                                
                                                  <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Description</label>
                                                      
                                                        <div class="form-floating">
                                                            <textarea name="desc"  class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px">
                                                            {{$checkdata[0]->voiture_description}}
                                                            </textarea>
                                                            <label for="floatingTextarea2">Comments</label>
                                                          </div>
                                                        @if($errors->has('desc'))
                                                        <div id="emailHelp" class="form-text">{{ $errors->first('desc') }}</div>
                    
                                                         @endif                                 
                                                    </div>
                                                    <div class="mb-3">
                                                        
                                                        <div class="mb-3">
                                                            <label for="formFileSm" class="form-label">Image de la voiture</label>
                                                            <input class="form-control form-control-sm" name="file" id="formFileSm" type="file">
                                                          </div>
                                                            @if($errors->has('file'))
                                                            <div id="emailHelp" class="form-text">{{ $errors->first('file') }}</div>
                        
                                                             @endif                                 
                                                        </div>
                                                        <button class="btn btn-primary" type="submit">Sauvegarder</button>
                                            </div>
                                            
                                        </form> 
                                    </div>
                                </div>
                                

                            </div>
                        </div>

                    </div>     
                </div>
            </div>
        </div>
        
          
          
        

          
    </div>
</x-app-layout>
