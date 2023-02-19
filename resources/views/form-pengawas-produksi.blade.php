@extends('layouts.default')
@extends('layouts.download-page')
@section('page-content')
{{-- Observasi --}}
<section class="bg-green-100 dark:bg-gray-700">
    <h1 class="py-6 flex justify-center text-4xl font-weight-bold dark:text-white"> Observasi </h1>
      <div class="flex justify-center py-6">
        <div class="grid gap-5 grid-cols-3   sm:px-0 max-sm:grid-cols-1">
        {{-- G1 --}}
          <div class=" group max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-500 dark:hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="group-hover:fill-white  w-10 h-10 mb-2 text-gray-500 dark:text-gray-400">
                <path fill-rule="evenodd" d="M9 1.5H5.625c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5zm6.61 10.936a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 14.47a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                <path d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z" />
            </svg>

            <a href="https://docs.google.com/spreadsheets/d/1vinx-W3q79Ry6U99-POneouBeAa8RgtH/edit?usp=share_link&ouid=102397101453136018846&rtpof=true&sd=true">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white :text-sm group-hover:text-white"> Behaviour FM</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 group-hover:text-white"> File Formulir yang diperuntukkan kepada para operator</p>
            <a href="https://docs.google.com/spreadsheets/d/1vinx-W3q79Ry6U99-POneouBeAa8RgtH/edit?usp=share_link&ouid=102397101453136018846&rtpof=true&sd=true" target="_blank"class="inline-flex items-center text-blue-600 hover:underline group-hover:text-white">
                Open
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
            </a>
          </div>
        {{-- G2 --}}
          <div class=" group max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-500 dark:hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="group-hover:fill-white  w-10 h-10 mb-2 text-gray-500 dark:text-gray-400">
                <path fill-rule="evenodd" d="M9 1.5H5.625c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5zm6.61 10.936a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 14.47a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                <path d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z" />
            </svg>
            
            <a target="_blank" href="https://docs.google.com/spreadsheets/d/1oqGRakYc9VHv-onUN1N0-xctbb27VEd8/edit?usp=share_link&ouid=102397101453136018846&rtpof=true&sd=true">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white :text-sm group-hover:text-white">Observasi FM OB</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 group-hover:text-white"> Kegiatan yang berpacu dalam melodi dalam penyelenggaraan pendidikan perusahaan</p>
            <a target="_blank"href="https://docs.google.com/spreadsheets/d/1oqGRakYc9VHv-onUN1N0-xctbb27VEd8/edit?usp=share_link&ouid=102397101453136018846&rtpof=true&sd=true" class="inline-flex items-center text-blue-600 hover:underline group-hover:text-white">
                Open
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
            </a>
          </div>
        {{-- G3 --}}
          <div class=" group max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-500 dark:hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="group-hover:fill-white  w-10 h-10 mb-2 text-gray-500 dark:text-gray-400">
                <path fill-rule="evenodd" d="M9 1.5H5.625c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5zm6.61 10.936a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 14.47a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                <path d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z" />
            </svg>
            <a href="https://docs.google.com/spreadsheets/d/1_kkJ1BgQgD9yB49W9YbQO3FGBqYLwBqi/edit?usp=share_link&ouid=102397101453136018846&rtpof=true&sd=true">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white :text-sm group-hover:text-white"> Observasi OJT FM PROD</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 group-hover:text-white"> File Formulir yang diperuntukkan kepada para operator</p>
            <a href="https://docs.google.com/spreadsheets/d/1_kkJ1BgQgD9yB49W9YbQO3FGBqYLwBqi/edit?usp=share_link&ouid=102397101453136018846&rtpof=true&sd=true" target="_blank"class="inline-flex items-center text-blue-600 hover:underline group-hover:text-white">
                Open
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
            </a>
          </div>
        </div> 
      </div>
  </section>
@endsection