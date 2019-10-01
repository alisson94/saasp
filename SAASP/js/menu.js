$(document).ready(function(){
  $(".dropdown-trigger").dropdown({coverTrigger: false, hover: false, constrainWidth: false});
  $('.sidenav').sidenav();
  $('select').formSelect();
  $('.datepicker').datepicker({format: 'dd mmm, yyyy'});
  $('.modal').modal({inDuration: 100, endingTop: '2%',});
});
