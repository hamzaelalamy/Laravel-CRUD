<x-layout>
    <form action="" method="">
      <!-- CSRF token for security -->
      @csrf
  
      <h2>Create a New User</h2>
  
      <!-- Name -->
      <label for="name">Name:</label>
      <input 
        type="text" 
        id="name" 
        name="name" 
        required
      >
  
      <!-- Strength -->
      <label for="skill">Skill (0-100):</label>
      <input 
        type="number" 
        id="skill" 
        name="skill" 
        required
      >
  
      <!-- Bio -->
      <label for="bio">Biography:</label>
      <textarea
        rows="5"
        id="bio" 
        name="bio" 
        required
      ></textarea>
  
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
      
    </form>
  </x-layout>