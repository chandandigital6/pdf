@extends('layouts.aap')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">update </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card-body">
                        <form action="{{ route('caste.update', $caste->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf


                            <div class="form-group">
                                <label for="certificate_number">Certificate Number</label>
                                <input type="text" name="certificate_number" class="form-control" id="certificate_number" value="{{ old('certificate_number', $caste->certificate_number) }}">
                                @error('certificate_number')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $caste->name) }}">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select name="gender" class="form-control" id="gender">
                                    <option value="">Select Gender</option>
                                    <option value="male" {{ old('gender', $caste->gender) == 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ old('gender', $caste->gender) == 'female' ? 'selected' : '' }}>Female</option>
                                </select>
                                @error('gender')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="f_name">Father's Name</label>
                                <input type="text" name="f_name" class="form-control" id="f_name" value="{{ old('f_name', $caste->f_name) }}">
                                @error('f_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="m_name">Mother's Name</label>
                                <input type="text" name="m_name" class="form-control" id="m_name" value="{{ old('m_name', $caste->m_name) }}">
                                @error('m_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="date" name="dob" class="form-control" id="dob" value="{{ old('dob', $caste->dob) }}">
                                @error('dob')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="sub_category">category</label>
                                <input type="text" name="category" class="form-control" id="category" value="{{ old('category', $caste->category) }}">
                                @error('category')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="sub_category">sub_category</label>
                                <input type="text" name="sub_category" class="form-control" id="sub_category" value="{{ old('sub_category' , $caste->sub_category) }}">
                                @error('sub_category')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control" id="address" value="{{ old('address', $caste->address) }}">
                                @error('address')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="issu_date">Issue Date</label>
                                <input type="date" name="issu_date" class="form-control" id="issu_date" value="{{ old('issu_date', $caste->issu_date) }}">
                                @error('issu_date')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" class="form-control" id="status">
                                    <option value="approved" {{ old('status', $caste->status) == 'approved' ? 'selected' : '' }}>Approved</option>
                                    <option value="rejected" {{ old('status', $caste->status) == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                    <option value="pending" {{ old('status', $caste->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                                </select>
                                @error('status')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
