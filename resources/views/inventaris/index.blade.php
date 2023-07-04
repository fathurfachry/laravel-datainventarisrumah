@extends('layout.app')

@section('isi')

    {{-- WELCOME BANNER AND ADD BUTTON --}}

    <div class="mx-5 my-3 px-2" style="border-radius: 20px">
      <h5 class="card-header text-center border-0 bg-white pt-3 fs-2 fw-bold opacity-75">Selamat Datang</h5>
      <div class="card-body">


        <div class=" mb-2 d-flex justify-content-center align-items-center gap-2">
          <h1 class="fs-5 text-center mt-3 mb-4 opacity-25" style="color: black">Buat daftar berbagai barang yang kamu miliki dirumahmu.</h1>
          <a href="{{ url('inventaris/buat') }}"  class="btn text-warning">+ Tambah Inventaris</a>
        </div>

      </div>

      

    </div>

    {{-- END WELCOME BANNER AND ADD BUTTON --}}

    {{-- MAIN CONTENT --}}

    <div class="card px-2 py-2 container mt-4">

                <table class="table table-hover">
                    <thead>
                        <tr class="text-left">
                        <th scope="col">No.</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Ruangan</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Deskripsi</th>
                        <th class="" scope="col">Aksi</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        @php($number = 1)
                        @foreach ($inventaris as $barang)
                        <tr class="text-left">
                            <th scope="row">{{ $number }}</th>
                            <td>{{$barang->nama_barang}}</td>
                            <td>{{$barang->ruangan}}</td>
                            <td>{{$barang->jumlah_barang}}</td>
                            <td>{{$barang->info_barang}}</td>
                            <td class="justify-content-end">
                            

                                {{-- FORM --}}
                                <form method="POST" action="{{("inventaris/$barang->id")}}">

                                  {{-- <button type="submit" class="btn btn-sm btn-outline-danger my-2"2>
                                       Selengkapnya
                                  </button> --}}
                                
                                    <a href="{{("inventaris/$barang->id/edit")}}" class="btn btn-outline-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-outline-danger my-2"2>
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>

                            </td>
                            
                        </tr>
                        @php($number++)
                        @endforeach
                        
                    </tbody>
                    </table>

                    <div class="pull-right p-2">
                      {{ $inventaris->links() }}
                    </div>
                    
    </div>

    
            
    {{-- END MAIN CONTENT --}}

@endsection