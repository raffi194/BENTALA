@extends('layout.home')

@section('title', 'Dashboard')

@section('content')
<div class="">
    <div class="h-[40%] mt-20">
        <div class="flex justify-center">   
            <div class="w-[80%]">
                <div class="flex flex-nowrap p-4">
                    <div class="flex flex-grow items-center">
                        <span class="text-5xl font-bold uppercase">edit blog</span>
                    </div>
                    <div onclick="openPopup()" class="flex justify-end items-center border-2 border-[--hitam] p-2 px-4 rounded-xl hover:bg-[--hitam] hover:text-[--putih]">
                        <span class="font-medium">Tambah Blog</span>
                    </div>
                </div>
            </div>    
        </div>
    </div>
    <div class="flex justify-center">
        <div class="w-full mb-5">
            <div class="mt-5 flex justify-center">
                <div class="w-[60%]"> 
                    <div class="grid grid-cols-1 gap-4 h-[calc(100vh-200px)] overflow-y-auto" style="scrollbar-width: none; -ms-overflow-style: none;">   
                        @if($blogs->isEmpty())
                            <p>No blogs available for this user.</p>
                        @else
                            @foreach ($blogs as $blog)                         
                            <!-- Card -->
                            <div class="relative w-fit">
                                <div class="relative flex">
                                    <div class="overflow-hidden transition-shadow duration-300 flex">
                                        <div class="relative group">
                                            <img src="{{ asset('uploads/'. $blog->gambar)}}" alt="Product 1" class="w-[600px] h-80 object-cover">
                                        </div>
                                        <div class="flex flex-col p-4 w-full">
                                            <div class="flex items-center space-x-5">
                                                <span class="flex-grow text-md font-bold">{{$blog->created_at}}</span>
                                                <form action="{{ route('blog.delete', $blog->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus blog ini?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="flex items-center border border-[--hitam] rounded-xl px-2 py-2 cursor-pointer space-x-2 group hover:bg-[--merah]">
                                                        <i class="fa-solid fa-trash text-[--hitam] group-hover:text-[--putih]"></i>
                                                        <span class="text-xs font-bold text-[--hitam] group-hover:text-[--putih]">Delete</span>
                                                    </button>
                                                </form>      
                                                <button onclick="openEditPopup('{{ $blog->id }}')" class="flex items-center border border-[--hitam] rounded-xl px-2 py-2 cursor-pointer space-x-2 group hover:bg-[--ijo]">
                                                    <i class="fa-solid fa-pen-to-square text-[--hitam] group-hover:text-[--putih]"></i>
                                                    <span class="text-xs font-bold text-[--hitam] group-hover:text-[--putih]">Edit</span>
                                                </button>
                                            </div>
                                            <div class="w-3/4 mt-2">
                                                <span class="text-4xl font-bold text-[--hitam]">{{$blog->judul}}</span>
                                            </div>
                                            <div class="mt-2">
                                                <span class="text-sm font-medium text-[--hitam]">{{ Str::words($blog->isi, 10) }}...</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Popup Edit Form -->
                            <div id="editPopup-{{ $blog->id }}" class="hidden fixed inset-0 bg-[--hitamkurang] bg-opacity-50 z-[9999] flex justify-center items-center">
                                <div class="bg-[--putih] rounded-lg p-6 w-96">
                                    <span class="text-xl font-semibold mb-4">Edit Blog</span>
                                    <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-4">
                                            <label for="judul" class="block text-sm font-medium text-[--hitam]">Judul</label>
                                            <input type="text" name="judul" value="{{ $blog->judul }}" class="w-full border border-[--hitam] px-3 py-2 rounded-lg focus:outline-none focus:ring-[--ijo] focus:border-[--ijo]" required>
                                        </div>
                                        <div class="mb-4">
                                            <label for="isi" class="block text-sm font-medium text-[--hitam]">Isi</label>
                                            <textarea name="isi" class="w-full border border-[--hitam] px-3 py-2 rounded-lg focus:outline-none focus:ring-[--ijo] focus:border-[--ijo]" required>{{ $blog->isi }}</textarea>
                                        </div>
                                        <div class="mb-4">
                                            <label>Gambar</label>
                                            <label for="gambar" class="flex items-center border border-[--hitam] rounded-2xl p-2 cursor-pointer">
                                                <input type="file" name="gambar">
                                            </label>
                                        </div>
                                        <div class="flex justify-end space-x-2">
                                            <button type="button" onclick="closeEditPopup('{{ $blog->id }}')" class="px-4 py-2 bg-[--merah] rounded-lg text-[--putih] hover:bg-[--hitam] hover:text-[--putih]">Batal</button>
                                            <button type="submit" class="px-4 py-2 bg-[--ijo] text-[--putih] rounded-lg hover:bg-[--hitam]">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            @endforeach
                        @endif


                        <div id="popup" class="hidden fixed inset-0 bg-[--hitamkurang] bg-opacity-50 z-[9999] flex justify-center items-center">
                            <div class="bg-[--putih] rounded-lg p-6 w-96">
                                <span class="text-xl font-semibold mb-4">Tambah Blog</span>
                                <form id="createBlogForm" method="POST" action="{{ route('blog.create') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="judul" class="block text-sm font-medium text-[--hitam]">Judul</label>
                                        <input type="text" name="judul" id="edit_judul"placeholder="cth. Judul Blog" class="w-full border border-[--hitam] px-3 py-2 rounded-lg focus:outline-none focus:ring-[--ijo] focus:border-[--ijo]" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="isi" class="block text-sm font-medium text-[--hitam]">Isi</label>
                                        <textarea name="isi" id="isi" placeholder="cth. Lorem ipsum dolor" class="w-full border border-[--hitam] px-3 py-2 rounded-lg focus:outline-none focus:ring-[--ijo] focus:border-[--ijo]" required></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label>Gambar</label>
                                        <label for="gambar" class="flex items-center border border-[--hitam] rounded-2xl p-2 cursor-pointer">
                                            {{-- <i class="fa-solid fa-upload fa-xs mr-2"></i> --}}
                                            <span></span>
                                            <input type="file" name="gambar" id="gambar" required>
                                        </label>
                                    </div>
                                    <div class="flex justify-end space-x-2">
                                        <button type="button" onclick="closePopup()" class="px-4 py-2 bg-[--merah] rounded-lg text-[--putih] hover:bg-[--hitam] hover:text-[--putih]">Batal</button>
                                        <button type="submit" id="submit_blog" class="px-4 py-2 bg-[--ijo] text-[--putih] rounded-lg hover:bg-[--hitam]">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>                            
        </div>
    </div> 
    <script>
        function getFirstTenWords($text) {
            // Menggunakan explode untuk memecah teks menjadi array kata
            $words = explode(' ', $text);
                            
            // Ambil hanya 10 kata pertama
            $firstTenWords = array_slice($words, 0, 10);
                            
            // Gabungkan kembali kata-kata tersebut menjadi string
            return implode(' ', $firstTenWords);
        }

        function openPopup() {
            document.getElementById('popup').classList.remove('hidden');
        }
        
        function closePopup() {
            document.getElementById('popup').classList.add('hidden');
        }

        $('#submit_blog').click(function(e){
            e.preventDefault();

            let judul = $('#judul').val();
            let isi = $('#isi').val();
            let gambar = $('#gambar')[0].files[0];
            let formData = new FormData();
            formData.append('judul', judul);
            formData.append('isi', isi);
            if (gambar) {
                formData.append('gambar', gambar);
            }

            $.ajax({
                url: '/blog',
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}",
                },
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    alert('Blog berhasil dibuat!');
                    window.location.href = '/dashboard'; // Alihkan ke halaman dashboard
                },
                error: function(xhr) {
                    console.error(xhr.responseJSON); // Tampilkan error untuk debugging
                    alert('Gagal membuat blog: ' + JSON.stringify(xhr.responseJSON));
                }
            });
        });

        function handleFormSubmit(event) {
            event.preventDefault();
            closePopup();
            showSuccessAnimation();
        }
    
        function showSuccessAnimation() {
            document.getElementById('success-animation').classList.remove('hidden');
        }
    
        function closeSuccessAnimation() {
            document.getElementById('success-animation').classList.add('hidden');
        }
    
        function handleDelete() {
            showDeleteSuccessAnimation();
        }
    
        function showDeleteSuccessAnimation() {
            document.getElementById('delete-success-animation').classList.remove('hidden');
        }
    
        function closeDeleteSuccessAnimation() {
            document.getElementById('delete-success-animation').classList.add('hidden');
        }

        function openEdit(id) {
            // Show the edit popup and fill the fields with blog data
            document.getElementById('editPopup').classList.remove('hidden');
            fetch(`/blog/${id}/edit`)
                .then(response => response.json())
                .then(data => {
                    // Populate the form with blog data
                    document.getElementById('edit_judul').value = data.judul;
                    document.getElementById('edit_isi').value = data.isi;
                    document.getElementById('id').value = data.id;
                    
                });
        }

        function openEditPopup(blogId) {
            document.getElementById(`editPopup-${blogId}`).classList.remove('hidden');
        }

        function closeEditPopup(blogId) {
            document.getElementById(`editPopup-${blogId}`).classList.add('hidden');
        }


        function showSuccessAnimation() {
            closeEditForm();
            document.getElementById('success-animation').classList.remove('hidden');
        }

        function closeSuccessAnimation() {
            document.getElementById('success-animation').classList.add('hidden');
        }

        document.querySelectorAll('.edit-button').forEach(button => {
            button.addEventListener('click', () => {
                openEditForm();
            });
        });

        document.getElementById('editDataForm').addEventListener('submit', function (event) {
            event.preventDefault(); 
            showSuccessAnimation();
        });
    </script>
</div>
@endsection