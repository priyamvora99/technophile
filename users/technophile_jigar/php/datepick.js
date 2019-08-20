$(document).ready(function() {
    $('.attendanceDate').datepicker({
  
  	
  	startDate: '+1d',
  	format: 'dd/mm/yyyy',
  	datesDisabled:['04/04/2018']

  });
});