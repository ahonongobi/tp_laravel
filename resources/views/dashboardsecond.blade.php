<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
    .table-wrapper {
    width: 900px;
    margin: 30px auto;
    background: #fff;
    padding: 20px;	
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
}
.table-title h2 {
    margin: 6px 0 0;
    font-size: 22px;
}
.table-title .add-new {
    float: right;
    height: 30px;
    font-weight: bold;
    font-size: 12px;
    text-shadow: none;
    min-width: 100px;
    border-radius: 50px;
    line-height: 13px;
}
.table-title .add-new i {
    margin-right: 4px;
}
table.table {
    table-layout: fixed;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table th:last-child {
    width: 100px;
}
table.table td a {
    cursor: pointer;
    display: inline-block;
    margin: 0 5px;
    min-width: 24px;
}    
table.table td a.add {
    color: #27C46B;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}
table.table td a.add i {
    font-size: 24px;
    margin-right: -1px;
    position: relative;
    top: 3px;
}    
table.table .form-control {
    height: 32px;
    line-height: 32px;
    box-shadow: none;
    border-radius: 2px;
}
table.table .form-control.error {
    border-color: #f50000;
}
table.table td .add {
    display: none;
}
</style>
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
                                <h2 style="color: green;">
                                    {{Session::get('sucess')}}
                                </h2>
                            @endif
                            @if (Session::has('danger'))
                            <h2 style="color: red;">
                                {{Session::get('danger')}}
                            </h2>
                        @endif
                        
                       Bienvenue dans votre espace d'administration.
                    </div>
                
                    <div class="container-lg">
                        <div class="table-responsive">
                            <div class="table-wrapper">
                                <div class="table-title">
                                    <div class="row d-flex">
                                        <div class="col-sm-8"><h2>Les demandes de <b>Locations</b></h2></div>
                                        
                                        <div class="col-sm-4">

                                            <button id="modale" type="button"  class="btn btn-info add-new"><i class="fa fa-plus"></i>Ajouter une voiture</button>
                                        </div>
                                        
                                    </div>
                                </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Email</th>
                                            <th>Numero</th>
                                            <th>Dates de locations</th>
                                            
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allCommandes as $item)
                                        <tr>
                                            <td>{{$item->nom}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->numero}}</td>
                                           
                                            <td>{{$item->date_locations}}</td>
                                            <td>
                                                <a class="add" title="Ajouter" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                <a class="edit" title="Valider" data-toggle="tooltip"><i class="fa fa-check"></i></a>
                                                <a onclick="return confirm('êtes vous certain de cette action?')" href="{{'/delete/'.$item->id}}" class="delete" title="Supprimer" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                            </td>
                                        </tr>  
                                        @endforeach
                                        
                                         
                                    </tbody>
                                </table>
                                <button id="modale" type="button"  class="btn btn-info add-new"><i class="fa fa-question"></i> Listes de demandes de locations</button>

                            </div>
                        </div>
                        <div class="row pagination d-flex justify-content-center">{!! $allCommandes->appends(Request::all())->links() !!}</div>

                    </div>     
                </div>
            </div>
        </div>
        <div style="margin: 20px;" class="bs-example">
            <div id="myModal" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Ajouter de voiture</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <form method="post" enctype="multipart/form-data" action="{{route('addcar')}}">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nom de voiture</label>
                                    <input value="{{old('nom')}}" type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    @if($errors->has('nom'))
                                    <div id="emailHelp" class="form-text">{{ $errors->first('nom') }}</div>

			                         @endif
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">code de la voiture</label>
                                    <input value="{{old('code')}}" type="number" name="code" class="form-control" placeholder="ex:1010" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                                        <textarea name="desc" id="" cols="40"></textarea>
                                        @if($errors->has('desc'))
                                        <div id="emailHelp" class="form-text">{{ $errors->first('desc') }}</div>
    
                                         @endif                                 
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Image de la voiture</label>
                                          <input type="file" name="file" id="">
                                            @if($errors->has('file'))
                                            <div id="emailHelp" class="form-text">{{ $errors->first('file') }}</div>
        
                                             @endif                                 
                                        </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-primary">Sauvegarder</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
          
          
              <script>
	$("#modale").click(function(){
        
            $("#myModal").modal('show');
       
        
		
	});
</script>

          
    </div>
</x-app-layout>
