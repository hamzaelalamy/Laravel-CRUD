<x-layout>
    <h2>{{ $user->name }} </h2>
    <div>
        <p><strong>Skill level: </strong>{{ $user->skill }}</p>
        <p><strong>email:</strong> {{$user->email}}</p>
    </div>

    {{-- dojo info --}}
  <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
    <h3>Dojo Information</h3>
    <p><strong>Dojo name:</strong> {{ $user->dojo->name }}</p>
    <p><strong>Location:</strong> {{ $user->dojo->location }}</p>
    <p><strong>About the Dojo:</strong></p>
    <p>{{ $user->dojo->description }}</p>
  </div>
</x-layout>