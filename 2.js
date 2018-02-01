<<<<<<< HEAD
var formatting = function(a){
  b=a.split('/')
  if (parseInt(b[0])<10){
    b[0]='0'+b[0];
  }
  if (parseInt(b[1])<10){
    b[1]='0'+b[1];
  }
  a=b[0]+'/'+b[1]+'/'+b[2];
  console.log(a);
    return a;
}

var today = "";
if (new Date().getMonth() < 10)  { today += '0' + (parseInt(new Date().getMonth())+1) }
today+="/";
if (new Date().getDate() < 10)  { today += '0' + (parseInt(new Date().getMonth())) }
today+="/";
today += new Date().getFullYear();
=======

var formatting = function(a){
  a = a.replace("/", "-");
  a = a.replace("/", "-");
  return a;
}


var today = "";
today = new Date().getFullYear();
today+="-";
if (new Date().getMonth() < 10) { today += '0' + (parseInt(new Date().getMonth())+1) }
today+="-";
today+=new Date().getDate();
>>>>>>> aa42c2b488c66dd5bf8d7e849e6f95a5727ce187

var datepicker = new Datepickk();
var selected=today;


$('#jan').on('click', function() {
  datepicker.disabledDays = [0,6];
  datepicker.maxSelections = 1;
  datepicker.minDate = new Date(2018,0,15);
  datepicker.maxDate = new Date(2018,0,31);
    datepicker.show();
    datepicker.onSelect = function(checked){
    var state = (checked)?'selected':'unselected';
    if (state === 'selected'){
      selected= this.toLocaleDateString();
      selected= formatting(selected);
      sessionStorage.setItem("selected_date", selected);
      console.log(selected);
      window.location.href = "3.html";
    }
  };

  });

$('#feb').on('click', function() {
  datepicker.disabledDays = [0,6];
  datepicker.maxSelections = 1;
  datepicker.minDate = new Date(2018,1,1);
  datepicker.maxDate = new Date(2018,1,28);
    datepicker.show();
    datepicker.onSelect = function(checked){
    var state = (checked)?'selected':'unselected';
    if (state === 'selected'){
      selected= this.toLocaleDateString();
      selected= formatting(selected);
      sessionStorage.setItem("selected_date", selected);
      console.log(selected);
      window.location.href = "3.html";
    }
  };

  });


$('#mar').on('click', function() {
  datepicker.disabledDays = [0,6];
  datepicker.maxSelections = 1;
  datepicker.minDate = new Date(2018,2,1);
  datepicker.maxDate = new Date(2018,2,31);
    datepicker.show();
    datepicker.onSelect = function(checked){
    var state = (checked)?'selected':'unselected';

    if (state === 'selected'){
      selected= this.toLocaleDateString();
      selected= formatting(selected);
      sessionStorage.setItem("selected_date", selected);
      console.log(selected);
      window.location.href = "3.html";
    }
  };

  });


  $('#apr').on('click', function() {
  datepicker.disabledDays = [0,6];
  datepicker.maxSelections = 1;
  datepicker.minDate = new Date(2018,3,1);
  datepicker.maxDate = new Date(2018,3,30);
    datepicker.show();
    datepicker.onSelect = function(checked){
    var state = (checked)?'selected':'unselected';
    if (state === 'selected'){
      selected= this.toLocaleDateString();
      selected= formatting(selected);
      sessionStorage.setItem("selected_date", selected);
      console.log(selected);
      window.location.href = "3.html";
    }
  };

});
