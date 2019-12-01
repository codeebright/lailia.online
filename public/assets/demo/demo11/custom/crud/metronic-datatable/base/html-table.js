var DatatableHtmlTableDemo = {
    init: function() { 
        var e;
        e = $(".m-datatable").mDatatable({
            
        }), $("#m_form_status").on("change", function() {
            e.search($(this).val().toLowerCase(), "Status")
        }), $("#m_form_type").on("change", function() {
            e.search($(this).val().toLowerCase(), "Type")
        }), $("#m_form_status, #m_form_type").selectpicker()
    }
};
