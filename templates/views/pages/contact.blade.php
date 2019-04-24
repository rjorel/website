@extends('layouts.app')

@section('page_title', 'Un petit message ?')

@section('content')
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success text-center">
                {{ session()->get('message') }}
            </div>
        @endif

        @if ($errors->isNotEmpty())
            <div class="alert alert-danger text-center">
                Tous les champs sont obligatoires
            </div>
        @endif

        <p>
            Si vous souhaitez me contacter pour me demander un service ou des précisions sur une de mes réalisations,
            veuillez utiliser ce formulaire, ou votre client de messagerie préféré en cliquant
            <a href="mailto:raphael.jorel@laposte.net">ici</a>.
        </p>
        <p>
            Je suis ouvert également à toutes remarques et tous commentaires constructifs concernant le présent site,
            donc n'hésitez pas à me communiquer vos avis. D'autant plus si vous trouvez que ce site est particulièrement
            génial, cela va sans dire <i class="fa fa-grin-beam"></i>.
        </p>
    </div>

    <div class="font-duality p-4 bg-light bordered border-radius-5 text-size-18">
        <form method="POST" action="{{ url('/contact') }}">
            {{ csrf_field() }}

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Adresse e-mail</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Sujet</label>
                        <input type="text" name="subject" value="{{ old('subject') }}" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="message" rows="5" class="form-control">{{ old('message') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <small>Note: tous les champs sont requis</small>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <button type="submit" class="btn btn-block btn-brown">Envoyer</button>
                </div>
            </div>
        </form>
    </div>
@endsection
