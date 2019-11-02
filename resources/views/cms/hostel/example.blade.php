
@extends('layouts.master')
@section('title','تنظیمات اتاق')
@section('content')

    <h3 class="jumbotron">Laravel Multiple Images Upload Using Dropzone</h3>
    <form method="post" action="{{url('hostel/photos')}}" enctype="multipart/form-data" class="dropzone" id="dropzone">
        @csrf
    </form>
    <script type="text/javascript">
        Dropzone.options.frmTarget = {
            autoProcessQueue: false,
            url: 'upload_files.php',
            init: function () {

                var myDropzone = this;

                // Update selector to match your button
                $("#button").click(function (e) {
                    e.preventDefault();
                    myDropzone.processQueue();
                });

                this.on('sending', function(file, xhr, formData) {
                    // Append all form inputs to the formData Dropzone will POST
                    var data = $('#frmTarget').serializeArray();
                    $.each(data, function(key, el) {
                        formData.append(el.name, el.value);
                    });
                });
            }
        }
        {{--Dropzone.options.dropzone =--}}
            {{--{--}}
                {{--maxFilesize: 12,--}}
                {{--renameFile: function(file) {--}}
                    {{--var dt = new Date();--}}
                    {{--var time = dt.getTime();--}}
                    {{--return time+file.name;--}}
                {{--},--}}
                {{--acceptedFiles: ".jpeg,.jpg,.png,.gif",--}}
                {{--addRemoveLinks: true,--}}
                {{--timeout: 50000,--}}
                {{--removedfile: function(file)--}}
                {{--{--}}
                    {{--var name = file.upload.file_name;--}}
                    {{--$.ajax({--}}
                        {{--headers: {--}}
                            {{--'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')--}}
                        {{--},--}}
                        {{--type: 'POST',--}}
                        {{--url: '{{ url("hostel/photos/delete") }}',--}}
                        {{--data: {file_name: name},--}}
                        {{--success: function (data){--}}
                            {{--console.log("فایل به موفقیت برطرف شد");--}}
                        {{--},--}}
                        {{--error: function(e) {--}}
                            {{--console.log(e);--}}
                        {{--}});--}}
                    {{--var fileRef;--}}
                    {{--return (fileRef = file.previewElement) != null ?--}}
                        {{--fileRef.parentNode.removeChild(file.previewElement) : void 0;--}}
                {{--},--}}

                {{--success: function(file, response)--}}
                {{--{--}}
                    {{--console.log(response);--}}
                {{--},--}}
                {{--error: function(file, response)--}}
                {{--{--}}
                    {{--return false;--}}
                {{--}--}}
            {{--};--}}
    </script>
    @endsection















