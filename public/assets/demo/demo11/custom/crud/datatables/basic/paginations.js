//var DatatablesBasicPaginations = {
//    init: function() {
//        $("#m_table_1").DataTable({
//            responsive: !0,
//            pagingType: "full_numbers",
//            "language": {
//                "search": "جستجو ریکارد:",
//                "lengthMenu":     "تعداد _MENU_ ریکارد",
//                "zeroRecords":    "هیچ ریکارد دریافت نگردید.",
//                "infoEmpty":      "نمایش 0 الی 0 از 0 ریکارد",
//                "info":           "نمایش _START_ الی _END_ از _TOTAL_ ریکارد",
//              },
//        })
//    }
//};


var DatatablesBasicPaginations = {
    init: function () {
        $("#m_table_1").DataTable({
            responsive: !0,
            pagingType: "full_numbers",
            "language": {
                "search": "جستجو ریکارد:",
                "lengthMenu":     "تعداد _MENU_ ریکارد",
                "zeroRecords":    "هیچ ریکارد دریافت نگردید.",
                "infoEmpty":      "نمایش 0 الی 0 از 0 ریکارد",
                "info":           "نمایش _START_ الی _END_ از _TOTAL_ ریکارد",
              },

        })
    }
};
jQuery(document).ready(function () {
    DatatablesBasicPaginations.init()
});
