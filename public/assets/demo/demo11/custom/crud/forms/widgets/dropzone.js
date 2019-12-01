<<<<<<< current
// var DropzoneDemo = {
//     init: function () {
//         Dropzone.options.mDropzoneOne = {
//             paramName: "file",
//             maxFiles: 1,
//             maxFilesize: 5,
//             addRemoveLinks: !0,
//             accept: function (e, o) {
//                 "justinbieber.jpg" == e.name ? o("Naha, you don't.") : o()
//             }
//         }, Dropzone.options.mDropzoneTwo = {
//             paramName: "file",
//             maxFiles: 10,
//             maxFilesize: 10,
//             addRemoveLinks: !0,
//             accept: function (e, o) {
//                 "justinbieber.jpg" == e.name ? o("Naha, you don't.") : o()
//             }
//         }, Dropzone.options.mDropzoneThree = {
//             paramName: "file",
//             maxFiles: 10,
//             maxFilesize: 10,
//             addRemoveLinks: !0,
//             acceptedFiles: "image/*,application/pdf,.psd",
//             accept: function (e, o) {
//                 "justinbieber.jpg" == e.name ? o("Naha, you don't.") : o()
//             }
//         }
//     }
// };
// DropzoneDemo.init();
Dropzone.options.frmTarget = {
    autoProcessQueue: false,
    url: 'hostel/photos',
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
=======
// var DropzoneDemo = {
//     init: function () {
//         Dropzone.options.mDropzoneOne = {
//             paramName: "file",
//             maxFiles: 1,
//             maxFilesize: 5,
//             addRemoveLinks: !0,
//             accept: function (e, o) {
//                 "justinbieber.jpg" == e.name ? o("Naha, you don't.") : o()
//             }
//         }, Dropzone.options.mDropzoneTwo = {
//             paramName: "file",
//             maxFiles: 10,
//             maxFilesize: 10,
//             addRemoveLinks: !0,
//             accept: function (e, o) {
//                 "justinbieber.jpg" == e.name ? o("Naha, you don't.") : o()
//             }
//         }, Dropzone.options.mDropzoneThree = {
//             paramName: "file",
//             maxFiles: 10,
//             maxFilesize: 10,
//             addRemoveLinks: !0,
//             acceptedFiles: "image/*,application/pdf,.psd",
//             accept: function (e, o) {
//                 "justinbieber.jpg" == e.name ? o("Naha, you don't.") : o()
//             }
//         }
//     }
// };
  // DropzoneDemo.init();
  // Dropzone.options.frmTarget = {
  //     autoProcessQueue: false,
  //     url: 'hostel/photos',
  //     init: function () {
  //
  //         var myDropzone = this;
  //
  //         // Update selector to match your button
  //         $("#button").click(function (e) {
  //             e.preventDefault();
  //             myDropzone.processQueue();
  //         });
  //
  //         this.on('sending', function(file, xhr, formData) {
  //             // Append all form inputs to the formData Dropzone will POST
  //             var data = $('#frmTarget').serializeArray();
  //             $.each(data, function(key, el) {
  //                 formData.append(el.name, el.value);
  //             });
  //         });
  //     }
  // }
>>>>>>> before discard
