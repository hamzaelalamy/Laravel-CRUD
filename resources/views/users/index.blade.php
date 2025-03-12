<x-layout>
    <h2>Currently available users</h2>
    <p>{{ $greeting }}</p>
    <ul>
        @if($greeting == "hi")
            <h2>list of users</h2>
        @endif
        @foreach($users as $user)
         <li>
            <x-card href="/users/{{ $user['id']}}" :highlight="$user['skill'] > 70">
                <h3>{{ $user['name'] }}</h3>
            </x-card>
         </li>
        @endforeach
    </ul>
</x-layout>