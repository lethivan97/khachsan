@extends('layouts.admin')
@section('title','Create Type Room')
@section('css')
    <link rel="stylesheet" href="{{asset('css/admin/typeroom.css')}}">
@endsection
@section('header')
    <div class="container">
        <div class="title-header">
            <h3 class="text-center">Add Room Type</h3>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <form method="post" role="form" class="form-horizontal col-md-12">
                @csrf
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-group">
                            <div class="row col-md-12">
                                <div class="col-md-4 text-right">
                                    <label for="name">Name <span>&hercon;</span></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control"
                                           placeholder="Tên Loại Phòng">
                                    <div class="error-content">
                                        @if($errors->has('name'))
                                            <p class="text-danger"><i
                                                    class="fa fa-exclamation-circle"></i> {{$errors->first('name')}}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row col-md-12">
                                <div class="col-md-4 text-right">
                                    <label for="people">People/Room <span>&hercon;</span></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" name="people" class="form-control"
                                           placeholder="0">
                                    <div class="error-content">
                                        @if($errors->has('people'))
                                            <p class="text-danger"><i
                                                    class="fa fa-exclamation-circle"></i> {{$errors->first('people')}}
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row col-md-12">
                                <div class="col-md-4 text-right">
                                    <label for="bed">Number Bed <span>&hercon;</span></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" name="bed" class="form-control"
                                           placeholder="0">
                                    <div class="error-content">
                                        @if($errors->has('bed'))
                                            <p class="text-danger"><i
                                                    class="fa fa-exclamation-circle"></i> {{$errors->first('bed')}}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row col-md-12">
                                <div class="col-md-4 text-right">
                                    <label for="extra-bed">Number Extra_bed</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" name="extra-bed" class="form-control"
                                           placeholder="0">
                                </div>
                            </div>
                        </div>
                        <div class="form-group" hidden>
                            <div class="row col-md-12">
                                <div class="col-md-4 text-right">
                                    <label for="number_room">Số Phòng <span>&hercon;</span></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" name="number_room" class="form-control"
                                           placeholder="0" value="0">
                                    <div class="error-content">
                                        @if($errors->has('number_room'))
                                            <p class="text-danger"><i
                                                    class="fa fa-exclamation-circle"></i> {{$errors->first('number_room')}}
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row col-md-12">
                                <div class="col-md-4 text-right">
                                    <label for="acreage">Acreage <span>&hercon;</span></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" name="acreage" class="form-control"
                                           placeholder="0">
                                    <div class="error-content">
                                        @if($errors->has('acreage'))
                                            <p class="text-danger"><i
                                                    class="fa fa-exclamation-circle"></i> {{$errors->first('acreage')}}
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row col-md-12">
                                <div class="col-md-4 text-right">
                                    <label for="price">Price/Day <span>&hercon;</span></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" name="price" class="form-control"
                                           placeholder="0">
                                    <div class="error-content">
                                        @if($errors->has('price'))
                                            <p class="text-danger"><i
                                                    class="fa fa-exclamation-circle"></i> {{$errors->first('price')}}
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row col-md-12">
                                <div class="col-md-4 text-right">
                                    <label for="sale">Sale</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" name="sale" class="form-control" placeholder="0">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row col-md-12">
                                <div class="col-md-4 text-right">
                                    <label for="view">View</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" name="view" class="form-control"
                                           placeholder="Hướng Nhìn">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row col-md-12">
                                <div class="col-md-4 text-right">
                                    <label for="description">Description</label>
                                </div>
                                <div class="col-md-8">
                                    <textarea name="description" class="form-control" id="editor" cols="30" rows="10"
                                              placeholder="Mô Tả"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row col-md-12">
                                <div class="col-md-4 text-right"></div>
                                <div class="col-md-8">
                                    <a href="{{route('admin.type-rooms.index')}}"
                                       class="btn btn-outline-success">Back</a>
                                    <button type="submit" class="btn btn-outline-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <div class="row col-md-12">
                                <div class="col-md-4  text-right">
                                    <label for="Image" class="col-form-label">Images</label>
                                </div>
                                <div class="col-md-8">
                                    <button type="button" class="btn btn-sm btn-outline-warning" data-toggle="modal"
                                            data-target="#type-rooms" onclick="listModal()">Choose Images
                                    </button>
                                </div>
                            </div>
                            {{--<div class="upload-image">
                                <p>
                                    <label for="files">Ảnh ....</label>
                                </p>
                            </div>
                            <input type="file" id="files" name="files[]" multiple accept="image/*"/>--}}

                            <div class="row col-md-12" id="images-session"></div>

                            <div class="row col-md-12">
                                <div class="img-upload">
                                    <output id="list"></output>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-12">
                            @if($errors->has('Image'))
                                <p class="text-danger"><i
                                        class="fa fa-exclamation-circle"></i> {{$errors->first('Image')}}</p>
                            @endif
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="type-rooms" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true" onclick="chooseDone()">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Choose Images</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            @foreach($images as $image)
                                <div class="col-md-3 img-show img-modal" id="{{$image->url}}">
                                    <img src="{{asset('images/admin/library-images')}}/{{$image->url}}"
                                         alt="{{$image->url}}"
                                         id="{{$image->id}}"
                                         class="img-thumbnail" style="width: 120px; height: 120px" onclick="chooseImages('{{$image->url}}')"/>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-outline-success" data-dismiss="modal">Continue</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/admin/main.js')}}"></script>
    <script>
        /*function handleFileSelect(evt) {
            var files = evt.target.files;
            for (var i = 0, f; f = files[i]; i++) {
                if (!f.type.match('image.*')) {
                    continue;
                }
                var reader = new FileReader();
                reader.onload = (function (theFile) {
                    return function (e) {
                        var span = document.createElement('span');
                        span.innerHTML = ['<img class="img-thumbnail" width=40% height=40% src="', e.target.result,
                            '" title="', escape(theFile.name), '"/>'].join('');
                        document.getElementById('list').insertBefore(span, null);
                    };
                })(f);
                reader.readAsDataURL(f);
            }
        }
        document.getElementById('files').addEventListener('change', handleFileSelect, false);*/
        function showImages() {
            var span = document.createElement('span');
            span.innerHTML = ['<img class="img-thumbnail" width=40% height=40% src="', e.target.result,
                '" title="', escape(theFile.name), '"/>'].join('');
            document.getElementById('list').insertBefore(span, null);
        }
    </script>
@endsection

