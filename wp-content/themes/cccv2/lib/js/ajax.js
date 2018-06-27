jQuery(function ($) {
  $(document).ready(function() {
    go =  function go(id){
      // console.log(str);
      // $.ajax({
      //   type: "POST",
      //   url: ajax.url ,
      //   data: "action=ajax_page_handle&nonce="+ajax.nonce,
      //   success: function(response){
      //     $('#primary').html(response);
      //   }
      // });
      $.post(ajax.url ,
        {
          'action': 'ajax_page_handle',
          'id': id,
          'nonce': ajax.nonce,
          // 'dataType': 'text',
        },function (response) {
          $('#primary').html(response);
        }
      );
    };
  });});
