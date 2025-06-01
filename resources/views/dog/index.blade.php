<x-app-layout>
    <div class="container mt-2">
        <div>
            <div>
                <div>
                    <h1 class="card-title">Dogs</h1>
                </div>
            </div>
        </div>
        <div>
            <table class="table">
                <thead class="table-primary">
                    <tr>
                        <th>dog name</th>
                        <th>owner</th>
                        <th>groote</th>
                        <th>kleur</th>
                        <th>kennel</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dogs as $dog)
                        <tr>
                            <td>{{ $dog->name }}</td>
                            <td>{{ $dog->owners->name }}</td>
                            <td>{{ $dog->size }}</td>
                            <td>{{ $dog->colour }}</td>
                            <td>{{ $dog->kennel->name }}</td>
                            <td>
                                <form action="{{ route('dog.destroy', $dog->id) }}" method="Post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <form action="{{ route('dog.create') }}" method="Post">
                @csrf
                @method('GET')
                <button type="submit" class="btn btn-danger">Voeg toe</button>
            </form>
        </div>
    </div>
</x-app-layout>
