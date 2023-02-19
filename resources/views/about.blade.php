@extends('layouts.default')

@section("page-content")
   @extends('layouts.link-page')
  {{-- Bagian Observasi --}}
  <section class="dark:bg-gray-700">
    <h1 class="py-6 flex justify-center text-4xl font-weight-bold dark:text-white"> Observasi </h1>
      <div class="flex justify-center py-6">
        <div class="grid gap-5 grid-cols-3   sm:px-0 max-sm:grid-cols-1">
          <div class=" group max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-500 dark:hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="group-hover:fill-white  w-10 h-10 mb-2 text-gray-500 dark:text-gray-400">
              <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
              <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
              <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
            </svg>
            <a href="{{ route('operator') }}">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white :text-sm group-hover:text-white">Operator </h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 group-hover:text-white"> Formulir diperuntukkan kepada para operator yang bekerja on site</p>
            <a href="{{ route('operator') }}" class="inline-flex items-center text-blue-600 hover:underline group-hover:text-white">
                Click to open list of form
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
            </a>
          </div>
          <div class=" group max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-500 dark:hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="group-hover:fill-white  w-10 h-10 mb-2 text-gray-500 dark:text-gray-400">
              <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
              <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
              <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
            </svg>
            
            <a href="{{ route('pengawas') }}">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white :text-sm group-hover:text-white">Pengawas produksi</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 group-hover:text-white"> Formulir diperuntukkan kepada para pengawas produksi on site</p>
            <a href="{{ route('pengawas') }}" class="inline-flex items-center text-blue-600 hover:underline group-hover:text-white">
                Click to open list of form
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
            </a>
          </div>
        </div> 
      </div>
  </section>
{{-- Tes Praktek --}}
  <section class="dark:bg-gray-700">
    <h1 class="py-6 flex justify-center text-4xl font-weight-bold dark:text-white"> Tes Praktek </h1>
      <div class="flex justify-center py-6">
        <div class="grid gap-5 grid-cols-3   sm:px-0 max-sm:grid-cols-1">
          {{-- G1 --}}
          <div class=" group max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-500 dark:hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="group-hover:fill-white  w-10 h-10 mb-2 text-gray-500 dark:text-gray-400">
              <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
              <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
              <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
            </svg>
            <a target="_blank" href="https://drive.google.com/file/d/1IgdCKJ_XTT8vVKFSXIHdyU5hScstCT1X/view?usp=share_link">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white :text-sm group-hover:text-white">Articulated Truck</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 group-hover:text-white"> formulir tes praktek menggunakan Articulated Truck</p>
            <a target="_blank" href="https://drive.google.com/file/d/1IgdCKJ_XTT8vVKFSXIHdyU5hScstCT1X/view?usp=share_link" class="inline-flex items-center text-blue-600 hover:underline group-hover:text-white">
                Open
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
            </a>
          </div>
          {{-- G2 --}}
          <div class=" group max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-500 dark:hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="group-hover:fill-white  w-10 h-10 mb-2 text-gray-500 dark:text-gray-400">
              <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
              <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
              <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
            </svg>
            
            <a target="_blank" href="https://drive.google.com/file/d/1B6Bf_NJPLK1D-O9dZ00YyXRQvKWYXHFO/view?usp=share_link">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white :text-sm group-hover:text-white">Bulldozer</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 group-hover:text-white"> formulir tes praktek menggunakan Bulldozer</p>
            <a target="_blank" href="https://drive.google.com/file/d/1B6Bf_NJPLK1D-O9dZ00YyXRQvKWYXHFO/view?usp=share_link" class="inline-flex items-center text-blue-600 hover:underline group-hover:text-white">
                Open
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
            </a>
          </div>

           {{-- G3 --}}
           <div class=" group max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-500 dark:hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="group-hover:fill-white  w-10 h-10 mb-2 text-gray-500 dark:text-gray-400">
              <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
              <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
              <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
            </svg>
            
            <a target="_blank" href="https://docs.google.com/spreadsheets/d/1AjTr2gkDGOhtOws_WDKVUp4yTCqEbIuA/edit?usp=share_link&ouid=102397101453136018846&rtpof=true&sd=true">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white :text-sm group-hover:text-white">Fuel - Lube Truck</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 group-hover:text-white"> formulir tes praktek menggunakan Lube Truck</p>
            <a target="_blank" href="https://docs.google.com/spreadsheets/d/1AjTr2gkDGOhtOws_WDKVUp4yTCqEbIuA/edit?usp=share_link&ouid=102397101453136018846&rtpof=true&sd=true" class="inline-flex items-center text-blue-600 hover:underline group-hover:text-white">
                Open
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
            </a>
          </div>

           {{-- G1 --}}
           <div class=" group max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-500 dark:hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="group-hover:fill-white  w-10 h-10 mb-2 text-gray-500 dark:text-gray-400">
              <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
              <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
              <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
            </svg>
            
            <a target="_blank" href="https://docs.google.com/spreadsheets/d/1i3jH2VRblV2YZ3QuzrCyffJKgUyqI84W/edit?usp=share_link&ouid=102397101453136018846&rtpof=true&sd=true">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white :text-sm group-hover:text-white">Light Truck</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 group-hover:text-white"> formulir tes praktek menggunakan Light Truck</p>
            <a target="_blank" href="https://docs.google.com/spreadsheets/d/1i3jH2VRblV2YZ3QuzrCyffJKgUyqI84W/edit?usp=share_link&ouid=102397101453136018846&rtpof=true&sd=true" class="inline-flex items-center text-blue-600 hover:underline group-hover:text-white">
                Open
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
            </a>
          </div>

          {{-- G2 --}}
          <div class=" group max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-500 dark:hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="group-hover:fill-white  w-10 h-10 mb-2 text-gray-500 dark:text-gray-400">
              <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
              <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
              <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
            </svg>
            <a target="_blank" href="https://drive.google.com/file/d/10k_r-kqIZIQoAxvc_BUsOr7xXCmzxBrC/view?usp=share_link">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white :text-sm group-hover:text-white">Operator Alat Angkat</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 group-hover:text-white"> formulir tes praktek untuk operator alat angkat</p>
            <a target="_blank" href="https://drive.google.com/file/d/10k_r-kqIZIQoAxvc_BUsOr7xXCmzxBrC/view?usp=share_link" class="inline-flex items-center text-blue-600 hover:underline group-hover:text-white">
                Open
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
            </a>
          </div>
          {{-- G3 --}}
          <div class=" group max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-500 dark:hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="group-hover:fill-white  w-10 h-10 mb-2 text-gray-500 dark:text-gray-400">
              <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
              <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
              <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
            </svg>
            
            <a target="_blank" href="https://drive.google.com/file/d/15KQS1sbxm7BYgJFRUQ3rrj3SaQoDZ25L/view?usp=share_link">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white :text-sm group-hover:text-white">Operator Trailler</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 group-hover:text-white"> formulir tes praktek untuk operator trailler</p>
            <a target="_blank" href="https://drive.google.com/file/d/15KQS1sbxm7BYgJFRUQ3rrj3SaQoDZ25L/view?usp=share_link" class="inline-flex items-center text-blue-600 hover:underline group-hover:text-white">
                Open
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
            </a>
          </div>

           {{-- G1 --}}
           <div class=" group max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-500 dark:hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="group-hover:fill-white  w-10 h-10 mb-2 text-gray-500 dark:text-gray-400">
              <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
              <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
              <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
            </svg>
            
            <a target="_blank" href="https://drive.google.com/file/d/1ThkVDU34MnK3Yp_ntYRjjvsuPBLy9E0a/view?usp=share_link">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white :text-sm group-hover:text-white">Wheeldozer</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 group-hover:text-white"> formulir tes praktek menggunakan Wheeldozer</p>
            <a target="_blank" href="https://drive.google.com/file/d/1ThkVDU34MnK3Yp_ntYRjjvsuPBLy9E0a/view?usp=share_link" class="inline-flex items-center text-blue-600 hover:underline group-hover:text-white">
                Open
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
            </a>
          </div>


          {{-- G2 --}}
          <div class=" group max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-500 dark:hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="group-hover:fill-white  w-10 h-10 mb-2 text-gray-500 dark:text-gray-400">
              <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
              <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
              <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
            </svg>
            <a target="_blank" href="https://docs.google.com/spreadsheets/d/1YPYVnk2gim88ddvPR-PjTGSQeetb4GMn/edit?usp=share_link&ouid=102397101453136018846&rtpof=true&sd=true">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white :text-sm group-hover:text-white">Compactor</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 group-hover:text-white"> formulir tes praktek menggunakan Compactor</p>
            <a target="_blank" href="https://docs.google.com/spreadsheets/d/1YPYVnk2gim88ddvPR-PjTGSQeetb4GMn/edit?usp=share_link&ouid=102397101453136018846&rtpof=true&sd=true" class="inline-flex items-center text-blue-600 hover:underline group-hover:text-white">
                Open
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
            </a>
          </div>
          {{-- G3 --}}
          <div class=" group max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-500 dark:hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="group-hover:fill-white  w-10 h-10 mb-2 text-gray-500 dark:text-gray-400">
              <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
              <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
              <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
            </svg>
            
            <a target="_blank" href="https://docs.google.com/spreadsheets/d/1xtFe2-q0VszjcysgIYHjkBjOnzJqd6hu/edit?usp=share_link&ouid=102397101453136018846&rtpof=true&sd=true">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white :text-sm group-hover:text-white">Fuel Truck</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 group-hover:text-white"> formulir tes praktek menggunakan Fuel Truck</p>
            <a target="_blank" href="https://docs.google.com/spreadsheets/d/1xtFe2-q0VszjcysgIYHjkBjOnzJqd6hu/edit?usp=share_link&ouid=102397101453136018846&rtpof=true&sd=true" class="inline-flex items-center text-blue-600 hover:underline group-hover:text-white">
                Open
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
            </a>
          </div>

           {{-- G1 --}}
           <div class=" group max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-500 dark:hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="group-hover:fill-white  w-10 h-10 mb-2 text-gray-500 dark:text-gray-400">
              <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
              <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
              <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
            </svg>
            
            <a target="_blank" href="https://drive.google.com/file/d/1RTU_ACgmWYUEZjw6Bpw9DtIwx5_Fsjo9/view?usp=share_link">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white :text-sm group-hover:text-white">Haul Truck</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 group-hover:text-white"> formulir tes praktek menggunakan Wheeldozer</p>
            <a target="_blank" href="https://drive.google.com/file/d/1RTU_ACgmWYUEZjw6Bpw9DtIwx5_Fsjo9/view?usp=share_link" class="inline-flex items-center text-blue-600 hover:underline group-hover:text-white">
                Open
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
            </a>
          </div>


          {{-- G2 --}}
          <div class=" group max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-500 dark:hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="group-hover:fill-white  w-10 h-10 mb-2 text-gray-500 dark:text-gray-400">
              <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
              <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
              <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
            </svg>
            <a target="_blank" href="https://docs.google.com/spreadsheets/d/1CdoJmvuEfItHeJvLry4fjWKjsZQQ6keD/edit?usp=share_link&ouid=102397101453136018846&rtpof=true&sd=true">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white :text-sm group-hover:text-white">Lube Truck</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 group-hover:text-white"> formulir tes praktek menggunakan Lube Truck</p>
            <a target="_blank" href="https://docs.google.com/spreadsheets/d/1CdoJmvuEfItHeJvLry4fjWKjsZQQ6keD/edit?usp=share_link&ouid=102397101453136018846&rtpof=true&sd=true" class="inline-flex items-center text-blue-600 hover:underline group-hover:text-white">
                Open
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
            </a>
          </div>
          {{-- G3 --}}
          <div class=" group max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-500 dark:hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="group-hover:fill-white  w-10 h-10 mb-2 text-gray-500 dark:text-gray-400">
              <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
              <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
              <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
            </svg>
            
            <a target="_blank" href="https://drive.google.com/file/d/1OmwCPbeln5wqLOLa1-qAKBQyoYltlwMb/view?usp=share_link">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white :text-sm group-hover:text-white">Operator Compactor</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 group-hover:text-white"> formulir tes praktek untuk operator compactor</p>
            <a target="_blank" href="https://drive.google.com/file/d/1OmwCPbeln5wqLOLa1-qAKBQyoYltlwMb/view?usp=share_link" class="inline-flex items-center text-blue-600 hover:underline group-hover:text-white">
                Open
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
            </a>
          </div>

          {{-- G1 --}}
          <div class=" group max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-500 dark:hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="group-hover:fill-white  w-10 h-10 mb-2 text-gray-500 dark:text-gray-400">
              <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
              <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
              <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
            </svg>
            
            <a target="_blank" href="https://drive.google.com/file/d/1ZsiS6pVfGufnGqBApaylqzdZm4JfmJb5/view?usp=share_link">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white :text-sm group-hover:text-white">Operator Drilling</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 group-hover:text-white"> formulir tes praktek untuk operator Drilling</p>
            <a target="_blank" href="https://drive.google.com/file/d/1ZsiS6pVfGufnGqBApaylqzdZm4JfmJb5/view?usp=share_link" class="inline-flex items-center text-blue-600 hover:underline group-hover:text-white">
                Open
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
            </a>
          </div>


          {{-- G2 --}}
          <div class=" group max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-500 dark:hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="group-hover:fill-white  w-10 h-10 mb-2 text-gray-500 dark:text-gray-400">
              <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
              <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
              <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
            </svg>
            <a target="_blank" href="https://drive.google.com/file/d/1EHM1DStY_yGfiE8-onT_BPsORof6aY2c/view?usp=share_link">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white :text-sm group-hover:text-white">Operator Motor Grader</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 group-hover:text-white"> formulir tes praktek untuk operator motor grader</p>
            <a target="_blank" href="https://drive.google.com/file/d/1EHM1DStY_yGfiE8-onT_BPsORof6aY2c/view?usp=share_link" class="inline-flex items-center text-blue-600 hover:underline group-hover:text-white">
                Open
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
            </a>
          </div>
          {{-- G3 --}}
          <div class=" group max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-500 dark:hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="group-hover:fill-white  w-10 h-10 mb-2 text-gray-500 dark:text-gray-400">
              <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
              <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
              <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
            </svg>
            
            <a target="_blank" href="https://drive.google.com/file/d/1In2Ab2aPOcg_hKByLs8LZQZP5AoC3UNf/view?usp=share_link">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white :text-sm group-hover:text-white">Excavator</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 group-hover:text-white"> formulir tes praktek menggunakan excavator</p>
            <a target="_blank" href="https://drive.google.com/file/d/1In2Ab2aPOcg_hKByLs8LZQZP5AoC3UNf/view?usp=share_link" class="inline-flex items-center text-blue-600 hover:underline group-hover:text-white">
                Open
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
            </a>
          </div>

          {{-- G1 --}}
          <div class=" group max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-500 dark:hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="group-hover:fill-white  w-10 h-10 mb-2 text-gray-500 dark:text-gray-400">
              <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
              <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
              <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
            </svg>
            
            <a target="_blank" href="https://docs.google.com/spreadsheets/d/1p_HKRwN0HzqQFT4uTkNxMG9mGPHBCTnl/edit?usp=share_link&ouid=102397101453136018846&rtpof=true&sd=true">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white :text-sm group-hover:text-white">Water Truck</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 group-hover:text-white"> formulir tes praktek menggunakan Wheeldozer</p>
            <a target="_blank" href="https://docs.google.com/spreadsheets/d/1p_HKRwN0HzqQFT4uTkNxMG9mGPHBCTnl/edit?usp=share_link&ouid=102397101453136018846&rtpof=true&sd=true" class="inline-flex items-center text-blue-600 hover:underline group-hover:text-white">
                Open
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
            </a>
          </div>


          {{-- G2 --}}
          <div class=" group max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-500 dark:hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="group-hover:fill-white  w-10 h-10 mb-2 text-gray-500 dark:text-gray-400">
              <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
              <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
              <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
            </svg>
            <a target="_blank" href="https://drive.google.com/file/d/1AWSCJsSQHbcT2xRvEy95bzoUBwkX-gMo/view?usp=share_link">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white :text-sm group-hover:text-white">Wheel Loader</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 group-hover:text-white"> formulir tes praktek menggunakan Wheel loader</p>
            <a target="_blank" href="https://drive.google.com/file/d/1AWSCJsSQHbcT2xRvEy95bzoUBwkX-gMo/view?usp=share_link" class="inline-flex items-center text-blue-600 hover:underline group-hover:text-white">
                Open
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
            </a>
          </div>

           {{-- G3 --}}
           <div class=" group max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-500 dark:hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="group-hover:fill-white  w-10 h-10 mb-2 text-gray-500 dark:text-gray-400">
              <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
              <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
              <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
            </svg>
            <a target="_blank" href="https://drive.google.com/file/d/1T9hN5LHpHzI-gXikStrzcWGi0b0o172J/view?usp=share_link">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white :text-sm group-hover:text-white">LV-Bus-ELF</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 group-hover:text-white"> formulir tes praktek menggunakan LV Bus Elf</p>
            <a target="_blank" href="https://drive.google.com/file/d/1T9hN5LHpHzI-gXikStrzcWGi0b0o172J/view?usp=share_link" class="inline-flex items-center text-blue-600 hover:underline group-hover:text-white">
                Open
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
            </a>
          </div>
          
        </div> 
      </div>
  </section>
  {{-- End Test Praktek --}}
 
    
@endsection
