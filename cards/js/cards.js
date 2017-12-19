function submitCustom(form) {
  var totalStyles = 0, totalCards = 0;
  var MAX_STYLES = 4;
  
  for (var i = 0; i < form.elements.length; ++i) {
    fld = form.elements[i];
    if (fld.selectedIndex) {
      numCards = fld.selectedIndex;
      if (numCards > 0) {
        ++totalStyles;
        totalCards += numCards;
        if (totalStyles <= MAX_STYLES) {
          form["on" + (totalStyles-1)].value = "style" + totalStyles;
          form["os" + (totalStyles-1)].value = fld.name + " (" + numCards + ")";
        }
      }
    }
  }
  
  if (totalStyles > MAX_STYLES) {
    alert("You have selected more than 4 card styles. Please select at most " + MAX_STYLES + " card styles.");
    return false;
  }
  if (totalCards != 8) {
    alert("Please enter quantities that sum to 8.");
    return false;
  }
  return true;
}

function addpkgtocart(item) {
  document.forms.standard.item_name.value = item
  document.forms.standard.submit()
}

$(document).ready(function() {
    /* Apply fancybox to multiple items */
    
    $("a.card").fancybox();
    $("a.tinycard").fancybox();
    

	    $('#slideshow').cycle({ 
		fx: 'fade',
		speed: 1500,
		timeout: 4000,
                delay: 5000
	    });

});