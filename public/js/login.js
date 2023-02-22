function password_show_hide() {
    var x = document.getElementById("password");
    var show_eye = document.getElementById("show_eye");
    var hide_eye = document.getElementById("hide_eye");
    hide_eye.classList.remove("d-none");
    if (x.type === "password") {
      x.type = "text";
      show_eye.style.display = "none";
      hide_eye.style.display = "block";
    } else {
      x.type = "password";
      show_eye.style.display = "block";
      hide_eye.style.display = "none";
    }
  }

  function password_show_hide_regis() {
    var x = document.getElementById("password_regis");
    var show_eye = document.getElementById("show_eye_1");
    var hide_eye = document.getElementById("hide_eye_1");
    hide_eye.classList.remove("d-none");
    if (x.type === "password") {
      x.type = "text";
      show_eye.style.display = "none";
      hide_eye.style.display = "block";
    } else {
      x.type = "password";
      show_eye.style.display = "block";
      hide_eye.style.display = "none";
    }
  }


function logout(val){
  document.getElementById("logout").value = val;
  document.forms["/logout"].submit();
}

// function efek(x){
//   // x.classList.add("bg-secondary");
//   x.style.backgroundColor = "#D6EAF8";
//   x.style.transition = "all 0.3s"
//   x.classList.add("rounded");
//   const st =document.querySelectorAll(".font");

//   for (let i = 0; i < st.length; i++){
//     st[0].style.color = '#0e177e';
//   }
//   // st.forEach(st => {
//   //   st[1].style.color = '#0e177e';
//   // })
// }

$('.li-font').on('mouseover', function(){
  $(this).css('background-color', '#D6EAF8');
  $(this.getElementsByClassName('font')).css('color', '#0e177e');
}).on('mouseout', function(){
  $(this).css('background-color', '');
  $(this.getElementsByClassName('font')).css('color', '');
})

// $('.font').on('mouseover', function(){
//   $(this).css('color', '#0e177e');
//   // style.color = '#0e177e';
// }).on('mouseout', function(){
//   $(this).css('color', '');
// })


function efeklos(x){
  // x.classList.remove("bg-secondary");
  x.style.backgroundColor = "";
  const st =document.querySelectorAll(".font");

  st.forEach(st => {
    if(this.id == st.id){
      st.style.color = '';
    }
  })
}

function efekred(x){
  // x.classList.add("bg-secondary");
  x.style.fontColor = "#E33022"
  x.style.backgroundColor = "#F3CCC9";
  x.style.transition = "all 0.3s"
  x.classList.add("rounded");
}

function fontcolor(x){
  x.style.color = "#48B1CD";
  x.style.transition = "all 0.3s";
}

function fontClear(x){
  x.style.color = "";
}

function efeklosred(x){
  // x.classList.remove("bg-secondary");
  x.style.backgroundColor = "";
}

function logout(x){
  document.getElementById("logout").submit();
}

$(document).ready(function() {

    
  var readURL = function(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
              $('.profile-pic').attr('src', e.target.result);
          }
  
          reader.readAsDataURL(input.files[0]);
      }
  }
  

  $(".file-upload").on('change', function(){
      readURL(this);
  });
  
  $(".upload-button").on('click', function() {
     $(".file-upload").click();
  });
});

$(document).ready(function(){
  $("#modal_alert").modal('show');
});

function img_view(){
  $(document).ready(function(){
    $("#modals").modal('show');
  });
}

function ubah_warna(x){
  x.classList.add('bg-light')
}

$(document).ready(function(){
  $(".content").slice(0, 4).show();
  $("#loadMore").on("click", function(e){
    e.preventDefault();
    $(".content:hidden").slice(0, 4).slideDown();
    if($(".content:hidden").length == 0) {
      $("#loadMore").text("No Content").addClass("noContent");
    }
  });
  
})
