@extends('layouts.aap')

@section('content')


    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <h1>pdf</h1>
                            <a href="{{ route('pdf.create') }}" class="btn btn-light">Create pdf</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="" method="GET" class="mb-4">
                            <div class="input-group">
                                <input type="text" name="keyword" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>url</th>
                                    <th>Image</th>
                                    <th>QR Code</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($pdfData as $pdf)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pdf->title }}</td>
                                        <td>{{$pdf->url}}</td>

                                        <td>
                                            <a href="{{ asset('storage/' . $pdf->image_pdf) }}" target="_blank">View PDF</a>

                                            {{--                                           <img src="{{ asset('storage/'.$pdf->image_pdf) }}" alt="{{ $pdf->title }}" style="max-width: 100px;">--}}
                                        </td>
                                        <td>
                                            <!-- Display QR Code -->
                                            {!! QrCode::size(200)->generate(asset('storage/' .  $pdf->image_pdf)) !!}
                                        </td>
                                        <td>
                                            <a href="{{ route('pdf.edit', $pdf->id) }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ route('pdf.delete', $pdf->id) }}" class="btn btn-danger">Delete</a>
                                            <a href="{{ route('pdf.show', $pdf->id) }}" class="btn btn-danger">show</a>
                                            {{-- <!-- Add delete button if needed -->
                                            <a href="{{ route('pdf.qrcode', $pdf->id) }}" class="btn btn-warning">generateQR</a> --}}

                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No posts found</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer">
                        <!-- Pagination links can be added here if needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
