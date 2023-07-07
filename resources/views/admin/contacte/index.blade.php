@extends('admin')

@section('title', 'Les messages reçu')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nom</th>
              <th scope="col">Prénon</th>
              <th scope="col">Email</th>
              <th scope="col">Message</th>
              <th scope="col">Envoyé le</th>
            </tr>
            </thead>
            <tbody>
           
              @forelse ($message as $messages)
              <tr>
              <th scope="row">{{$messages->id}}</th>
              <td>{{$messages->nom}}</td>
              <td>{{$messages->prenon}}</td>
              <td>{{$messages->email}}</td>
              <td>{{$messages->message}}</td>
              <td>{{$messages->created_at->format('d M Y')}}</td>    
              @empty
                  <div class="text-center">
                        <h2>Aucun message pour le moment</h2>
                  </div>
             
              
            </tr>
            @endforelse
            
            </tbody>
          </table>
          <div class="container my-4">
            {{$message->links()}}
        </div>
    </div>
@endsection
