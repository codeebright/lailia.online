export default
{
  methods: {
    collap_div(){
          var description = $(this).prev();
          if(description.css('display') == 'none') {
            description.css("display","visible");
            $(this).html('نمایش');
            $(this).removeClass('btn-primary').addClass('btn-success');
          }
          else {
            description.css("display","none");
            $(this).html('پنهان');
            $(this).removeClass('btn-success').addClass('btn-primary');
            // $(this).removeClass('btn-primary').addClass('btn-success');
          }
    },
    print(divId)
    {
       var printContents = document.getElementById(divId).innerHTML;
       var originalContents = document.body.innerHTML;
       document.body.innerHTML = printContents;

       window.print();

       document.body.innerHTML = originalContents;
    }
  }

}
