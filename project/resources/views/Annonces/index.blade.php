@extends('layouts.app')


@section('content')
@if(auth()->user())
<div class="publish-form">
        <div class="plus-annonces">
                <ul>
                    <li><a href="{{ route('Annonces.offer') }}">Voir les offres</a></li>
                    <li><a href="{{ route('Annonces.request') }}">Voir les demandes</a></li>
                </ul>
        </div>
        <form action="{{ route('Annonces') }}" method="POST">
            @csrf
            <div class="input-group textarea">
                <label for="">Annonce description : </label>
                <textarea name="body" id="description" cols="30" rows="10" placeholder="Enter Your Annonce Description..."></textarea>
                @error('body')
                        <div class="error">
                            {{ $message }}
                        </div> 
                @enderror
            </div>
            <div class="super-group">
                <div class="input-group">
                    <label for="">Annonce Image URL : </label>
                    <input type="text" name="img_url" class="img_url" placeholder="Enter Your URL Image">  
                    @error('img_url')
                        <div class="error">
                            {{ $message }}
                        </div> 
                    @enderror
                </div>
                <select name="annonce_type" id="">
                    <option value="" selected disabled>Choose Your Annonce type </option>
                    <option value="offer">offer</option>
                    <option value="request">request</option>
                </select>
            </div>
            <button class="button">Poster</button>
            
        </form>
    </div>
    @endif
    
    <div class="annonce-container">
        @foreach ($annonces as $annonce)
            <div class="annonces">
                <div class="header-container">
                    <div class="header">
                        <h3>{{ $annonce->user->username }}</h3>
                        <span>{{ $annonce->created_at->diffForHumans() }}</span>
                    </div>
                    @can('edit', $annonce)
                        <div class="edit">
                            <a href="{{ route('Annnoces.edit',['annonce'=>$annonce]) }}">Edit</a>
                        </div>
                    @endcan
                    
                </div>
                
                <div class="img" style="background-image: url('{{$annonce->img_url}}');">
                    
                </div>
                <div class="text">
                    <p>{{ $annonce->body }}</p>
                    @can('delete',$annonce)
                        <div>
                            <form action="{{ route('Annonces.destroy',['annonce'=>$annonce]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </div>
                    @endcan
                </div>
            </div>
        @endforeach
        <div class="pagination">
            {{ $annonces->links("pagination::bootstrap-4") }}
        </div>
    </div>
    
@endsection