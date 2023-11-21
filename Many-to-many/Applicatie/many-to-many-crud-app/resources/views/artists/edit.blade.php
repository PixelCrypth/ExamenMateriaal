<x-app-layout>
    <div class="flex flex-row justify-center">
        <form action="{{ route('artists.update', ['artist' => $artist]) }}" method="POST" class="flex flex-col items-center gap-3">
            @csrf
            @method('PUT')
            <label for="name" class="text-5xl font-semibold">Name</label>
            <input type="text" id="name" name="name" value="{{ $artist->name}}"  placeholder="Insert a name..." required class="text-center">
            <label for="profile_picture" class="text-5xl font-semibold">profile picture</label>
            <input type="text" id="profile_picture" name="profile_picture" value="{{ $artist->profile_picture}}" placeholder="Insert a image url..." required class="text-center">
            <input type="submit" value="Submit">
        </form>
    </div>
</x-app-layout>
