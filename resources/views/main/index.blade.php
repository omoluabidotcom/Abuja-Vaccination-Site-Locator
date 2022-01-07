@extends('../layouts.copy')

@section('content')
<p class="text-2xl text-bold flex justify-center mt-5"> Choose the Local Government Area you reside </p>
<div>
    <div class="flex justify-center mt-0">
     <div class="">

        <form action="main/{{ 1 }}" method="GET"> 
        <button class="block bg-gray-300 py-2 px-6 m-2 rounded-full"> Abaji </button> 
        </form>

        <form action="main/{{ 2 }}" method="GET">
        <button type="submit" class="block bg-gray-300 py-2 px-6 m-2 rounded-full"> Bwari </button>
        </form>

        <form action="main/{{ 3 }}" method="GET">
        <button type="submit" class="block bg-gray-300 py-2 px-6 m-2 rounded-full balance"> Gwagwalada  </button>
        </form>

        <form action="main/{{ 4 }}" method="GET">
        <button type="submit" class="block bg-gray-300 py-2 px-6 m-2 rounded-full"> Kuje  </button>
        </form>

        <form action="main/{{ 5 }}" method="GET">
        <button type="submit" class="block bg-gray-300 py-2 px-6 m-2 rounded-full"> Kwali  </button>
        </form>

        <form action="main/{{ 6 }}" method="GET">
        <button type="submit" class="block bg-gray-300 py-2 px-6 m-2 rounded-full balance"> Abuja Municipal  </button>
        </form>
    </form>
     </div>
    </div>
    <div class="block mt-1" >
        <p class="flex justify-center text-2xl" > You are sure of a vaccination site not listed. Add using the button below </p>
        <form action="submit" method="GET" class="flex justify-center" > 
        <button class="block bg-gray-300 py-2 px-6 m-2 rounded-full balance" > Submit Vaccination Site </button>
        </form>
    </div>
</div>
<h2 class="flex justify-center bg-black text-white mt-0"> Built with love from Yahaya <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg> <h2>
</body>
</html>
@endsection