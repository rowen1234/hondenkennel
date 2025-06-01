<x-app-layout>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Nieuw project</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('dog.index') }}" enctype="multipart/form-data">
                        Terug</a>
                </div>
            </div>
        </div>

        <form action="{{ route('dog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Naam</strong>
                        <input type="text" name="name" class="form-control" placeholder="naam">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>kleur</strong>
                        <input type="text" name="colour" class="form-control" placeholder="kleur">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>groote</strong>
                        <select class="form-control" id="size" name="size" required>
                            @foreach (['Groot', 'Middel', 'Klein'] as $option)
                                <option value="{{ $option }}"
                                    {{ old('size', $dog->size ?? '') === $option ? 'selected' : '' }}>
                                    {{ $option }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>kennel</label>
                        <select class="form-control" id="kennel_id" name="kennel_id" required>
                            @foreach ($kennels as $kennel)
                                <option value="{{ $kennel->id }}">
                                    {{ $kennel->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
