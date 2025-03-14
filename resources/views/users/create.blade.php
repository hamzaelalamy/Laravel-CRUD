<x-layout>
    <form action="{{ route('users.store') }}" method="POST">
      <!-- CSRF token for security -->
      @csrf
  
      <h2>Create a New User</h2>
  
      <!-- Name -->
      <label for="name">Name:</label>
      <input 
        type="text" 
        id="name" 
        name="name"
        value="{{ old('name') }}" 
        required
      >
  
      <!-- Strength -->
      <label for="skill">Skill (0-100):</label>
      <input 
        type="number" 
        id="skill" 
        name="skill"
        value="{{ old('skill') }}"
        required
      >
  
      <!-- Bio -->
      <label for="email">email:</label>
      <input type="email" id="email" name="email" value="{{ old('email') }}" required>
  
      <!-- select a dojo -->
      <label for="dojo_id">Dojo:</label>
      <select id="dojo_id" name="dojo_id" required>
        <option value="" disabled selected>Select a dojo</option>
        @foreach($dojos as $dojo)
            <option value="{{ $dojo->id }}">{{$dojo->name}}</option>
        @endforeach
      </select>
  
      <button type="submit" class="btn mt-4">Create Ninja</button>
  
      <!-- validation errors -->
      @if($errors->any())
        <ul class="px-4 py-2 bg-red-100">
        @foreach($errors->all() as $error)
            <li class="my2 text-red-500">{{ $error }}</li>
        @endforeach
        </ul>
      @endif
    </form>
  </x-layout>