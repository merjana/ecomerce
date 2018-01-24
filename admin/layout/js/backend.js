
$(function(){

	'use strict';

// Calls the selectBoxIt method on your HTML select box
  $("select").selectBoxIt({

  		autoWidth : false

  });

// Hide latest user and latest item on from Focus

$('.toggle-info').click(function(){

      $(this).toggleClass('selected').parent().next('.panel-body').fadeToggle(100);
      	
      	if($(this).hasClass('selected')){
      		$(this).php('<i class="fa fa-plus pull-right"></i>');
      	}
      	else{
      		$(this).php('<i class="fa fa-minus pull-right"></i>');
      	}
});


// Hide placeholder on from Focus

	$('[placeholder]').focus(function(){
		$(this).attr('data-text',$(this).attr('placeholder'));
		$(this).attr('placeholder','');

	}).blur(function(){
		$(this).attr('placeholder',$(this).attr('data-text'));
	});

// Add asterisk on required field

	$('input').each(function(){

		if ($(this).attr('required') === 'required'){

			$(this).after('<span class="asterisk">*</span>');
		}

	});

// show passaword in hover

	var passField = $('.password');

	$('.show-pass').hover(function(){

		passField.attr('type','text');
	
	},function(){

		passField.attr('type','password');
		
	});

// confirm message on delete
	$('.confirm').click(function(){

        return confirm("Are you sure !");
	});

	// aside bar
    $('#example').DataTable({
        dom: 'T<"clear">lfrtip<"clear spacer">T',
        responsive: true,
        tableTools: {
            "aButtons": ["xls", "pdf","print"]
        }
    });

    // close the side nav and open it again
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
});