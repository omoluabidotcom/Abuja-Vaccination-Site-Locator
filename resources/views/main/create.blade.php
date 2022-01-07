@extends('../layouts.copy')

@section('content')
    <p class="flex justify-center text-bold text-2xl mt-5" > Fill the form with the appropriate information to add Vaccination site to the database </p>
    <div class="flex justify-center">
        <form action="/main" method="POST" class="block" enctype="multipart/form-data">
            @csrf
            <div>
            <input class="block bg-gray-100 px-2 py-3 rounded mt-6" type="input" name="site_name" placeholder="Name of vacinnation site" />
            <input class="block bg-gray-100 px-2 py-3 rounded mt-2" type="input" name="lat" placeholder="Latitude of site" />
            <input class="block bg-gray-100 px-2 py-3 rounded mt-2" type="input" name="lng" placeholder="Longitude of site" />
            <input class="block bg-gray-100 px-2 py-3 rounded mt-2" type="input" name="lga" placeholder="L.G.A of site" />
            <input class="block bg-gray-100 px-2 py-3 rounded mt-2" type="input" name="city" placeholder="City of site" />
            <input class="block mt-2" type="file" name="image"/>
            <input class="block bg-gray-100 px-2 py-3 rounded mt-2" type="input" name="unique_id" placeholder="Unique_id" />
            <input class="flex justify-items-center bg-gray-300 px-2 py-2 rounded-full mt-2" type="submit" value="Update" />
            </div>
        </form>
    </div>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <h3> {{ $error }} </h3>
        @endforeach
     @endif
    <h2 class="flex justify-center bg-black text-white"> Built with love from Yahaya <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg> <h2>
    </body>
    </html>
@endsection