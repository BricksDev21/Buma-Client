@extends('layouts.default')
@extends('layouts.skill')
@section('page-content')

<section class="dark:bg-gray-700">
    <div class="flex justify-center py-6">
        <div class="grid gap-5 grid-cols-3   sm:px-0 max-sm:grid-cols-1">
          <div class=" group max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-500 dark:hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="group-hover:fill-white  w-10 h-10 mb-2 text-gray-500 dark:text-gray-400">
              <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
              <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
              <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
            </svg>
            <a href="https://drive.google.com/drive/folders/1WCEIZ5D3_zkrfhqJppnj7xT86EiviZuZ?usp=share_link">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white :text-sm group-hover:text-white"> In Class</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 group-hover:text-white"> Folder untuk menunjang proses belajar anda di kelas atau sebagai referensi belajar ketika anda beristirahat</p>
            <a href="https://drive.google.com/drive/folders/1WCEIZ5D3_zkrfhqJppnj7xT86EiviZuZ?usp=share_link" class="inline-flex items-center text-blue-600 hover:underline group-hover:text-white">
                Click to open
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
            </a>
          </div>
          <div class=" group max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-500 dark:hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="group-hover:fill-white  w-10 h-10 mb-2 text-gray-500 dark:text-gray-400">
              <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
              <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
              <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
            </svg>
            
            <a href="https://drive.google.com/drive/folders/1QmD9duxeaFoAMuPYtw8g9UHd66kTgsV2?usp=share_link">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white :text-sm group-hover:text-white">On Job Training</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 group-hover:text-white"> List Materi On Job training untuk mengakomodasi proses belajar anda</p>
            <a href="https://drive.google.com/drive/folders/1QmD9duxeaFoAMuPYtw8g9UHd66kTgsV2?usp=share_link" class="inline-flex items-center text-blue-600 hover:underline group-hover:text-white">
                Click to open
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
            </a>
          </div>

          <div class=" group max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-500 dark:hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="group-hover:fill-white  w-10 h-10 mb-2 text-gray-500 dark:text-gray-400">
              <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
              <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
              <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
            </svg>
            
            <a href="https://drive.google.com/drive/folders/1hlFqH_2Xr0PZh6XT05QurGVcxu6HA8mY?usp=share_link">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white :text-sm group-hover:text-white">On Site</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 group-hover:text-white"> List Materi untuk mengakomodasi pembelajaran project based learning dan kemampuan studi kasus anda</p>
            <a href="https://drive.google.com/drive/folders/1hlFqH_2Xr0PZh6XT05QurGVcxu6HA8mY?usp=share_link" class="inline-flex items-center text-blue-600 hover:underline group-hover:text-white">
                Click to open 
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
            </a>
          </div>


        </div> 
      </div>
  </section>


@endsection