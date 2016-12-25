$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 
});

$(document).ready(function(){
    $(".hurufsaja").keypress(function(event){
        var inputValue = event.charCode;
        if(!(inputValue >= 65 && inputValue <= 122) && (inputValue != 32 && inputValue != 0))
        {
            event.preventDefault();
        }
    });
});

$("input.nospace").on({
  keydown: function(e) {
    if (e.which === 32)
      return false;
  },
  change: function() {
    this.value = this.value.replace(/\s/g, "");
  }
});


function validateKrisar() {
	var y = document.forms["myForm"]["NAMA"].value;
    var z = document.forms["myForm"]["KOM"].value;
 //   var x = document.forms["myForm"]["EMAIL"].value;
 //   var letters = /^[0-9a-zA-Z]+$/;  
/*    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf("."); */

    if (y.trim()==null || y.trim()==""|| y===" ") {
        swal({

            title: "Oopss....",
            text: "Kamu belum mengisi nama?", 
            type: "error"
            
            });
        return false;
    }

/*    else if (x.match(!letters)) {

        alert('Isi kolom email dengan benar...');  
        return false;
    }

/*    else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("EMAIL tidak valid...");
        return false; 

    } */

  	else if (z.trim()==null || z.trim()==""|| z===" ") {
        swal({

            title: "Oopss....",
            text: "Sarannya mana?", 
            type: "error"
            
            });
        return false;
    }
};

function validateAbsensi () {
    var y = document.forms["myForm2"]["NAMA"].value;

    if (y.trim()==null || y.trim()==""|| y===" ") {
        swal({

            title: "Oopss....",
            text: "Kamu belum mengisi nama?", 
            type: "error"
            
            });
        return false;
    }
};
