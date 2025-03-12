<x-layout>
    <h2>{{ $user->name }} </h2>
    <div>
        <p><strong>Skill level: </strong>{{ $user->skill }}</p>
        <p><strong>email:</strong> {{$user->email}}</p>
    </div>
</x-layout>