<x-layout>
    <h2>Currently available users</h2>
    <ul>
        @foreach($users as $user)
         <li>
            <x-card href="{{route('users.show', $user->id)}}" :highlight="$user['skill'] > 70">
                <h3>{{ $user->name }}</h3>
                <p>{{ $user->dojo->name }}</p>
            </x-card>
         </li>
        @endforeach
    </ul>

    {{ $users->links() }}
</x-layout>