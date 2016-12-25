$(document).ready(function() {
	$('[data-toggle="offcanvas"]').click(function() {
		$('#side-menu').toggleClass('hidden-xs');
	});
});

function getCode() {
var selkat = document.getElementById("KATEGORI");
var selth = document.getElementById("TAHUN");
document.getElementById("CODE").value = "" +  
document.getElementById("JUDUL").value.charAt(0) + 
document.getElementById("JUDUL").value.charAt(1) + 
document.getElementById("JUDUL").value.charAt(2) + 
selkat.options[selkat.selectedIndex].value.charAt(0) + 
selkat.options[selkat.selectedIndex].value.charAt(1) + 
selkat.options[selkat.selectedIndex].value.charAt(2) +
document.getElementById("PENGARANG").value.charAt(0) +
document.getElementById("PENERBIT").value.charAt(0) + 
selth.options[selth.selectedIndex].value.charAt(2) +
selth.options[selth.selectedIndex].value.charAt(3) ; 
}

$("input.nospace").on({
  keydown: function(e) {
    if (e.which === 32)
      return false;
  },
  change: function() {
    this.value = this.value.replace(/\s/g, "");
  }
});
