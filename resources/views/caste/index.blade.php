@extends('layouts.aap')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if (session('success'))
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
                            <h1>caste</h1>
                            <a href="{{ route('caste.create') }}" class="btn btn-light">Create</a>
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
                                        <th>c/no.</th>
                                        <th>name</th>
                                        <th>gender</th>
                                        <th>f/name</th>
                                        <th>m/name</th>
                                        <th>D/O/B</th>
                                        <th>add</th>
                                        <th>Ctgy</th>
                                        <th>sc_tgy</th>
                                        <th>is/date</th>
                                       <th>status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($casteData as $caste)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $caste->certificate_number }}</td>
                                            <td>{{ $caste->name }}</td>
                                            <td>{{ $caste->gender }}</td>
                                            <td>{{ $caste->f_name }}</td>
                                            <td>{{ $caste->m_name }}</td>
                                            <td>{{ $caste->dob }}</td>
                                            <td>{{ $caste->category }}</td>
                                            <td>{{ $caste->sub_category }}</td>
                                            <td>{{ $caste->address }}</td>
                                            <td>{{ $caste->issu_date }}</td>
                                            <td>{{ $caste->status }}</td>
                                            {{-- <td>

                                                {!! QrCode::size(200)->generate(url('/' . $caste->url)) !!}
                                            </td> --}}
                                            <td>
                                                <a href="{{ route('caste.edit', $caste->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <a href="{{ route('caste.delete', $caste->id) }}"
                                                    class="btn btn-danger">Delete</a>
                                                <a href="{{ route('caste.show', $caste->id) }}" class="btn btn-success" target="_blank">Show</a>
                                                {{-- <a href="{{ route('caste.showQr', $caste->url) }}" --}}
                                                {{-- class="btn btn-danger">ShowQR</a> --}}
                                                {{-- {!! QrCode::size(200)->generate($url) !!} --}}
                                                {{-- <!-- Add delete button if needed -->
                                            <a href="{{ route('caste.qrcode', $caste->id) }}" class="btn btn-warning">generateQR</a> --}}

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

                        {{ $casteData->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
