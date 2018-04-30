// Shorthand for $( document ).ready()
$(function() {

    $('.custom-data-table').DataTable( {

            "aoColumnDefs": [{ "bSortable": false, "aTargets": [ 2 ] }]
    } );
   
$('table[data-form="deleteForm"]').on('click', '.form-delete', function(e){
    e.preventDefault();
    var $form=$(this);
    $('#confirm').modal({ backdrop: 'static', keyboard: false })
        .on('click', '#delete-btn', function(){
            $form.submit();
        });
});


    $('.panel-heading span.clickable').click();
    $('.panel div.clickable').click();


    var i=1;
     $("#add_supervised_row").click(function(){
      $('#supervised'+i).html("<td>"+ (i+1) +"</td><td><input name='name"+i+"' type='text' placeholder='Name' class='form-control input-md'  /> </td><td><input name='sex"+i+"' type='text' placeholder='Sex' class='form-control input-md'  /> </td><td><input name='profession"+i+"' type='text' placeholder='Profession' class='form-control input-md'  /> </td><td><input  name='mobile"+i+"' type='text' placeholder='Mobile'  class='form-control input-md'></td><td><input  name='mail"+i+"' type='text' placeholder='Mail'  class='form-control input-md'></td>");

      $('#tab_supervised').append('<tr id="supervised'+(i+1)+'"></tr>');
      i++; 
  });

$("#delete_supervised_row").click(function(){
         if(i>1){
         $("#supervised"+(i-1)).html('');
         i--;
         }
     });

    var j=1;
      $("#add_supervisor_row").click(function(){
      $('#supervisor'+j).html("<td>"+ (j+1) +"</td><td><select placeholder='Select supervisor' name='supervisor_name"+j+"' class='form-control'></select></td></td><td><input  name='telephone"+j+"' type='text' placeholder='Telephone'  class='form-control input-md'></td><td><input  name='title"+j+"' type='text' placeholder='Title'  class='form-control input-md'></td>");
      $('#tab_supervisor').append('<tr id="supervisor'+(j+1)+'"></tr>');


            var data = {
                sub_district_id: 1
            };

            $.ajax({
            type: 'POST',
            url: '/spars/get_facility_list',
            data: data
        }).done(function(response) {
            console.log("select[name=supervisor_name"+j+"]");
            $("select[name=supervisor_name"+(j-1)+"]").empty();

            $.each(response, function(key, value) {
                $("select[name=supervisor_name"+(j-1)+"]").append($("<option/>", {
                    value: key,
                    text: value
                }));
            });

        })

    
       //activate select2
        $('select').select2({
            allowClear: false,
            minimumResultsForSearch: -1,
            placeholder: function(){
                $(this).data('placeholder');
            }
        });


        j++; 

  });

$("#delete_supervisor_row").click(function(){
         if(j>1){
         $("#supervisor"+(j-1)).html('');
         j--;
         }
     });



});

$(document).on('click', '.panel-heading span.clickable', function (e) {
    var $this = $(this);
    if (!$this.hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideUp();
        $this.addClass('panel-collapsed');
        $this.find('i').removeClass('glyphicon-minus').addClass('glyphicon-plus');
    } else {
        $this.parents('.panel').find('.panel-body').slideDown();
        $this.removeClass('panel-collapsed');
        $this.find('i').removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});
$(document).on('click', '.panel div.clickable', function (e) {
    var $this = $(this);
    if (!$this.hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideUp();
        $this.addClass('panel-collapsed');
        $this.find('i').removeClass('glyphicon-minus').addClass('glyphicon-plus');
    } else {
        $this.parents('.panel').find('.panel-body').slideDown();
        $this.removeClass('panel-collapsed');
        $this.find('i').removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});
