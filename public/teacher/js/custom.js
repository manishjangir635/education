// Tooltip
(function () {
  'use strict'
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  tooltipTriggerList.forEach(function (tooltipTriggerEl) {
    new bootstrap.Tooltip(tooltipTriggerEl)
  })
})()


// Popover
const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))


// Select Script
document.addEventListener("DOMContentLoaded", function () {
  var demo1 = new BVSelect({
    selector: "#selectbox",
    searchbox: false,
    offset: false,
    placeholder: "Newest",
  });
});

document.addEventListener("DOMContentLoaded", function () {
  var demo2 = new BVSelect({
    selector: "#rating",
    searchbox: false,
    offset: false,
    placeholder: "3.98 Coursera",
  });
});

document.addEventListener("DOMContentLoaded", function () {
  var demo3 = new BVSelect({
    selector: "#sort",
    searchbox: false,
    offset: false,
    placeholder: "Responded",
  });
});

document.addEventListener("DOMContentLoaded", function () {
  var demo4 = new BVSelect({
    selector: "#validity",
    searchbox: false,
    offset: false,
    placeholder: "",
  });
});

document.addEventListener("DOMContentLoaded", function () {
  var demo5 = new BVSelect({
    selector: "#category",
    searchbox: false,
    offset: false,
    placeholder: "Choose a Category",
  });
});

document.addEventListener("DOMContentLoaded", function () {
  var demo5 = new BVSelect({
    selector: "#allCourses",
    searchbox: false,
    offset: false,
    placeholder: "All Courses",
  });
});

// Datepicker
$(function () {
  $('[data-toggle="datepicker"]').datepicker({
    autoHide: true,
    zIndex: 2048,
    autoPick: true,
  });
});




// Add More Social Media Link

$(document).ready(function() {
    var max_fields = 100; //maximum input boxes allowed
    var wrapper = $(".input_fields_wrap"); //Fields wrapper
    var add_button = $(".add_field_button"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).prepend('<div class="mb-3"><div class="input-group"> <input type="text" class="text-start  urlLink form-control" placeholder="Title"><input type="text" class="form-control" placeholder="Link"> </div></div>'); //add input box
        }
    });
});
  

// Add More Fields 

$(document).ready(function() {
  var max_fields1 = 100; //maximum input boxes allowed
  var wrapper1 = $("#fields_wrap"); //Fields wrapper
  var add_button1 = $(".addmore"); //Add button ID

  var x = 1; //initlal text box count
  $(add_button1).click(function(e) { //on add input button click
      e.preventDefault();
      if (x < max_fields1) { //max input box allowed
          x++; //text box increment
          $(wrapper1).append('<li class="item"><div class="input-group textLimit"><input type="text" class="form-control char" maxlength="10" placeholder=""><span class="input-group-text h-100 p-0 rounded-0 bg-white border1"><span class="counter position-static border-top-0 border-bottom-0 border-start-0"></span><a href="#" class=""><img src="images/delete.svg" alt="img"></a><a href="#" class="dragBtn border-left1"><img src="images/drag.svg" alt="img"></a></span></div></li>'); //add input box
      }
  });
});


const dragArea1 = document.querySelector(".wrapper1");
	new Sortable(dragArea1, {
  animation: 350
});
const dragArea2 = document.querySelector(".wrapper2");
	new Sortable(dragArea2, {
  animation: 350
});
const dragArea3 = document.querySelector(".wrapper3");
	new Sortable(dragArea3, {
  animation: 350
});



// Course title limiter
$.fn.extend( {
  limiter: function(counter) {
    var limit = this.attr('maxlength');
    $(this).on("keyup focus", function() {
      setCounter(this, counter);
    });
    function setCounter(source, counter) {
      var chars = source.value.length;
      if (chars > limit) {
        source.value = source.value.substr(0, limit);
        chars = limit;
      }
      counter.html(limit - chars);
    }
    setCounter($(this)[0], counter);
  }
});

$(".textLimit").each(function() {
  var $textarea = $(this).find('.char');
  var $counter = $(this).find('.counter');
  $textarea.limiter($counter);
});


// Ckeditor
window.addEventListener("load", (e) => {
  ClassicEditor.create(document.querySelector('#editor'), {
    removePlugins: ['Heading'],
    toolbar: ['bold', 'italic',]
  })
});

window.addEventListener("load", (e) => {
  ClassicEditor.create(document.querySelector('#editor2'), {
    removePlugins: ['Heading'],
    toolbar: ['bold', 'italic', 'NumberedList', 'BulletedList'],
  })
});


// Profile Picture Upload
var loadFile = function (event) {
  var output = document.getElementById('output');
  output.src = URL.createObjectURL(event.target.files[0]);
  output.onload = function () {
    URL.revokeObjectURL(output.src) // free memory
  }
};


const chooseFile = document.getElementById("choose-file");
const imgPreview = document.getElementById("img-preview");

chooseFile.addEventListener("change", function () {
  getImgData();
});

function getImgData() {
  const files = chooseFile.files[0];
  if (files) {
    const fileReader = new FileReader();
    fileReader.readAsDataURL(files);
    fileReader.addEventListener("load", function () {
      imgPreview.style.display = "block";
      imgPreview.innerHTML = '<img src="' + this.result + '" />';
    });
  }
}



// Video Upload
const input = document.getElementById('file-input');
const video = document.getElementById('video');
const videoSource = document.createElement('source');

input.addEventListener('change', function() {
  const files = this.files || [];

  if (!files.length) return;
  
  const reader = new FileReader();

  reader.onload = function (e) {
    videoSource.setAttribute('src', e.target.result);
    video.appendChild(videoSource);
    video.load();
    video.play();
  };
  
  reader.onprogress = function (e) {
    console.log('progress: ', Math.round((e.loaded * 100) / e.total));
  };
  
  reader.readAsDataURL(files[0]);
});


function switchVisible() {
  if (document.getElementById('email_pass')) {

    if (document.getElementById('email_pass').style.display == 'none') {
      document.getElementById('email_pass').style.display = 'block';
      document.getElementById('email_pass_edit').style.display = 'none';
    }
    else {
      document.getElementById('email_pass').style.display = 'none';
      document.getElementById('email_pass_edit').style.display = 'flex';
    }
  }
}


