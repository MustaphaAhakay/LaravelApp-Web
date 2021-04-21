@extends('dashboard')

@section('content')

    <div class="activity-grid">
        <div class="activity-card">
            <h3>Avis Clients</h3>
            <a href="#"  data-bs-toggle="modal" data-bs-target="#CreerAvis" class="show-modal btn btn-info btn-sm">Afficher
                <i class="fa fa-eye"></i>
            </a>            

            <div class="table-responsive">
                <table id="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom Client</th>
                            <th>Commentaire</th>
                            <th>Image de produit</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                         {{ csrf_field() }}
                         
                        @forelse( $avisclients as $avisclient )
                        <tr>                  
                                <td>{{ $avisclient->id }} </td>    
                                <td>{{ $avisclient->nomClient }} </td>
                                <td>{{ $avisclient->commentaire }}</td>
                                <td>{{ $avisclient->imageProduit}}</td>

                                <td>
                                {{-- buttons --}}

                                    <a href="{{ route('avisclientview.edit', $avisclient->id  ) }}" data-bs-toggle="modal" data-bs-target="#EditerAvis" class="edit-modal btn btn-warning btn-sm" data-id="{{$avisclient->id}}" data-nomClient="{{$avisclient->nomClient}}" data-commentaire="{{$avisclient->commentaire}}" data-imageProduit="{{$avisclient->imageProduit}}">Editer
                                        <i class="glyphicon glyphicon-pancil"></i>
                                    </a>
                                    <a>
                                        <form action="{{ route('avisclientview.destroy', $avisclient->id ) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="delete-modal btn btn-danger btn-sm" type="submit">Supprimer</button>
                                        </form>
                                    </a>
 
                                    </form>
                                </td>
                    
                        </tr>
                        @empty
                        <p>il n'est a pa des avisclient</p>
                    @endforelse

                    </tbody>
                </table>
        </div>
        </div>

    </div>

    {{-- form create avis client --}}
  
  <!-- Modal -->
  <div class="modal fade" id="CreerAvis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Avis de client</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {{-- form --}}
            <form action="{{ route('avisclientview.store')}}" method="post">
                @csrf
                @method('POST')
                <div class="form-group">
                  <label for="nomClient">Nom de client</label>
                  <input name="nomClient" type="text" class="form-control" id="exampleInputAvis" aria-describedby="textHelp" placeholder="Nom de client ">
                </div>
                <div class="form-group">
                  <label for="commentaire">Commentaire</label>
                  <input name="commentaire" type="commentaire" class="form-control" id="commentaire" placeholder="avis de client">
                </div>
                <div class="form-group">
                    <label for="imaeProduit">Image du produit</label>
                    <input name="imageProduit" type="file" class="form-control-file" id="imgProduit">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            {{-- end form --}}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary">Enregistrer</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
  </div>
    {{-- end form create avis client  --}}

{{-- form edit avis client --}}
  
  <!-- Modal -->
  <div class="modal fade" id="EditerAvis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Modifier Avis de client</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {{-- form --}}
            <form action="{{ route('avisclientview.update',  $avisclient->id  ) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="nomClient">Nom de client</label>
                  <input name="nomClient" type="text" class="form-control" id="exampleInputEditAvis" value="{{old('nomClient',$avisclient->nomClient)}}" aria-describedby="textHelp"  >
                </div>
                <div class="form-group">
                  <label for="exampleInputComent">Commentaire</label>
                  <input name="commentaire" type="commentaire" class="form-control" id="commentaireEdit" value="{{old('avisclient',$avisclient->commentaire)}}">
                </div>
                <div class="form-group">
                    <label for="imageProduit">Image du produit</label>
                    <input name="imageProduit" type="file" class="form-control-file" id="imgProduitEdit" value="{{old('avisclient',$avisclient->imageProduit)}}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            {{-- end form --}}
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Modifier</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
  </div>
    {{-- end form edit avis client  --}}


@endsection