@extends('layouts.app')

@section('content')
<div class="update-form">
    <form action="{{ route('Annoce.update',$annonce->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="input-group textarea">
            <label for="">Annonce description : </label>
            <textarea name="body" id="description" cols="30" rows="10" placeholder="Enter Your Annonce Description...">{{ $annonce->body }}</textarea>
            @error('body')
                    <div class="error">
                        {{ $message }}
                    </div> 
            @enderror
        </div>
        <div class="super-group">
            <div class="input-group">
                <label for="">Annonce Image URL : </label>
                <input type="text" name="img_url" placeholder="Enter Your URL Image" value="{{ $annonce->img_url }}">  
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
</div>
@endsection