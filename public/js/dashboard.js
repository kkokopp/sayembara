/* globals Chart:false, feather:false */

// const flatpickr = require("flatpickr");

// (() => {
//   'use strict'

//   feather.replace({ 'aria-hidden': 'true' })

//   // Graphs
//   const ctx = document.getElementById('myChart')
//   // eslint-disable-next-line no-unused-vars
//   const myChart = new Chart(ctx, {
//     type: 'line',
//     data: {
//       labels: [
//         'Sunday',
//         'Monday',
//         'Tuesday',
//         'Wednesday',
//         'Thursday',
//         'Friday',
//         'Saturday'
//       ],
//       datasets: [{
//         data: [
//           15339,
//           21345,
//           18483,
//           24003,
//           23489,
//           24092,
//           12034
//         ],
//         lineTension: 0,
//         backgroundColor: 'transparent',
//         borderColor: '#007bff',
//         borderWidth: 4,
//         pointBackgroundColor: '#007bff'
//       }]
//     },
//     options: {
//       scales: {
//         yAxes: [{
//           ticks: {
//             beginAtZero: false
//           }
//         }]
//       },
//       legend: {
//         display: false
//       }
//     }
//   })
// })()



// import { Datepicker } from 'vanillajs-datepicker';

function dropdown_show_hide(x) {
  var hide = document.getElementById("hide_drop");
  var show = document.getElementById("show_drop");
  hide.classList.remove("d-none");
  show.classList.remove("d-block");
  hide.style.transform = "all 0.3s";

  // var show_style = document.getElementById("show_drop").style.display;
  // console.log(show_style);
  var hide_style = document.getElementById("hide_drop").style.display;
  // console.log(hide_style);
  if (hide_style === "") {
    show.style.display = "none";
    hide.style.display = "block";
  }else if(hide_style === "none"){
    show.style.display = "none";
    hide.style.display = "block";
  }else{
    show.style.display = "block";
    hide.style.display = "none";
  }
};
function dropdown_show_hide_m(x) {
  var hide = document.getElementById("hide_drop_m");
  var show = document.getElementById("show_drop_m");
  hide.classList.remove("d-none");
  show.classList.remove("d-block");
  hide.style.transform = "all 0.3s";

  // var show_style = document.getElementById("show_drop").style.display;
  // console.log(show_style);
  var hide_style = document.getElementById("hide_drop_m").style.display;
  // console.log(hide_style);
  if (hide_style === "") {
    show.style.display = "none";
    hide.style.display = "block";
  }else if(hide_style === "none"){
    show.style.display = "none";
    hide.style.display = "block";
  }else{
    show.style.display = "block";
    hide.style.display = "none";
  }
};

function link_hov(x) {
  x.classList.remove("text-light");
  x.classList.add("text-secondary");
};

function link_out(x) {
  x.classList.remove("text-secondary");
  x.classList.add("text-light");
};

function del(){
  event.preventDefault();
  var form = event.target.form;
  swal({
    title: "Are you sure?",
    text: "Once deleted, you will not be able to recover this imaginary file!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
    closeOnConfirm: false,
    closeOnCancel: false,
  })
  .then((willDelete) => {
    if (willDelete) {
      form.submit();
    }
  });
}

function get(){
  const slug = document.querySelector('#slug');

  slug.addEventListener('change', function(){
    fetch('/dashboard/posts/?slug='+ slug.value)
  });
}

function drft(){
  const drop = document.getElementById('drop');
  const btn_drop = document.getElementById('btn-drop');

  btn_drop.submit();
}

function show_sidebar()
{
  const side = document.getElementById("sidebar");

  side.classList.remove("d-none")
  side.classList.add("d-flex")
}

$(function() {
  $('#datepicker').datepicker({
    dateFormat: 'yy-mm-dd'
  });
});

function dis(){
  // const disabled = document.getElementById("harga").disabled;
  const $check = document.getElementById("range").checked;
  document.getElementById("harga").value = '';
  // console.log($check);

  if($check == true){
    document.getElementById("harga").disabled = false;
    document.getElementById("harga").value = '';
  }else{
    document.getElementById("harga").disabled = true;
  }
}

function dis_peserta(){
  const $check = document.getElementById("fee").checked;
  document.getElementById("jmlh").value = '';

    // console.log($check);

  if($check == true){
    document.getElementById("jmlh").disabled = false;
    document.getElementById("jmlh").value = '';
  }else{
    document.getElementById("jmlh").disabled = true;
  }
}

const tanpa_rupiah = document.getElementById('harga');
tanpa_rupiah.addEventListener('keyup', function(e)
{
    tanpa_rupiah.value = formatRupiah(this.value);
});

function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }




$(document).ready(function(){
    $("#status-form").on("change", "input:checkbox", function(){
        $("#status-form").submit();
    });
});

flatpickr("#tanggal");
flatpickr("#jam", {
  enableTime: true,
  noCalendar: true,
  dateFormat: "H:i",
  time_24hr: true
});
flatpickr("#jam_selesai", {
  enableTime: true,
  noCalendar: true,
  dateFormat: "H:i",
  time_24hr: true
});
flatpickr("#tanggal_selesai");

function previewImage() {
  const poster = document.querySelector("#poster");
  const prev = document.getElementById("prev");
  const posterPrewview = document.querySelector(".img-preview")

  posterPrewview.style.display = 'block';
  prev.classList.remove('d-none');
  prev.classList.add('d-flex');

  const ofReader = new FileReader();
  ofReader.readAsDataURL(poster.files[0]);

  ofReader.onload = function(ofReader){
    posterPrewview.src = ofReader.target.result;
  }
}

function resetFile() {
  const file =
      document.querySelector('#poster');
  file.value = '';

  const posterPrewview = document.querySelector(".img-preview");
  posterPrewview.src = '';
  prev.classList.remove('d-flex');
  prev.classList.add('d-none');
}

mdd = document.getElementById("category_id");
mdd.selectpicker('render');

$('.li-font').on('mouseover', function(){
  $(this).css('background-color', '#D6EAF8');
  $(this.getElementsByClassName('font')).css('color', '#0e177e');
}).on('mouseout', function(){
  $(this).css('background-color', '');
  $(this.getElementsByClassName('font')).css('color', '');
})



