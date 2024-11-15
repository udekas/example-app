<x-layout>
    <x-slot:title>Edit Author</x-slot:title>
    <x-slot:description> suvaline tekst siia</x-slot:description>
 <form action="{{ route('authors.update', $author) }}" method="POST">
    @method('PUT')
                @csrf

                <div class="max-w-sm p-2 flex flex-col gap-2">


                    <div> <label for="first_name" class="block text-xs font-medium text-gray-700"> First name </label>
                        <input type="text" value="{{$author -> first_name}}" name= "first_name" placeholder="First name"
                            class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                        @error('first_name')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="last_name" class="block text-xs font-medium text-gray-700"> Last name </label>

                        <input type="text" value="{{$author -> last_name}}"id="last_name" name= "last_name" placeholder="Last name"
                            class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                        @error('last_name')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="bg-slate-800 px-3 py-2 text-sm text-white rounded-md hover:bg-slate-700" type="submit" >Submit</button>
                </div>
            </form>
</x-layout>
