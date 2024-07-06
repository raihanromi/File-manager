<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite('resources/css/app.css')


    <style>

        .swal2-cancel{
            background-color:gray;
            padding: 10px;
            color:white;
            border-radius:5px;
            margin:5px; 

        }

        .swal2-confirm{
            background-color:red;
            padding: 10px;
            color:white;
            border-radius:5px;
            margin:5px; 
        }
    </style>

</head>


<body class="font-sans antialiased dark:text-white/50">

    <div class="w-[100vw] h-[100vh] flex justify-center items-center">

        <div>
            <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">
                Check Files
            </button>

            <div id="default-modal" tabindex="-1" aria-hidden="true"
                class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-7xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between p-1 md:p-2 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white ml-2">
                                File Manager
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="default-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>

                        </div>

                        <!-- Modal body -->
                        <div class=" h-[70vh] flex flex-col overflow-y-scroll relative">


                            <!-- Upload file Modal toggle -->
                            <button id="uploadButton" data-modal-target="authentication-modal"
                                data-modal-toggle="authentication-modal"
                                class="sticky top-0 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium  text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button">
                                <i class="fa-solid fa-arrow-up-from-bracket" class="px-2"></i> Upload file
                            </button>

                            <!-- Main modal -->
                            <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Upload file
                                            </h3>
                                            <button type="button"
                                                class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="authentication-modal">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-4 md:p-5">
                                            <form id="form_submit" class=" max-w-sm mx-auto"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-5">
                                                    <label
                                                        class="w-full block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                        for="file_input">Upload file</label>
                                                    <input name="file"
                                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                        id="file_input" type="file">
                                                </div>
                                                <button type="submit"
                                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Upload</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- file settings bar -->
                            <div id="file_settings" class="sticky top-0 "></div>

                            <!-- show all photos -->
                            <div class="p-6 flex flex-wrap gap-2 justify-center" id="photo_section"></div>

                            <!-- show confirmation message -->
                            <div id="confirm_message" class="flex justify-around p-5 sticky bottom-0 mt-auto"></div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <input placeholder="value here" id="show_file_path"
            class="p-2 ml-2 border-2 border-gray-500 rounder-md w-[30vw] text-black" />

    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
                integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<script type="module">
       
       $(document).ready(function () {
           var file_data

           //getting all the files function
           function updateFileSection() {
               $.ajax({
                   type: 'GET',
                   url: '/files',
                   success: function (data) {
                       file_data = data
                       var html = ''
                       data.forEach((item) => {
                           html += `<div class="img_div w-[150px] h-[100px] bg-gray-300 cursor-pointer hover:bg-blue-700">
                                <img id="${item.id}" src="{{ asset('${item.filepath}') }}" class="img_class h-[95px] w-[150px] " alt />
                                </div>`
                       })
                       $('#photo_section').append(html)

                   },
                   error: function (xhr, status, error) {
                       console.error(xhr.responseText);
                   }
               })

           }

           //getting all the files
           updateFileSection()

           //post file
           $("#form_submit").submit(function (e) {
               e.preventDefault()
               const formData = new FormData(this)
               $.ajax({
                   type: 'POST',
                   url: '/uploadfile',
                   data: formData,
                   contentType: false,
                   processData: false,
                   success: function (data) {
                       //console.log(data);
                       $('[data-modal-hide="authentication-modal"]').click()

                       $('#file_input').val(null)

                       file_data = data
                       var html = ''
                       data.forEach((item) => {
                           html += `<div class="w-[150px] h-[100px] bg-gray-300 cursor-pointer ml-6">
                                        <img id="${item.id}" src="{{ asset('${item.filepath}') }}" class="img_class h-[95px] w-[150px] " alt />
                                        </div>`
                       })

                       $('#photo_section').children().remove()
                       $('#photo_section').append(html)


                   },
                   error: function (xhr, status, error) {
                       console.error(error)
                   }
               })
           });


           //store all the file that are clicked
           var selectedFiles = []

           //store the id of the selected files
           var selectedFiles_id = []

           //file functionality
           $(document).on("click", ".img_class", function () {

               $(this).parent().toggleClass('bg-gray-300 bg-blue-700')

               var anySelected = $('.img_class').parent().hasClass('bg-blue-700');

               if (anySelected) {
                   $('#uploadButton').hide();
               } else {
                   $('#uploadButton').show();
               }

               $('#file_settings').children().remove()

               $('#file_settings').html(`<div class="bg-gray-700 w-[100%] px-2.5 py-1 flex">
                            <div id="delete_file" class="flex items-center justify-center gap-x-1 hover:bg-gray-600 p-1">
                                <i class="fa-solid fa-trash text-white"></i>
                            <button class="text-white font-semibold">Delete</button>
                                </div>
                            </div>`)



               $('#confirm_message').html(`
    <div class="flex-1 flex justify-center items-center bg-gray-700 py-2.5 hover:cursor-pointer hover:bg-gray-600" id="cancel_button">
        <i class="fa-solid fa-xmark text-white"></i><button class="px-2 text-white">Cancel</button>
    </div>
    <div class="flex-1 flex justify-center items-center bg-gray-700 py-2.5 hover:cursor-pointer hover:bg-gray-600" id="confirm_button">
        <i class="fa-solid fa-check text-white"></i><button class="px-2 text-white">Confirm</button>
    </div>
`);



               //got the selected file id here...
               var file_id = $(this).attr('id')

               //store selected file id
               if (!selectedFiles_id.includes(file_id)) {
                   selectedFiles_id.push(file_id)
               } else {
                   var id_index = selectedFiles_id.indexOf(file_id)
                   if (id_index !== -1) {
                       selectedFiles_id.splice(id_index, 1)
                   }
               }

               //store selected files path
               var file_path
               file_data.map((item) => {
                   if (item.id == file_id) {
                       file_path = item.filepath
                   }
               })

               if (!selectedFiles.includes(file_path)) {
                   selectedFiles.push(file_path)
               } else {
                   var index = selectedFiles.indexOf(file_path)

                   if (index !== -1) {
                       selectedFiles.splice(index, 1)
                   }
               }

               //remove functionality if any files are not selected
               if (selectedFiles.length === 0) {
                   $('#confirm_message').children().remove()
                   $('#file_settings').children().remove()
               }


               //delete files 
               $('#delete_file').click(function () {
                   var deleteFiles = JSON.stringify(selectedFiles_id)

                   const swalWithBootstrapButtons = Swal.mixin({
                       customClass: {
                           confirmButton: "btn btn-success",
                           cancelButton: "btn btn-danger"
                       },
                       buttonsStyling: false
                   });
                   swalWithBootstrapButtons.fire({
                       title: "Are you sure?",
                       text: "You won't be able to revert this!",
                       icon: "warning",
                       showCancelButton: true,
                       confirmButtonText: "Yes, delete it!",
                       cancelButtonText: "No, cancel!",
                       reverseButtons: true
                   }).then((result) => {
                       if (result.isConfirmed) {

                           $.ajax({
                               url: '/deletefile',
                               type: "POST",
                               headers: {
                                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                               },
                               data: {
                                   files: deleteFiles
                               },
                               success: function (data) {

                                   //console.log(data)

                                   selectedFiles_id = []
                                   selectedFiles = []

                                   file_data = data.files
                                   var html = ''
                                   data.files.forEach((item) => {
                                       html += `<div class="w-[150px] h-[100px] bg-gray-300 cursor-pointer ml-6">
                                        <img id="${item.id}" src="{{ asset('${item.filepath}') }}" class="img_class h-[90px] w-[150px] " alt />
                                        </div>`
                                   })

                                   $('#photo_section').children().remove()
                                   $('#photo_section').append(html)
                                   $('#uploadButton').show()

                                   if (selectedFiles_id.length === 0) {
                                       $('#confirm_message').children().remove()
                                       $('#file_settings').children().remove()
                                   }


                               },
                               error: function (xhr, status, error) {
                                   console.log(xhr.responseText)
                               }
                           })

                           swalWithBootstrapButtons.fire({
                               title: "Deleted!",
                               text: "Your file has been deleted.",
                               icon: "success"
                           });
                       } else if (
                           /* Read more about handling dismissals below */
                           result.dismiss === Swal.DismissReason.cancel
                       ) {
                           swalWithBootstrapButtons.fire({
                               title: "Cancelled",
                               text: "Your imaginary file is safe :)",
                               icon: "error"
                           });
                       }
                   });

               })


               //confirm button
               $(document).on('click', '#confirm_button', function () {

                   $('[data-modal-hide="default-modal"]').click()

                   $("#show_file_path").val(selectedFiles)

               })


               $(document).on('click', '#cancel_button', function () {

                   $('.img_class').parent().removeClass('bg-blue-700 bg-gray-300').addClass('bg-gray-300')

                   selectedFiles = []
                   selectedFiles_id = []

                   $('#confirm_message').children().remove()
                   $('#file_settings').children().remove()

                   var anySelected = $('.img_class').parent().hasClass('bg-blue-700');

                   if (anySelected) {
                       $('#uploadButton').hide();
                   } else {
                       $('#uploadButton').show();
                   }

               })

           });

       });

</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>