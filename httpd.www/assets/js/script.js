$(document).ready(function(){
    $("#slideshow > div:gt(0)").hide();
    setInterval(function() { 
      $('#slideshow > div:first')
        .fadeOut(1)
        .next()
        .fadeIn(1000)
        .end()
        .appendTo('#slideshow');
    },  3000);
    
    var hamburger = $('.top-header .container nav .hamburger');
    var menu = $('.mobile-menu');
    var topheader = $('.top-header-homepage');
    hamburger.click(function(){
        if($(this).hasClass('is-active')) {
            hamburger.removeClass('is-active');
            topheader.removeClass('noclip');
            menu.removeClass('mobile-menu-vis');
        } else {
            hamburger.addClass('is-active');
            topheader.addClass('noclip');
            menu.addClass('mobile-menu-vis');
        }
    });
    $('#datepicker').dcalendarpicker({
        // default: mm/dd/yyyy
        format: 'dd-mm-yyyy'
    });
     $('input[type="radio"]').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });
    
    $('.filter_chk').click(function(){
        var filters = getAllUrlParams();
        if(filters[this.name] !== undefined && $.inArray(this.value.toLowerCase(), filters[this.name]) > -1) {
            var index = $.inArray(this.value.toLowerCase(), filters[this.name]);
            filters[this.name].splice(index, 1);
            if(filters[this.name] == 0){
                delete filters[this.name];
            }
        } else {
            if(filters[this.name] == undefined) {
                filters[this.name] = [];
            }
            filters[this.name].push(this.value.toLowerCase());
        }
        urlFilterCreator(filters);
        
    });
    $('.person-image').hover(function(){
        $(this).find('.image-normal').css("display","none");
        $(this).find('.image-zot').css("display","block"); 
    }, function(){
        $(this).find('.image-normal').css("display","block");
        $(this).find('.image-zot').css("display","none");
    });
    $('.person-image').click(function(){
        $(this).find('.image-normal').toggle();
        $(this).find('.image-zot').toggle();
    });
});

function urlFilterCreator(filterArr){
    var baseUrl = window.location.href.split("?")[0];
    var query = baseUrl + "?";
    //Error validation
    var validation = ["study","location","company"];
    for (var key in filterArr){
        for (i = 0; i < validation.length; i++){
            if ($.inArray(key, validation) < 0){
                window.location.href = "error";
                return;
            }
        }
        if (!filterArr.hasOwnProperty(key)) continue;
        
        for(j = 0; j < filterArr[key].length; j++){
            query += key + "[]=" + filterArr[key][j] + "&";
        }
    }
    query = query.slice(0, -1);
    window.location.href = query;
}

function getAllUrlParams() {
  var queryString = window.location.search.slice(1);
  var obj = {};
  if (queryString) {
    queryString = queryString.split('#')[0];
    var arr = queryString.split('&');
for (var i=0; i<arr.length; i++) {
      var a = arr[i].split('=');
      var paramNum = undefined;
      var paramName = a[0].replace(/\[\d*\]/, function(v) {
        paramNum = v.slice(1,-1);
        return '';
      });
      var paramValue = typeof(a[1])==='undefined' ? true : a[1];
      paramName = paramName.toLowerCase();
      paramValue = paramValue.toLowerCase();
      if (obj[paramName]) {
        if (typeof obj[paramName] === 'string') {
          obj[paramName] = [obj[paramName]];
        }
        if (typeof paramNum === 'undefined') {
          obj[paramName].push(paramValue);
        }
        else {
          obj[paramName].push(paramValue);
        }
      }
      else {
        obj[paramName] = [paramValue];
      }
    }
  }
return obj;
}
