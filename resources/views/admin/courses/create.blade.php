@extends('layouts.appAdmin')
@section('content')



<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col p-md-0">
                <h4>corses</h4>
            </div>
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('all-courses.index') }}">Cards</a>
                    </li>

                    <li class="breadcrumb-item active">Add Card
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">

            <div class="col-xl-12">


                <div class="card forms-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Add New Item</h4>
                        <div class="basic-form">
                            <form role="form" id="myForm" 
                            enctype="multipart/form-data" method="post" action="{{ route('all-courses.store') }}">
                                {{ csrf_field() }}


                            

                                <div class="form-group row align-items-center">
                                    <label class="col-sm-3 col-form-label text-label"> Name (Ar)</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="name_ar" onkeyup="myFunction()" id="fname" aria-describedby="validationDefaultUsername1">
                                        </div>
                                        @if($errors->has('name_ar'))
                                        <div class="error">{{ $errors->first('name_ar') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row align-items-center">
                                    <label class="col-sm-3 col-form-label text-label"> Name (En)</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="name_en" id="validationDefaultUsername1" aria-describedby="validationDefaultUsername1">
                                        </div>
                                        @if($errors->has('name_en'))
                                        <div class="error">{{ $errors->first('name_en') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row align-items-center">
                                    <label class="col-sm-3 col-form-label text-label">Price </label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="price" id="validationDefaultUsername1" aria-describedby="validationDefaultUsername1">
                                        </div>
                                        @if($errors->has('price'))
                                        <div class="error">{{ $errors->first('price') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row align-items-center">
                                    <label class="col-sm-3 col-form-label text-label">Image</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="file"  name="images" id="validationDefaultUsername1"
                                             aria-describedby="validationDefaultUsername1">
                                        </div>
                                        @if($errors->has('images'))
                                        <div class="error">{{ $errors->first('images') }}</div>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group row align-items-center">
                                    <label class="col-sm-3 col-form-label text-label"> Descreption (Ar)</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <textarea row="6"  name="desc_ar" class="form-control">
                                            </textarea>
                                        </div>
                                        @if($errors->has('desc_ar'))
                                        <div class="error">{{ $errors->first('desc_ar') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row align-items-center">
                                    <label class="col-sm-3 col-form-label text-label"> Descreption (En)</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                        <textarea  row="6"  name="desc_en" class="form-control"  >
                                         </textarea>
                                        </div>
                                        @if($errors->has('desc_en'))
                                        <div class="error">{{ $errors->first('desc_en') }}</div>
                                        @endif
                                    </div>
                                </div>


                                <div style="float: right;">
                                    <button type="submit" class="btn btn-primary btn-form">Submit</button>
                                    <button type="reset"  class="btn btn-light btn-form"><a href="{{ route('all-courses.index') }}">Cancel</a></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>




    </div>
</div>
<!-- #/ container -->
</div>

@endsection