@extends('dashboard')

@section('content')

    <div class="activity-grid">
        <div class="activity-card">
            <h3>Listes des questions/Reponses</h3>
            {{-- bnt ajout question --}}
            <a href="" data-bs-toggle="modal" data-bs-target="#CreerQuestion" class="btn btn-primary">Ajouter</a>
            {{-- end btn ajout question --}}
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>                        
                            <th>Question</th>
                            <th>Reponse</th>
                            <th>Date de création</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($questions as $question)
                        <tr>                  
                                <td>{{ $question->question }} </td>
                                <td>{{ $question->reponse }}</td>
                                <td>{{ $question->created_at->DiffForHumans() }}</td>

                                <td>
                                {{-- button edit --}}
                                    <a href="{{ route('questionview.edit',$question->id ) }}" data-bs-toggle="modal" data-bs-target="#EditerQuestion" class="edit-modal btn btn-warning btn-sm">Modifier</a>
                                {{--  button delete--}}
                                    <form action="{{ route('questionview.destroy', $question->id ) }}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <button class="delete-modal btn btn-danger btn-sm" type="submit">Supprimer</button>
                                    </form>
                                </td>
                    
                        </tr>
                        @empty
                        <p>il n'est a pa des questions</p>
                    @endforelse
                    </tbody>
                </table>
        </div>
        </div>
          <div class="summary">
              <div class="summary-card">

                  <div class="summary-single">
                      <span class="ti-id-badge"></span>
                      <div>
                          <h5>1998</h5>
                          <small>Number of staff</small>
                      </div>
                  </div>

                  <div class="summary-single">
                    <span class="ti-calendar"></span>
                    <div>
                        <h5>16</h5>
                        <small>Number of leave</small>
                    </div>
                </div>

                <div class="summary-single">
                    <span class="ti-face-smile"></span>
                    <div>
                        <h5>12</h5>
                        <small>profile update request</small>
                    </div>
                </div>
              </div>
              <div class="bday-card">
                  <div class="bday-flex">
                        <div class="bday-img"></div>
                        <div class="bday-info">
                            <h3>Dwayne F. Sanders</h3>
                            <small>Birthday Today</small>
                        </div>
                  </div>
                 <div class="text-center">
                    <button>
                        <span class="ti-gift"></span>
                        Wish him
                    </button>
                </div>
              </div>
              
          </div>
    </div>
        {{-- form create avis client --}}
  
  <!-- Modal -->
  <div class="modal fade" id="CreerQuestion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Question</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {{-- form --}}
            <form method="POST" action="{{ route('questionview.store') }}">
                @csrf
                @method('POST')
                <div class="form-group">
                  <label for="question">Question</label>
                  <input name="question" type="text" class="form-control" id="exampleInputquestion" aria-describedby="textHelp" placeholder="Votre question ">
                </div>
                <div class="form-group">
                  <label for="reponse">Reponse</label>
                  <input name="reponse" type="reponse" class="form-control" id="reponse" placeholder="Votre reponse">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            {{-- end form --}}
        </div>
        <div class="modal-footer">
            {{-- <button type="button" class="btn btn-primary">Enregistrer</button> --}}
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
  </div>
    {{-- end form create avis client  --}}

{{-- form edit avis client --}}
  <!-- Modal -->
  <div class="modal fade" id="EditerQuestion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Modifier votre question</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {{-- form --}}
            <form action="{{ route('questionview.update', $question->id  ) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="exampleInputComment">votre question</label>
                  <input type="text" class="form-control" id="exampleInputEditQuestion" aria-describedby="textHelp" value="{{old('question',$question->question)}}">
                  <small id="text" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <label for="exampleInputrepons">Reponse</label>
                  <input type="reponse" class="form-control" id="reponseEdit" value="{{old('reponse',$question->reponse)}}">
                </div>

                <button type="submit" class="btn btn-primary">Modifier</button>
              </form>
            {{-- end form --}}
        </div>
        <div class="modal-footer">
            {{-- <button type="submit" class="btn btn-primary">Modifier</button> --}}
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
  </div>
    {{-- end form edit avis client  --}}

@endsection