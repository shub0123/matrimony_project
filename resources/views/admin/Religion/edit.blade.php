@extends('admin.layouts.master')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card" id="customerList">
                <div class="card-header border-bottom-dashed">

                    <div class="row g-4 align-items-center">
                        <div class="col-sm">
                            <div>
                                <h5 class="card-title mb-0">Religion List</h5>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="card-body">

                {{-- {{ dd($religion) }} --}}
                  <form method="POST" action="{{ route("admin.religion.update", [$religion->id]) }}" enctype="multipart/form-data">
                      @method('PUT')
                      @csrf
                      <input type="hidden" name="id" value="{{ $religion->id }}">
                      <div class="form-group">
                          <label class="required" for="name">{{ trans('cruds.religion.fields.name') }}</label>
                          <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $religion->name) }}" step="1" required>
                          @if($errors->has('name'))
                              <span class="text-danger">{{ $errors->first('name') }}</span>
                          @endif
                          <span class="help-block">{{ trans('cruds.religion.fields.name_helper') }}</span>
                      </div>


                      <div class="form-group mt-2">
                          <button class="btn btn-danger" type="submit">
                            Save
                          </button>
                      </div>
                  </form>
                    
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->
@endsection
