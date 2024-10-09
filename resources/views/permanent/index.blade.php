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
                            <h1>permanent address</h1>
                            <a href="{{ route('permanent.create') }}" class="btn btn-light">Create</a>
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
                                        <th>is/date</th>
                                       <th>status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($permanentData as $permanent)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $permanent->certificate_number }}</td>
                                            <td>{{ $permanent->name }}</td>
                                            <td>{{ $permanent->gender }}</td>
                                            <td>{{ $permanent->f_name }}</td>
                                            <td>{{ $permanent->m_name }}</td>
                                            <td>{{ $permanent->dob }}</td>
                                            <td>{{ $permanent->address }}</td>
                                            <td>{{ $permanent->issu_date }}</td>
                                            <td>{{ $permanent->status }}</td>
                                            {{-- <td>

                                                {!! QrCode::size(200)->generate(url('/' . $permanent->url)) !!}
                                            </td> --}}
                                            <td>
                                                <a href="{{ route('permanent.edit', $permanent->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <a href="{{ route('permanent.delete', $permanent->id) }}"
                                                    class="btn btn-danger">Delete</a>
                                                <a href="{{ route('permanent.show', $permanent->id) }}" class="btn btn-success" target="_blank">Show</a>
                                                {{-- <a href="{{ route('permanent.showQr', $permanent->url) }}" --}}
                                                {{-- class="btn btn-danger">ShowQR</a> --}}
                                                {{-- {!! QrCode::size(200)->generate($url) !!} --}}
                                                {{-- <!-- Add delete button if needed -->
                                            <a href="{{ route('permanent.qrcode', $permanent->id) }}" class="btn btn-warning">generateQR</a> --}}

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

                        {{ $permanentData->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
