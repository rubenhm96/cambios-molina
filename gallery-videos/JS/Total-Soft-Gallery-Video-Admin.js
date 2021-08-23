// Admin Page
function Total_Soft_Gallery_Video_AMD2_But1(Gallery_Video_ID) {
  jQuery('.Total_Soft_Gallery_Video_AMD2').animate({'opacity': 0}, 500);
  jQuery('.Total_Soft_Gallery_VideoAMMTable').animate({'opacity': 0}, 500);
  jQuery('.Total_Soft_Gallery_VideoAMOTable').animate({'opacity': 0}, 500);
  jQuery('.Total_Soft_Gallery_Video_Save').animate({'opacity': 1}, 500);
  jQuery('.Total_Soft_Gallery_Video_Update').animate({'opacity': 0}, 500);
  jQuery('#Total_Soft_Gallery_Video_ID').html('[Total_Soft_Gallery_Video id="' + Gallery_Video_ID + '"]');
  jQuery('#Total_Soft_Gallery_Video_TID').html('&lt;?php echo do_shortcode(&#039;[Total_Soft_Gallery_Video id="' + Gallery_Video_ID + '"]&#039;);?&gt');
  Total_Soft_GVideo_Editor();
  TotalSoftGallery_Video_Show();
  TotalSoft_VGallery_Out();
  setTimeout(function() {
    jQuery('.Total_Soft_Gallery_Video_AMD2').css('display', 'none');
    jQuery('.Total_Soft_Gallery_VideoAMMTable').css('display', 'none');
    jQuery('.Total_Soft_Gallery_VideoAMOTable').css('display', 'none');
    jQuery('.Total_Soft_Gallery_Video_Save').css('display', 'block');
    jQuery('.Total_Soft_Gallery_Video_Update').css('display', 'none');
    jQuery('.Total_Soft_Gallery_Video_AMD3').css('display', 'block');
    jQuery('.TS_AM_Table_Div').css('display', 'block');
    jQuery('.Total_Soft_AMVideoTable').css('display', 'table');
    jQuery('.Total_Soft_AMVideoTable1').css('display', 'table');
    jQuery('.Total_Soft_GV_AMShortTable').css('display', 'table');
  }, 500)
  setTimeout(function() {
    jQuery('.Total_Soft_Gallery_Video_AMD3').animate({'opacity': 1}, 500);
    jQuery('.TS_AM_Table_Div').animate({'opacity': 1}, 500);
    jQuery('.Total_Soft_AMVideoTable').animate({'opacity': 1}, 500);
    jQuery('.Total_Soft_AMVideoTable1').animate({'opacity': 1}, 500);
    jQuery('.Total_Soft_GV_AMShortTable').animate({'opacity': 1}, 500);
  }, 600)
}

function Copy_Shortcode(IDSHORT) {
  var aux=document.createElement("input");
  var code=document.getElementById(IDSHORT).innerHTML;
  code=code.replace("&lt;", "<");
  code=code.replace("&gt;", ">");
  code=code.replace("&#039;", "'");
  code=code.replace("&#039;", "'");
  aux.setAttribute("value", code);
  document.body.appendChild(aux);
  aux.select();
  document.execCommand("copy");
  document.body.removeChild(aux);
}
var CountOfLegth = 0;
function TS_VG_Add_Video_Button() {

  jQuery('.TS_GV_Add_Video_Fixed_div').css({
    'transform': 'scale(1)', '-moz-transform': 'scale(1)', '-webkit-transform': 'scale(1)'
  });
  jQuery('.TS_GV_Add_Video_Absolute_div').css({
    'transform': 'translateY(-50%) scale(1)',
    '-moz-transform': 'translateY(-50%) scale(1)',
    '-webkit-transform': 'translateY(-50%) scale(1)'
  });
}

function TS_VG_Add_Video_Button_Close() {
  jQuery('.TS_GV_Add_Video_Fixed_div').css({
    'transform': 'scale(0)', '-moz-transform': 'scale(0)', '-webkit-transform': 'scale(0)'
  });
  jQuery('.TS_GV_Add_Video_Absolute_div').css({
    'transform': 'translateY(-50%) scale(0)',
    '-moz-transform': 'translateY(-50%) scale(0)',
    '-webkit-transform': 'translateY(-50%) scale(0)'
  });
  Total_Soft_Gallery_Video_Res_Vid();
}

function TotalSoft_Reload() {
  location.reload();
}

function TotalSoftGallery_Video_Show() {
  jQuery('input[type=radio][name=TotalSoftGallery_Video_ShowType]').change(function() {
    var TotalSoftGallery_Video_ShowType=this.value;
    if(TotalSoftGallery_Video_ShowType=='All') {
      jQuery('#TotalSoftGallery_Video_PerPage').animate({'opacity': 0}, 500);
      jQuery('#TotalSoftGallery_Video_PerPage_Output').animate({'opacity': 0}, 500);
      jQuery('#TotalSoftGallery_LoadMore').animate({'opacity': 0}, 500);
      setTimeout(function() {
        jQuery('#TotalSoftGallery_Video_PerPage').css('display', 'none');
        jQuery('#TotalSoftGallery_Video_PerPage_Output').css('display', 'none');
        jQuery('#TotalSoftGallery_LoadMore').css('display', 'none');
      }, 500)
    }
    else if(TotalSoftGallery_Video_ShowType=='Pagination') {
      jQuery('#TotalSoftGallery_LoadMore').animate({'opacity': 0}, 500);
      setTimeout(function() {
        jQuery('#TotalSoftGallery_LoadMore').css('display', 'none');
        jQuery('#TotalSoftGallery_Video_PerPage').css('display', 'inline');
        jQuery('#TotalSoftGallery_Video_PerPage_Output').css('display', 'inline');
      }, 300)
      setTimeout(function() {
        jQuery('#TotalSoftGallery_Video_PerPage').animate({'opacity': 1}, 500);
        jQuery('#TotalSoftGallery_Video_PerPage_Output').animate({'opacity': 1}, 500);
      }, 400)
    }
    else {
      jQuery('#TotalSoftGallery_LoadMore').css('display', 'inline');
      jQuery('#TotalSoftGallery_Video_PerPage').css('display', 'inline');
      jQuery('#TotalSoftGallery_Video_PerPage_Output').css('display', 'inline');
      setTimeout(function() {
        jQuery('#TotalSoftGallery_Video_PerPage').animate({'opacity': 1}, 500);
        jQuery('#TotalSoftGallery_Video_PerPage_Output').animate({'opacity': 1}, 500);
        jQuery('#TotalSoftGallery_LoadMore').animate({'opacity': 1}, 500);
      }, 300)
    }
  });
}

function close_check_url(){
	let tooltip_key_1 = jQuery('.Total_Soft_Gallery_Video_tooltip_key_1').attr("style");
	let tooltip_id_1 = jQuery('#Total_Soft_Gallery_Video_tooltip_id_1').attr("style");
	let tooltip_key_2 = jQuery('.Total_Soft_Gallery_Video_tooltip_key_2').attr("style");
	let tooltip_id_2 = jQuery('#Total_Soft_Gallery_Video_tooltip_id_2').attr("style");
  if ( tooltip_key_1== 'display: inline-block !important; color:red;' && tooltip_id_1 == 'display: none !important' ) {
     jQuery('.Total_Soft_Gallery_Video_tooltip_key_1').attr('style', 'display: none !important;');
      jQuery('#Total_Soft_Gallery_Video_tooltip_id_1').attr('style', 'display: inline-block  !important');
  }
  
  if ( tooltip_key_2== 'display: inline-block !important; color:red;' && tooltip_id_2 == 'display: none !important' ) {
     jQuery('.Total_Soft_Gallery_Video_tooltip_key_2').attr('style', 'display: none !important;');
      jQuery('#Total_Soft_Gallery_Video_tooltip_id_2').attr('style', 'display: inline-block  !important');
  }
}

function add_onclick_attr(){
	    jQuery('#Total_Soft_Gallery_Video_Upd').attr('onclick', 'Total_Soft_Gallery_Video_Update_Vid()').removeClass("Total_Soft_Gallery_Video_disabled");
        jQuery('#Total_Soft_Gallery_Video_Sav').attr('onclick', 'Total_Soft_Gallery_Video_Save_Vid()').removeClass("Total_Soft_Gallery_Video_disabled");
}


function check_url(url,y){
  var domain = location.protocol;
  var urls = new URL(url);
  if (domain=='https:') {
    if (y==1 && urls.protocol=='http:') {
      jQuery('.Total_Soft_Gallery_Video_tooltip_key_1').attr('style', 'display: inline-block !important; color:red;');
      jQuery('#Total_Soft_Gallery_Video_tooltip_id_1').attr('style', 'display: none !important');
      jQuery('#Total_Soft_Gallery_Video_Upd').removeAttr('onclick').addClass("Total_Soft_Gallery_Video_disabled");
      jQuery('#Total_Soft_Gallery_Video_Sav').removeAttr('onclick').addClass("Total_Soft_Gallery_Video_disabled");
    } else if(y==2 && urls.protocol=='http:'){
	  jQuery('.Total_Soft_Gallery_Video_tooltip_key_2').attr('style', 'display: inline-block !important; color:red;');
      jQuery('#Total_Soft_Gallery_Video_tooltip_id_2').attr('style', 'display: none !important');
      jQuery('#Total_Soft_Gallery_Video_Upd').removeAttr('onclick').addClass("Total_Soft_Gallery_Video_disabled");
      jQuery('#Total_Soft_Gallery_Video_Sav').removeAttr('onclick').addClass("Total_Soft_Gallery_Video_disabled");
	} else {
      if (!jQuery('#Total_Soft_Gallery_Video_Upd').attr('onclick') &&  !jQuery('#Total_Soft_Gallery_Video_Sav').attr('onclick')) {
		add_onclick_attr();
      }
     close_check_url();
    }
  }
  
}

function TotalSoftGallery_Video_URL_Clicked() {
  var nIntervId=setInterval(function() {
    var code=jQuery('#TotalSoftGallery_Video_URL_1').val();
    if(code.indexOf('www.youtube.com/') > 0) {
      if(code.indexOf('list') > 0 || code.indexOf('index') > 0) {
        if(code.indexOf('embed') > 0) {
          var TotalSoftCodes1=code.split('[embed]');
          var TotalSoftCodes2=TotalSoftCodes1[1].split('[/embed]');
          var TotalSoftCodes3=TotalSoftCodes2[0].split('www.youtube.com/watch?v=');
          if(TotalSoftCodes3[1].length!=11) {
            TotalSoftCodes3[1]=TotalSoftCodes3[1].substr(0, 11);
          }

          jQuery('#TotalSoftGallery_Video_URL_2').val('https://www.youtube.com/embed/' + TotalSoftCodes3[1]);
          jQuery('#TotalSoftGallery_VideoIm_URL_2').val('https://img.youtube.com/vi/' + TotalSoftCodes3[1] + '/mqdefault.jpg');
          jQuery('#TotalSoftGallery_Video_Video_1').val('https://www.youtube.com/watch?v=' + TotalSoftCodes3[1]);

          if(jQuery('#TotalSoftGallery_Video_URL_2').val().length > 0) {
            clearInterval(nIntervId);
            jQuery('#TotalSoftGallery_Video_URL_1').val('');
            check_url(jQuery('#TotalSoftGallery_Video_URL_2').val(),1);
          }
        }
        else {
          var TotalSoftCodes1=code.split('<a href="https://www.youtube.com/');
          var TotalSoftCodes2=TotalSoftCodes1[1].split("=");
          var TotalSoftCodeSrc=TotalSoftCodes2[1].split('&');

          jQuery('#TotalSoftGallery_Video_URL_2').val('https://www.youtube.com/embed/' + TotalSoftCodeSrc[0]);
          jQuery('#TotalSoftGallery_VideoIm_URL_2').val('https://img.youtube.com/vi/' + TotalSoftCodeSrc[0] + '/mqdefault.jpg');
          jQuery('#TotalSoftGallery_Video_Video_1').val('https://www.youtube.com/watch?v=' + TotalSoftCodeSrc[0]);

          if(jQuery('#TotalSoftGallery_Video_URL_2').val().length > 0) {
            clearInterval(nIntervId);
            jQuery('#TotalSoftGallery_Video_URL_1').val('');
            check_url(jQuery('#TotalSoftGallery_Video_URL_2').val(),1);
          }
        }
      }
      else if(code.indexOf('embed') > 0) {
        var TotalSoftCodes1=code.split('[embed]');
        var TotalSoftCodes2=TotalSoftCodes1[1].split('[/embed]');
        if(TotalSoftCodes2[0].indexOf('watch?') > 0) {
          var TotalSoftCodes3=TotalSoftCodes2[0].split('=');
          if(TotalSoftCodes3[1].length!=11) {
            TotalSoftCodes3[1]=TotalSoftCodes3[1].substr(0, 11);
          }
          if(TotalSoftCodes3[2]!==undefined) {
            jQuery('#TotalSoftGallery_Video_URL_2').val('https://www.youtube.com/embed/' + TotalSoftCodes3[1] + '?start=' + TotalSoftCodes3[2]);
          }
          else {
            jQuery('#TotalSoftGallery_Video_URL_2').val('https://www.youtube.com/embed/' + TotalSoftCodes3[1]);
          }
          jQuery('#TotalSoftGallery_VideoIm_URL_2').val('https://img.youtube.com/vi/' + TotalSoftCodes3[1] + '/mqdefault.jpg');
          jQuery('#TotalSoftGallery_Video_Video_1').val('https://www.youtube.com/watch?v=' + TotalSoftCodes3[1]);
          if(jQuery('#TotalSoftGallery_Video_URL_2').val().length > 0) {
            clearInterval(nIntervId);
            jQuery('#TotalSoftGallery_Video_URL_1').val('');
            check_url(jQuery('#TotalSoftGallery_Video_URL_2').val(),1);
          }
        }
        else if(TotalSoftCodes2[0].indexOf('/embed/') > 0) {
          var TotalSoftCodes3=TotalSoftCodes2[0].split('/embed/');
          if(TotalSoftCodes3[1].length!=11) {
            TotalSoftCodes3[1]=TotalSoftCodes3[1].substr(0, 11);
          }

          jQuery('#TotalSoftGallery_Video_URL_2').val('https://www.youtube.com/embed/' + TotalSoftCodes3[1]);
          jQuery('#TotalSoftGallery_VideoIm_URL_2').val('https://img.youtube.com/vi/' + TotalSoftCodes3[1] + '/mqdefault.jpg');
          jQuery('#TotalSoftGallery_Video_Video_1').val('https://www.youtube.com/watch?v=' + TotalSoftCodes3[1]);

          if(jQuery('#TotalSoftGallery_Video_URL_2').val().length > 0) {
            clearInterval(nIntervId);
            jQuery('#TotalSoftGallery_Video_URL_1').val('');
            check_url(jQuery('#TotalSoftGallery_Video_URL_2').val(),1);
          }
        }
        else {
          var TotalSoftCodes2=TotalSoftCodes1[1].split('=');
          var TotalSoftCodeSrc=TotalSoftCodes2[1].split('">https://');
          if(TotalSoftCodeSrc[0].length!=11) {
            TotalSoftCodeSrc[0]=TotalSoftCodeSrc[0].substr(0, 11);
          }

          jQuery('#TotalSoftGallery_Video_URL_2').val('https://www.youtube.com/embed/' + TotalSoftCodeSrc[0]);
          jQuery('#TotalSoftGallery_VideoIm_URL_2').val('https://img.youtube.com/vi/' + TotalSoftCodeSrc[0] + '/mqdefault.jpg');
          jQuery('#TotalSoftGallery_Video_Video_1').val('https://www.youtube.com/watch?v=' + TotalSoftCodeSrc[0]);

          if(jQuery('#TotalSoftGallery_Video_URL_2').val().length > 0) {
            clearInterval(nIntervId);
            jQuery('#TotalSoftGallery_Video_URL_1').val('');
            check_url(jQuery('#TotalSoftGallery_Video_URL_2').val(),1);
          }
        }
      }
      else {
        var TotalSoftCodes1=code.split('<a href="https://www.youtube.com/');
        var TotalSoftCodes2=TotalSoftCodes1[1].split('=');

        if(TotalSoftCodes2.length >= 5) {
          var TotalSoftCodeSrc=TotalSoftCodes2[3].split('&');
        }
        else {
          var TotalSoftCodeSrc=TotalSoftCodes2[1].split('">https://');
        }

        jQuery('#TotalSoftGallery_Video_URL_2').val('https://www.youtube.com/embed/' + TotalSoftCodeSrc[0]);
        jQuery('#TotalSoftGallery_VideoIm_URL_2').val('https://img.youtube.com/vi/' + TotalSoftCodeSrc[0] + '/mqdefault.jpg');
        jQuery('#TotalSoftGallery_Video_Video_1').val('https://www.youtube.com/watch?v=' + TotalSoftCodeSrc[0]);

        if(jQuery('#TotalSoftGallery_Video_URL_2').val().length > 0) {
          clearInterval(nIntervId);
          jQuery('#TotalSoftGallery_Video_URL_1').val('');
          check_url(jQuery('#TotalSoftGallery_Video_URL_2').val(),1);
        }
      }
    }
    else if(code.indexOf('https://youtu.be/') > 0) {
      if(code.indexOf('embed') > 0) {
        var TotalSoftCodes1=code.split('[embed]');
        var TotalSoftCodes2=TotalSoftCodes1[1].split('[/embed]');
        var TotalSoftCodes3=TotalSoftCodes2[0].split('youtu.be/');
        if(TotalSoftCodes3[1].length!=11) {
          TotalSoftCodes3[1]=TotalSoftCodes3[1].substr(0, 11);
        }

        jQuery('#TotalSoftGallery_Video_URL_2').val('https://www.youtube.com/embed/' + TotalSoftCodes3[1]);
        jQuery('#TotalSoftGallery_VideoIm_URL_2').val('https://img.youtube.com/vi/' + TotalSoftCodes3[1] + '/mqdefault.jpg');
        jQuery('#TotalSoftGallery_Video_Video_1').val('https://www.youtube.com/watch?v=' + TotalSoftCodes3[1]);

        if(jQuery('#TotalSoftGallery_Video_URL_2').val().length > 0) {
          clearInterval(nIntervId);
          jQuery('#TotalSoftGallery_Video_URL_1').val('');
          check_url(jQuery('#TotalSoftGallery_Video_URL_2').val(),1);
        }
      }
      else {
        var TotalSoftCodes1=code.split('<a href="https://youtu.be/');
        var TotalSoftCodeSrc=TotalSoftCodes1[1].split('">https://');
        if(TotalSoftCodeSrc[0].length!=11) {
          TotalSoftCodeSrc[0]=TotalSoftCodeSrc[0].substr(0, 11);
        }
        jQuery('#TotalSoftGallery_Video_URL_2').val('https://www.youtube.com/embed/' + TotalSoftCodeSrc[0]);
        jQuery('#TotalSoftGallery_VideoIm_URL_2').val('https://img.youtube.com/vi/' + TotalSoftCodeSrc[0] + '/mqdefault.jpg');
        jQuery('#TotalSoftGallery_Video_Video_1').val('https://www.youtube.com/watch?v=' + TotalSoftCodeSrc[0]);

        if(jQuery('#TotalSoftGallery_Video_URL_2').val().length > 0) {
          clearInterval(nIntervId);
          jQuery('#TotalSoftGallery_Video_URL_1').val('');
          check_url(jQuery('#TotalSoftGallery_Video_URL_2').val(),1);
        }
      }
    }
    else if(code.indexOf('vimeo.com') > 0) {
      if(code.indexOf('embed') > 0) {
        if(code.indexOf('player.vimeo') > 0) {
          var s1=code.split('[embed]https://player.vimeo.com/video/');
        }
        else {
          var s1=code.split('[embed]https://vimeo.com/');
        }
        var src=s1[1].split('[/embed]');
        if(src[0].length > 9) {
          var real_src=src[0].split('/');
          src[0]=real_src[2];
        }
        jQuery('#TotalSoftGallery_Video_URL_2').val('https://player.vimeo.com/video/' + src[0]);
        jQuery('#TotalSoftGallery_Video_Video_1').val('https://vimeo.com/' + src[0]);
        if(jQuery('#TotalSoftGallery_Video_URL_2').val().length > 0) {
          check_url(jQuery('#TotalSoftGallery_Video_URL_2').val(),1);
          jQuery('#TotalSoftGallery_Image_URL').val('');
          jQuery('#TotalSoftGallery_Video_URL_1').val('');
          clearInterval(nIntervId);
        }
        var ajaxurl=object.ajaxurl;
        var data={
          action: 'TSoft_Vimeo_Video_Image', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
          foobar: 'https://player.vimeo.com/video/' + src[0], // translates into $_POST['foobar'] in PHP
        };
        jQuery.post(ajaxurl, data, function(response) {
          if(response.indexOf('http')!= -1) {
            //response=response.replace('http', 'https');
            response=response.replace('httpss', 'https');
          }
          jQuery('#TotalSoftGallery_VideoIm_URL_2').val(response);
        });
      }
      else if(code.indexOf('player.vimeo') > 0) {
        var s1=code.split('<a href="https://player.vimeo.com/video/');
        var src=s1[1].split('">https://');
        if(src[0].length > 9) {
          var real_src=src[0].split('/');
          src[0]=real_src[2];
        }
        jQuery('#TotalSoftGallery_Video_URL_2').val('https://player.vimeo.com/video/' + src[0]);
        jQuery('#TotalSoftGallery_Video_Video_1').val('https://vimeo.com/' + src[0]);

        var ajaxurl=object.ajaxurl;
        var data={
          action: 'TSoft_Vimeo_Video_Image', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
          foobar: 'https://player.vimeo.com/video/' + src[0], // translates into $_POST['foobar'] in PHP
        };
        jQuery.post(ajaxurl, data, function(response) {
          jQuery('#TotalSoftGallery_VideoIm_URL_2').val(response);
          if(jQuery('#TotalSoftGallery_Video_URL_2').val().length > 0) {
          }
        });
      }
      else {
        var s1=code.split('<a href="https://vimeo.com/');
        var src=s1[1].split('">https://');
        if(src[0].length > 9) {
          var real_src=src[0].split('/');
          src[0]=real_src[2];
        }
        jQuery('#TotalSoftGallery_Video_URL_2').val('https://player.vimeo.com/video/' + src[0]);
        jQuery('#TotalSoftGallery_Video_Video_1').val('https://vimeo.com/' + src[0]);

        var ajaxurl=object.ajaxurl;
        var data={
          action: 'TSoft_Vimeo_Video_Image', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
          foobar: 'https://player.vimeo.com/video/' + src[0], // translates into $_POST['foobar'] in PHP
        };
        jQuery.post(ajaxurl, data, function(response) {

          jQuery('#TotalSoftGallery_VideoIm_URL_2').val(response);
          if(jQuery('#TotalSoftGallery_Video_URL_2').val().length > 0) {
            clearInterval(nIntervId);
            jQuery('#TotalSoftGallery_Video_URL_1').val('');
            check_url(jQuery('#TotalSoftGallery_Video_URL_2').val(),1);
          }
        });
      }
    }
    else if(code.indexOf('wistia.net') > 0 || code.indexOf('wistia.com') > 0) {
      if(code.indexOf('[/embed]') > 0) {
        var TotalSoftCodes0=code.split('[embed]');
        var TotalSoftCodes1=TotalSoftCodes0[1].split('[/embed]');
        var TotalSoftCodes2=TotalSoftCodes1[0].split('/');
        var TotalSoftCodes3=TotalSoftCodes2[TotalSoftCodes2.length - 1];
        jQuery('#TotalSoftGallery_Video_URL_2').val('//fast.wistia.net/embed/iframe/' + TotalSoftCodes3);
        jQuery('#TotalSoftGallery_Video_Video_1').val(TotalSoftCodes1[0]);
        var ajaxurl=object.ajaxurl;
        var data={
          action: 'TSoft_Wistia_Video_Image', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
          foobar: TotalSoftCodes1[0], // translates into $_POST['foobar'] in PHP
        };
        jQuery.post(ajaxurl, data, function(response) {
          jQuery('#TotalSoftGallery_VideoIm_URL_2').val(response);
          if(jQuery('#TotalSoftGallery_Video_URL_2').val().length > 0) {
            clearInterval(nIntervId);
            jQuery('#TotalSoftGallery_Video_URL_1').val('');
            check_url(jQuery('#TotalSoftGallery_Video_URL_2').val(),1);
          }
        });
      }
      else {
        var TotalSoftCodes1=code.split('<a href="');
        var TotalSoftCodes2=TotalSoftCodes1[1].split('">https://');
        var TotalSoftCodeSrc=TotalSoftCodes2[0].split('/');
        var TotalSoftCodeSrcRe=TotalSoftCodeSrc[TotalSoftCodeSrc.length - 1];
        var arr=TotalSoftCodeSrcRe.split('=');
        jQuery('#TotalSoftGallery_Video_URL_2').val('//fast.wistia.net/embed/iframe/' + arr[2]);
        jQuery('#TotalSoftGallery_Video_Video_1').val(TotalSoftCodes2[0]);
        var ajaxurl=object.ajaxurl;
        var data={
          action: 'TSoft_Wistia_Video_Image', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
          foobar: "//fast.wistia.net/embed/iframe/" + arr[2], // translates into $_POST['foobar'] in PHP
          video_id: arr[2] //video id
        };
        jQuery.post(ajaxurl, data, function(response) {
          jQuery('#TotalSoftGallery_VideoIm_URL_2').val(response);
          if(jQuery('#TotalSoftGallery_Video_URL_2').val().length > 0) {
            clearInterval(nIntervId);
            jQuery('#TotalSoftGallery_Video_URL_1').val('');
            check_url(jQuery('#TotalSoftGallery_Video_URL_2').val(),1);
          }
        });
      }
    }
    else if(code.indexOf('.mp4') > 0) {
      if(code.indexOf('embed') > 0) {
        var TotalSoftCodes1=code.split('[embed]');
        var TotalSoftCodeSrc=TotalSoftCodes1[1].split('[/embed]');
        var url=TotalSoftCodeSrc[0];
        jQuery('#TotalSoftGallery_Video_URL_2').val(url);
        jQuery('#TotalSoftGallery_Video_Video_1').val(url);
        if(jQuery('#TotalSoftGallery_Video_Video_1').val().length > 0) {
          clearInterval(nIntervId);
          jQuery('#TotalSoftGallery_Video_URL_1').val('');
          check_url(jQuery('#TotalSoftGallery_Video_URL_2').val(),1);
        }
      }
      else if(code.indexOf('video') > 0) {
        var TotalSoftCodes1=code.split('mp4="');
        var TotalSoftCodeSrc=TotalSoftCodes1[1].split('"]');
        jQuery('#TotalSoftGallery_Video_URL_2').val(TotalSoftCodeSrc[0]);
        jQuery('#TotalSoftGallery_Video_Video_1').val(TotalSoftCodeSrc[0]);
        if(jQuery('#TotalSoftGallery_Video_Video_1').val().length > 0) {
          clearInterval(nIntervId);
          jQuery('#TotalSoftGallery_Video_URL_1').val('');
          check_url(jQuery('#TotalSoftGallery_Video_URL_2').val(),1);
        }
      }
      else {
        var TotalSoftCodes1=code.split('<a href="');
        var TotalSoftCodeSrc=TotalSoftCodes1[1].split('">');
        jQuery('#TotalSoftGallery_Video_URL_2').val(TotalSoftCodeSrc[0]);
        jQuery('#TotalSoftGallery_Video_Video_1').val(TotalSoftCodeSrc[0]);
        if(jQuery('#TotalSoftGallery_Video_Video_1').val().length > 0) {
          clearInterval(nIntervId);
          jQuery('#TotalSoftGallery_Video_URL_1').val('');
          check_url(jQuery('#TotalSoftGallery_Video_URL_2').val(),1);
        }
      }
    }
  }, 100)
}

function TotalSoftGallery_Image_URL_Clicked() {
  var nIntervId=setInterval(function() {
    var code=jQuery('#TotalSoftGallery_Image_URL_1').val();
    if(code.indexOf('img') > 0) {
      var s=code.split('src="');
      var src=s[1].split('"');
      var url=src[0];
      if(url.indexOf('http')!= -1) {
       // url=url.replace('http', 'https');
        url=url.replace('httpss', 'https');
      }
	  console.log(url);
      jQuery('#TotalSoftGallery_VideoIm_URL_2').val(url);
      if(jQuery('#TotalSoftGallery_VideoIm_URL_2').val().length > 0) {
        jQuery('#TotalSoftGallery_Image_URL_1').val('');
        clearInterval(nIntervId);
		check_url(jQuery('#TotalSoftGallery_VideoIm_URL_2').val(),2);
      }
    }
  }, 100)
}

function Total_Soft_Gallery_Video_Res_Vid() {
  close_check_url();
  add_onclick_attr();
  jQuery('#TotalSoftGallery_Video_Title').val('');
  jQuery('#TotalSoftGallery_Video_URL_1').val('');
  jQuery('#TotalSoftGallery_Video_Video_1').val('');
  jQuery('#TotalSoftGallery_Video_URL_2').val('');
  jQuery('#TotalSoftGallery_VideoIm_URL_2').val('');

  tinyMCE.get('TotalSoftGallery_Video_Desc').setContent('');
  jQuery('#TotalSoftGallery_Video_Link').val('');
  jQuery('#TotalSoftGallery_Video_ONT').attr('checked', true);
  jQuery('#Total_Soft_Gallery_Video_Upd').animate({'opacity': 0}, 500);
  setTimeout(function() {
    jQuery('#Total_Soft_Gallery_Video_Upd').css('display', 'none');
    jQuery('#Total_Soft_Gallery_Video_Sav').css('display', 'inline');
  }, 300)
  setTimeout(function() {
    jQuery('#Total_Soft_Gallery_Video_Sav').animate({'opacity': 1}, 500);
  }, 500)
}

function Total_Soft_Gallery_Video_Save_Vid() {
  CountOfLegth++;
  jQuery('#TotalSoftGVHidBool').val(CountOfLegth);
  var TotalSoftGVHidNum=jQuery('#TotalSoftGVHidNum').val();
  var TotalSoftGallery_Video_Title=jQuery('#TotalSoftGallery_Video_Title').val();
  var TotalSoftGallery_Video_URL_2=jQuery('#TotalSoftGallery_Video_URL_2').val();
  var TotalSoftGallery_Video_Video_1=jQuery('#TotalSoftGallery_Video_Video_1').val();
  var TotalSoftGallery_VideoIm_URL_2=jQuery('#TotalSoftGallery_VideoIm_URL_2').val();
  var TotalSoftGallery_Video_Desc=tinyMCE.get('TotalSoftGallery_Video_Desc').getContent();
  var TotalSoftGallery_Video_Link=jQuery('#TotalSoftGallery_Video_Link').val();
  var TotalSoftGallery_Video_ONT=jQuery('#TotalSoftGallery_Video_ONT').attr('checked');
  if(TotalSoftGallery_Video_ONT=='checked') {
    TotalSoftGallery_Video_ONT='true';
  }
  else {
    TotalSoftGallery_Video_ONT='false';
  }

  if((TotalSoftGallery_Video_URL_2=='' && TotalSoftGallery_VideoIm_URL_2=='') || (TotalSoftGallery_Video_URL_2!='' && TotalSoftGallery_VideoIm_URL_2=='')) {
    alert('You must upload video or image for saving the content.');
  }
  else {
    if(TotalSoftGVHidNum=='0') {
      jQuery('#TotalSoftGallery_VideoUl').html('<li id="TotalSoftGallery_VideoLi_1"><table class="Total_Soft_AMVideoTable1 Total_Soft_AMVideoTable2" style="display: table; opacity: 1"><tr><td>1</td><td><img class="TotalSoftGallery_VideoImage" src="' + TotalSoftGallery_VideoIm_URL_2 + '"></td><td><input type="text" readonly value="' + TotalSoftGallery_Video_Title + '" class="Total_Soft_Select Total_Soft_Select1 TotalSoftGallery_Video_VT" id="TotalSoftGallery_Video_VT_1" name="TotalSoftGallery_Video_VT_1"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Desc" id="TotalSoftGallery_Video_VDesc_1" name="TotalSoftGallery_Video_VDesc_1" value=""><input type="text" style="display:none;" class="TotalSoftGallery_Video_Link" id="TotalSoftGallery_Video_VLink_1" name="TotalSoftGallery_Video_VLink_1" value="' + TotalSoftGallery_Video_Link + '"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Video" id="TotalSoftGallery_Video_RVideo_1" name="TotalSoftGallery_Video_RVideo_1" value="' + TotalSoftGallery_Video_Video_1 + '"><input type="text" style="display:none;" class="TotalSoftGallery_Video_ONT" id="TotalSoftGallery_Video_VONT_1" name="TotalSoftGallery_Video_VONT_1" value="' + TotalSoftGallery_Video_ONT + '"><input type="text" style="display:none;" class="Total_Soft_Select Total_Soft_Select1 TotalSoftGallery_Video_VURL" id="TotalSoftGallery_Video_VURL_1" name="TotalSoftGallery_Video_VURL_1" value="' + TotalSoftGallery_Video_URL_2 + '"><input type="text" style="display:none;" class="Total_Soft_Select Total_Soft_Select1 TotalSoftGallery_Video_IURL" id="TotalSoftGallery_Video_IURL_1" name="TotalSoftGallery_Video_IURL_1" value="' + TotalSoftGallery_VideoIm_URL_2 + '"></td><td><i class="Total_Soft_icon totalsoft totalsoft-file-text" onclick="TotalSoftGV_Video_Copy(this,1)"></i></td><td><i class="Total_Soft_icon totalsoft totalsoft-pencil" onclick="TotalSoftGV_Video_Edit(this,1)"></i></td><td><i class="Total_Soft_icon totalsoft totalsoft-trash" onclick="TotalSoftGV_Video_Del(this,1)"></i><span class="Total_Soft_GVideo_Del_Span"><i class="Total_Soft_GVideo_Del_Span_Yes totalsoft totalsoft-check" onclick="Total_Soft_GVideo_Del_Vd_Yes(this,1,0)"></i><i class="Total_Soft_GVideo_Del_Span_No totalsoft totalsoft-times" onclick="Total_Soft_GVideo_Del_Vd_No(this,1)"></i></span></td></tr></table></li>');
    }
    else {
      if(TotalSoftGVHidNum % 2==1) {
        jQuery('<li id="TotalSoftGallery_VideoLi_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '"><table class="Total_Soft_AMVideoTable1 Total_Soft_AMVideoTable3" style="display: table; opacity: 1"><tr><td>' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '</td><td><img class="TotalSoftGallery_VideoImage" src="' + TotalSoftGallery_VideoIm_URL_2 + '"></td><td><input type="text" readonly value="' + TotalSoftGallery_Video_Title + '" class="Total_Soft_Select Total_Soft_Select1 TotalSoftGallery_Video_VT" id="TotalSoftGallery_Video_VT_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '" name="TotalSoftGallery_Video_VT_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Desc" id="TotalSoftGallery_Video_VDesc_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '" name="TotalSoftGallery_Video_VDesc_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '" value=""><input type="text" style="display:none;" class="TotalSoftGallery_Video_Link" id="TotalSoftGallery_Video_VLink_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '" name="TotalSoftGallery_Video_VLink_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '" value="' + TotalSoftGallery_Video_Link + '"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Video" id="TotalSoftGallery_Video_RVideo_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '" name="TotalSoftGallery_Video_RVideo_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '" value="' + TotalSoftGallery_Video_Video_1 + '"><input type="text" style="display:none;" class="TotalSoftGallery_Video_ONT" id="TotalSoftGallery_Video_VONT_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '" name="TotalSoftGallery_Video_VONT_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '" value="' + TotalSoftGallery_Video_ONT + '"><input type="text" style="display:none;" class="Total_Soft_Select Total_Soft_Select1 TotalSoftGallery_Video_VURL" id="TotalSoftGallery_Video_VURL_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '" name="TotalSoftGallery_Video_VURL_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '" value="' + TotalSoftGallery_Video_URL_2 + '"><input type="text" style="display:none;" class="Total_Soft_Select Total_Soft_Select1 TotalSoftGallery_Video_IURL" id="TotalSoftGallery_Video_IURL_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '" name="TotalSoftGallery_Video_IURL_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '" value="' + TotalSoftGallery_VideoIm_URL_2 + '"></td><td><i class="Total_Soft_icon totalsoft totalsoft-file-text" onclick="TotalSoftGV_Video_Copy(this,' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + ')"></i></td><td><i class="Total_Soft_icon totalsoft totalsoft-pencil" onclick="TotalSoftGV_Video_Edit(this,' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + ')"></i></td><td><i class="Total_Soft_icon totalsoft totalsoft-trash" onclick="TotalSoftGV_Video_Del(this,' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + ')"></i><span class="Total_Soft_GVideo_Del_Span"><i class="Total_Soft_GVideo_Del_Span_Yes totalsoft totalsoft-check" onclick="Total_Soft_GVideo_Del_Vd_Yes(this,' + parseInt(parseInt(TotalSoftGVHidNum) + 1)+','+ 0 + ')"></i><i class="Total_Soft_GVideo_Del_Span_No totalsoft totalsoft-times" onclick="Total_Soft_GVideo_Del_Vd_No(this,' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + ')"></i></span></td></tr></table></li>').insertAfter('#TotalSoftGallery_VideoUl li:nth-child(' + TotalSoftGVHidNum + ')');
      }
      else {
        jQuery('<li id="TotalSoftGallery_VideoLi_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '"><table class="Total_Soft_AMVideoTable1 Total_Soft_AMVideoTable2" style="display: table; opacity: 1"><tr><td>' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '</td><td><img class="TotalSoftGallery_VideoImage" src="' + TotalSoftGallery_VideoIm_URL_2 + '"></td><td><input type="text" readonly value="' + TotalSoftGallery_Video_Title + '" class="Total_Soft_Select Total_Soft_Select1 TotalSoftGallery_Video_VT" id="TotalSoftGallery_Video_VT_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '" name="TotalSoftGallery_Video_VT_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Desc" id="TotalSoftGallery_Video_VDesc_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '" name="TotalSoftGallery_Video_VDesc_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '" value=""><input type="text" style="display:none;" class="TotalSoftGallery_Video_Link" id="TotalSoftGallery_Video_VLink_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '" name="TotalSoftGallery_Video_VLink_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '" value="' + TotalSoftGallery_Video_Link + '"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Video" id="TotalSoftGallery_Video_RVideo_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '" name="TotalSoftGallery_Video_RVideo_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '" value="' + TotalSoftGallery_Video_Video_1 + '"><input type="text" style="display:none;" class="TotalSoftGallery_Video_ONT" id="TotalSoftGallery_Video_VONT_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '" name="TotalSoftGallery_Video_VONT_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '" value="' + TotalSoftGallery_Video_ONT + '"><input type="text" style="display:none;" class="Total_Soft_Select Total_Soft_Select1 TotalSoftGallery_Video_VURL" id="TotalSoftGallery_Video_VURL_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '" name="TotalSoftGallery_Video_VURL_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '" value="' + TotalSoftGallery_Video_URL_2 + '"><input type="text" style="display:none;" class="Total_Soft_Select Total_Soft_Select1 TotalSoftGallery_Video_IURL" id="TotalSoftGallery_Video_IURL_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '" name="TotalSoftGallery_Video_IURL_' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + '" value="' + TotalSoftGallery_VideoIm_URL_2 + '"></td><td><i class="Total_Soft_icon totalsoft totalsoft-file-text" onclick="TotalSoftGV_Video_Copy(this,' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + ')"></i></td><td><i class="Total_Soft_icon totalsoft totalsoft-pencil" onclick="TotalSoftGV_Video_Edit(this,' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + ')"></i></td><td><i class="Total_Soft_icon totalsoft totalsoft-trash" onclick="TotalSoftGV_Video_Del(this,' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + ')"></i><span class="Total_Soft_GVideo_Del_Span"><i class="Total_Soft_GVideo_Del_Span_Yes totalsoft totalsoft-check" onclick="Total_Soft_GVideo_Del_Vd_Yes(this,' + parseInt(parseInt(TotalSoftGVHidNum) + 1) +',' + 0+ ')"></i><i class="Total_Soft_GVideo_Del_Span_No totalsoft totalsoft-times" onclick="Total_Soft_GVideo_Del_Vd_No(this,' + parseInt(parseInt(TotalSoftGVHidNum) + 1) + ')"></i></span></td></tr></table></li>').insertAfter('#TotalSoftGallery_VideoUl li:nth-child(' + TotalSoftGVHidNum + ')');
      }
    }
    jQuery('#TotalSoftGallery_Video_VDesc_' + parseInt(parseInt(TotalSoftGVHidNum) + 1)).val(TotalSoftGallery_Video_Desc);
    jQuery('#TotalSoftGVHidNum').val(parseInt(parseInt(TotalSoftGVHidNum) + 1));

    TS_VG_Add_Video_Button_Close();

    Total_Soft_Gallery_Video_Res_Vid();
  }
}

function TotalSoftGV_Video_Copy(el,TotalSoftGV_Video_Li_ID) {
  CountOfLegth++;
  jQuery('#TotalSoftGVHidBool').val(CountOfLegth);
  let class_li_id =  jQuery(el).parent().parent().parent().parent().parent();
  var TotalSoftGVHidNum=parseInt(parseInt(jQuery('#TotalSoftGVHidNum').val()) + 1);
  var TotalSoftGallery_Video_VT=jQuery(el).parent().parent().find('td:nth-child(3)').find('.TotalSoftGallery_Video_VT').val();
  var TotalSoftGallery_Video_VDesc=jQuery(el).parent().parent().find('td:nth-child(3)').find('.TotalSoftGallery_Video_Desc').val();
  var TotalSoftGallery_Video_VLink=jQuery(el).parent().parent().find('td:nth-child(3)').find('.TotalSoftGallery_Video_Link').val();
  var TotalSoftGallery_Video_VONT=jQuery(el).parent().parent().find('td:nth-child(3)').find('.TotalSoftGallery_Video_ONT').val();
  var TotalSoftGallery_Video_VURL=jQuery(el).parent().parent().find('td:nth-child(3)').find('.TotalSoftGallery_Video_VURL').val();
  var TotalSoftGallery_Video_IURL=jQuery(el).parent().parent().find('td:nth-child(3)').find('.TotalSoftGallery_Video_IURL').val();
  var TotalSoftGallery_Video_Video=jQuery(el).parent().parent().find('td:nth-child(3)').find('.TotalSoftGallery_Video_Video').val();

  jQuery(class_li_id).after('<li id="TotalSoftGallery_VideoLi_' + TotalSoftGVHidNum + '"><table class="Total_Soft_AMVideoTable1 Total_Soft_AMVideoTable2" style="display: table; opacity: 1"><tr><td>' + 10 + '</td><td><img class="TotalSoftGallery_VideoImage" src="' + TotalSoftGallery_Video_IURL + '"></td><td><input type="text" readonly value="' + TotalSoftGallery_Video_VT + '" class="Total_Soft_Select Total_Soft_Select1 TotalSoftGallery_Video_VT" id="TotalSoftGallery_Video_VT_' + TotalSoftGVHidNum + '" name="TotalSoftGallery_Video_VT_' + TotalSoftGVHidNum + '"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Desc" id="TotalSoftGallery_Video_VDesc_' + TotalSoftGVHidNum + '" name="TotalSoftGallery_Video_VDesc_' + TotalSoftGVHidNum + '"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Link" id="TotalSoftGallery_Video_VLink_' + TotalSoftGVHidNum + '" name="TotalSoftGallery_Video_VLink_' + TotalSoftGVHidNum + '" value="' + TotalSoftGallery_Video_VLink + '"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Video" id="TotalSoftGallery_Video_RVideo_' + TotalSoftGVHidNum + '" name="TotalSoftGallery_Video_RVideo_' + TotalSoftGVHidNum + '" value="' + TotalSoftGallery_Video_Video + '"><input type="text" style="display:none;" class="TotalSoftGallery_Video_ONT" id="TotalSoftGallery_Video_VONT_' + TotalSoftGVHidNum + '" name="TotalSoftGallery_Video_VONT_' + TotalSoftGVHidNum + '" value="' + TotalSoftGallery_Video_VONT + '"><input type="text" style="display:none;" class="Total_Soft_Select Total_Soft_Select1 TotalSoftGallery_Video_VURL" id="TotalSoftGallery_Video_VURL_' + TotalSoftGVHidNum + '" name="TotalSoftGallery_Video_VURL_' + TotalSoftGVHidNum + '" value="' + TotalSoftGallery_Video_VURL + '"><input type="text" style="display:none;" class="Total_Soft_Select Total_Soft_Select1 TotalSoftGallery_Video_IURL" id="TotalSoftGallery_Video_IURL_' + TotalSoftGVHidNum + '" name="TotalSoftGallery_Video_IURL_' + TotalSoftGVHidNum + '" value="' + TotalSoftGallery_Video_IURL + '"></td><td><i class="Total_Soft_icon totalsoft totalsoft-file-text" onclick="TotalSoftGV_Video_Copy(this,' + TotalSoftGVHidNum + ')"></i></td><td><i class="Total_Soft_icon totalsoft totalsoft-pencil" onclick="TotalSoftGV_Video_Edit(this,' + TotalSoftGVHidNum + ')"></i></td><td><i class="Total_Soft_icon totalsoft totalsoft-trash" onclick="TotalSoftGV_Video_Del(this,' + TotalSoftGVHidNum + ')"></i><span class="Total_Soft_GVideo_Del_Span"><i class="Total_Soft_GVideo_Del_Span_Yes totalsoft totalsoft-check" onclick="Total_Soft_GVideo_Del_Vd_Yes(this,' + TotalSoftGVHidNum + ')"></i><i class="Total_Soft_GVideo_Del_Span_No totalsoft totalsoft-times" onclick="Total_Soft_GVideo_Del_Vd_No(this,'+TotalSoftGVHidNum+')"></i></span></td></tr></table></li>').insertAfter('#TotalSoftGallery_VideoUl li:nth-child(' + TotalSoftGV_Video_Li_ID + ')');

  jQuery('#TotalSoftGallery_Video_VDesc_' + TotalSoftGVHidNum).val(TotalSoftGallery_Video_VDesc);

  jQuery('#TotalSoftGVHidNum').val(TotalSoftGVHidNum);

  jQuery("#TotalSoftGallery_VideoUl > li").each(function() {
    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(1)').html(parseInt(parseInt(jQuery(this).index()) + 1));

    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_VT').attr('id', 'TotalSoftGallery_Video_VT_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_VT').attr('name', 'TotalSoftGallery_Video_VT_' + parseInt(parseInt(jQuery(this).index()) + 1));

    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_Desc').attr('id', 'TotalSoftGallery_Video_VDesc_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_Desc').attr('name', 'TotalSoftGallery_Video_VDesc_' + parseInt(parseInt(jQuery(this).index()) + 1));

    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_Link').attr('id', 'TotalSoftGallery_Video_VLink_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_Link').attr('name', 'TotalSoftGallery_Video_VLink_' + parseInt(parseInt(jQuery(this).index()) + 1));

    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_Video').attr('id', 'TotalSoftGallery_Video_RVideo_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_Video').attr('name', 'TotalSoftGallery_Video_RVideo_' + parseInt(parseInt(jQuery(this).index()) + 1));

    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_ONT').attr('id', 'TotalSoftGallery_Video_VONT_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_ONT').attr('name', 'TotalSoftGallery_Video_VONT_' + parseInt(parseInt(jQuery(this).index()) + 1));

    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_VURL').attr('id', 'TotalSoftGallery_Video_VURL_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_VURL').attr('name', 'TotalSoftGallery_Video_VURL_' + parseInt(parseInt(jQuery(this).index()) + 1));

    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_IURL').attr('id', 'TotalSoftGallery_Video_IURL_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_IURL').attr('name', 'TotalSoftGallery_Video_IURL_' + parseInt(parseInt(jQuery(this).index()) + 1));

    if(jQuery(this).find('.Total_Soft_AMVideoTable1').hasClass('Total_Soft_AMVideoTable2')) {
      jQuery(this).find('.Total_Soft_AMVideoTable1').removeClass("Total_Soft_AMVideoTable2");
    }
    else if(jQuery(this).find('.Total_Soft_AMVideoTable1').hasClass('Total_Soft_AMVideoTable3')) {
      jQuery(this).find('.Total_Soft_AMVideoTable1').removeClass("Total_Soft_AMVideoTable3");
    }
    if(jQuery(this).index() % 2==0) {
      jQuery(this).find('.Total_Soft_AMVideoTable1').addClass("Total_Soft_AMVideoTable2");
    }
    else {
      jQuery(this).find('.Total_Soft_AMVideoTable1').addClass("Total_Soft_AMVideoTable3");
    }
  });
}

function TotalSoftGV_Video_Edit(el,TotalSoftGV_Video_Li_ID) {
  let class_li_id = '#' + jQuery(el).parent().parent().parent().parent().parent().attr('id');
  var TotalSoftGallery_Video_VT=jQuery(el).parent().parent().find('td:nth-child(3)').find('.TotalSoftGallery_Video_VT').val();
  var TotalSoftGallery_Video_VDesc=jQuery(el).parent().parent().find('td:nth-child(3)').find('.TotalSoftGallery_Video_Desc').val();
  var TotalSoftGallery_Video_VLink=jQuery(el).parent().parent().find('td:nth-child(3)').find('.TotalSoftGallery_Video_Link').val();
  var TotalSoftGallery_Video_VONT=jQuery(el).parent().parent().find('td:nth-child(3)').find('.TotalSoftGallery_Video_ONT').val();
  var TotalSoftGallery_Video_VURL=jQuery(el).parent().parent().find('td:nth-child(3)').find('.TotalSoftGallery_Video_VURL').val();
  var TotalSoftGallery_Video_IURL=jQuery(el).parent().parent().find('td:nth-child(3)').find('.TotalSoftGallery_Video_IURL').val();
  var TotalSoftGallery_Video_Video=jQuery(el).parent().parent().find('td:nth-child(3)').find('.TotalSoftGallery_Video_Video').val();

  jQuery('#TotalSoftGVHidUpdate').val(class_li_id);

  jQuery('#Total_Soft_Gallery_Video_Sav').animate({'opacity': 0}, 500);
  setTimeout(function() {
    jQuery('#Total_Soft_Gallery_Video_Sav').css('display', 'none');
    jQuery('#Total_Soft_Gallery_Video_Upd').css('display', 'inline');
    TS_VG_Add_Video_Button();
  }, 300)
  setTimeout(function() {
    jQuery('#Total_Soft_Gallery_Video_Upd').animate({'opacity': 1}, 500);
  }, 500)

  jQuery('#TotalSoftGallery_Video_Title').val(TotalSoftGallery_Video_VT);
  jQuery('#TotalSoftGallery_Video_URL_2').val(TotalSoftGallery_Video_VURL);
  jQuery('#TotalSoftGallery_Video_Video_1').val(TotalSoftGallery_Video_Video);
  jQuery('#TotalSoftGallery_VideoIm_URL_2').val(TotalSoftGallery_Video_IURL);
  tinyMCE.get('TotalSoftGallery_Video_Desc').setContent(TotalSoftGallery_Video_VDesc);
  jQuery('#TotalSoftGallery_Video_Link').val(TotalSoftGallery_Video_VLink);

  if(TotalSoftGallery_Video_VONT=='true') {
    jQuery('#TotalSoftGallery_Video_ONT').attr('checked', true);
  }
  else {
    jQuery('#TotalSoftGallery_Video_ONT').attr('checked', false);
  }
}

function TotalSoftGV_Video_Del(el,TotalSoftGV_Video_Li_ID) {

  let class_li_id = '#' + jQuery(el).parent().parent().parent().parent().parent().attr('id');
  jQuery(class_li_id).find('.Total_Soft_GVideo_Del_Span').addClass('Total_Soft_GVideo_Del_Span1');
}

function Total_Soft_GVideo_Del_Vd_No(el,TotalSoftGV_Video_Li_ID) {

  let class_li_id = '#' + jQuery(el).parent().parent().parent().parent().parent().parent().attr('id');
  jQuery(class_li_id).find('.Total_Soft_GVideo_Del_Span').removeClass('Total_Soft_GVideo_Del_Span1');
}

var arr_Id = [];
var arr_Id_Sorted = '';
function Total_Soft_GVideo_Del_Vd_Yes(el,TotalSoftGV_Video_Li_ID,TotalSoftGV_Video_DEL_ID) {
  let class_li_id = '#' + jQuery(el).parent().parent().parent().parent().parent().parent().attr('id');
  console.log(class_li_id);
  if (CountOfLegth>0 && !TotalSoftGV_Video_DEL_ID) {CountOfLegth--; }
  if (TotalSoftGV_Video_DEL_ID!=0) {arr_Id.push(TotalSoftGV_Video_DEL_ID);}
  arr_Id_Sorted = arr_Id.sort();
  jQuery("#TotalSoftGVDelVal").val(arr_Id_Sorted);
    jQuery('#TotalSoftGVHidBool').val(CountOfLegth);
  jQuery(class_li_id).remove();
  jQuery('#TotalSoftGVHidNum').val(jQuery('#TotalSoftGVHidNum').val() - 1);

  jQuery("#TotalSoftGallery_VideoUl > li").each(function() {
    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(1)').html(parseInt(parseInt(jQuery(this).index()) + 1));

    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_VT').attr('id', 'TotalSoftGallery_Video_VT_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_VT').attr('name', 'TotalSoftGallery_Video_VT_' + parseInt(parseInt(jQuery(this).index()) + 1));

    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_Desc').attr('id', 'TotalSoftGallery_Video_VDesc_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_Desc').attr('name', 'TotalSoftGallery_Video_VDesc_' + parseInt(parseInt(jQuery(this).index()) + 1));

    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_Link').attr('id', 'TotalSoftGallery_Video_VLink_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_Link').attr('name', 'TotalSoftGallery_Video_VLink_' + parseInt(parseInt(jQuery(this).index()) + 1));

    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_Video').attr('id', 'TotalSoftGallery_Video_RVideo_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_Video').attr('name', 'TotalSoftGallery_Video_RVideo_' + parseInt(parseInt(jQuery(this).index()) + 1));

    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_ONT').attr('id', 'TotalSoftGallery_Video_VONT_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_ONT').attr('name', 'TotalSoftGallery_Video_VONT_' + parseInt(parseInt(jQuery(this).index()) + 1));

    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_VURL').attr('id', 'TotalSoftGallery_Video_VURL_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_VURL').attr('name', 'TotalSoftGallery_Video_VURL_' + parseInt(parseInt(jQuery(this).index()) + 1));

    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_IURL').attr('id', 'TotalSoftGallery_Video_IURL_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_IURL').attr('name', 'TotalSoftGallery_Video_IURL_' + parseInt(parseInt(jQuery(this).index()) + 1));

    if(jQuery(this).find('.Total_Soft_AMVideoTable1').hasClass('Total_Soft_AMVideoTable2')) {
      jQuery(this).find('.Total_Soft_AMVideoTable1').removeClass("Total_Soft_AMVideoTable2");
    }
    else if(jQuery(this).find('.Total_Soft_AMVideoTable1').hasClass('Total_Soft_AMVideoTable3')) {
      jQuery(this).find('.Total_Soft_AMVideoTable1').removeClass("Total_Soft_AMVideoTable3");
    }
    if(jQuery(this).index() % 2==0) {
      jQuery(this).find('.Total_Soft_AMVideoTable1').addClass("Total_Soft_AMVideoTable2");
    }
    else {
      jQuery(this).find('.Total_Soft_AMVideoTable1').addClass("Total_Soft_AMVideoTable3");
    }
  });
}


function Total_Soft_GVideo_Del_Vid_Yes(el,TotalSoftGV_Video_Li_ID, TotalSoftGV_Video_DEL_ID) {
  let class_li_id = '#' + jQuery(el).parent().parent().parent().parent().parent().parent().attr('id');
  console.log(class_li_id);
  if (CountOfLegth>0 && TotalSoftGV_Video_DEL_ID==0) {CountOfLegth--;}
  if (TotalSoftGV_Video_DEL_ID!=0) {arr_Id.push(TotalSoftGV_Video_DEL_ID);}
  arr_Id_Sorted = arr_Id.sort();
    jQuery('#TotalSoftGVHidBool').val(CountOfLegth);
  jQuery("#TotalSoftGVDelVal").val(arr_Id_Sorted);
  jQuery(class_li_id).remove();
  jQuery('#TotalSoftGVHidNum').val(jQuery('#TotalSoftGVHidNum').val() - 1);
  jQuery("#TotalSoftGallery_VideoUl > li").each(function() {
    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(1)').html(parseInt(parseInt(jQuery(this).index()) + 1));

    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_VT').attr('id', 'TotalSoftGallery_Video_VT_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_VT').attr('name', 'TotalSoftGallery_Video_VT_' + parseInt(parseInt(jQuery(this).index()) + 1));

    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_Desc').attr('id', 'TotalSoftGallery_Video_VDesc_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_Desc').attr('name', 'TotalSoftGallery_Video_VDesc_' + parseInt(parseInt(jQuery(this).index()) + 1));

    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_Link').attr('id', 'TotalSoftGallery_Video_VLink_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_Link').attr('name', 'TotalSoftGallery_Video_VLink_' + parseInt(parseInt(jQuery(this).index()) + 1));

    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_Video').attr('id', 'TotalSoftGallery_Video_RVideo_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_Video').attr('name', 'TotalSoftGallery_Video_RVideo_' + parseInt(parseInt(jQuery(this).index()) + 1));

    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_ONT').attr('id', 'TotalSoftGallery_Video_VONT_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_ONT').attr('name', 'TotalSoftGallery_Video_VONT_' + parseInt(parseInt(jQuery(this).index()) + 1));

    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_VURL').attr('id', 'TotalSoftGallery_Video_VURL_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_VURL').attr('name', 'TotalSoftGallery_Video_VURL_' + parseInt(parseInt(jQuery(this).index()) + 1));

    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_IURL').attr('id', 'TotalSoftGallery_Video_IURL_' + parseInt(parseInt(jQuery(this).index()) + 1));
    jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_IURL').attr('name', 'TotalSoftGallery_Video_IURL_' + parseInt(parseInt(jQuery(this).index()) + 1));

    if(jQuery(this).find('.Total_Soft_AMVideoTable1').hasClass('Total_Soft_AMVideoTable2')) {
      jQuery(this).find('.Total_Soft_AMVideoTable1').removeClass("Total_Soft_AMVideoTable2");
    }
    else if(jQuery(this).find('.Total_Soft_AMVideoTable1').hasClass('Total_Soft_AMVideoTable3')) {
      jQuery(this).find('.Total_Soft_AMVideoTable1').removeClass("Total_Soft_AMVideoTable3");
    }
    if(jQuery(this).index() % 2==0) {
      jQuery(this).find('.Total_Soft_AMVideoTable1').addClass("Total_Soft_AMVideoTable2");
    }
    else {
      jQuery(this).find('.Total_Soft_AMVideoTable1').addClass("Total_Soft_AMVideoTable3");
    }
  });
}

function TotalSoftGallery_VideoUlSort() {
  jQuery('#TotalSoftGallery_VideoUl').sortable({
    update: function() {
      jQuery("#TotalSoftGallery_VideoUl > li").each(function() {
        jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(1)').html(parseInt(parseInt(jQuery(this).index()) + 1));

        jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_VT').attr('id', 'TotalSoftGallery_Video_VT_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_VT').attr('name', 'TotalSoftGallery_Video_VT_' + parseInt(parseInt(jQuery(this).index()) + 1));

        jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_Desc').attr('id', 'TotalSoftGallery_Video_VDesc_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_Desc').attr('name', 'TotalSoftGallery_Video_VDesc_' + parseInt(parseInt(jQuery(this).index()) + 1));

        jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_Link').attr('id', 'TotalSoftGallery_Video_VLink_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_Link').attr('name', 'TotalSoftGallery_Video_VLink_' + parseInt(parseInt(jQuery(this).index()) + 1));

        jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_Video').attr('id', 'TotalSoftGallery_Video_RVideo_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_Video').attr('name', 'TotalSoftGallery_Video_RVideo_' + parseInt(parseInt(jQuery(this).index()) + 1));

        jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_ONT').attr('id', 'TotalSoftGallery_Video_VONT_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_ONT').attr('name', 'TotalSoftGallery_Video_VONT_' + parseInt(parseInt(jQuery(this).index()) + 1));

        jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_VURL').attr('id', 'TotalSoftGallery_Video_VURL_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_VURL').attr('name', 'TotalSoftGallery_Video_VURL_' + parseInt(parseInt(jQuery(this).index()) + 1));

        jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_IURL').attr('id', 'TotalSoftGallery_Video_IURL_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_IURL').attr('name', 'TotalSoftGallery_Video_IURL_' + parseInt(parseInt(jQuery(this).index()) + 1));

        if(jQuery(this).find('.Total_Soft_AMVideoTable1').hasClass('Total_Soft_AMVideoTable2')) {
          jQuery(this).find('.Total_Soft_AMVideoTable1').removeClass("Total_Soft_AMVideoTable2");
        }
        else if(jQuery(this).find('.Total_Soft_AMVideoTable1').hasClass('Total_Soft_AMVideoTable3')) {
          jQuery(this).find('.Total_Soft_AMVideoTable1').removeClass("Total_Soft_AMVideoTable3");
        }
        if(jQuery(this).index() % 2==0) {
          jQuery(this).find('.Total_Soft_AMVideoTable1').addClass("Total_Soft_AMVideoTable2");
        }
        else {
          jQuery(this).find('.Total_Soft_AMVideoTable1').addClass("Total_Soft_AMVideoTable3");
        }
      });
    }
  });
}

function Total_Soft_Gallery_Video_Update_Vid() {
  var TotalSoftGV_Video_Li_ID=jQuery('#TotalSoftGVHidUpdate').val();
  var TotalSoftGallery_Video_Title=jQuery('#TotalSoftGallery_Video_Title').val();
  var TotalSoftGallery_Video_URL_2=jQuery('#TotalSoftGallery_Video_URL_2').val();
  var TotalSoftGallery_Video_Video_1=jQuery('#TotalSoftGallery_Video_Video_1').val();
  var TotalSoftGallery_VideoIm_URL_2=jQuery('#TotalSoftGallery_VideoIm_URL_2').val();
  var TotalSoftGallery_Video_Desc=tinyMCE.get('TotalSoftGallery_Video_Desc').getContent();

  var TotalSoftGallery_Video_Link=jQuery('#TotalSoftGallery_Video_Link').val();
  var TotalSoftGallery_Video_ONT=jQuery('#TotalSoftGallery_Video_ONT').attr('checked');
  if(TotalSoftGallery_Video_ONT=='checked') {
    TotalSoftGallery_Video_ONT='true';
  }
  else {
    TotalSoftGallery_Video_ONT='false';
  }

  if( TotalSoftGallery_Video_URL_2=='' && TotalSoftGallery_VideoIm_URL_2!='') {
    alert('If you want to upload only an image, so that feature is available in our Pro version');
  } else if((TotalSoftGallery_Video_URL_2=='' && TotalSoftGallery_VideoIm_URL_2=='') || (TotalSoftGallery_Video_URL_2!='' && TotalSoftGallery_VideoIm_URL_2=='')) {
    alert('You must upload video or image for updating the content.');
  }
  else {
    console.log(TotalSoftGV_Video_Li_ID);
    jQuery(TotalSoftGV_Video_Li_ID).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_VT').val(TotalSoftGallery_Video_Title);
    jQuery( TotalSoftGV_Video_Li_ID).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_Video').val(TotalSoftGallery_Video_Video_1);
    jQuery( TotalSoftGV_Video_Li_ID).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_Desc').val(TotalSoftGallery_Video_Desc);
    jQuery( TotalSoftGV_Video_Li_ID).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_Link').val(TotalSoftGallery_Video_Link);
    jQuery( TotalSoftGV_Video_Li_ID).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_ONT').val(TotalSoftGallery_Video_ONT);
    jQuery( TotalSoftGV_Video_Li_ID).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_VURL').val(TotalSoftGallery_Video_URL_2);
    jQuery( TotalSoftGV_Video_Li_ID).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.TotalSoftGallery_Video_IURL').val(TotalSoftGallery_VideoIm_URL_2);
    jQuery( TotalSoftGV_Video_Li_ID).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.TotalSoftGallery_VideoImage').attr('src', TotalSoftGallery_VideoIm_URL_2);

    jQuery('#Total_Soft_Gallery_Video_Upd').animate({'opacity': 0}, 500);
    setTimeout(function() {
      jQuery('#Total_Soft_Gallery_Video_Upd').css('display', 'none');
      jQuery('#Total_Soft_Gallery_Video_Sav').css('display', 'inline');
    }, 300)
    setTimeout(function() {
      jQuery('#Total_Soft_Gallery_Video_Sav').animate({'opacity': 1}, 500);
    }, 500)

    TS_VG_Add_Video_Button_Close();
    Total_Soft_Gallery_Video_Res_Vid();
  }
}

function TotalSoftGallery_Video_Del(Gallery_Video_ID) {
  jQuery('#Total_Soft_Gallery_VideoAMOTable_tr_' + Gallery_Video_ID).find('.Total_Soft_GVideo_Del_Span').addClass('Total_Soft_GVideo_Del_Span1');
}

function TotalSoftGallery_Video_Del_No(Gallery_Video_ID) {
  jQuery('#Total_Soft_Gallery_VideoAMOTable_tr_' + Gallery_Video_ID).find('.Total_Soft_GVideo_Del_Span').removeClass('Total_Soft_GVideo_Del_Span1');
}

function TotalSoftGallery_Video_Del_Yes(Gallery_Video_ID) {
  jQuery.ajax({
    type: 'POST', url: object.ajaxurl, data: {
      action: 'TotalSoftGallery_Video_Del', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
      foobar: Gallery_Video_ID, // translates into $_POST['foobar'] in PHP
    }, beforeSend: function() {
      jQuery('.Total_Soft_GV_Loading').css('display', 'block');
    }, success: function(response) {
      location.reload();
    }
  });
}

function TotalSoftGallery_Video_Clone(Gallery_Video_ID) {
  jQuery.ajax({
    type: 'POST', url: object.ajaxurl, data: {
      action: 'TotalSoftGallery_Video_Clone', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
      foobar: Gallery_Video_ID, // translates into $_POST['foobar'] in PHP
    }, beforeSend: function() {
      jQuery('.Total_Soft_GV_Loading').css('display', 'block');
    }, success: function(response) {
      location.reload();
    }
  });
}

function TotalSoftGallery_Video_Edit(Gallery_Video_ID) {
  jQuery('#Total_SoftGallery_Video_Update').val(Gallery_Video_ID);

  jQuery.ajax({
    type: 'POST', url: object.ajaxurl, data: {
      action: 'TotalSoftGallery_Video_Edit', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
      foobar: Gallery_Video_ID, // translates into $_POST['foobar'] in PHP
    }, beforeSend: function() {
      jQuery('.Total_Soft_GV_Loading').css('display', 'block');
    }, success: function(response) {
      var data=JSON.parse(response);
      jQuery('#TotalSoftGallery_Video_Gallery_Title').val(data[0]['TotalSoftGallery_Video_Gallery_Title']);
      jQuery('#TotalSoftGallery_Video_Option').val(data[0]['TotalSoftGallery_Video_Option']);
      jQuery('input[type=radio][name=TotalSoftGallery_Video_ShowType]').each(function() {
        if(this.value==data[0]['TotalSoftGallery_Video_ShowType']) {
          jQuery(this).attr('checked', true);
        }
      })
      jQuery('#TotalSoftGallery_Video_PerPage').val(data[0]['TotalSoftGallery_Video_PerPage']);
      jQuery('#TotalSoftGallery_LoadMore').val(data[0]['TotalSoftGallery_LoadMore']);
      if(data[0]['TotalSoftGallery_Video_ShowType']=='All') {
        jQuery('#TotalSoftGallery_Video_PerPage').animate({'opacity': 0}, 500);
        jQuery('#TotalSoftGallery_Video_PerPage_Output').animate({'opacity': 0}, 500);
        jQuery('#TotalSoftGallery_LoadMore').animate({'opacity': 0}, 500);
        setTimeout(function() {
          jQuery('#TotalSoftGallery_Video_PerPage').css('display', 'none');
          jQuery('#TotalSoftGallery_Video_PerPage_Output').css('display', 'none');
          jQuery('#TotalSoftGallery_LoadMore').css('display', 'none');
        }, 500)
      }
      else if(data[0]['TotalSoftGallery_Video_ShowType']=='Pagination') {
        jQuery('#TotalSoftGallery_LoadMore').animate({'opacity': 0}, 500);
        setTimeout(function() {
          jQuery('#TotalSoftGallery_LoadMore').css('display', 'none');
          jQuery('#TotalSoftGallery_Video_PerPage').css('display', 'inline');
          jQuery('#TotalSoftGallery_Video_PerPage_Output').css('display', 'inline');
        }, 300)
        setTimeout(function() {
          jQuery('#TotalSoftGallery_Video_PerPage').animate({'opacity': 1}, 500);
          jQuery('#TotalSoftGallery_Video_PerPage_Output').animate({'opacity': 1}, 500);
        }, 400)
      }
      else {
        jQuery('#TotalSoftGallery_LoadMore').css('display', 'inline');
        jQuery('#TotalSoftGallery_Video_PerPage').css('display', 'inline');
        jQuery('#TotalSoftGallery_Video_PerPage_Output').css('display', 'inline');
        setTimeout(function() {
          jQuery('#TotalSoftGallery_Video_PerPage').animate({'opacity': 1}, 500);
          jQuery('#TotalSoftGallery_Video_PerPage_Output').animate({'opacity': 1}, 500);
          jQuery('#TotalSoftGallery_LoadMore').animate({'opacity': 1}, 500);
        }, 300)
      }
      TotalSoftGallery_Video_Show();
      Total_Soft_GVideo_Editor();
      TotalSoft_VGallery_Out();
    }
  });

  jQuery.ajax({
    type: 'POST', url: object.ajaxurl, data: {
      action: 'TotalSoftGallery_Video_Edit_Videos', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
      foobar: Gallery_Video_ID, // translates into $_POST['foobar'] in PHP
    }, beforeSend: function() {
    }, success: function(response) {
      var data=JSON.parse(response);

      var TotalSoftGallery_Video_ID=Array();
      var TotalSoftGallery_Video_VT=Array();
      var TotalSoftGallery_Video_VDesc=Array();
      var TotalSoftGallery_Video_VLink=Array();
      var TotalSoftGallery_Video_VONT=Array();
      var TotalSoftGallery_Video_VURL=Array();
      var TotalSoftGallery_Video_IURL=Array();
      var TotalSoftGallery_Video_Video_1=Array();

      for(i=0; i < data.length; i++) {
        TotalSoftGallery_Video_ID[TotalSoftGallery_Video_ID.length]=data[i]['id'];
        TotalSoftGallery_Video_VT[TotalSoftGallery_Video_VT.length]=data[i]['TotalSoftGallery_Video_VT'];
        TotalSoftGallery_Video_VDesc[TotalSoftGallery_Video_VDesc.length]=data[i]['TotalSoftGallery_Video_VDesc'];
        TotalSoftGallery_Video_VLink[TotalSoftGallery_Video_VLink.length]=data[i]['TotalSoftGallery_Video_VLink'];
        TotalSoftGallery_Video_VONT[TotalSoftGallery_Video_VONT.length]=data[i]['TotalSoftGallery_Video_VONT'];
        TotalSoftGallery_Video_VURL[TotalSoftGallery_Video_VURL.length]=data[i]['TotalSoftGallery_Video_VURL'].replace('Tsyou_','https://www.youtube.com/embed/');
        TotalSoftGallery_Video_IURL[TotalSoftGallery_Video_IURL.length]=data[i]['TotalSoftGallery_Video_IURL'].replace('Tsyou_','https://img.youtube.com/vi/');
        TotalSoftGallery_Video_Video_1[TotalSoftGallery_Video_Video_1.length]=data[i]['TotalSoftGallery_Video_Video'].replace('Tsyou_','https://www.youtube.com/watch?v=');
      }

      for(i=1; i <= TotalSoftGallery_Video_VT.length; i++) {
        if(i==1) {
          jQuery('#TotalSoftGallery_VideoUl').html('<li id="TotalSoftGallery_VideoLi_1"><table class="Total_Soft_AMVideoTable1 Total_Soft_AMVideoTable2"><tr><td>1</td><td><img class="TotalSoftGallery_VideoImage" src="' + TotalSoftGallery_Video_IURL[0] + '"></td><td><input type="text" readonly value="' + TotalSoftGallery_Video_VT[0] + '" class="Total_Soft_Select Total_Soft_Select1 TotalSoftGallery_Video_VT" id="TotalSoftGallery_Video_VT_1" name="TotalSoftGallery_Video_VT_1"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Desc" id="TotalSoftGallery_Video_VDesc_1" name="TotalSoftGallery_Video_VDesc_1" value=\'' + TotalSoftGallery_Video_VDesc[0] + '\'><input type="text" style="display:none;" class="TotalSoftGallery_Video_Link" id="TotalSoftGallery_Video_VLink_1" name="TotalSoftGallery_Video_VLink_1" value="' + TotalSoftGallery_Video_VLink[0] + '"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Video" id="TotalSoftGallery_Video_RVideo_1" name="TotalSoftGallery_Video_RVideo_1" value="' + TotalSoftGallery_Video_Video_1[0] + '"><input type="text" style="display:none;" class="TotalSoftGallery_Video_ONT" id="TotalSoftGallery_Video_VONT_1" name="TotalSoftGallery_Video_VONT_1" value="' + TotalSoftGallery_Video_VONT[0] + '"><input type="text" style="display:none;" class="Total_Soft_Select Total_Soft_Select1 TotalSoftGallery_Video_VURL" id="TotalSoftGallery_Video_VURL_1" name="TotalSoftGallery_Video_VURL_1" value="' + TotalSoftGallery_Video_VURL[0] + '"><input type="text" style="display:none;" class="Total_Soft_Select Total_Soft_Select1 TotalSoftGallery_Video_IURL" id="TotalSoftGallery_Video_IURL_1" name="TotalSoftGallery_Video_IURL_1" value="' + TotalSoftGallery_Video_IURL[0] + '"></td><td><i class="Total_Soft_icon totalsoft totalsoft-file-text" onclick="TotalSoftGV_Video_Copy(this,1)"></i></td><td><i class="Total_Soft_icon totalsoft totalsoft-pencil" onclick="TotalSoftGV_Video_Edit(this,1)"></i></td><td><i class="Total_Soft_icon totalsoft totalsoft-trash" onclick="TotalSoftGV_Video_Del(this,1)"></i><span class="Total_Soft_GVideo_Del_Span"><i class="Total_Soft_GVideo_Del_Span_Yes totalsoft totalsoft-check" onclick="Total_Soft_GVideo_Del_Vid_Yes(this,'+TotalSoftGallery_Video_ID[i-1]+')"></i><i class="Total_Soft_GVideo_Del_Span_No totalsoft totalsoft-times" onclick="Total_Soft_GVideo_Del_Vd_No(this,1)"></i></span></td></tr></table></li>');
        }
        else {
          if(i % 2==0) {
            jQuery('<li id="TotalSoftGallery_VideoLi_' + i + '"><table class="Total_Soft_AMVideoTable1 Total_Soft_AMVideoTable3"><tr><td>' + i + '</td><td><img class="TotalSoftGallery_VideoImage" src="' + TotalSoftGallery_Video_IURL[i - 1] + '"></td><td><input type="text" readonly value="' + TotalSoftGallery_Video_VT[i - 1] + '" class="Total_Soft_Select Total_Soft_Select1 TotalSoftGallery_Video_VT" id="TotalSoftGallery_Video_VT_' + i + '" name="TotalSoftGallery_Video_VT_' + i + '"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Desc" id="TotalSoftGallery_Video_VDesc_' + i + '" name="TotalSoftGallery_Video_VDesc_' + i + '" value=\'' + TotalSoftGallery_Video_VDesc[i - 1] + '\'><input type="text" style="display:none;" class="TotalSoftGallery_Video_Link" id="TotalSoftGallery_Video_VLink_' + i + '" name="TotalSoftGallery_Video_VLink_' + i + '" value="' + TotalSoftGallery_Video_VLink[i - 1] + '"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Video" id="TotalSoftGallery_Video_RVideo_' + i + '" name="TotalSoftGallery_Video_RVideo_' + i + '" value="' + TotalSoftGallery_Video_Video_1[i - 1] + '"><input type="text" style="display:none;" class="TotalSoftGallery_Video_ONT" id="TotalSoftGallery_Video_VONT_' + i + '" name="TotalSoftGallery_Video_VONT_' + i + '" value="' + TotalSoftGallery_Video_VONT[i - 1] + '"><input type="text" style="display:none;" class="Total_Soft_Select Total_Soft_Select1 TotalSoftGallery_Video_VURL" id="TotalSoftGallery_Video_VURL_' + i + '" name="TotalSoftGallery_Video_VURL_' + i + '" value="' + TotalSoftGallery_Video_VURL[i - 1] + '"><input type="text" style="display:none;" class="Total_Soft_Select Total_Soft_Select1 TotalSoftGallery_Video_IURL" id="TotalSoftGallery_Video_IURL_' + i + '" name="TotalSoftGallery_Video_IURL_' + i + '" value="' + TotalSoftGallery_Video_IURL[i - 1] + '"></td><td><i class="Total_Soft_icon totalsoft totalsoft-file-text" onclick="TotalSoftGV_Video_Copy(this,' + i + ')"></i></td><td><i class="Total_Soft_icon totalsoft totalsoft-pencil" onclick="TotalSoftGV_Video_Edit(this,' + i + ')"></i></td><td><i class="Total_Soft_icon totalsoft totalsoft-trash" onclick="TotalSoftGV_Video_Del(this,' + i + ')"></i><span class="Total_Soft_GVideo_Del_Span"><i class="Total_Soft_GVideo_Del_Span_Yes totalsoft totalsoft-check" onclick="Total_Soft_GVideo_Del_Vid_Yes(this,' + i+','+ TotalSoftGallery_Video_ID[i-1] + ')"></i><i class="Total_Soft_GVideo_Del_Span_No totalsoft totalsoft-times" onclick="Total_Soft_GVideo_Del_Vd_No(this,' + i + ')"></i></span></td></tr></table></li>').insertAfter('#TotalSoftGallery_VideoUl li:nth-child(' + parseInt(parseInt(i) - 1) + ')');
          }
          else {
            jQuery('<li id="TotalSoftGallery_VideoLi_' + i + '"><table class="Total_Soft_AMVideoTable1 Total_Soft_AMVideoTable2"><tr><td>' + i + '</td><td><img class="TotalSoftGallery_VideoImage" src="' + TotalSoftGallery_Video_IURL[i - 1] + '"></td><td><input type="text" readonly value="' + TotalSoftGallery_Video_VT[i - 1] + '" class="Total_Soft_Select Total_Soft_Select1 TotalSoftGallery_Video_VT" id="TotalSoftGallery_Video_VT_' + i + '" name="TotalSoftGallery_Video_VT_' + i + '"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Desc" id="TotalSoftGallery_Video_VDesc_' + i + '" name="TotalSoftGallery_Video_VDesc_' + i + '" value=\'' + TotalSoftGallery_Video_VDesc[i - 1] + '\'><input type="text" style="display:none;" class="TotalSoftGallery_Video_Link" id="TotalSoftGallery_Video_VLink_' + i + '" name="TotalSoftGallery_Video_VLink_' + i + '" value="' + TotalSoftGallery_Video_VLink[i - 1] + '"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Video" id="TotalSoftGallery_Video_RVideo_' + i + '" name="TotalSoftGallery_Video_RVideo_' + i + '" value="' + TotalSoftGallery_Video_Video_1[i - 1] + '"><input type="text" style="display:none;" class="TotalSoftGallery_Video_ONT" id="TotalSoftGallery_Video_VONT_' + i + '" name="TotalSoftGallery_Video_VONT_' + i + '" value="' + TotalSoftGallery_Video_VONT[i - 1] + '"><input type="text" style="display:none;" class="Total_Soft_Select Total_Soft_Select1 TotalSoftGallery_Video_VURL" id="TotalSoftGallery_Video_VURL_' + i + '" name="TotalSoftGallery_Video_VURL_' + i + '" value="' + TotalSoftGallery_Video_VURL[i - 1] + '"><input type="text" style="display:none;" class="Total_Soft_Select Total_Soft_Select1 TotalSoftGallery_Video_IURL" id="TotalSoftGallery_Video_IURL_' + i + '" name="TotalSoftGallery_Video_IURL_' + i + '" value="' + TotalSoftGallery_Video_IURL[i - 1] + '"></td><td><i class="Total_Soft_icon totalsoft totalsoft-file-text" onclick="TotalSoftGV_Video_Copy(this,' + i + ')"></i></td><td><i class="Total_Soft_icon totalsoft totalsoft-pencil" onclick="TotalSoftGV_Video_Edit(this,' + i + ')"></i></td><td><i class="Total_Soft_icon totalsoft totalsoft-trash" onclick="TotalSoftGV_Video_Del(this,' + i + ')"></i><span class="Total_Soft_GVideo_Del_Span"><i class="Total_Soft_GVideo_Del_Span_Yes totalsoft totalsoft-check" onclick="Total_Soft_GVideo_Del_Vid_Yes(this,' + i+','+  TotalSoftGallery_Video_ID[i-1] + ')"></i><i class="Total_Soft_GVideo_Del_Span_No totalsoft totalsoft-times" onclick="Total_Soft_GVideo_Del_Vd_No(this,' + i + ')"></i></span></td></tr></table></li>').insertAfter('#TotalSoftGallery_VideoUl li:nth-child(' + parseInt(parseInt(i) - 1) + ')');
          }
        }
      }
      jQuery('#TotalSoftGVHidNum').val(TotalSoftGallery_Video_VT.length);
      TotalSoft_VGallery_Out();
      jQuery('.Total_Soft_Gallery_Video_AMD2').animate({'opacity': 0}, 500);
      jQuery('.Total_Soft_Gallery_VideoAMMTable').animate({'opacity': 0}, 500);
      jQuery('.Total_Soft_Gallery_VideoAMOTable').animate({'opacity': 0}, 500);
      jQuery('.Total_Soft_Gallery_Video_Save').animate({'opacity': 0}, 500);
      jQuery('.Total_Soft_Gallery_Video_Update').animate({'opacity': 1}, 500);
      jQuery('#Total_Soft_Gallery_Video_ID').html('[Total_Soft_Gallery_Video id="' + Gallery_Video_ID + '"]');
      jQuery('#Total_Soft_Gallery_Video_TID').html('&lt;?php echo do_shortcode(&#039;[Total_Soft_Gallery_Video id="' + Gallery_Video_ID + '"]&#039;);?&gt');
      setTimeout(function() {
        jQuery('.Total_Soft_Gallery_Video_AMD2').css('display', 'none');
        jQuery('.Total_Soft_Gallery_VideoAMMTable').css('display', 'none');
        jQuery('.Total_Soft_Gallery_VideoAMOTable').css('display', 'none');
        jQuery('.Total_Soft_Gallery_Video_Save').css('display', 'none');
        jQuery('.Total_Soft_Gallery_Video_Update').css('display', 'block');
        jQuery('.Total_Soft_Gallery_Video_AMD3').css('display', 'block');
        jQuery('.TS_AM_Table_Div').css('display', 'block');
        jQuery('.Total_Soft_AMVideoTable').css('display', 'table');
        jQuery('.Total_Soft_AMVideoTable1').css('display', 'table');
        jQuery('.Total_Soft_GV_AMShortTable').css('display', 'table');
      }, 500)
      setTimeout(function() {
        jQuery('.Total_Soft_Gallery_Video_AMD3').animate({'opacity': 1}, 500);
        jQuery('.TS_AM_Table_Div').animate({'opacity': 1}, 500);
        jQuery('.Total_Soft_AMVideoTable').animate({'opacity': 1}, 500);
        jQuery('.Total_Soft_AMVideoTable1').animate({'opacity': 1}, 500);
        jQuery('.Total_Soft_GV_AMShortTable').animate({'opacity': 1}, 500);
        jQuery('.Total_Soft_GV_Loading').css('display', 'none');
      }, 600)
    }
  });
}

function Total_Soft_GVideo_Editor() {
  tinymce.init({
    selector: '#TotalSoftGallery_Video_Desc',
    menubar: false,
    statusbar: false,
    height: 170,
    plugins: ['advlist autolink lists link image charmap print preview hr', 'searchreplace wordcount code media ', 'insertdatetime save table contextmenu directionality', 'paste textcolor colorpicker textpattern imagetools codesample'],
    toolbar1: "newdocument | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | formatselect fontselect fontsizeselect",
    toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink code | insertdatetime preview | forecolor backcolor",
    toolbar3: "table | hr | subscript superscript | charmap | print | codesample ",
    fontsize_formats: '8px 10px 12px 14px 16px 18px 20px 22px 24px 26px 28px 30px 32px 34px 36px 38px 40px 42px 44px 46px 48px',
    font_formats:'Abadi MT Condensed Light = abadi mt condensed light; Aharoni = aharoni; Aldhabi = aldhabi; Andalus = andalus; Angsana New = angsana new; AngsanaUPC = angsanaupc; Aparajita = aparajita; Arabic Typesetting = arabic typesetting; Arial = arial; Arial Black = arial black; Batang = batang; BatangChe = batangche; Browallia New = browallia new; BrowalliaUPC = browalliaupc; Calibri = calibri; Calibri Light = calibri light; Calisto MT = calisto mt; Cambria = cambria; Candara = candara; Century Gothic = century gothic; Comic Sans MS = comic sans ms; Consolas = consolas; Constantia = constantia; Copperplate Gothic = copperplate gothic; Copperplate Gothic Light = copperplate gothic light; Corbel = corbel; Cordia New = cordia new; CordiaUPC = cordiaupc; Courier New = courier new; DaunPenh = daunpenh; David = david; DFKai-SB = dfkai-sb; DilleniaUPC = dilleniaupc; DokChampa = dokchampa; Dotum = dotum; DotumChe = dotumche; Ebrima = ebrima; Estrangelo Edessa = estrangelo edessa; EucrosiaUPC = eucrosiaupc; Euphemia = euphemia; FangSong = fangsong; Franklin Gothic Medium = franklin gothic medium; FrankRuehl = frankruehl; FreesiaUPC = freesiaupc; Gabriola = gabriola; Gadugi = gadugi; Gautami = gautami; Georgia = georgia; Gisha = gisha; Gulim  = gulim; GulimChe = gulimche; Gungsuh = gungsuh; GungsuhChe = gungsuhche; Impact = impact; IrisUPC = irisupc; Iskoola Pota = iskoola pota; JasmineUPC = jasmineupc; KaiTi = kaiti; Kalinga = kalinga; Kartika = kartika; Khmer UI = khmer ui; KodchiangUPC = kodchiangupc; Kokila = kokila; Lao UI = lao ui; Latha = latha; Leelawadee = leelawadee; Levenim MT = levenim mt; LilyUPC = lilyupc; Lucida Console = lucida console; Lucida Handwriting Italic = lucida handwriting italic; Lucida Sans Unicode = lucida sans unicode; Malgun Gothic = malgun gothic; Mangal = mangal; Manny ITC = manny itc; Marlett = marlett; Meiryo = meiryo; Meiryo UI = meiryo ui; Microsoft Himalaya = microsoft himalaya; Microsoft JhengHei = microsoft jhenghei; Microsoft JhengHei UI = microsoft jhenghei ui; Microsoft New Tai Lue = microsoft new tai lue; Microsoft PhagsPa = microsoft phagspa; Microsoft Sans Serif = microsoft sans serif; Microsoft Tai Le = microsoft tai le; Microsoft Uighur = microsoft uighur; Microsoft YaHei = microsoft yahei; Microsoft YaHei UI = microsoft yahei ui; Microsoft Yi Baiti = microsoft yi baiti; MingLiU_HKSCS = mingliu_hkscs; MingLiU_HKSCS-ExtB = mingliu_hkscs-extb; Miriam = miriam; Mongolian Baiti = mongolian baiti; MoolBoran = moolboran; MS UI Gothic = ms ui gothic; MV Boli = mv boli; Myanmar Text = myanmar text; Narkisim = narkisim; Nirmala UI = nirmala ui; News Gothic MT = news gothic mt; NSimSun = nsimsun; Nyala = nyala; Palatino Linotype = palatino linotype; Plantagenet Cherokee = plantagenet cherokee; Raavi = raavi; Rod = rod; Sakkal Majalla = sakkal majalla; Segoe Print = segoe print; Segoe Script = segoe script; Segoe UI Symbol = segoe ui symbol; Shonar Bangla = shonar bangla; Shruti = shruti; SimHei = simhei; SimKai = simkai; Simplified Arabic = simplified arabic; SimSun = simsun; SimSun-ExtB = simsun-extb; Sylfaen = sylfaen; Tahoma = tahoma; Times New Roman = times new roman; Traditional Arabic = traditional arabic; Trebuchet MS = trebuchet ms; Tunga = tunga; Utsaah = utsaah; Vani = vani; Vijaya = vijaya'
  });
}

function TS_VG_IT_FD_Clicked(type) {
  if(type=='1') {
    jQuery('#TotalSoftGallery_Video_URL_1').val('');
    jQuery('#TotalSoftGallery_Video_Video_1').val('');
    jQuery('#TotalSoftGallery_Video_URL_2').val('');
  }
  else if(type=='2') {
    jQuery('#TotalSoftGallery_Image_URL_1').val('');
    jQuery('#TotalSoftGallery_VideoIm_URL_2').val('');
  }
}

// Theme Menu
function Total_Soft_Gallery_Video_Opt_AMD2_But1() {
  jQuery('.Total_Soft_Gallery_Video_AMD2').animate({'opacity': 0}, 500);
  jQuery('.Total_Soft_AMMTable').animate({'opacity': 0}, 500);
  jQuery('.Total_Soft_AMOTable').animate({'opacity': 0}, 500);
  jQuery('.Total_Soft_Gallery_Video_Save_Option').animate({'opacity': 1}, 500);
  jQuery('.Total_Soft_Gallery_Video_Update_Option').animate({'opacity': 0}, 500);
  setTimeout(function() {
    jQuery('.Total_Soft_VGallery_Color').alphaColorPicker();
    jQuery('.Total_Soft_VGallery_Color1').alphaColorPicker();
    jQuery('.wp-picker-holder').addClass('alpha-picker-holder');
  }, 500);
  setTimeout(function() {
    jQuery('.Total_Soft_Gallery_Video_AMD2').css('display', 'none');
    jQuery('.Total_Soft_AMMTable').css('display', 'none');
    jQuery('.Total_Soft_AMOTable').css('display', 'none');
    jQuery('.Total_Soft_Gallery_Video_Save_Option').css('display', 'block');
    jQuery('.Total_Soft_Gallery_Video_Update_Option').css('display', 'none');
    jQuery('.Total_Soft_Gallery_Video_AMD3').css('display', 'block');
    jQuery('#Total_Soft_AMSetDiv_1').css('display', 'block');
    jQuery('#Total_Soft_AMSet_Table').css('display', 'block');
  }, 300)
  setTimeout(function() {
    jQuery('.Total_Soft_Gallery_Video_AMD3').animate({'opacity': 1}, 500);
    jQuery('#Total_Soft_AMSetDiv_1').animate({'opacity': 1}, 500);
    jQuery('#Total_Soft_AMSet_Table').animate({'opacity': 1}, 500);
  }, 400)
  TotalSoft_VGallery_Out();
  TS_GV_TM_But('1', 'GO');
  TS_GV_Loading_Changed('GG', 'TotalSoft_GV_GG_66');
  TS_GV_Loading_Changed('LG', 'TotalSoft_GV_LG_75');
  TS_GV_Loading_Changed('TV', 'TotalSoft_GV_TV_55');
  TS_GV_Loading_Changed('CP', 'TotalSoft_GV_CP_74');
  TS_GV_Loading_Changed('EG', 'TotalSoft_GV_EG_57');
  TS_GV_Loading_Changed('FG', 'TotalSoft_GV_FG_66');
  TS_GV_Loading_Changed('PE', 'TotalSoft_GV_PE_58');
  TS_GV_Loading_Changed('CG', 'TotalSoft_GV_CG_59');
  TS_GV_Loading_Changed('SG', 'TotalSoft_GV_SG_73');
  TS_GV_Loading_Changed('XG', 'TotalSoft_GV_XG_58');
  TS_GV_Loading_Changed('GA', 'TotalSoft_GV_GA_51');
}

function Total_Soft_Gallery_Video_Opt_AMD2_Button1() {
  alert('This is Our Free Version. For more adventures Click to buy Personal version.');
}

function TotalSoft_VG_GVG_HEffect() {
  var TotalSoft_VG_GVG_HE=jQuery('#TotalSoft_GV_GG_06').val();
  if(TotalSoft_VG_GVG_HE=='drop-shadow') {
    jQuery('#TotalSoft_GV_GG_07').hide(500);
    jQuery('#TotalSoft_GV_GG_07_Output').hide(500);
    jQuery('.DropShadow1').hide();
    setTimeout(function() {
      jQuery('.DropShadow').show(500);
    }, 500)
  }
  else if(TotalSoft_VG_GVG_HE=='opacity') {
    jQuery('#TotalSoft_GV_GG_07').show(500);
    jQuery('#TotalSoft_GV_GG_07_Output').show(500);
    jQuery('.DropShadow').hide(500);
    setTimeout(function() {
      jQuery('.DropShadow1').show();
    }, 500)
  }
  else {
    jQuery('#TotalSoft_GV_GG_07').hide(500);
    jQuery('#TotalSoft_GV_GG_07_Output').hide(500);
    jQuery('.DropShadow').hide(500);
    setTimeout(function() {
      jQuery('.DropShadow1').show();
    }, 500)
  }
}

function TotalSoftGalleryV_Type() {
  var TotalSoftGalleryV_SetType=jQuery('#TotalSoftGalleryV_SetType').val();
  jQuery('.Total_Soft_AMSetDiv').animate({'opacity': 0}, 500).css('display', 'none');
  setTimeout(function() {
    if(TotalSoftGalleryV_SetType=='Grid Video Gallery') {
      jQuery('#Total_Soft_AMSetDiv_1').css('display', 'block');
      TS_GV_TM_But('1', 'GO');
    }
    else if(TotalSoftGalleryV_SetType=='LightBox Video Gallery') {
      jQuery('#Total_Soft_AMSetDiv_2').css('display', 'block');
      TS_GV_TM_But('2', 'GO');
    }
    else if(TotalSoftGalleryV_SetType=='Thumbnails Video') {
      jQuery('#Total_Soft_AMSetDiv_3').css('display', 'block');
      TS_GV_TM_But('3', 'GO');
    }
    else if(TotalSoftGalleryV_SetType=='Content Popup') {
      jQuery('#Total_Soft_AMSetDiv_4').css('display', 'block');
      TS_GV_TM_But('4', 'GO');
    }
    else if(TotalSoftGalleryV_SetType=='Elastic Gallery') {
      jQuery('#Total_Soft_AMSetDiv_5').css('display', 'block');
      TS_GV_TM_But('5', 'GO');
    }
    else if(TotalSoftGalleryV_SetType=='Fancy Gallery') {
      jQuery('#Total_Soft_AMSetDiv_6').css('display', 'block');
      TS_GV_TM_But('6', 'GO');
    }
    else if(TotalSoftGalleryV_SetType=='Parallax Engine') {
      jQuery('#Total_Soft_AMSetDiv_7').css('display', 'block');
      TS_GV_TM_But('7', 'GO');
    }
    else if(TotalSoftGalleryV_SetType=='Classic Gallery') {
      jQuery('#Total_Soft_AMSetDiv_8').css('display', 'block');
      TS_GV_TM_But('8', 'GO');
    }
    else if(TotalSoftGalleryV_SetType=='Space Gallery') {
      jQuery('#Total_Soft_AMSetDiv_9').css('display', 'block');
      TS_GV_TM_But('9', 'GO');
    }
    else if(TotalSoftGalleryV_SetType=='Effective Gallery') {
      jQuery('#Total_Soft_AMSetDiv_10').css('display', 'block');
      TS_GV_TM_But('10', 'GO');
    }
    else if(TotalSoftGalleryV_SetType=='Gallery Album') {
      jQuery('#Total_Soft_AMSetDiv_11').css('display', 'block');
      TS_GV_TM_But('11', 'GO');
    }
  }, 500)
  setTimeout(function() {
    if(TotalSoftGalleryV_SetType=='Grid Video Gallery') {
      jQuery('#Total_Soft_AMSetDiv_1').animate({'opacity': 1}, 500);
    }
    else if(TotalSoftGalleryV_SetType=='LightBox Video Gallery') {
      jQuery('#Total_Soft_AMSetDiv_2').animate({'opacity': 1}, 500);
    }
    else if(TotalSoftGalleryV_SetType=='Thumbnails Video') {
      jQuery('#Total_Soft_AMSetDiv_3').animate({'opacity': 1}, 500);
    }
    else if(TotalSoftGalleryV_SetType=='Content Popup') {
      jQuery('#Total_Soft_AMSetDiv_4').animate({'opacity': 1}, 500);
    }
    else if(TotalSoftGalleryV_SetType=='Elastic Gallery') {
      jQuery('#Total_Soft_AMSetDiv_5').animate({'opacity': 1}, 500);
    }
    else if(TotalSoftGalleryV_SetType=='Fancy Gallery') {
      jQuery('#Total_Soft_AMSetDiv_6').animate({'opacity': 1}, 500);
    }
    else if(TotalSoftGalleryV_SetType=='Parallax Engine') {
      jQuery('#Total_Soft_AMSetDiv_7').animate({'opacity': 1}, 500);
    }
    else if(TotalSoftGalleryV_SetType=='Classic Gallery') {
      jQuery('#Total_Soft_AMSetDiv_8').animate({'opacity': 1}, 500);
    }
    else if(TotalSoftGalleryV_SetType=='Space Gallery') {
      jQuery('#Total_Soft_AMSetDiv_9').animate({'opacity': 1}, 500);
    }
    else if(TotalSoftGalleryV_SetType=='Effective Gallery') {
      jQuery('#Total_Soft_AMSetDiv_10').animate({'opacity': 1}, 500);
    }
    else if(TotalSoftGalleryV_SetType=='Gallery Album') {
      jQuery('#Total_Soft_AMSetDiv_11').animate({'opacity': 1}, 500);
    }
  }, 500)
}

function TotalSoftGalleryV_Clone_Option(Gallery_Video_OptID) {
  jQuery.ajax({
    type: 'POST', url: object.ajaxurl, data: {
      action: 'TotalSoftGalleryV_Clone_Option', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
      foobar: Gallery_Video_OptID, // translates into $_POST['foobar'] in PHP
    }, beforeSend: function() {
      jQuery('.Total_Soft_GV_Loading').css('display', 'block');
    }, success: function(response) {
      location.reload();
    }
  });
}

function TotalSoftGalleryV_Del_Option_Yes(Gallery_Video_OptID) {
  jQuery.ajax({
    type: 'POST', url: object.ajaxurl, data: {
      action: 'TotalSoftGallery_VideoOpt_Del', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
      foobar: Gallery_Video_OptID, // translates into $_POST['foobar'] in PHP
    }, beforeSend: function() {
      jQuery('.Total_Soft_GV_Loading').css('display', 'block');
    }, success: function(response) {
      location.reload();
    }
  });
}

function TotalSoftGalleryV_Del_Option(Gallery_Video_OptID) {
  jQuery('#Total_Soft_AMOTable_tr_' + Gallery_Video_OptID).find('.Total_Soft_GVideo_Del_Span').addClass('Total_Soft_GVideo_Del_Span1');
}

function TotalSoftGalleryV_Del_Option_No(Gallery_Video_OptID) {
  jQuery('#Total_Soft_AMOTable_tr_' + Gallery_Video_OptID).find('.Total_Soft_GVideo_Del_Span').removeClass('Total_Soft_GVideo_Del_Span1');
}

function TotalSoftGalleryV_Edit_Option(Gallery_Video_OptID) {
  jQuery.ajax({
    type: 'POST', url: object.ajaxurl, data: {
      action: 'TotalSoftGallery_VideoOpt_Edit', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
      foobar: Gallery_Video_OptID, // translates into $_POST['foobar'] in PHP
    }, beforeSend: function() {
      jQuery('.Total_Soft_GV_Loading').css('display', 'block');
    }, success: function(response) {
      var data=JSON.parse(response);

      setTimeout(function() {
        jQuery('#Total_SoftGallery_Video_Update').val(Gallery_Video_OptID);
        jQuery('#TotalSoftGalleryV_SetName').val(data[0]['TotalSoftGalleryV_SetName']);
        jQuery('#TotalSoftGalleryV_SetType').val(data[0]['TotalSoftGalleryV_SetType']);

        if(data[0]['TotalSoftGalleryV_SetType']=='Grid Video Gallery') {
          if(data[0]['TotalSoft_GV_1_01']=='true') {
            data[0]['TotalSoft_GV_1_01']=true;
          }
          else {
            data[0]['TotalSoft_GV_1_01']=false;
          }
          if(data[0]['TotalSoft_GV_1_02']=='true') {
            data[0]['TotalSoft_GV_1_02']=true;
          }
          else {
            data[0]['TotalSoft_GV_1_02']=false;
          }
          jQuery('#TotalSoft_GV_GG_01').attr('checked', data[0]['TotalSoft_GV_1_01']);
          jQuery('#TotalSoft_GV_GG_02').attr('checked', data[0]['TotalSoft_GV_1_02']);
          jQuery('#TotalSoft_GV_GG_03').val(data[0]['TotalSoft_GV_1_03']);
          jQuery('#TotalSoft_GV_GG_04').val(data[0]['TotalSoft_GV_1_04']);
          jQuery('#TotalSoft_GV_GG_05').val(data[0]['TotalSoft_GV_1_05']);
          jQuery('#TotalSoft_GV_GG_06').val(data[0]['TotalSoft_GV_1_06']);
          jQuery('#TotalSoft_GV_GG_07').val(parseInt(parseFloat(data[0]['TotalSoft_GV_1_07']) * 100));
          jQuery('#TotalSoft_GV_GG_08').val(data[0]['TotalSoft_GV_1_08']);
          jQuery('#TotalSoft_GV_GG_09').val(data[0]['TotalSoft_GV_1_09']);
          jQuery('#TotalSoft_GV_GG_10').val(data[0]['TotalSoft_GV_1_10']);
          jQuery('#TotalSoft_GV_GG_11').val(data[0]['TotalSoft_GV_1_11']);
          jQuery('#TotalSoft_GV_GG_12').val(data[0]['TotalSoft_GV_1_12']);
          jQuery('#TotalSoft_GV_GG_13').val(data[0]['TotalSoft_GV_1_13']);
          jQuery('#TotalSoft_GV_GG_14').val(data[0]['TotalSoft_GV_1_14']);
          jQuery('#TotalSoft_GV_GG_15').val(data[0]['TotalSoft_GV_1_15']);
          jQuery('#TotalSoft_GV_GG_16').val(data[0]['TotalSoft_GV_1_16']);
          jQuery('#TotalSoft_GV_GG_17').val(data[0]['TotalSoft_GV_1_17']);
          jQuery('#TotalSoft_GV_GG_18').val(data[0]['TotalSoft_GV_1_18']);
          jQuery('#TotalSoft_GV_GG_19').val(data[0]['TotalSoft_GV_1_19']);
          jQuery('#TotalSoft_GV_GG_20').val(data[0]['TotalSoft_GV_1_20']);
          jQuery('#TotalSoft_GV_GG_21').val(data[0]['TotalSoft_GV_1_21']);
          jQuery('#TotalSoft_GV_GG_22').val(data[0]['TotalSoft_GV_1_22']);
          jQuery('#TotalSoft_GV_GG_23').val(data[0]['TotalSoft_GV_1_23']);
          jQuery('#TotalSoft_GV_GG_24').val(data[0]['TotalSoft_GV_1_24']);
          jQuery('#TotalSoft_GV_GG_25').val(data[0]['TotalSoft_GV_1_25']);
          jQuery('#TotalSoft_GV_GG_26').val(data[0]['TotalSoft_GV_1_26']);
          jQuery('#TotalSoft_GV_GG_27').val(data[0]['TotalSoft_GV_1_27']);
          jQuery('#TotalSoft_GV_GG_28').val(data[0]['TotalSoft_GV_1_28']);
          jQuery('#TotalSoft_GV_GG_29').val(data[0]['TotalSoft_GV_1_29']);
          jQuery('#TotalSoft_GV_GG_30').val(data[0]['TotalSoft_GV_1_30']);
          jQuery('#TotalSoft_GV_GG_31').val(data[0]['TotalSoft_GV_1_31']);
          jQuery('#TotalSoft_GV_GG_32').val(data[0]['TotalSoft_GV_1_32']);
          jQuery('#TotalSoft_GV_GG_33').val(data[0]['TotalSoft_GV_1_33']);
          jQuery('#TotalSoft_GV_GG_34').val(data[0]['TotalSoft_GV_1_34']);
          jQuery('#TotalSoft_GV_GG_35').val(data[0]['TotalSoft_GV_1_35']);
          jQuery('#TotalSoft_GV_GG_36').val(data[0]['TotalSoft_GV_1_36']);
          jQuery('#TotalSoft_GV_GG_37').val(data[0]['TotalSoft_GV_1_37']);
          jQuery('#TotalSoft_GV_GG_38').val(data[0]['TotalSoft_GV_1_38']);
          jQuery('#TotalSoft_GV_GG_39').val(data[0]['TotalSoft_GV_1_39']);
          TotalSoft_VG_GVG_HEffect();
        }
        else if(data[0]['TotalSoftGalleryV_SetType']=='LightBox Video Gallery') {
          if(data[0]['TotalSoft_GV_1_14']=='true') {
            data[0]['TotalSoft_GV_1_14']=true;
          }
          else {
            data[0]['TotalSoft_GV_1_14']=false;
          }

          jQuery('#TotalSoft_GV_LG_01').val(data[0]['TotalSoft_GV_1_01']);
          jQuery('#TotalSoft_GV_LG_02').val(data[0]['TotalSoft_GV_1_02']);
          jQuery('#TotalSoft_GV_LG_03').val(data[0]['TotalSoft_GV_1_03']);
          jQuery('#TotalSoft_GV_LG_04').val(data[0]['TotalSoft_GV_1_04']);
          jQuery('#TotalSoft_GV_LG_05').val(data[0]['TotalSoft_GV_1_05']);
          jQuery('#TotalSoft_GV_LG_06').val(data[0]['TotalSoft_GV_1_06']);
          jQuery('#TotalSoft_GV_LG_07').val(data[0]['TotalSoft_GV_1_07']);
          jQuery('#TotalSoft_GV_LG_08').val(data[0]['TotalSoft_GV_1_08']);
          jQuery('#TotalSoft_GV_LG_09').val(data[0]['TotalSoft_GV_1_09']);
          jQuery('#TotalSoft_GV_LG_10').val(data[0]['TotalSoft_GV_1_10']);
          jQuery('#TotalSoft_GV_LG_11').val(data[0]['TotalSoft_GV_1_11']);
          jQuery('#TotalSoft_GV_LG_12').val(data[0]['TotalSoft_GV_1_12']);
          jQuery('#TotalSoft_GV_LG_13').val(data[0]['TotalSoft_GV_1_13']);
          jQuery('#TotalSoft_GV_LG_14').attr('checked', data[0]['TotalSoft_GV_1_14']);
          jQuery('#TotalSoft_GV_LG_15').val(data[0]['TotalSoft_GV_1_15']);
          jQuery('#TotalSoft_GV_LG_16').val(data[0]['TotalSoft_GV_1_16']);
          jQuery('#TotalSoft_GV_LG_17').val(data[0]['TotalSoft_GV_1_17']);
          jQuery('#TotalSoft_GV_LG_18').val(data[0]['TotalSoft_GV_1_18']);
          jQuery('#TotalSoft_GV_LG_19').val(data[0]['TotalSoft_GV_1_19']);
          jQuery('#TotalSoft_GV_LG_20').val(data[0]['TotalSoft_GV_1_20']);
          jQuery('#TotalSoft_GV_LG_21').val(data[0]['TotalSoft_GV_1_21']);
          jQuery('#TotalSoft_GV_LG_22').val(data[0]['TotalSoft_GV_1_22']);
          jQuery('#TotalSoft_GV_LG_23').val(data[0]['TotalSoft_GV_1_23']);
          jQuery('#TotalSoft_GV_LG_24').val(data[0]['TotalSoft_GV_1_24']);
          jQuery('#TotalSoft_GV_LG_25').val(data[0]['TotalSoft_GV_1_25']);
          jQuery('#TotalSoft_GV_LG_26').val(data[0]['TotalSoft_GV_1_26']);
          jQuery('#TotalSoft_GV_LG_27').val(data[0]['TotalSoft_GV_1_27']);
          jQuery('#TotalSoft_GV_LG_28').val(data[0]['TotalSoft_GV_1_28']);
          jQuery('#TotalSoft_GV_LG_29').val(data[0]['TotalSoft_GV_1_29']);
          jQuery('#TotalSoft_GV_LG_30').val(data[0]['TotalSoft_GV_1_30']);
          jQuery('#TotalSoft_GV_LG_31').val(data[0]['TotalSoft_GV_1_31']);
          jQuery('#TotalSoft_GV_LG_32').val(data[0]['TotalSoft_GV_1_32']);
          jQuery('#TotalSoft_GV_LG_33').val(data[0]['TotalSoft_GV_1_33']);
          jQuery('#TotalSoft_GV_LG_34').val(data[0]['TotalSoft_GV_1_34']);
          jQuery('#TotalSoft_GV_LG_35').val(data[0]['TotalSoft_GV_1_35']);
          jQuery('#TotalSoft_GV_LG_36').val(data[0]['TotalSoft_GV_1_36']);
          jQuery('#TotalSoft_GV_LG_37').val(data[0]['TotalSoft_GV_1_37']);
          jQuery('#TotalSoft_GV_LG_38').val(data[0]['TotalSoft_GV_1_38']);
          jQuery('#TotalSoft_GV_LG_39').val(data[0]['TotalSoft_GV_1_39']);
        }
        else if(data[0]['TotalSoftGalleryV_SetType']=='Thumbnails Video') {
          if(data[0]['TotalSoft_GV_1_20']=='true') {
            data[0]['TotalSoft_GV_1_20']=true;
          }
          else {
            data[0]['TotalSoft_GV_1_20']=false;
          }
          if(data[0]['TotalSoft_GV_1_24']=='true') {
            data[0]['TotalSoft_GV_1_24']=true;
          }
          else {
            data[0]['TotalSoft_GV_1_24']=false;
          }

          jQuery('#TotalSoft_GV_TV_01').val(data[0]['TotalSoft_GV_1_01']);
          jQuery('#TotalSoft_GV_TV_02').val(data[0]['TotalSoft_GV_1_02']);
          jQuery('#TotalSoft_GV_TV_03').val(data[0]['TotalSoft_GV_1_03']);
          jQuery('#TotalSoft_GV_TV_04').val(data[0]['TotalSoft_GV_1_04']);
          jQuery('#TotalSoft_GV_TV_05').val(data[0]['TotalSoft_GV_1_05']);
          jQuery('#TotalSoft_GV_TV_06').val(data[0]['TotalSoft_GV_1_06']);
          jQuery('#TotalSoft_GV_TV_07').val(data[0]['TotalSoft_GV_1_07']);
          jQuery('#TotalSoft_GV_TV_08').val(data[0]['TotalSoft_GV_1_08']);
          jQuery('#TotalSoft_GV_TV_09').val(data[0]['TotalSoft_GV_1_09']);
          jQuery('#TotalSoft_GV_TV_10').val(data[0]['TotalSoft_GV_1_10']);
          jQuery('#TotalSoft_GV_TV_11').val(data[0]['TotalSoft_GV_1_11']);
          jQuery('#TotalSoft_GV_TV_12').val(data[0]['TotalSoft_GV_1_12']);
          jQuery('#TotalSoft_GV_TV_19').val(data[0]['TotalSoft_GV_1_19']);
          jQuery('#TotalSoft_GV_TV_20').attr('checked', data[0]['TotalSoft_GV_1_20']);
          jQuery('#TotalSoft_GV_TV_21').val(data[0]['TotalSoft_GV_1_21']);
          jQuery('#TotalSoft_GV_TV_22').val(data[0]['TotalSoft_GV_1_22']);
          jQuery('#TotalSoft_GV_TV_23').val(data[0]['TotalSoft_GV_1_23']);
          jQuery('#TotalSoft_GV_TV_24').attr('checked', data[0]['TotalSoft_GV_1_24']);
          jQuery('#TotalSoft_GV_TV_25').val(data[0]['TotalSoft_GV_1_25']);
          jQuery('#TotalSoft_GV_TV_26').val(data[0]['TotalSoft_GV_1_26']);
          jQuery('#TotalSoft_GV_TV_27').val(data[0]['TotalSoft_GV_1_27']);
          jQuery('#TotalSoft_GV_TV_28').val(data[0]['TotalSoft_GV_1_28']);
          jQuery('#TotalSoft_GV_TV_29').val(data[0]['TotalSoft_GV_1_29']);
          jQuery('#TotalSoft_GV_TV_30').val(data[0]['TotalSoft_GV_1_30']);
          jQuery('#TotalSoft_GV_TV_31').val(data[0]['TotalSoft_GV_1_31']);
          jQuery('#TotalSoft_GV_TV_32').val(data[0]['TotalSoft_GV_1_32']);
          jQuery('#TotalSoft_GV_TV_33').val(data[0]['TotalSoft_GV_1_33']);
          jQuery('#TotalSoft_GV_TV_34').val(data[0]['TotalSoft_GV_1_34']);
          jQuery('#TotalSoft_GV_TV_35').val(data[0]['TotalSoft_GV_1_35']);
          jQuery('#TotalSoft_GV_TV_36').val(data[0]['TotalSoft_GV_1_36']);
          jQuery('#TotalSoft_GV_TV_37').val(data[0]['TotalSoft_GV_1_37']);
          jQuery('#TotalSoft_GV_TV_38').val(data[0]['TotalSoft_GV_1_38']);
          jQuery('#TotalSoft_GV_TV_39').val(data[0]['TotalSoft_GV_1_39']);
        }
        else if(data[0]['TotalSoftGalleryV_SetType']=='Content Popup') {
          if(data[0]['TotalSoft_GV_1_06']=='true') {
            data[0]['TotalSoft_GV_1_06']=true;
          }
          else {
            data[0]['TotalSoft_GV_1_06']=false;
          }
          if(data[0]['TotalSoft_GV_1_11']=='true') {
            data[0]['TotalSoft_GV_1_11']=true;
          }
          else {
            data[0]['TotalSoft_GV_1_11']=false;
          }
          if(data[0]['TotalSoft_GV_1_16']=='true') {
            data[0]['TotalSoft_GV_1_16']=true;
          }
          else {
            data[0]['TotalSoft_GV_1_16']=false;
          }

          jQuery('#TotalSoft_GV_CP_01').val(data[0]['TotalSoft_GV_1_01']);
          jQuery('#TotalSoft_GV_CP_02').val(data[0]['TotalSoft_GV_1_02']);
          jQuery('#TotalSoft_GV_CP_03').val(data[0]['TotalSoft_GV_1_03']);
          jQuery('#TotalSoft_GV_CP_04').val(data[0]['TotalSoft_GV_1_04']);
          jQuery('#TotalSoft_GV_CP_05').val(data[0]['TotalSoft_GV_1_05']);
          jQuery('#TotalSoft_GV_CP_06').attr('checked', data[0]['TotalSoft_GV_1_06']);
          jQuery('#TotalSoft_GV_CP_07').val(data[0]['TotalSoft_GV_1_07']);
          jQuery('#TotalSoft_GV_CP_08').val(data[0]['TotalSoft_GV_1_08']);
          jQuery('#TotalSoft_GV_CP_09').val(data[0]['TotalSoft_GV_1_09']);
          jQuery('#TotalSoft_GV_CP_10').val(data[0]['TotalSoft_GV_1_10']);
          jQuery('#TotalSoft_GV_CP_11').attr('checked', data[0]['TotalSoft_GV_1_11']);
          jQuery('#TotalSoft_GV_CP_12').val(data[0]['TotalSoft_GV_1_12']);
          jQuery('#TotalSoft_GV_CP_13').val(data[0]['TotalSoft_GV_1_13']);
          jQuery('#TotalSoft_GV_CP_14').val(data[0]['TotalSoft_GV_1_14']);
          jQuery('#TotalSoft_GV_CP_15').val(data[0]['TotalSoft_GV_1_15']);
          jQuery('#TotalSoft_GV_CP_16').attr('checked', data[0]['TotalSoft_GV_1_16']);
          jQuery('#TotalSoft_GV_CP_17').val(data[0]['TotalSoft_GV_1_17']);
          jQuery('#TotalSoft_GV_CP_18').val(data[0]['TotalSoft_GV_1_18']);
          jQuery('#TotalSoft_GV_CP_19').val(data[0]['TotalSoft_GV_1_19']);
          jQuery('#TotalSoft_GV_CP_20').val(data[0]['TotalSoft_GV_1_20']);
          jQuery('#TotalSoft_GV_CP_21').val(data[0]['TotalSoft_GV_1_21']);
          jQuery('#TotalSoft_GV_CP_22').val(data[0]['TotalSoft_GV_1_22']);
          jQuery('#TotalSoft_GV_CP_23').val(data[0]['TotalSoft_GV_1_23']);
          jQuery('#TotalSoft_GV_CP_24').val(data[0]['TotalSoft_GV_1_24']);
          jQuery('#TotalSoft_GV_CP_25').val(data[0]['TotalSoft_GV_1_25']);
          jQuery('#TotalSoft_GV_CP_26').val(data[0]['TotalSoft_GV_1_26']);
          jQuery('#TotalSoft_GV_CP_27').val(data[0]['TotalSoft_GV_1_27']);
          jQuery('#TotalSoft_GV_CP_28').val(data[0]['TotalSoft_GV_1_28']);
          jQuery('#TotalSoft_GV_CP_29').val(data[0]['TotalSoft_GV_1_29']);
          jQuery('#TotalSoft_GV_CP_30').val(data[0]['TotalSoft_GV_1_30']);
          jQuery('#TotalSoft_GV_CP_31').val(data[0]['TotalSoft_GV_1_31']);
          jQuery('#TotalSoft_GV_CP_32').val(data[0]['TotalSoft_GV_1_32']);
          jQuery('#TotalSoft_GV_CP_33').val(data[0]['TotalSoft_GV_1_33']);
          jQuery('#TotalSoft_GV_CP_34').val(data[0]['TotalSoft_GV_1_34']);
          jQuery('#TotalSoft_GV_CP_35').val(data[0]['TotalSoft_GV_1_35']);
          jQuery('#TotalSoft_GV_CP_36').val(data[0]['TotalSoft_GV_1_36']);
          jQuery('#TotalSoft_GV_CP_37').val(data[0]['TotalSoft_GV_1_37']);
          jQuery('#TotalSoft_GV_CP_38').val(data[0]['TotalSoft_GV_1_38']);
          jQuery('#TotalSoft_GV_CP_39').val(data[0]['TotalSoft_GV_1_39']);
        }
        else if(data[0]['TotalSoftGalleryV_SetType']=='Elastic Gallery') {
          if(data[0]['TotalSoft_GV_1_16']=='true') {
            data[0]['TotalSoft_GV_1_16']=true;
          }
          else {
            data[0]['TotalSoft_GV_1_16']=false;
          }
          if(data[0]['TotalSoft_GV_1_37']=='true') {
            data[0]['TotalSoft_GV_1_37']=true;
          }
          else {
            data[0]['TotalSoft_GV_1_37']=false;
          }
          if(data[0]['TotalSoft_GV_1_38']=='true') {
            data[0]['TotalSoft_GV_1_38']=true;
          }
          else {
            data[0]['TotalSoft_GV_1_38']=false;
          }

          jQuery('#TotalSoft_GV_EG_01').val(data[0]['TotalSoft_GV_1_01']);
          jQuery('#TotalSoft_GV_EG_02').val(data[0]['TotalSoft_GV_1_02']);
          jQuery('#TotalSoft_GV_EG_03').val(data[0]['TotalSoft_GV_1_03']);
          jQuery('#TotalSoft_GV_EG_04').val(data[0]['TotalSoft_GV_1_04']);
          jQuery('#TotalSoft_GV_EG_05').val(data[0]['TotalSoft_GV_1_05']);
          jQuery('#TotalSoft_GV_EG_06').val(data[0]['TotalSoft_GV_1_06']);
          jQuery('#TotalSoft_GV_EG_07').val(data[0]['TotalSoft_GV_1_07']);
          jQuery('#TotalSoft_GV_EG_08').val(data[0]['TotalSoft_GV_1_08']);
          jQuery('#TotalSoft_GV_EG_09').val(data[0]['TotalSoft_GV_1_09']);
          jQuery('#TotalSoft_GV_EG_10').val(data[0]['TotalSoft_GV_1_10']);
          jQuery('#TotalSoft_GV_EG_11').val(data[0]['TotalSoft_GV_1_11']);
          jQuery('#TotalSoft_GV_EG_12').val(data[0]['TotalSoft_GV_1_12']);
          jQuery('#TotalSoft_GV_EG_13').val(data[0]['TotalSoft_GV_1_13']);
          jQuery('#TotalSoft_GV_EG_14').val(data[0]['TotalSoft_GV_1_14']);
          jQuery('#TotalSoft_GV_EG_15').val(data[0]['TotalSoft_GV_1_15']);
          jQuery('#TotalSoft_GV_EG_16').attr('checked', data[0]['TotalSoft_GV_1_16']);
          jQuery('#TotalSoft_GV_EG_17').val(data[0]['TotalSoft_GV_1_17']);
          jQuery('#TotalSoft_GV_EG_18').val(data[0]['TotalSoft_GV_1_18']);
          jQuery('#TotalSoft_GV_EG_19').val(data[0]['TotalSoft_GV_1_19']);
          jQuery('#TotalSoft_GV_EG_20').val(data[0]['TotalSoft_GV_1_20']);
          jQuery('#TotalSoft_GV_EG_21').val(data[0]['TotalSoft_GV_1_21']);
          jQuery('#TotalSoft_GV_EG_22').val(data[0]['TotalSoft_GV_1_22']);
          jQuery('#TotalSoft_GV_EG_23').val(data[0]['TotalSoft_GV_1_23']);
          jQuery('#TotalSoft_GV_EG_24').val(data[0]['TotalSoft_GV_1_24']);
          jQuery('#TotalSoft_GV_EG_25').val(data[0]['TotalSoft_GV_1_25']);
          jQuery('#TotalSoft_GV_EG_26').val(data[0]['TotalSoft_GV_1_26']);
          jQuery('#TotalSoft_GV_EG_27').val(data[0]['TotalSoft_GV_1_27']);
          jQuery('#TotalSoft_GV_EG_28').val(data[0]['TotalSoft_GV_1_28']);
          jQuery('#TotalSoft_GV_EG_29').val(data[0]['TotalSoft_GV_1_29']);
          jQuery('#TotalSoft_GV_EG_30').val(data[0]['TotalSoft_GV_1_30']);
          jQuery('#TotalSoft_GV_EG_31').val(data[0]['TotalSoft_GV_1_31']);
          jQuery('#TotalSoft_GV_EG_32').val(data[0]['TotalSoft_GV_1_32']);
          jQuery('#TotalSoft_GV_EG_33').val(data[0]['TotalSoft_GV_1_33']);
          jQuery('#TotalSoft_GV_EG_34').val(data[0]['TotalSoft_GV_1_34']);
          jQuery('#TotalSoft_GV_EG_35').val(data[0]['TotalSoft_GV_1_35']);
          jQuery('#TotalSoft_GV_EG_36').val(data[0]['TotalSoft_GV_1_36']);
          jQuery('#TotalSoft_GV_EG_37').attr('checked', data[0]['TotalSoft_GV_1_37']);
          jQuery('#TotalSoft_GV_EG_38').attr('checked', data[0]['TotalSoft_GV_1_38']);
          jQuery('#TotalSoft_GV_EG_39').val(data[0]['TotalSoft_GV_1_39']);
        }
        else if(data[0]['TotalSoftGalleryV_SetType']=='Fancy Gallery') {
          jQuery('#TotalSoft_GV_FG_01').val(data[0]['TotalSoft_GV_1_01']);
          jQuery('#TotalSoft_GV_FG_02').val(data[0]['TotalSoft_GV_1_02']);
          jQuery('#TotalSoft_GV_FG_03').val(data[0]['TotalSoft_GV_1_03']);
          jQuery('#TotalSoft_GV_FG_04').val(data[0]['TotalSoft_GV_1_04']);
          jQuery('#TotalSoft_GV_FG_05').val(data[0]['TotalSoft_GV_1_05']);
          jQuery('#TotalSoft_GV_FG_06').val(data[0]['TotalSoft_GV_1_06']);
          jQuery('#TotalSoft_GV_FG_07').val(data[0]['TotalSoft_GV_1_07']);
          jQuery('#TotalSoft_GV_FG_08').val(data[0]['TotalSoft_GV_1_08']);
          jQuery('#TotalSoft_GV_FG_09').val(data[0]['TotalSoft_GV_1_09']);
          jQuery('#TotalSoft_GV_FG_10').val(data[0]['TotalSoft_GV_1_10']);
          jQuery('#TotalSoft_GV_FG_11').val(data[0]['TotalSoft_GV_1_11']);
          jQuery('#TotalSoft_GV_FG_12').val(data[0]['TotalSoft_GV_1_12']);
          jQuery('#TotalSoft_GV_FG_13').val(data[0]['TotalSoft_GV_1_13']);
          jQuery('#TotalSoft_GV_FG_14').val(data[0]['TotalSoft_GV_1_14']);
          jQuery('#TotalSoft_GV_FG_15').val(data[0]['TotalSoft_GV_1_15']);
          jQuery('#TotalSoft_GV_FG_16').val(data[0]['TotalSoft_GV_1_16']);
          jQuery('#TotalSoft_GV_FG_17').val(data[0]['TotalSoft_GV_1_17']);
          jQuery('#TotalSoft_GV_FG_18').val(data[0]['TotalSoft_GV_1_18']);
          jQuery('#TotalSoft_GV_FG_19').val(data[0]['TotalSoft_GV_1_19']);
          jQuery('#TotalSoft_GV_FG_20').val(data[0]['TotalSoft_GV_1_20']);
          jQuery('#TotalSoft_GV_FG_21').val(data[0]['TotalSoft_GV_1_21']);
          jQuery('#TotalSoft_GV_FG_22').val(data[0]['TotalSoft_GV_1_22']);
          jQuery('#TotalSoft_GV_FG_23').val(data[0]['TotalSoft_GV_1_23']);
          jQuery('#TotalSoft_GV_FG_24').val(data[0]['TotalSoft_GV_1_24']);
          jQuery('#TotalSoft_GV_FG_25').val(data[0]['TotalSoft_GV_1_25']);
          jQuery('#TotalSoft_GV_FG_26').val(data[0]['TotalSoft_GV_1_26']);
          jQuery('#TotalSoft_GV_FG_27').val(data[0]['TotalSoft_GV_1_27']);
          jQuery('#TotalSoft_GV_FG_28').val(data[0]['TotalSoft_GV_1_28']);
          jQuery('#TotalSoft_GV_FG_29').val(data[0]['TotalSoft_GV_1_29']);
          jQuery('#TotalSoft_GV_FG_30').val(data[0]['TotalSoft_GV_1_30']);
          jQuery('#TotalSoft_GV_FG_31').val(data[0]['TotalSoft_GV_1_31']);
          jQuery('#TotalSoft_GV_FG_32').val(data[0]['TotalSoft_GV_1_32']);
          jQuery('#TotalSoft_GV_FG_33').val(data[0]['TotalSoft_GV_1_33']);
          jQuery('#TotalSoft_GV_FG_34').val(data[0]['TotalSoft_GV_1_34']);
          jQuery('#TotalSoft_GV_FG_35').val(data[0]['TotalSoft_GV_1_35']);
          jQuery('#TotalSoft_GV_FG_36').val(data[0]['TotalSoft_GV_1_36']);
          jQuery('#TotalSoft_GV_FG_37').val(data[0]['TotalSoft_GV_1_37']);
          jQuery('#TotalSoft_GV_FG_38').val(data[0]['TotalSoft_GV_1_38']);
          jQuery('#TotalSoft_GV_FG_39').val(data[0]['TotalSoft_GV_1_39']);
        }
        else if(data[0]['TotalSoftGalleryV_SetType']=='Parallax Engine') {
          if(data[0]['TotalSoft_GV_1_15']=='true') {
            data[0]['TotalSoft_GV_1_15']=true;
          }
          else {
            data[0]['TotalSoft_GV_1_15']=false;
          }
          if(data[0]['TotalSoft_GV_1_20']=='true') {
            data[0]['TotalSoft_GV_1_20']=true;
          }
          else {
            data[0]['TotalSoft_GV_1_20']=false;
          }
          if(data[0]['TotalSoft_GV_1_27']=='true') {
            data[0]['TotalSoft_GV_1_27']=true;
          }
          else {
            data[0]['TotalSoft_GV_1_27']=false;
          }

          jQuery('#TotalSoft_GV_PE_01').val(data[0]['TotalSoft_GV_1_01']);
          jQuery('#TotalSoft_GV_PE_02').val(data[0]['TotalSoft_GV_1_02']);
          jQuery('#TotalSoft_GV_PE_03').val(data[0]['TotalSoft_GV_1_03']);
          jQuery('#TotalSoft_GV_PE_04').val(data[0]['TotalSoft_GV_1_04']);
          jQuery('#TotalSoft_GV_PE_05').val(data[0]['TotalSoft_GV_1_05']);
          jQuery('#TotalSoft_GV_PE_06').val(data[0]['TotalSoft_GV_1_06']);
          jQuery('#TotalSoft_GV_PE_07').val(data[0]['TotalSoft_GV_1_07']);
          jQuery('#TotalSoft_GV_PE_08').val(data[0]['TotalSoft_GV_1_08']);
          jQuery('#TotalSoft_GV_PE_09').val(data[0]['TotalSoft_GV_1_09']);
          jQuery('#TotalSoft_GV_PE_10').val(data[0]['TotalSoft_GV_1_10']);
          jQuery('#TotalSoft_GV_PE_11').val(data[0]['TotalSoft_GV_1_11']);
          jQuery('#TotalSoft_GV_PE_12').val(data[0]['TotalSoft_GV_1_12']);
          jQuery('#TotalSoft_GV_PE_13').val(data[0]['TotalSoft_GV_1_13']);
          jQuery('#TotalSoft_GV_PE_14').val(data[0]['TotalSoft_GV_1_14']);
          jQuery('#TotalSoft_GV_PE_15').attr('checked', data[0]['TotalSoft_GV_1_15']);
          jQuery('#TotalSoft_GV_PE_16').val(data[0]['TotalSoft_GV_1_16']);
          jQuery('#TotalSoft_GV_PE_17').val(data[0]['TotalSoft_GV_1_17']);
          jQuery('#TotalSoft_GV_PE_18').val(data[0]['TotalSoft_GV_1_18']);
          jQuery('#TotalSoft_GV_PE_19').val(data[0]['TotalSoft_GV_1_19']);
          jQuery('#TotalSoft_GV_PE_20').attr('checked', data[0]['TotalSoft_GV_1_20']);
          jQuery('#TotalSoft_GV_PE_21').val(data[0]['TotalSoft_GV_1_21']);
          jQuery('#TotalSoft_GV_PE_22').val(data[0]['TotalSoft_GV_1_22']);
          jQuery('#TotalSoft_GV_PE_23').val(data[0]['TotalSoft_GV_1_23']);
          jQuery('#TotalSoft_GV_PE_24').val(data[0]['TotalSoft_GV_1_24']);
          jQuery('#TotalSoft_GV_PE_25').val(data[0]['TotalSoft_GV_1_25']);
          jQuery('#TotalSoft_GV_PE_26').val(data[0]['TotalSoft_GV_1_26']);
          jQuery('#TotalSoft_GV_PE_27').attr('checked', data[0]['TotalSoft_GV_1_27']);
          jQuery('#TotalSoft_GV_PE_28').val(data[0]['TotalSoft_GV_1_28']);
          jQuery('#TotalSoft_GV_PE_29').val(data[0]['TotalSoft_GV_1_29']);
          jQuery('#TotalSoft_GV_PE_30').val(data[0]['TotalSoft_GV_1_30']);
          jQuery('#TotalSoft_GV_PE_31').val(data[0]['TotalSoft_GV_1_31']);
          jQuery('#TotalSoft_GV_PE_32').val(data[0]['TotalSoft_GV_1_32']);
          jQuery('#TotalSoft_GV_PE_33').val(data[0]['TotalSoft_GV_1_33']);
          jQuery('#TotalSoft_GV_PE_34').val(data[0]['TotalSoft_GV_1_34']);
          jQuery('#TotalSoft_GV_PE_35').val(data[0]['TotalSoft_GV_1_35']);
          jQuery('#TotalSoft_GV_PE_36').val(data[0]['TotalSoft_GV_1_36']);
          jQuery('#TotalSoft_GV_PE_37').val(data[0]['TotalSoft_GV_1_37']);
          jQuery('#TotalSoft_GV_PE_38').val(data[0]['TotalSoft_GV_1_38']);
          jQuery('#TotalSoft_GV_PE_39').val(data[0]['TotalSoft_GV_1_39']);
        }
        else if(data[0]['TotalSoftGalleryV_SetType']=='Classic Gallery') {
          if(data[0]['TotalSoft_GV_1_19']=='true') {
            data[0]['TotalSoft_GV_1_19']=true;
          }
          else {
            data[0]['TotalSoft_GV_1_19']=false;
          }
          if(data[0]['TotalSoft_GV_1_24']=='true') {
            data[0]['TotalSoft_GV_1_24']=true;
          }
          else {
            data[0]['TotalSoft_GV_1_24']=false;
          }

          jQuery('#TotalSoft_GV_CG_01').val(data[0]['TotalSoft_GV_1_01']);
          jQuery('#TotalSoft_GV_CG_02').val(data[0]['TotalSoft_GV_1_02']);
          jQuery('#TotalSoft_GV_CG_03').val(data[0]['TotalSoft_GV_1_03']);
          jQuery('#TotalSoft_GV_CG_04').val(data[0]['TotalSoft_GV_1_04']);
          jQuery('#TotalSoft_GV_CG_05').val(data[0]['TotalSoft_GV_1_05']);
          jQuery('#TotalSoft_GV_CG_06').val(data[0]['TotalSoft_GV_1_06']);
          jQuery('#TotalSoft_GV_CG_07').val(data[0]['TotalSoft_GV_1_07']);
          jQuery('#TotalSoft_GV_CG_08').val(data[0]['TotalSoft_GV_1_08']);
          jQuery('#TotalSoft_GV_CG_09').val(data[0]['TotalSoft_GV_1_09']);
          jQuery('#TotalSoft_GV_CG_10').val(data[0]['TotalSoft_GV_1_10']);
          jQuery('#TotalSoft_GV_CG_11').val(data[0]['TotalSoft_GV_1_11']);
          jQuery('#TotalSoft_GV_CG_12').val(data[0]['TotalSoft_GV_1_12']);
          jQuery('#TotalSoft_GV_CG_13').val(data[0]['TotalSoft_GV_1_13']);
          jQuery('#TotalSoft_GV_CG_14').val(data[0]['TotalSoft_GV_1_14']);
          jQuery('#TotalSoft_GV_CG_15').val(data[0]['TotalSoft_GV_1_15']);
          jQuery('#TotalSoft_GV_CG_16').val(data[0]['TotalSoft_GV_1_16']);
          jQuery('#TotalSoft_GV_CG_17').val(data[0]['TotalSoft_GV_1_17']);
          jQuery('#TotalSoft_GV_CG_18').val(data[0]['TotalSoft_GV_1_18']);
          jQuery('#TotalSoft_GV_CG_19').attr('checked', data[0]['TotalSoft_GV_1_19']);
          jQuery('#TotalSoft_GV_CG_20').val(data[0]['TotalSoft_GV_1_20']);
          jQuery('#TotalSoft_GV_CG_21').val(data[0]['TotalSoft_GV_1_21']);
          jQuery('#TotalSoft_GV_CG_22').val(data[0]['TotalSoft_GV_1_22']);
          jQuery('#TotalSoft_GV_CG_23').val(data[0]['TotalSoft_GV_1_23']);
          jQuery('#TotalSoft_GV_CG_24').attr('checked', data[0]['TotalSoft_GV_1_24']);
          jQuery('#TotalSoft_GV_CG_25').val(data[0]['TotalSoft_GV_1_25']);
          jQuery('#TotalSoft_GV_CG_26').val(data[0]['TotalSoft_GV_1_26']);
          jQuery('#TotalSoft_GV_CG_27').val(data[0]['TotalSoft_GV_1_27']);
          jQuery('#TotalSoft_GV_CG_28').val(data[0]['TotalSoft_GV_1_28']);
          jQuery('#TotalSoft_GV_CG_29').val(data[0]['TotalSoft_GV_1_29']);
          jQuery('#TotalSoft_GV_CG_30').val(data[0]['TotalSoft_GV_1_30']);
          jQuery('#TotalSoft_GV_CG_31').val(data[0]['TotalSoft_GV_1_31']);
          jQuery('#TotalSoft_GV_CG_32').val(data[0]['TotalSoft_GV_1_32']);
          jQuery('#TotalSoft_GV_CG_33').val(data[0]['TotalSoft_GV_1_33']);
          jQuery('#TotalSoft_GV_CG_34').val(data[0]['TotalSoft_GV_1_34']);
          jQuery('#TotalSoft_GV_CG_35').val(data[0]['TotalSoft_GV_1_35']);
          jQuery('#TotalSoft_GV_CG_36').val(data[0]['TotalSoft_GV_1_36']);
          jQuery('#TotalSoft_GV_CG_37').val(data[0]['TotalSoft_GV_1_37']);
          jQuery('#TotalSoft_GV_CG_38').val(data[0]['TotalSoft_GV_1_38']);
          jQuery('#TotalSoft_GV_CG_39').val(data[0]['TotalSoft_GV_1_39']);
        }
        else if(data[0]['TotalSoftGalleryV_SetType']=='Space Gallery') {
          jQuery('#TotalSoft_GV_SG_01').val(data[0]['TotalSoft_GV_1_01']);
          jQuery('#TotalSoft_GV_SG_02').val(data[0]['TotalSoft_GV_1_02']);
          jQuery('#TotalSoft_GV_SG_03').val(data[0]['TotalSoft_GV_1_03']);
          jQuery('#TotalSoft_GV_SG_04').val(data[0]['TotalSoft_GV_1_04']);
          jQuery('#TotalSoft_GV_SG_05').val(data[0]['TotalSoft_GV_1_05']);
          jQuery('#TotalSoft_GV_SG_06').val(data[0]['TotalSoft_GV_1_06']);
          jQuery('#TotalSoft_GV_SG_07').val(data[0]['TotalSoft_GV_1_07']);
          jQuery('#TotalSoft_GV_SG_08').val(data[0]['TotalSoft_GV_1_08']);
          jQuery('#TotalSoft_GV_SG_09').val(data[0]['TotalSoft_GV_1_09']);
          jQuery('#TotalSoft_GV_SG_10').val(data[0]['TotalSoft_GV_1_10']);
          jQuery('#TotalSoft_GV_SG_12').val(data[0]['TotalSoft_GV_1_12']);
          jQuery('#TotalSoft_GV_SG_14').val(data[0]['TotalSoft_GV_1_14']);
          jQuery('#TotalSoft_GV_SG_15').val(data[0]['TotalSoft_GV_1_15']);
          jQuery('#TotalSoft_GV_SG_16').val(data[0]['TotalSoft_GV_1_16']);
          jQuery('#TotalSoft_GV_SG_17').val(data[0]['TotalSoft_GV_1_17']);
          jQuery('#TotalSoft_GV_SG_18').val(data[0]['TotalSoft_GV_1_18']);
          jQuery('#TotalSoft_GV_SG_19').val(data[0]['TotalSoft_GV_1_19']);
          jQuery('#TotalSoft_GV_SG_20').val(data[0]['TotalSoft_GV_1_20']);
          jQuery('#TotalSoft_GV_SG_21').val(data[0]['TotalSoft_GV_1_21']);
          jQuery('#TotalSoft_GV_SG_22').val(data[0]['TotalSoft_GV_1_22']);
          jQuery('#TotalSoft_GV_SG_23').val(data[0]['TotalSoft_GV_1_23']);
          jQuery('#TotalSoft_GV_SG_24').val(data[0]['TotalSoft_GV_1_24']);
          jQuery('#TotalSoft_GV_SG_25').val(data[0]['TotalSoft_GV_1_25']);
          jQuery('#TotalSoft_GV_SG_26').val(data[0]['TotalSoft_GV_1_26']);
          jQuery('#TotalSoft_GV_SG_27').val(data[0]['TotalSoft_GV_1_27']);
          jQuery('#TotalSoft_GV_SG_28').val(data[0]['TotalSoft_GV_1_28']);
          jQuery('#TotalSoft_GV_SG_29').val(data[0]['TotalSoft_GV_1_29']);
          jQuery('#TotalSoft_GV_SG_30').val(data[0]['TotalSoft_GV_1_30']);
          jQuery('#TotalSoft_GV_SG_31').val(data[0]['TotalSoft_GV_1_31']);
          jQuery('#TotalSoft_GV_SG_32').val(data[0]['TotalSoft_GV_1_32']);
          jQuery('#TotalSoft_GV_SG_33').val(data[0]['TotalSoft_GV_1_33']);
        }
        else if(data[0]['TotalSoftGalleryV_SetType']=='Effective Gallery') {
          if(data[0]['TotalSoft_GV_1_08']=='true') {
            data[0]['TotalSoft_GV_1_08']=true;
          }
          else {
            data[0]['TotalSoft_GV_1_08']=false;
          }
          if(data[0]['TotalSoft_GV_1_11']=='true') {
            data[0]['TotalSoft_GV_1_11']=true;
          }
          else {
            data[0]['TotalSoft_GV_1_11']=false;
          }
          if(data[0]['TotalSoft_GV_1_25']=='true') {
            data[0]['TotalSoft_GV_1_25']=true;
          }
          else {
            data[0]['TotalSoft_GV_1_25']=false;
          }

          jQuery('#TotalSoft_GV_XG_01').val(data[0]['TotalSoft_GV_1_01']);
          jQuery('#TotalSoft_GV_XG_02').val(data[0]['TotalSoft_GV_1_02']);
          jQuery('#TotalSoft_GV_XG_03').val(data[0]['TotalSoft_GV_1_03']);
          jQuery('#TotalSoft_GV_XG_04').val(data[0]['TotalSoft_GV_1_04']);
          jQuery('#TotalSoft_GV_XG_05').val(data[0]['TotalSoft_GV_1_05']);
          jQuery('#TotalSoft_GV_XG_06').val(data[0]['TotalSoft_GV_1_06']);
          jQuery('#TotalSoft_GV_XG_07').val(data[0]['TotalSoft_GV_1_07']);
          jQuery('#TotalSoft_GV_XG_08').attr('checked', data[0]['TotalSoft_GV_1_08']);
          jQuery('#TotalSoft_GV_XG_09').val(data[0]['TotalSoft_GV_1_09']);
          jQuery('#TotalSoft_GV_XG_10').val(data[0]['TotalSoft_GV_1_10']);
          jQuery('#TotalSoft_GV_XG_11').attr('checked', data[0]['TotalSoft_GV_1_11']);
          jQuery('#TotalSoft_GV_XG_12').val(data[0]['TotalSoft_GV_1_12']);
          jQuery('#TotalSoft_GV_XG_13').val(data[0]['TotalSoft_GV_1_13']);
          jQuery('#TotalSoft_GV_XG_14').val(data[0]['TotalSoft_GV_1_14']);
          jQuery('#TotalSoft_GV_XG_15').val(data[0]['TotalSoft_GV_1_15']);
          jQuery('#TotalSoft_GV_XG_16').val(data[0]['TotalSoft_GV_1_16']);
          jQuery('#TotalSoft_GV_XG_17').val(data[0]['TotalSoft_GV_1_17']);
          jQuery('#TotalSoft_GV_XG_18').val(data[0]['TotalSoft_GV_1_18']);
          jQuery('#TotalSoft_GV_XG_19').val(data[0]['TotalSoft_GV_1_19']);
          jQuery('#TotalSoft_GV_XG_20').val(data[0]['TotalSoft_GV_1_20']);
          jQuery('#TotalSoft_GV_XG_21').val(data[0]['TotalSoft_GV_1_21']);
          jQuery('#TotalSoft_GV_XG_22').val(data[0]['TotalSoft_GV_1_22']);
          jQuery('#TotalSoft_GV_XG_23').val(data[0]['TotalSoft_GV_1_23']);
          jQuery('#TotalSoft_GV_XG_24').val(data[0]['TotalSoft_GV_1_24']);
          jQuery('#TotalSoft_GV_XG_25').attr('checked', data[0]['TotalSoft_GV_1_25']);
          jQuery('#TotalSoft_GV_XG_26').val(data[0]['TotalSoft_GV_1_26']);
          jQuery('#TotalSoft_GV_XG_27').val(data[0]['TotalSoft_GV_1_27']);
          jQuery('#TotalSoft_GV_XG_28').val(data[0]['TotalSoft_GV_1_28']);
          jQuery('#TotalSoft_GV_XG_29').val(data[0]['TotalSoft_GV_1_29']);
          jQuery('#TotalSoft_GV_XG_30').val(data[0]['TotalSoft_GV_1_30']);
          jQuery('#TotalSoft_GV_XG_31').val(data[0]['TotalSoft_GV_1_31']);
          jQuery('#TotalSoft_GV_XG_32').val(data[0]['TotalSoft_GV_1_32']);
          jQuery('#TotalSoft_GV_XG_33').val(data[0]['TotalSoft_GV_1_33']);
          jQuery('#TotalSoft_GV_XG_34').val(data[0]['TotalSoft_GV_1_34']);
          jQuery('#TotalSoft_GV_XG_35').val(data[0]['TotalSoft_GV_1_35']);
          jQuery('#TotalSoft_GV_XG_36').val(data[0]['TotalSoft_GV_1_36']);
          jQuery('#TotalSoft_GV_XG_37').val(data[0]['TotalSoft_GV_1_37']);
          jQuery('#TotalSoft_GV_XG_38').val(data[0]['TotalSoft_GV_1_38']);
          jQuery('#TotalSoft_GV_XG_39').val(data[0]['TotalSoft_GV_1_39']);
        }
        else if(data[0]['TotalSoftGalleryV_SetType']=='Gallery Album') {
          if(data[0]['TotalSoft_GV_1_12']=='true') {
            data[0]['TotalSoft_GV_1_12']=true;
          }
          else {
            data[0]['TotalSoft_GV_1_12']=false;
          }

          jQuery('#TotalSoft_GV_GA_01').val(data[0]['TotalSoft_GV_1_01']);
          jQuery('#TotalSoft_GV_GA_02').val(data[0]['TotalSoft_GV_1_02']);
          jQuery('#TotalSoft_GV_GA_03').val(data[0]['TotalSoft_GV_1_03']);
          jQuery('#TotalSoft_GV_GA_04').val(data[0]['TotalSoft_GV_1_04']);
          jQuery('#TotalSoft_GV_GA_05').val(data[0]['TotalSoft_GV_1_05']);
          jQuery('#TotalSoft_GV_GA_06').val(data[0]['TotalSoft_GV_1_06']);
          jQuery('#TotalSoft_GV_GA_07').val(data[0]['TotalSoft_GV_1_07']);
          jQuery('#TotalSoft_GV_GA_08').val(data[0]['TotalSoft_GV_1_08']);
          jQuery('#TotalSoft_GV_GA_09').val(data[0]['TotalSoft_GV_1_09']);
          jQuery('#TotalSoft_GV_GA_10').val(data[0]['TotalSoft_GV_1_10']);
          jQuery('#TotalSoft_GV_GA_11').val(data[0]['TotalSoft_GV_1_11']);
          jQuery('#TotalSoft_GV_GA_12').attr('checked', data[0]['TotalSoft_GV_1_12']);
          jQuery('#TotalSoft_GV_GA_13').val(data[0]['TotalSoft_GV_1_13']);
          jQuery('#TotalSoft_GV_GA_14').val(data[0]['TotalSoft_GV_1_14']);
          jQuery('#TotalSoft_GV_GA_15').val(data[0]['TotalSoft_GV_1_15']);
          jQuery('#TotalSoft_GV_GA_16').val(data[0]['TotalSoft_GV_1_16']);
          jQuery('#TotalSoft_GV_GA_17').val(data[0]['TotalSoft_GV_1_17']);
          jQuery('#TotalSoft_GV_GA_18').val(data[0]['TotalSoft_GV_1_18']);
          jQuery('#TotalSoft_GV_GA_19').val(data[0]['TotalSoft_GV_1_19']);
          jQuery('#TotalSoft_GV_GA_20').val(data[0]['TotalSoft_GV_1_20']);
          jQuery('#TotalSoft_GV_GA_21').val(data[0]['TotalSoft_GV_1_21']);
          jQuery('#TotalSoft_GV_GA_25').val(data[0]['TotalSoft_GV_1_25']);
          jQuery('#TotalSoft_GV_GA_26').val(data[0]['TotalSoft_GV_1_26']);
          jQuery('#TotalSoft_GV_GA_27').val(data[0]['TotalSoft_GV_1_27']);
          jQuery('#TotalSoft_GV_GA_28').val(data[0]['TotalSoft_GV_1_28']);
          jQuery('#TotalSoft_GV_GA_29').val(data[0]['TotalSoft_GV_1_29']);
          jQuery('#TotalSoft_GV_GA_30').val(data[0]['TotalSoft_GV_1_30']);
          jQuery('#TotalSoft_GV_GA_31').val(data[0]['TotalSoft_GV_1_31']);
          jQuery('#TotalSoft_GV_GA_32').val(data[0]['TotalSoft_GV_1_32']);
          jQuery('#TotalSoft_GV_GA_33').val(data[0]['TotalSoft_GV_1_33']);
          jQuery('#TotalSoft_GV_GA_34').val(data[0]['TotalSoft_GV_1_34']);
          jQuery('#TotalSoft_GV_GA_35').val(data[0]['TotalSoft_GV_1_35']);
          jQuery('#TotalSoft_GV_GA_36').val(data[0]['TotalSoft_GV_1_36']);
          jQuery('#TotalSoft_GV_GA_37').val(data[0]['TotalSoft_GV_1_37']);
          jQuery('#TotalSoft_GV_GA_38').val(data[0]['TotalSoft_GV_1_38']);
          jQuery('#TotalSoft_GV_GA_39').val(data[0]['TotalSoft_GV_1_39']);
        }
        TotalSoft_VGallery_Out();
        setTimeout(function() {
          jQuery('.Total_Soft_VGallery_Color').alphaColorPicker();
          jQuery('.wp-picker-holder').addClass('alpha-picker-holder');
        }, 500)
      }, 500)
    }
  });

  jQuery.ajax({
    type: 'POST', url: object.ajaxurl, data: {
      action: 'TotalSoftGallery_VideoOpt_Edit1', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
      foobar: Gallery_Video_OptID, // translates into $_POST['foobar'] in PHP
    }, beforeSend: function() {
    }, success: function(response) {
      var data=JSON.parse(response);
      jQuery('.Total_Soft_Gallery_Video_AMD2').animate({'opacity': 0}, 500);
      jQuery('.Total_Soft_AMMTable').animate({'opacity': 0}, 500);
      jQuery('.Total_Soft_AMOTable').animate({'opacity': 0}, 500);
      jQuery('.Total_Soft_Gallery_Video_Save_Option').animate({'opacity': 0}, 500);
      jQuery('.Total_Soft_Gallery_Video_Update_Option').animate({'opacity': 1}, 500);
      jQuery('#TotalSoftGalleryV_SetType').animate({'opacity': 0}, 500);

      if(data[0]['TotalSoftGalleryV_SetType']=='Grid Video Gallery') {
        if(data[0]['TotalSoft_GV_2_22']=='true') {
          data[0]['TotalSoft_GV_2_22']=true;
        }
        else {
          data[0]['TotalSoft_GV_2_22']=false;
        }
        if(data[0]['TotalSoft_GV_2_23']=='true') {
          data[0]['TotalSoft_GV_2_23']=true;
        }
        else {
          data[0]['TotalSoft_GV_2_23']=false;
        }

        jQuery('#TotalSoft_GV_GG_40').val(data[0]['TotalSoft_GV_2_01']);
        jQuery('#TotalSoft_GV_GG_41').val(data[0]['TotalSoft_GV_2_02']);
        jQuery('#TotalSoft_GV_GG_42').val(data[0]['TotalSoft_GV_2_03']);
        jQuery('#TotalSoft_GV_GG_43').val(data[0]['TotalSoft_GV_2_04']);
        jQuery('#TotalSoft_GV_GG_44').val(data[0]['TotalSoft_GV_2_05']);
        jQuery('#TotalSoft_GV_GG_45').val(data[0]['TotalSoft_GV_2_06']);
        jQuery('#TotalSoft_GV_GG_46').val(data[0]['TotalSoft_GV_2_07']);
        jQuery('#TotalSoft_GV_GG_47').val(data[0]['TotalSoft_GV_2_08']);
        jQuery('#TotalSoft_GV_GG_48').val(data[0]['TotalSoft_GV_2_09']);
        jQuery('#TotalSoft_GV_GG_49').val(data[0]['TotalSoft_GV_2_10']);
        jQuery('#TotalSoft_GV_GG_50').val(data[0]['TotalSoft_GV_2_11']);
        jQuery('#TotalSoft_GV_GG_51').val(data[0]['TotalSoft_GV_2_12']);
        jQuery('#TotalSoft_GV_GG_52').val(data[0]['TotalSoft_GV_2_13']);
        jQuery('#TotalSoft_GV_GG_53').val(data[0]['TotalSoft_GV_2_14']);
        jQuery('#TotalSoft_GV_GG_54').val(data[0]['TotalSoft_GV_2_15']);
        jQuery('#TotalSoft_GV_GG_55').val(data[0]['TotalSoft_GV_2_16']);
        jQuery('#TotalSoft_GV_GG_56').val(data[0]['TotalSoft_GV_2_17']);
        jQuery('#TotalSoft_GV_GG_57').val(data[0]['TotalSoft_GV_2_18']);
        jQuery('#TotalSoft_GV_GG_58').val(data[0]['TotalSoft_GV_2_19']);
        jQuery('#TotalSoft_GV_GG_59').val(data[0]['TotalSoft_GV_2_20']);
        jQuery('#TotalSoft_GV_GG_60').val(data[0]['TotalSoft_GV_2_21']);
        jQuery('#TotalSoft_GV_GG_61').attr('checked', data[0]['TotalSoft_GV_2_22']);
        jQuery('#TotalSoft_GV_GG_62').attr('checked', data[0]['TotalSoft_GV_2_23']);
        jQuery('#TotalSoft_GV_GG_63').val(data[0]['TotalSoft_GV_2_24']);
        jQuery('#TotalSoft_GV_GG_64').val(data[0]['TotalSoft_GV_2_25']);
        jQuery('#TotalSoft_GV_GG_65').val(data[0]['TotalSoft_GV_2_26']);
        jQuery('#TotalSoft_GV_GG_66').val(data[0]['TotalSoft_GV_2_27']);
        jQuery('#TotalSoft_GV_GG_67').val(data[0]['TotalSoft_GV_2_28']);
        setTimeout(function() {
          jQuery('#Total_Soft_AMSetDiv_1').css('display', 'block');
        }, 500)
        setTimeout(function() {
          jQuery('#Total_Soft_AMSetDiv_1').animate({'opacity': 1}, 500);
        }, 600)
        TS_GV_Loading_Changed('GG', 'TotalSoft_GV_GG_66');
        TS_GV_TM_But('1', 'GO');
      }
      else if(data[0]['TotalSoftGalleryV_SetType']=='LightBox Video Gallery') {
        jQuery('#TotalSoft_GV_LG_40').val(data[0]['TotalSoft_GV_2_01']);
        jQuery('#TotalSoft_GV_LG_41').val(data[0]['TotalSoft_GV_2_02']);
        jQuery('#TotalSoft_GV_LG_42').val(data[0]['TotalSoft_GV_2_03']);
        jQuery('#TotalSoft_GV_LG_43').val(data[0]['TotalSoft_GV_2_04']);
        jQuery('#TotalSoft_GV_LG_44').val(data[0]['TotalSoft_GV_2_05']);
        jQuery('#TotalSoft_GV_LG_45').val(data[0]['TotalSoft_GV_2_06']);
        jQuery('#TotalSoft_GV_LG_46').val(data[0]['TotalSoft_GV_2_07']);
        jQuery('#TotalSoft_GV_LG_47').val(data[0]['TotalSoft_GV_2_08']);
        jQuery('#TotalSoft_GV_LG_48').val(data[0]['TotalSoft_GV_2_09']);
        jQuery('#TotalSoft_GV_LG_49').val(data[0]['TotalSoft_GV_2_10']);
        jQuery('#TotalSoft_GV_LG_50').val(data[0]['TotalSoft_GV_2_11']);
        jQuery('#TotalSoft_GV_LG_51').val(data[0]['TotalSoft_GV_2_12']);
        jQuery('#TotalSoft_GV_LG_52').val(data[0]['TotalSoft_GV_2_13']);
        jQuery('#TotalSoft_GV_LG_53').val(data[0]['TotalSoft_GV_2_14']);
        jQuery('#TotalSoft_GV_LG_54').val(data[0]['TotalSoft_GV_2_15']);
        jQuery('#TotalSoft_GV_LG_55').val(data[0]['TotalSoft_GV_2_16']);
        jQuery('#TotalSoft_GV_LG_56').val(data[0]['TotalSoft_GV_2_17']);
        jQuery('#TotalSoft_GV_LG_57').val(data[0]['TotalSoft_GV_2_18']);
        jQuery('#TotalSoft_GV_LG_58').val(data[0]['TotalSoft_GV_2_19']);
        jQuery('#TotalSoft_GV_LG_59').val(data[0]['TotalSoft_GV_2_20']);
        jQuery('#TotalSoft_GV_LG_60').val(data[0]['TotalSoft_GV_2_21']);
        jQuery('#TotalSoft_GV_LG_61').val(data[0]['TotalSoft_GV_2_22']);
        jQuery('#TotalSoft_GV_LG_62').val(data[0]['TotalSoft_GV_2_23']);
        jQuery('#TotalSoft_GV_LG_63').val(data[0]['TotalSoft_GV_2_24']);
        jQuery('#TotalSoft_GV_LG_64').val(data[0]['TotalSoft_GV_2_25']);
        jQuery('#TotalSoft_GV_LG_65').val(data[0]['TotalSoft_GV_2_26']);
        jQuery('#TotalSoft_GV_LG_66').val(data[0]['TotalSoft_GV_2_27']);
        jQuery('#TotalSoft_GV_LG_67').val(data[0]['TotalSoft_GV_2_28']);
        jQuery('#TotalSoft_GV_LG_68').val(data[0]['TotalSoft_GV_2_29']);
        jQuery('#TotalSoft_GV_LG_69').val(data[0]['TotalSoft_GV_2_30']);
        jQuery('#TotalSoft_GV_LG_70').val(data[0]['TotalSoft_GV_2_31']);
        jQuery('#TotalSoft_GV_LG_71').val(data[0]['TotalSoft_GV_2_32']);
        jQuery('#TotalSoft_GV_LG_72').val(data[0]['TotalSoft_GV_2_33']);
        jQuery('#TotalSoft_GV_LG_73').val(data[0]['TotalSoft_GV_2_34']);
        jQuery('#TotalSoft_GV_LG_74').val(data[0]['TotalSoft_GV_2_35']);
        jQuery('#TotalSoft_GV_LG_75').val(data[0]['TotalSoft_GV_2_36']);
        jQuery('#TotalSoft_GV_LG_76').val(data[0]['TotalSoft_GV_2_37']);
        setTimeout(function() {
          jQuery('#Total_Soft_AMSetDiv_2').css('display', 'block');
        }, 500)
        setTimeout(function() {
          jQuery('#Total_Soft_AMSetDiv_2').animate({'opacity': 1}, 500);
        }, 600)
        TS_GV_Loading_Changed('LG', 'TotalSoft_GV_LG_75');
        TS_GV_TM_But('2', 'GO');
      }
      else if(data[0]['TotalSoftGalleryV_SetType']=='Thumbnails Video') {
        jQuery('#TotalSoft_GV_TV_40').val(data[0]['TotalSoft_GV_2_01']);
        jQuery('#TotalSoft_GV_TV_41').val(data[0]['TotalSoft_GV_2_02']);
        jQuery('#TotalSoft_GV_TV_42').val(data[0]['TotalSoft_GV_2_03']);
        jQuery('#TotalSoft_GV_TV_43').val(data[0]['TotalSoft_GV_2_04']);
        jQuery('#TotalSoft_GV_TV_44').val(data[0]['TotalSoft_GV_2_05']);
        jQuery('#TotalSoft_GV_TV_45').val(data[0]['TotalSoft_GV_2_06']);
        jQuery('#TotalSoft_GV_TV_46').val(data[0]['TotalSoft_GV_2_07']);
        jQuery('#TotalSoft_GV_TV_47').val(data[0]['TotalSoft_GV_2_08']);
        jQuery('#TotalSoft_GV_TV_48').val(data[0]['TotalSoft_GV_2_09']);
        jQuery('#TotalSoft_GV_TV_49').val(data[0]['TotalSoft_GV_2_10']);
        jQuery('#TotalSoft_GV_TV_50').val(data[0]['TotalSoft_GV_2_11']);
        jQuery('#TotalSoft_GV_TV_51').val(data[0]['TotalSoft_GV_2_12']);
        jQuery('#TotalSoft_GV_TV_52').val(data[0]['TotalSoft_GV_2_13']);
        jQuery('#TotalSoft_GV_TV_53').val(data[0]['TotalSoft_GV_2_14']);
        jQuery('#TotalSoft_GV_TV_54').val(data[0]['TotalSoft_GV_2_15']);
        jQuery('#TotalSoft_GV_TV_55').val(data[0]['TotalSoft_GV_2_16']);
        jQuery('#TotalSoft_GV_TV_56').val(data[0]['TotalSoft_GV_2_17']);
        setTimeout(function() {
          jQuery('#Total_Soft_AMSetDiv_3').css('display', 'block');
        }, 500)
        setTimeout(function() {
          jQuery('#Total_Soft_AMSetDiv_3').animate({'opacity': 1}, 500);
        }, 600)
        TS_GV_Loading_Changed('TV', 'TotalSoft_GV_TV_55');
        TS_GV_TM_But('3', 'GO');
        if(jQuery('#TotalSoft_GV_TV_01').val()=='normal') {
          var options=jQuery('#TotalSoft_GV_TV_02 option');
          jQuery.map(options, function(option) {
            if(option.value=='boxRandom' || option.value=='boxRain' || option.value=='boxRainReverse' || option.value=='boxRainGrow' || option.value=='boxRainGrowReverse') {
              jQuery(option).hide();
            }
          });
        }
        else {
          var options=jQuery('#TotalSoft_GV_TV_02 option');
          jQuery.map(options, function(option) {
            jQuery(option).show();
          });
        }
      }
      else if(data[0]['TotalSoftGalleryV_SetType']=='Content Popup') {
        if(data[0]['TotalSoft_GV_2_32']=='true') {
          data[0]['TotalSoft_GV_2_32']=true;
        }
        else {
          data[0]['TotalSoft_GV_2_32']=false;
        }

        jQuery('#TotalSoft_GV_CP_40').val(data[0]['TotalSoft_GV_2_01']);
        jQuery('#TotalSoft_GV_CP_41').val(data[0]['TotalSoft_GV_2_02']);
        jQuery('#TotalSoft_GV_CP_42').val(data[0]['TotalSoft_GV_2_03']);
        jQuery('#TotalSoft_GV_CP_43').val(data[0]['TotalSoft_GV_2_04']);
        jQuery('#TotalSoft_GV_CP_44').val(data[0]['TotalSoft_GV_2_05']);
        jQuery('#TotalSoft_GV_CP_45').val(data[0]['TotalSoft_GV_2_06']);
        jQuery('#TotalSoft_GV_CP_46').val(data[0]['TotalSoft_GV_2_07']);
        jQuery('#TotalSoft_GV_CP_47').val(data[0]['TotalSoft_GV_2_08']);
        jQuery('#TotalSoft_GV_CP_48').val(data[0]['TotalSoft_GV_2_09']);
        jQuery('#TotalSoft_GV_CP_49').val(data[0]['TotalSoft_GV_2_10']);
        jQuery('#TotalSoft_GV_CP_50').val(data[0]['TotalSoft_GV_2_11']);
        jQuery('#TotalSoft_GV_CP_51').val(data[0]['TotalSoft_GV_2_12']);
        jQuery('#TotalSoft_GV_CP_52').val(data[0]['TotalSoft_GV_2_13']);
        jQuery('#TotalSoft_GV_CP_53').val(data[0]['TotalSoft_GV_2_14']);
        jQuery('#TotalSoft_GV_CP_54').val(data[0]['TotalSoft_GV_2_15']);
        jQuery('#TotalSoft_GV_CP_55').val(data[0]['TotalSoft_GV_2_16']);
        jQuery('#TotalSoft_GV_CP_56').val(data[0]['TotalSoft_GV_2_17']);
        jQuery('#TotalSoft_GV_CP_57').val(data[0]['TotalSoft_GV_2_18']);
        jQuery('#TotalSoft_GV_CP_58').val(data[0]['TotalSoft_GV_2_19']);
        jQuery('#TotalSoft_GV_CP_59').val(data[0]['TotalSoft_GV_2_20']);
        jQuery('#TotalSoft_GV_CP_60').val(data[0]['TotalSoft_GV_2_21']);
        jQuery('#TotalSoft_GV_CP_61').val(data[0]['TotalSoft_GV_2_22']);
        jQuery('#TotalSoft_GV_CP_62').val(data[0]['TotalSoft_GV_2_23']);
        jQuery('#TotalSoft_GV_CP_63').val(data[0]['TotalSoft_GV_2_24']);
        jQuery('#TotalSoft_GV_CP_64').val(data[0]['TotalSoft_GV_2_25']);
        jQuery('#TotalSoft_GV_CP_65').val(data[0]['TotalSoft_GV_2_26']);
        jQuery('#TotalSoft_GV_CP_66').val(data[0]['TotalSoft_GV_2_27']);
        jQuery('#TotalSoft_GV_CP_67').val(data[0]['TotalSoft_GV_2_28']);
        jQuery('#TotalSoft_GV_CP_68').val(data[0]['TotalSoft_GV_2_29']);
        jQuery('#TotalSoft_GV_CP_69').val(data[0]['TotalSoft_GV_2_30']);
        jQuery('#TotalSoft_GV_CP_70').val(data[0]['TotalSoft_GV_2_31']);
        jQuery('#TotalSoft_GV_CP_71').attr('checked', data[0]['TotalSoft_GV_2_32']);
        jQuery('#TotalSoft_GV_CP_72').val(data[0]['TotalSoft_GV_2_33']);
        jQuery('#TotalSoft_GV_CP_73').val(data[0]['TotalSoft_GV_2_34']);
        jQuery('#TotalSoft_GV_CP_74').val(data[0]['TotalSoft_GV_2_35']);
        jQuery('#TotalSoft_GV_CP_75').val(data[0]['TotalSoft_GV_2_36']);
        setTimeout(function() {
          jQuery('#Total_Soft_AMSetDiv_4').css('display', 'block');
        }, 500)
        setTimeout(function() {
          jQuery('#Total_Soft_AMSetDiv_4').animate({'opacity': 1}, 500);
        }, 600)
        TS_GV_Loading_Changed('CP', 'TotalSoft_GV_CP_74');
        TS_GV_TM_But('4', 'GO');
      }
      else if(data[0]['TotalSoftGalleryV_SetType']=='Elastic Gallery') {
        jQuery('#TotalSoft_GV_EG_40').val(data[0]['TotalSoft_GV_2_01']);
        jQuery('#TotalSoft_GV_EG_41').val(data[0]['TotalSoft_GV_2_02']);
        jQuery('#TotalSoft_GV_EG_42').val(data[0]['TotalSoft_GV_2_03']);
        jQuery('#TotalSoft_GV_EG_43').val(data[0]['TotalSoft_GV_2_04']);
        jQuery('#TotalSoft_GV_EG_44').val(data[0]['TotalSoft_GV_2_05']);
        jQuery('#TotalSoft_GV_EG_45').val(data[0]['TotalSoft_GV_2_06']);
        jQuery('#TotalSoft_GV_EG_46').val(data[0]['TotalSoft_GV_2_07']);
        jQuery('#TotalSoft_GV_EG_47').val(data[0]['TotalSoft_GV_2_08']);
        jQuery('#TotalSoft_GV_EG_48').val(data[0]['TotalSoft_GV_2_09']);
        jQuery('#TotalSoft_GV_EG_49').val(data[0]['TotalSoft_GV_2_10']);
        jQuery('#TotalSoft_GV_EG_50').val(data[0]['TotalSoft_GV_2_11']);
        jQuery('#TotalSoft_GV_EG_51').val(data[0]['TotalSoft_GV_2_12']);
        jQuery('#TotalSoft_GV_EG_52').val(data[0]['TotalSoft_GV_2_13']);
        jQuery('#TotalSoft_GV_EG_53').val(data[0]['TotalSoft_GV_2_14']);
        jQuery('#TotalSoft_GV_EG_54').val(data[0]['TotalSoft_GV_2_15']);
        jQuery('#TotalSoft_GV_EG_55').val(data[0]['TotalSoft_GV_2_16']);
        jQuery('#TotalSoft_GV_EG_56').val(data[0]['TotalSoft_GV_2_17']);
        jQuery('#TotalSoft_GV_EG_57').val(data[0]['TotalSoft_GV_2_18']);
        jQuery('#TotalSoft_GV_EG_58').val(data[0]['TotalSoft_GV_2_19']);
        setTimeout(function() {
          jQuery('#Total_Soft_AMSetDiv_5').css('display', 'block');
        }, 500)
        setTimeout(function() {
          jQuery('#Total_Soft_AMSetDiv_5').animate({'opacity': 1}, 500);
        }, 600)
        TS_GV_Loading_Changed('EG', 'TotalSoft_GV_EG_57');
        TS_GV_TM_But('5', 'GO');
      }
      else if(data[0]['TotalSoftGalleryV_SetType']=='Fancy Gallery') {
        if(data[0]['TotalSoft_GV_2_09']=='true') {
          data[0]['TotalSoft_GV_2_09']=true;
        }
        else {
          data[0]['TotalSoft_GV_2_09']=false;
        }
        if(data[0]['TotalSoft_GV_2_10']=='true') {
          data[0]['TotalSoft_GV_2_10']=true;
        }
        else {
          data[0]['TotalSoft_GV_2_10']=false;
        }
        if(data[0]['TotalSoft_GV_2_11']=='true') {
          data[0]['TotalSoft_GV_2_11']=true;
        }
        else {
          data[0]['TotalSoft_GV_2_11']=false;
        }
        if(data[0]['TotalSoft_GV_2_12']=='true') {
          data[0]['TotalSoft_GV_2_12']=true;
        }
        else {
          data[0]['TotalSoft_GV_2_12']=false;
        }

        jQuery('#TotalSoft_GV_FG_40').val(data[0]['TotalSoft_GV_2_01']);
        jQuery('#TotalSoft_GV_FG_41').val(data[0]['TotalSoft_GV_2_02']);
        jQuery('#TotalSoft_GV_FG_42').val(data[0]['TotalSoft_GV_2_03']);
        jQuery('#TotalSoft_GV_FG_43').val(data[0]['TotalSoft_GV_2_04']);
        jQuery('#TotalSoft_GV_FG_44').val(data[0]['TotalSoft_GV_2_05']);
        jQuery('#TotalSoft_GV_FG_45').val(data[0]['TotalSoft_GV_2_06']);
        jQuery('#TotalSoft_GV_FG_46').val(data[0]['TotalSoft_GV_2_07']);
        jQuery('#TotalSoft_GV_FG_47').val(data[0]['TotalSoft_GV_2_08']);
        jQuery('#TotalSoft_GV_FG_48').attr('checked', data[0]['TotalSoft_GV_2_09']);
        jQuery('#TotalSoft_GV_FG_49').attr('checked', data[0]['TotalSoft_GV_2_10']);
        jQuery('#TotalSoft_GV_FG_50').attr('checked', data[0]['TotalSoft_GV_2_11']);
        jQuery('#TotalSoft_GV_FG_51').attr('checked', data[0]['TotalSoft_GV_2_12']);
        jQuery('#TotalSoft_GV_FG_52').val(data[0]['TotalSoft_GV_2_13']);
        jQuery('#TotalSoft_GV_FG_53').val(data[0]['TotalSoft_GV_2_14']);
        jQuery('#TotalSoft_GV_FG_54').val(data[0]['TotalSoft_GV_2_15']);
        jQuery('#TotalSoft_GV_FG_55').val(data[0]['TotalSoft_GV_2_16']);
        jQuery('#TotalSoft_GV_FG_56').val(data[0]['TotalSoft_GV_2_17']);
        jQuery('#TotalSoft_GV_FG_57').val(data[0]['TotalSoft_GV_2_18']);
        jQuery('#TotalSoft_GV_FG_58').val(data[0]['TotalSoft_GV_2_19']);
        jQuery('#TotalSoft_GV_FG_59').val(data[0]['TotalSoft_GV_2_20']);
        jQuery('#TotalSoft_GV_FG_60').val(data[0]['TotalSoft_GV_2_21']);
        jQuery('#TotalSoft_GV_FG_61').val(data[0]['TotalSoft_GV_2_22']);
        jQuery('#TotalSoft_GV_FG_62').val(data[0]['TotalSoft_GV_2_23']);
        jQuery('#TotalSoft_GV_FG_63').val(data[0]['TotalSoft_GV_2_24']);
        jQuery('#TotalSoft_GV_FG_64').val(data[0]['TotalSoft_GV_2_25']);
        jQuery('#TotalSoft_GV_FG_65').val(data[0]['TotalSoft_GV_2_26']);
        jQuery('#TotalSoft_GV_FG_66').val(data[0]['TotalSoft_GV_2_27']);
        jQuery('#TotalSoft_GV_FG_67').val(data[0]['TotalSoft_GV_2_28']);
        setTimeout(function() {
          jQuery('#Total_Soft_AMSetDiv_6').css('display', 'block');
        }, 500)
        setTimeout(function() {
          jQuery('#Total_Soft_AMSetDiv_6').animate({'opacity': 1}, 500);
        }, 600)
        TS_GV_Loading_Changed('FG', 'TotalSoft_GV_FG_66');
        TS_GV_TM_But('6', 'GO');
      }
      else if(data[0]['TotalSoftGalleryV_SetType']=='Parallax Engine') {
        jQuery('#TotalSoft_GV_PE_40').val(data[0]['TotalSoft_GV_2_01']);
        jQuery('#TotalSoft_GV_PE_41').val(data[0]['TotalSoft_GV_2_02']);
        jQuery('#TotalSoft_GV_PE_42').val(data[0]['TotalSoft_GV_2_03']);
        jQuery('#TotalSoft_GV_PE_43').val(data[0]['TotalSoft_GV_2_04']);
        jQuery('#TotalSoft_GV_PE_44').val(data[0]['TotalSoft_GV_2_05']);
        jQuery('#TotalSoft_GV_PE_45').val(data[0]['TotalSoft_GV_2_06']);
        jQuery('#TotalSoft_GV_PE_46').val(data[0]['TotalSoft_GV_2_07']);
        jQuery('#TotalSoft_GV_PE_47').val(data[0]['TotalSoft_GV_2_08']);
        jQuery('#TotalSoft_GV_PE_48').val(data[0]['TotalSoft_GV_2_09']);
        jQuery('#TotalSoft_GV_PE_49').val(data[0]['TotalSoft_GV_2_10']);
        jQuery('#TotalSoft_GV_PE_50').val(data[0]['TotalSoft_GV_2_11']);
        jQuery('#TotalSoft_GV_PE_51').val(data[0]['TotalSoft_GV_2_12']);
        jQuery('#TotalSoft_GV_PE_52').val(data[0]['TotalSoft_GV_2_13']);
        jQuery('#TotalSoft_GV_PE_53').val(data[0]['TotalSoft_GV_2_14']);
        jQuery('#TotalSoft_GV_PE_54').val(data[0]['TotalSoft_GV_2_15']);
        jQuery('#TotalSoft_GV_PE_55').val(data[0]['TotalSoft_GV_2_16']);
        jQuery('#TotalSoft_GV_PE_56').val(data[0]['TotalSoft_GV_2_17']);
        jQuery('#TotalSoft_GV_PE_57').val(data[0]['TotalSoft_GV_2_18']);
        jQuery('#TotalSoft_GV_PE_58').val(data[0]['TotalSoft_GV_2_19']);
        jQuery('#TotalSoft_GV_PE_59').val(data[0]['TotalSoft_GV_2_20']);
        setTimeout(function() {
          jQuery('#Total_Soft_AMSetDiv_7').css('display', 'block');
        }, 500)
        setTimeout(function() {
          jQuery('#Total_Soft_AMSetDiv_7').animate({'opacity': 1}, 500);
        }, 600)
        TS_GV_Loading_Changed('PE', 'TotalSoft_GV_PE_58');
        TS_GV_TM_But('7', 'GO');
      }
      else if(data[0]['TotalSoftGalleryV_SetType']=='Classic Gallery') {
        jQuery('#TotalSoft_GV_CG_40').val(data[0]['TotalSoft_GV_2_01']);
        jQuery('#TotalSoft_GV_CG_41').val(data[0]['TotalSoft_GV_2_02']);
        jQuery('#TotalSoft_GV_CG_42').val(data[0]['TotalSoft_GV_2_03']);
        jQuery('#TotalSoft_GV_CG_43').val(data[0]['TotalSoft_GV_2_04']);
        jQuery('#TotalSoft_GV_CG_44').val(data[0]['TotalSoft_GV_2_05']);
        jQuery('#TotalSoft_GV_CG_45').val(data[0]['TotalSoft_GV_2_06']);
        jQuery('#TotalSoft_GV_CG_46').val(data[0]['TotalSoft_GV_2_07']);
        jQuery('#TotalSoft_GV_CG_47').val(data[0]['TotalSoft_GV_2_08']);
        jQuery('#TotalSoft_GV_CG_48').val(data[0]['TotalSoft_GV_2_09']);
        jQuery('#TotalSoft_GV_CG_49').val(data[0]['TotalSoft_GV_2_10']);
        jQuery('#TotalSoft_GV_CG_50').val(data[0]['TotalSoft_GV_2_11']);
        jQuery('#TotalSoft_GV_CG_51').val(data[0]['TotalSoft_GV_2_12']);
        jQuery('#TotalSoft_GV_CG_52').val(data[0]['TotalSoft_GV_2_13']);
        jQuery('#TotalSoft_GV_CG_53').val(data[0]['TotalSoft_GV_2_14']);
        jQuery('#TotalSoft_GV_CG_54').val(data[0]['TotalSoft_GV_2_15']);
        jQuery('#TotalSoft_GV_CG_55').val(data[0]['TotalSoft_GV_2_16']);
        jQuery('#TotalSoft_GV_CG_56').val(data[0]['TotalSoft_GV_2_17']);
        jQuery('#TotalSoft_GV_CG_57').val(data[0]['TotalSoft_GV_2_18']);
        jQuery('#TotalSoft_GV_CG_58').val(data[0]['TotalSoft_GV_2_19']);
        jQuery('#TotalSoft_GV_CG_59').val(data[0]['TotalSoft_GV_2_20']);
        jQuery('#TotalSoft_GV_CG_60').val(data[0]['TotalSoft_GV_2_21']);
        setTimeout(function() {
          jQuery('#Total_Soft_AMSetDiv_8').css('display', 'block');
        }, 500)
        setTimeout(function() {
          jQuery('#Total_Soft_AMSetDiv_8').animate({'opacity': 1}, 500);
        }, 600)
        TS_GV_Loading_Changed('CG', 'TotalSoft_GV_CG_59');
        TS_GV_TM_But('8', 'GO');
      }
      else if(data[0]['TotalSoftGalleryV_SetType']=='Space Gallery') {
        jQuery('#TotalSoft_GV_SG_40').val(data[0]['TotalSoft_GV_2_01']);
        jQuery('#TotalSoft_GV_SG_41').val(data[0]['TotalSoft_GV_2_02']);
        jQuery('#TotalSoft_GV_SG_42').val(data[0]['TotalSoft_GV_2_03']);
        jQuery('#TotalSoft_GV_SG_43').val(data[0]['TotalSoft_GV_2_04']);
        jQuery('#TotalSoft_GV_SG_44').val(data[0]['TotalSoft_GV_2_05']);
        jQuery('#TotalSoft_GV_SG_45').val(data[0]['TotalSoft_GV_2_06']);
        jQuery('#TotalSoft_GV_SG_46').val(data[0]['TotalSoft_GV_2_07']);
        jQuery('#TotalSoft_GV_SG_47').val(data[0]['TotalSoft_GV_2_08']);
        jQuery('#TotalSoft_GV_SG_48').val(data[0]['TotalSoft_GV_2_09']);
        jQuery('#TotalSoft_GV_SG_49').val(data[0]['TotalSoft_GV_2_10']);
        jQuery('#TotalSoft_GV_SG_50').val(data[0]['TotalSoft_GV_2_11']);
        jQuery('#TotalSoft_GV_SG_51').val(data[0]['TotalSoft_GV_2_12']);
        jQuery('#TotalSoft_GV_SG_52').val(data[0]['TotalSoft_GV_2_13']);
        jQuery('#TotalSoft_GV_SG_53').val(data[0]['TotalSoft_GV_2_14']);
        jQuery('#TotalSoft_GV_SG_54').val(data[0]['TotalSoft_GV_2_15']);
        jQuery('#TotalSoft_GV_SG_55').val(data[0]['TotalSoft_GV_2_16']);
        jQuery('#TotalSoft_GV_SG_56').val(data[0]['TotalSoft_GV_2_17']);
        jQuery('#TotalSoft_GV_SG_57').val(data[0]['TotalSoft_GV_2_18']);
        jQuery('#TotalSoft_GV_SG_58').val(data[0]['TotalSoft_GV_2_19']);
        jQuery('#TotalSoft_GV_SG_59').val(data[0]['TotalSoft_GV_2_20']);
        jQuery('#TotalSoft_GV_SG_60').val(data[0]['TotalSoft_GV_2_21']);
        jQuery('#TotalSoft_GV_SG_61').val(data[0]['TotalSoft_GV_2_22']);
        jQuery('#TotalSoft_GV_SG_62').val(data[0]['TotalSoft_GV_2_23']);
        jQuery('#TotalSoft_GV_SG_63').val(data[0]['TotalSoft_GV_2_24']);
        jQuery('#TotalSoft_GV_SG_64').val(data[0]['TotalSoft_GV_2_25']);
        jQuery('#TotalSoft_GV_SG_65').val(data[0]['TotalSoft_GV_2_26']);
        jQuery('#TotalSoft_GV_SG_66').val(data[0]['TotalSoft_GV_2_27']);
        jQuery('#TotalSoft_GV_SG_67').val(data[0]['TotalSoft_GV_2_28']);
        jQuery('#TotalSoft_GV_SG_68').val(data[0]['TotalSoft_GV_2_29']);
        jQuery('#TotalSoft_GV_SG_69').val(data[0]['TotalSoft_GV_2_30']);
        jQuery('#TotalSoft_GV_SG_70').val(data[0]['TotalSoft_GV_2_31']);
        jQuery('#TotalSoft_GV_SG_71').val(data[0]['TotalSoft_GV_2_32']);
        jQuery('#TotalSoft_GV_SG_72').val(data[0]['TotalSoft_GV_2_33']);
        jQuery('#TotalSoft_GV_SG_73').val(data[0]['TotalSoft_GV_2_34']);
        jQuery('#TotalSoft_GV_SG_74').val(data[0]['TotalSoft_GV_2_35']);
        setTimeout(function() {
          jQuery('#Total_Soft_AMSetDiv_9').css('display', 'block');
        }, 500)
        setTimeout(function() {
          jQuery('#Total_Soft_AMSetDiv_9').animate({'opacity': 1}, 500);
        }, 600)
        TS_GV_Loading_Changed('SG', 'TotalSoft_GV_SG_73');
        TS_GV_TM_But('9', 'GO');
      }
      else if(data[0]['TotalSoftGalleryV_SetType']=='Effective Gallery') {
        jQuery('#TotalSoft_GV_XG_40').val(data[0]['TotalSoft_GV_2_01']);
        jQuery('#TotalSoft_GV_XG_41').val(data[0]['TotalSoft_GV_2_02']);
        jQuery('#TotalSoft_GV_XG_42').val(data[0]['TotalSoft_GV_2_03']);
        jQuery('#TotalSoft_GV_XG_43').val(data[0]['TotalSoft_GV_2_04']);
        jQuery('#TotalSoft_GV_XG_44').val(data[0]['TotalSoft_GV_2_05']);
        jQuery('#TotalSoft_GV_XG_45').val(data[0]['TotalSoft_GV_2_06']);
        jQuery('#TotalSoft_GV_XG_46').val(data[0]['TotalSoft_GV_2_07']);
        jQuery('#TotalSoft_GV_XG_47').val(data[0]['TotalSoft_GV_2_08']);
        jQuery('#TotalSoft_GV_XG_48').val(data[0]['TotalSoft_GV_2_09']);
        jQuery('#TotalSoft_GV_XG_49').val(data[0]['TotalSoft_GV_2_10']);
        jQuery('#TotalSoft_GV_XG_50').val(data[0]['TotalSoft_GV_2_11']);
        jQuery('#TotalSoft_GV_XG_51').val(data[0]['TotalSoft_GV_2_12']);
        jQuery('#TotalSoft_GV_XG_52').val(data[0]['TotalSoft_GV_2_13']);
        jQuery('#TotalSoft_GV_XG_53').val(data[0]['TotalSoft_GV_2_14']);
        jQuery('#TotalSoft_GV_XG_54').val(data[0]['TotalSoft_GV_2_15']);
        jQuery('#TotalSoft_GV_XG_55').val(data[0]['TotalSoft_GV_2_16']);
        jQuery('#TotalSoft_GV_XG_56').val(data[0]['TotalSoft_GV_2_17']);
        jQuery('#TotalSoft_GV_XG_57').val(data[0]['TotalSoft_GV_2_18']);
        jQuery('#TotalSoft_GV_XG_58').val(data[0]['TotalSoft_GV_2_19']);
        jQuery('#TotalSoft_GV_XG_59').val(data[0]['TotalSoft_GV_2_20']);
        setTimeout(function() {
          jQuery('#Total_Soft_AMSetDiv_10').css('display', 'block');
        }, 500)
        setTimeout(function() {
          jQuery('#Total_Soft_AMSetDiv_10').animate({'opacity': 1}, 500);
        }, 600)
        TS_GV_Loading_Changed('XG', 'TotalSoft_GV_XG_58');
        TS_GV_TM_But('10', 'GO');
      }
      else if(data[0]['TotalSoftGalleryV_SetType']=='Gallery Album') {
        jQuery('#TotalSoft_GV_GA_40').val(data[0]['TotalSoft_GV_2_01']);
        jQuery('#TotalSoft_GV_GA_41').val(data[0]['TotalSoft_GV_2_02']);
        jQuery('#TotalSoft_GV_GA_42').val(data[0]['TotalSoft_GV_2_03']);
        jQuery('#TotalSoft_GV_GA_43').val(data[0]['TotalSoft_GV_2_04']);
        jQuery('#TotalSoft_GV_GA_44').val(data[0]['TotalSoft_GV_2_05']);
        jQuery('#TotalSoft_GV_GA_45').val(data[0]['TotalSoft_GV_2_06']);
        jQuery('#TotalSoft_GV_GA_46').val(data[0]['TotalSoft_GV_2_07']);
        jQuery('#TotalSoft_GV_GA_47').val(data[0]['TotalSoft_GV_2_08']);
        jQuery('#TotalSoft_GV_GA_48').val(data[0]['TotalSoft_GV_2_09']);
        jQuery('#TotalSoft_GV_GA_49').val(data[0]['TotalSoft_GV_2_10']);
        jQuery('#TotalSoft_GV_GA_50').val(data[0]['TotalSoft_GV_2_11']);
        jQuery('#TotalSoft_GV_GA_51').val(data[0]['TotalSoft_GV_2_12']);
        jQuery('#TotalSoft_GV_GA_52').val(data[0]['TotalSoft_GV_2_13']);
        setTimeout(function() {
          jQuery('#Total_Soft_AMSetDiv_11').css('display', 'block');
        }, 500)
        setTimeout(function() {
          jQuery('#Total_Soft_AMSetDiv_11').animate({'opacity': 1}, 500);
        }, 600)
        TS_GV_Loading_Changed('GA', 'TotalSoft_GV_GA_51');
        TS_GV_TM_But('11', 'GO');
      }
      setTimeout(function() {
        jQuery('.Total_Soft_VGallery_Color1').alphaColorPicker();
        jQuery('.wp-picker-holder').addClass('alpha-picker-holder');
        TotalSoft_VGallery_Out();

        jQuery('.Total_Soft_Gallery_Video_AMD2').css('display', 'none');
        jQuery('.Total_Soft_AMMTable').css('display', 'none');
        jQuery('.Total_Soft_AMOTable').css('display', 'none');
        jQuery('#Total_Soft_AMSet_Table').css('display', 'block');
        jQuery('.Total_Soft_Gallery_Video_Save_Option').css('display', 'none');
        jQuery('.Total_Soft_Gallery_Video_Update_Option').css('display', 'block');
        jQuery('.Total_Soft_Gallery_Video_AMD3').css('display', 'block');
      }, 500)
      setTimeout(function() {
        jQuery('.Total_Soft_Gallery_Video_AMD3').animate({'opacity': 1}, 500);
        jQuery('#Total_Soft_AMSet_Table').animate({'opacity': 1}, 500);
        jQuery('.Total_Soft_GV_Loading').css('display', 'none');
      }, 600)
    }
  });
}

function TotalSoft_VGallery_Out() {
  jQuery('.TotalSoft_VG_Range').each(function() {
    if(jQuery(this).hasClass('TotalSoft_VG_Rangeper')) {
      jQuery('#' + jQuery(this).attr('id') + '_Output').html(jQuery(this).val() + '%');
    }
    else if(jQuery(this).hasClass('TotalSoft_VG_Rangepx')) {
      jQuery('#' + jQuery(this).attr('id') + '_Output').html(jQuery(this).val() + 'px');
    }
    else if(jQuery(this).hasClass('TotalSoft_VG_Rangesec')) {
      jQuery('#' + jQuery(this).attr('id') + '_Output').html(jQuery(this).val() + 's');
    }
    else if(jQuery(this).hasClass('TotalSoft_VG_Rangemsec')) {
      jQuery('#' + jQuery(this).attr('id') + '_Output').html(jQuery(this).val() + 'ms');
    }
    else {
      jQuery('#' + jQuery(this).attr('id') + '_Output').html(jQuery(this).val());
    }
  })
}

function TS_GV_Loading_Changed(type, col_id) {
  var loadingtype=jQuery('#' + col_id).val();

  if(loadingtype=='') {
    jQuery('#TS_GV_' + type + '_Image').css('display', 'none');
  }
  else {
    jQuery('#TS_GV_' + type + '_Image').css('display', 'inline').attr('src', jQuery('#TS_GV_' + type + '_Hidden').val() + 'loading' + loadingtype + '.gif');
  }
}

function TS_GV_TM_But(type, col_id) {
  jQuery('.TS_GV_Option_Div').css('display', 'none');
  jQuery('.Total_Soft_AMSetDiv_Button').removeClass('Total_Soft_AMSetDiv_Button_C');
  jQuery('#TS_GV_TM_TBut_' + type + '_' + col_id).addClass('Total_Soft_AMSetDiv_Button_C');
  jQuery('#Total_Soft_AMSetTable_' + type + '_' + col_id).css('display', 'block');
}

function TS_GV_Theme_Preview() {
  alert('You must create Gallery Video then try to preview the theme on that Gallery.');
}

function TS_GV_Theme_Preview_T() {
  var Total_Soft_GV_Theme_Prev=jQuery('#Total_Soft_GV_Theme_Prev').val();
  var TotalSoftGalleryV_SetName=jQuery('#TotalSoftGalleryV_SetName').val();
  var TotalSoftGalleryV_SetType=jQuery('#TotalSoftGalleryV_SetType').val();

  if(TotalSoftGalleryV_SetType=='Grid Video Gallery') {
    var TotalSoft_GV_1_01=jQuery('#TotalSoft_GV_GG_01').attr('checked');
    var TotalSoft_GV_1_02=jQuery('#TotalSoft_GV_GG_02').attr('checked');
    var TotalSoft_GV_1_03=jQuery('#TotalSoft_GV_GG_03').val();
    var TotalSoft_GV_1_04=jQuery('#TotalSoft_GV_GG_04').val();
    var TotalSoft_GV_1_05=jQuery('#TotalSoft_GV_GG_05').val();
    var TotalSoft_GV_1_06=jQuery('#TotalSoft_GV_GG_06').val();
    var TotalSoft_GV_1_07=jQuery('#TotalSoft_GV_GG_07').val() / 100;
    var TotalSoft_GV_1_08=jQuery('#TotalSoft_GV_GG_08').val();
    var TotalSoft_GV_1_09=jQuery('#TotalSoft_GV_GG_09').val();
    var TotalSoft_GV_1_10=jQuery('#TotalSoft_GV_GG_10').val();
    var TotalSoft_GV_1_11=jQuery('#TotalSoft_GV_GG_11').val();
    var TotalSoft_GV_1_12=jQuery('#TotalSoft_GV_GG_12').val();
    var TotalSoft_GV_1_13=jQuery('#TotalSoft_GV_GG_13').val();
    var TotalSoft_GV_1_14=jQuery('#TotalSoft_GV_GG_14').val();
    var TotalSoft_GV_1_15=jQuery('#TotalSoft_GV_GG_15').val();
    var TotalSoft_GV_1_16=jQuery('#TotalSoft_GV_GG_16').val();
    var TotalSoft_GV_1_17=jQuery('#TotalSoft_GV_GG_17').val();
    var TotalSoft_GV_1_18=jQuery('#TotalSoft_GV_GG_18').val();
    var TotalSoft_GV_1_19=jQuery('#TotalSoft_GV_GG_19').val();
    var TotalSoft_GV_1_20=jQuery('#TotalSoft_GV_GG_20').val();
    var TotalSoft_GV_1_21=jQuery('#TotalSoft_GV_GG_21').val();
    var TotalSoft_GV_1_22=jQuery('#TotalSoft_GV_GG_22').val();
    var TotalSoft_GV_1_23=jQuery('#TotalSoft_GV_GG_23').val();
    var TotalSoft_GV_1_24=jQuery('#TotalSoft_GV_GG_24').val();
    var TotalSoft_GV_1_25=jQuery('#TotalSoft_GV_GG_25').val();
    var TotalSoft_GV_1_26=jQuery('#TotalSoft_GV_GG_26').val();
    var TotalSoft_GV_1_27=jQuery('#TotalSoft_GV_GG_27').val();
    var TotalSoft_GV_1_28=jQuery('#TotalSoft_GV_GG_28').val();
    var TotalSoft_GV_1_29=jQuery('#TotalSoft_GV_GG_29').val();
    var TotalSoft_GV_1_30=jQuery('#TotalSoft_GV_GG_30').val();
    var TotalSoft_GV_1_31=jQuery('#TotalSoft_GV_GG_31').val();
    var TotalSoft_GV_1_34=jQuery('#TotalSoft_GV_GG_34').val();
    var TotalSoft_GV_1_35=jQuery('#TotalSoft_GV_GG_35').val();
    var TotalSoft_GV_1_36=jQuery('#TotalSoft_GV_GG_36').val();
    var TotalSoft_GV_1_38=jQuery('#TotalSoft_GV_GG_38').val();
    var TotalSoft_GV_1_39=jQuery('#TotalSoft_GV_GG_39').val();
    var TotalSoft_GV_2_01=jQuery('#TotalSoft_GV_GG_40').val();
    var TotalSoft_GV_2_02=jQuery('#TotalSoft_GV_GG_41').val();
    var TotalSoft_GV_2_03=jQuery('#TotalSoft_GV_GG_42').val();
    var TotalSoft_GV_2_04=jQuery('#TotalSoft_GV_GG_43').val();
    var TotalSoft_GV_2_05=jQuery('#TotalSoft_GV_GG_44').val();
    var TotalSoft_GV_2_06=jQuery('#TotalSoft_GV_GG_45').val();
    var TotalSoft_GV_2_07=jQuery('#TotalSoft_GV_GG_46').val();
    var TotalSoft_GV_2_08=jQuery('#TotalSoft_GV_GG_47').val();
    var TotalSoft_GV_2_09=jQuery('#TotalSoft_GV_GG_48').val();
    var TotalSoft_GV_2_10=jQuery('#TotalSoft_GV_GG_49').val();
    var TotalSoft_GV_2_11=jQuery('#TotalSoft_GV_GG_50').val();
    var TotalSoft_GV_2_12=jQuery('#TotalSoft_GV_GG_51').val();
    var TotalSoft_GV_2_13=jQuery('#TotalSoft_GV_GG_52').val();
    var TotalSoft_GV_2_14=jQuery('#TotalSoft_GV_GG_53').val();
    var TotalSoft_GV_2_15=jQuery('#TotalSoft_GV_GG_54').val();
    var TotalSoft_GV_2_16=jQuery('#TotalSoft_GV_GG_55').val();
    var TotalSoft_GV_2_17=jQuery('#TotalSoft_GV_GG_56').val();
    var TotalSoft_GV_2_18=jQuery('#TotalSoft_GV_GG_57').val();
    var TotalSoft_GV_2_19=jQuery('#TotalSoft_GV_GG_58').val();
    var TotalSoft_GV_2_20=jQuery('#TotalSoft_GV_GG_59').val();
    var TotalSoft_GV_2_21=jQuery('#TotalSoft_GV_GG_60').val();
    var TotalSoft_GV_2_22=jQuery('#TotalSoft_GV_GG_61').attr('checked');
    var TotalSoft_GV_2_23=jQuery('#TotalSoft_GV_GG_62').attr('checked');
    var TotalSoft_GV_2_24=jQuery('#TotalSoft_GV_GG_63').val();
    var TotalSoft_GV_2_25=jQuery('#TotalSoft_GV_GG_64').val();
    var TotalSoft_GV_2_26=jQuery('#TotalSoft_GV_GG_65').val();
    var TotalSoft_GV_2_27=jQuery('#TotalSoft_GV_GG_66').val();
    var TotalSoft_GV_2_28=jQuery('#TotalSoft_GV_GG_67').val();
    var TotalSoft_GV_2_29='';
    var TotalSoft_GV_2_30='';
    var TotalSoft_GV_2_31='';
    var TotalSoft_GV_2_32='';
    var TotalSoft_GV_2_33='';
    var TotalSoft_GV_2_34='';
    var TotalSoft_GV_2_35='';
    var TotalSoft_GV_2_36='';
    var TotalSoft_GV_2_37='';
    var TotalSoft_GV_2_38='';
    var TotalSoft_GV_2_39='';

    if(TotalSoft_GV_1_01=='checked') {
      TotalSoft_GV_1_01='true';
    }
    else {
      TotalSoft_GV_1_01='false';
    }
    if(TotalSoft_GV_1_02=='checked') {
      TotalSoft_GV_1_02='true';
    }
    else {
      TotalSoft_GV_1_02='false';
    }
    if(TotalSoft_GV_2_22=='checked') {
      TotalSoft_GV_2_22='true';
    }
    else {
      TotalSoft_GV_2_22='false';
    }
    if(TotalSoft_GV_2_23=='checked') {
      TotalSoft_GV_2_23='true';
    }
    else {
      TotalSoft_GV_2_23='false';
    }
    if(TotalSoft_GV_1_31=='1') {
      var TotalSoft_GV_1_32='totalsoft totalsoft-angle-double-left';
      var TotalSoft_GV_1_33='totalsoft totalsoft-angle-double-right';
    }
    else if(TotalSoft_GV_1_31=='2') {
      var TotalSoft_GV_1_32='totalsoft totalsoft-angle-left';
      var TotalSoft_GV_1_33='totalsoft totalsoft-angle-right';
    }
    else if(TotalSoft_GV_1_31=='3') {
      var TotalSoft_GV_1_32='totalsoft totalsoft-arrow-circle-left';
      var TotalSoft_GV_1_33='totalsoft totalsoft-arrow-circle-right';
    }
    else if(TotalSoft_GV_1_31=='4') {
      var TotalSoft_GV_1_32='totalsoft totalsoft-arrow-circle-o-left';
      var TotalSoft_GV_1_33='totalsoft totalsoft-arrow-circle-o-right';
    }
    else if(TotalSoft_GV_1_31=='5') {
      var TotalSoft_GV_1_32='totalsoft totalsoft-arrow-left';
      var TotalSoft_GV_1_33='totalsoft totalsoft-arrow-right';
    }
    else if(TotalSoft_GV_1_31=='6') {
      var TotalSoft_GV_1_32='totalsoft totalsoft-caret-left';
      var TotalSoft_GV_1_33='totalsoft totalsoft-caret-right';
    }
    else if(TotalSoft_GV_1_31=='7') {
      var TotalSoft_GV_1_32='totalsoft totalsoft-caret-square-o-left';
      var TotalSoft_GV_1_33='totalsoft totalsoft-caret-square-o-right';
    }
    else if(TotalSoft_GV_1_31=='8') {
      var TotalSoft_GV_1_32='totalsoft totalsoft-chevron-circle-left';
      var TotalSoft_GV_1_33='totalsoft totalsoft-chevron-circle-right';
    }
    else if(TotalSoft_GV_1_31=='9') {
      var TotalSoft_GV_1_32='totalsoft totalsoft-chevron-left';
      var TotalSoft_GV_1_33='totalsoft totalsoft-chevron-right';
    }
    else if(TotalSoft_GV_1_31=='10') {
      var TotalSoft_GV_1_32='totalsoft totalsoft-hand-o-left';
      var TotalSoft_GV_1_33='totalsoft totalsoft-hand-o-right';
    }
    else if(TotalSoft_GV_1_31=='11') {
      var TotalSoft_GV_1_32='totalsoft totalsoft-long-arrow-left';
      var TotalSoft_GV_1_33='totalsoft totalsoft-long-arrow-right';
    }
    if(TotalSoft_GV_1_36=='1') {
      var TotalSoft_GV_1_37='totalsoft totalsoft-times';
    }
    else if(TotalSoft_GV_1_36=='2') {
      var TotalSoft_GV_1_37='totalsoft totalsoft-times-circle-o';
    }
    else if(TotalSoft_GV_1_36=='3') {
      var TotalSoft_GV_1_37='totalsoft totalsoft-times-circle';
    }
  }
  else if(TotalSoftGalleryV_SetType=='LightBox Video Gallery') {
    var TotalSoft_GV_1_01=jQuery('#TotalSoft_GV_LG_01').val();
    var TotalSoft_GV_1_02=jQuery('#TotalSoft_GV_LG_02').val();
    var TotalSoft_GV_1_03=jQuery('#TotalSoft_GV_LG_03').val();
    var TotalSoft_GV_1_04=jQuery('#TotalSoft_GV_LG_04').val();
    var TotalSoft_GV_1_05=jQuery('#TotalSoft_GV_LG_05').val();
    var TotalSoft_GV_1_06=jQuery('#TotalSoft_GV_LG_06').val();
    var TotalSoft_GV_1_07=jQuery('#TotalSoft_GV_LG_07').val();
    var TotalSoft_GV_1_08=jQuery('#TotalSoft_GV_LG_08').val();
    var TotalSoft_GV_1_09=jQuery('#TotalSoft_GV_LG_09').val();
    var TotalSoft_GV_1_10=jQuery('#TotalSoft_GV_LG_10').val();
    var TotalSoft_GV_1_11=jQuery('#TotalSoft_GV_LG_11').val();
    var TotalSoft_GV_1_12=jQuery('#TotalSoft_GV_LG_12').val();
    var TotalSoft_GV_1_13=jQuery('#TotalSoft_GV_LG_13').val();
    var TotalSoft_GV_1_14=jQuery('#TotalSoft_GV_LG_14').attr('checked');
    var TotalSoft_GV_1_15=jQuery('#TotalSoft_GV_LG_15').val();
    var TotalSoft_GV_1_16=jQuery('#TotalSoft_GV_LG_16').val();
    var TotalSoft_GV_1_17=jQuery('#TotalSoft_GV_LG_17').val();
    var TotalSoft_GV_1_18=jQuery('#TotalSoft_GV_LG_18').val();
    var TotalSoft_GV_1_19=jQuery('#TotalSoft_GV_LG_19').val();
    var TotalSoft_GV_1_22=jQuery('#TotalSoft_GV_LG_22').val();
    var TotalSoft_GV_1_23=jQuery('#TotalSoft_GV_LG_23').val();
    var TotalSoft_GV_1_24=jQuery('#TotalSoft_GV_LG_24').val();
    var TotalSoft_GV_1_26=jQuery('#TotalSoft_GV_LG_26').val();
    var TotalSoft_GV_1_27=jQuery('#TotalSoft_GV_LG_27').val();
    var TotalSoft_GV_1_28=jQuery('#TotalSoft_GV_LG_28').val();
    var TotalSoft_GV_1_29=jQuery('#TotalSoft_GV_LG_29').val();
    var TotalSoft_GV_1_30=jQuery('#TotalSoft_GV_LG_30').val();
    var TotalSoft_GV_1_33=jQuery('#TotalSoft_GV_LG_33').val();
    var TotalSoft_GV_1_34=jQuery('#TotalSoft_GV_LG_34').val();
    var TotalSoft_GV_1_35=jQuery('#TotalSoft_GV_LG_35').val();
    var TotalSoft_GV_1_36=jQuery('#TotalSoft_GV_LG_36').val();
    var TotalSoft_GV_1_37=jQuery('#TotalSoft_GV_LG_37').val();
    var TotalSoft_GV_1_38=jQuery('#TotalSoft_GV_LG_38').val();
    var TotalSoft_GV_1_39=jQuery('#TotalSoft_GV_LG_39').val();
    var TotalSoft_GV_2_01=jQuery('#TotalSoft_GV_LG_40').val();
    var TotalSoft_GV_2_02=jQuery('#TotalSoft_GV_LG_41').val();
    var TotalSoft_GV_2_03=jQuery('#TotalSoft_GV_LG_42').val();
    var TotalSoft_GV_2_04=jQuery('#TotalSoft_GV_LG_43').val();
    var TotalSoft_GV_2_05=jQuery('#TotalSoft_GV_LG_44').val();
    var TotalSoft_GV_2_06=jQuery('#TotalSoft_GV_LG_45').val();
    var TotalSoft_GV_2_07=jQuery('#TotalSoft_GV_LG_46').val();
    var TotalSoft_GV_2_08=jQuery('#TotalSoft_GV_LG_47').val();
    var TotalSoft_GV_2_09=jQuery('#TotalSoft_GV_LG_48').val();
    var TotalSoft_GV_2_10=jQuery('#TotalSoft_GV_LG_49').val();
    var TotalSoft_GV_2_11=jQuery('#TotalSoft_GV_LG_50').val();
    var TotalSoft_GV_2_12=jQuery('#TotalSoft_GV_LG_51').val();
    var TotalSoft_GV_2_13=jQuery('#TotalSoft_GV_LG_52').val();
    var TotalSoft_GV_2_14=jQuery('#TotalSoft_GV_LG_53').val();
    var TotalSoft_GV_2_15=jQuery('#TotalSoft_GV_LG_54').val();
    var TotalSoft_GV_2_16=jQuery('#TotalSoft_GV_LG_55').val();
    var TotalSoft_GV_2_17=jQuery('#TotalSoft_GV_LG_56').val();
    var TotalSoft_GV_2_18=jQuery('#TotalSoft_GV_LG_57').val();
    var TotalSoft_GV_2_19=jQuery('#TotalSoft_GV_LG_58').val();
    var TotalSoft_GV_2_20=jQuery('#TotalSoft_GV_LG_59').val();
    var TotalSoft_GV_2_21=jQuery('#TotalSoft_GV_LG_60').val();
    var TotalSoft_GV_2_22=jQuery('#TotalSoft_GV_LG_61').val();
    var TotalSoft_GV_2_23=jQuery('#TotalSoft_GV_LG_62').val();
    var TotalSoft_GV_2_24=jQuery('#TotalSoft_GV_LG_63').val();
    var TotalSoft_GV_2_25=jQuery('#TotalSoft_GV_LG_64').val();
    var TotalSoft_GV_2_26=jQuery('#TotalSoft_GV_LG_65').val();
    var TotalSoft_GV_2_27=jQuery('#TotalSoft_GV_LG_66').val();
    var TotalSoft_GV_2_28=jQuery('#TotalSoft_GV_LG_67').val();
    var TotalSoft_GV_2_29=jQuery('#TotalSoft_GV_LG_68').val();
    var TotalSoft_GV_2_30=jQuery('#TotalSoft_GV_LG_69').val();
    var TotalSoft_GV_2_31=jQuery('#TotalSoft_GV_LG_70').val();
    var TotalSoft_GV_2_32=jQuery('#TotalSoft_GV_LG_71').val();
    var TotalSoft_GV_2_33=jQuery('#TotalSoft_GV_LG_72').val();
    var TotalSoft_GV_2_34=jQuery('#TotalSoft_GV_LG_73').val();
    var TotalSoft_GV_2_35=jQuery('#TotalSoft_GV_LG_74').val();
    var TotalSoft_GV_2_36=jQuery('#TotalSoft_GV_LG_75').val();
    var TotalSoft_GV_2_37=jQuery('#TotalSoft_GV_LG_76').val();
    var TotalSoft_GV_2_38='';
    var TotalSoft_GV_2_39='';

    if(TotalSoft_GV_1_14=='checked') {
      TotalSoft_GV_1_14='true';
    }
    else {
      TotalSoft_GV_1_14='false';
    }
    if(TotalSoft_GV_1_19=='1') {
      var TotalSoft_GV_1_20='totalsoft totalsoft-play-circle';
      var TotalSoft_GV_1_21='totalsoft totalsoft-pause-circle';
    }
    else if(TotalSoft_GV_1_19=='2') {
      var TotalSoft_GV_1_20='totalsoft totalsoft-play-circle-o';
      var TotalSoft_GV_1_21='totalsoft totalsoft-pause-circle-o';
    }
    else if(TotalSoft_GV_1_19=='3') {
      var TotalSoft_GV_1_20='totalsoft totalsoft-play';
      var TotalSoft_GV_1_21='totalsoft totalsoft-pause';
    }
    if(TotalSoft_GV_1_24=='1') {
      var TotalSoft_GV_1_25='totalsoft totalsoft-times';
    }
    else if(TotalSoft_GV_1_24=='2') {
      var TotalSoft_GV_1_25='totalsoft totalsoft-times-circle-o';
    }
    else if(TotalSoft_GV_1_24=='3') {
      var TotalSoft_GV_1_25='totalsoft totalsoft-times-circle';
    }
    if(TotalSoft_GV_1_30=='1') {
      var TotalSoft_GV_1_31='totalsoft totalsoft-angle-double-left';
      var TotalSoft_GV_1_32='totalsoft totalsoft-angle-double-right';
    }
    else if(TotalSoft_GV_1_30=='2') {
      var TotalSoft_GV_1_31='totalsoft totalsoft-angle-left';
      var TotalSoft_GV_1_32='totalsoft totalsoft-angle-right';
    }
    else if(TotalSoft_GV_1_30=='3') {
      var TotalSoft_GV_1_31='totalsoft totalsoft-arrow-circle-left';
      var TotalSoft_GV_1_32='totalsoft totalsoft-arrow-circle-right';
    }
    else if(TotalSoft_GV_1_30=='4') {
      var TotalSoft_GV_1_31='totalsoft totalsoft-arrow-circle-o-left';
      var TotalSoft_GV_1_32='totalsoft totalsoft-arrow-circle-o-right';
    }
    else if(TotalSoft_GV_1_30=='5') {
      var TotalSoft_GV_1_31='totalsoft totalsoft-arrow-left';
      var TotalSoft_GV_1_32='totalsoft totalsoft-arrow-right';
    }
    else if(TotalSoft_GV_1_30=='6') {
      var TotalSoft_GV_1_31='totalsoft totalsoft-caret-left';
      var TotalSoft_GV_1_32='totalsoft totalsoft-caret-right';
    }
    else if(TotalSoft_GV_1_30=='7') {
      var TotalSoft_GV_1_31='totalsoft totalsoft-caret-square-o-left';
      var TotalSoft_GV_1_32='totalsoft totalsoft-caret-square-o-right';
    }
    else if(TotalSoft_GV_1_30=='8') {
      var TotalSoft_GV_1_31='totalsoft totalsoft-chevron-circle-left';
      var TotalSoft_GV_1_32='totalsoft totalsoft-chevron-circle-right';
    }
    else if(TotalSoft_GV_1_30=='9') {
      var TotalSoft_GV_1_31='totalsoft totalsoft-chevron-left';
      var TotalSoft_GV_1_32='totalsoft totalsoft-chevron-right';
    }
    else if(TotalSoft_GV_1_30=='10') {
      var TotalSoft_GV_1_31='totalsoft totalsoft-hand-o-left';
      var TotalSoft_GV_1_32='totalsoft totalsoft-hand-o-right';
    }
    else if(TotalSoft_GV_1_30=='11') {
      var TotalSoft_GV_1_31='totalsoft totalsoft-long-arrow-left';
      var TotalSoft_GV_1_32='totalsoft totalsoft-long-arrow-right';
    }
  }
  else if(TotalSoftGalleryV_SetType=='Thumbnails Video') {
    var TotalSoft_GV_1_01=jQuery('#TotalSoft_GV_TV_01').val();
    var TotalSoft_GV_1_02=jQuery('#TotalSoft_GV_TV_02').val();
    var TotalSoft_GV_1_03=jQuery('#TotalSoft_GV_TV_03').val();
    var TotalSoft_GV_1_04=jQuery('#TotalSoft_GV_TV_04').val();
    var TotalSoft_GV_1_05=jQuery('#TotalSoft_GV_TV_05').val();
    var TotalSoft_GV_1_06=jQuery('#TotalSoft_GV_TV_06').val();
    var TotalSoft_GV_1_07=jQuery('#TotalSoft_GV_TV_07').val();
    var TotalSoft_GV_1_08=jQuery('#TotalSoft_GV_TV_08').val();
    var TotalSoft_GV_1_09=jQuery('#TotalSoft_GV_TV_09').val();
    var TotalSoft_GV_1_10=jQuery('#TotalSoft_GV_TV_10').val();
    var TotalSoft_GV_1_11=jQuery('#TotalSoft_GV_TV_11').val();
    var TotalSoft_GV_1_12=jQuery('#TotalSoft_GV_TV_12').val();
    var TotalSoft_GV_1_13='';
    var TotalSoft_GV_1_14='';
    var TotalSoft_GV_1_15='';
    var TotalSoft_GV_1_16='';
    var TotalSoft_GV_1_17='';
    var TotalSoft_GV_1_18='';
    var TotalSoft_GV_1_19=jQuery('#TotalSoft_GV_TV_19').val();
    var TotalSoft_GV_1_20=jQuery('#TotalSoft_GV_TV_20').attr('checked');
    var TotalSoft_GV_1_21=jQuery('#TotalSoft_GV_TV_21').val();
    var TotalSoft_GV_1_22=jQuery('#TotalSoft_GV_TV_22').val();
    var TotalSoft_GV_1_23=jQuery('#TotalSoft_GV_TV_23').val();
    var TotalSoft_GV_1_24=jQuery('#TotalSoft_GV_TV_24').attr('checked');
    var TotalSoft_GV_1_25=jQuery('#TotalSoft_GV_TV_25').val();
    var TotalSoft_GV_1_26=jQuery('#TotalSoft_GV_TV_26').val();
    var TotalSoft_GV_1_27=jQuery('#TotalSoft_GV_TV_27').val();
    var TotalSoft_GV_1_28=jQuery('#TotalSoft_GV_TV_28').val();
    var TotalSoft_GV_1_29=jQuery('#TotalSoft_GV_TV_29').val();
    var TotalSoft_GV_1_30=jQuery('#TotalSoft_GV_TV_30').val();
    var TotalSoft_GV_1_31=jQuery('#TotalSoft_GV_TV_31').val();
    var TotalSoft_GV_1_32=jQuery('#TotalSoft_GV_TV_32').val();
    var TotalSoft_GV_1_33=jQuery('#TotalSoft_GV_TV_33').val();
    var TotalSoft_GV_1_34=jQuery('#TotalSoft_GV_TV_34').val();
    var TotalSoft_GV_1_35=jQuery('#TotalSoft_GV_TV_35').val();
    var TotalSoft_GV_1_36=jQuery('#TotalSoft_GV_TV_36').val();
    var TotalSoft_GV_1_37=jQuery('#TotalSoft_GV_TV_37').val();
    var TotalSoft_GV_1_38=jQuery('#TotalSoft_GV_TV_38').val();
    var TotalSoft_GV_1_39=jQuery('#TotalSoft_GV_TV_39').val();
    var TotalSoft_GV_2_01=jQuery('#TotalSoft_GV_TV_40').val();
    var TotalSoft_GV_2_02=jQuery('#TotalSoft_GV_TV_41').val();
    var TotalSoft_GV_2_03=jQuery('#TotalSoft_GV_TV_42').val();
    var TotalSoft_GV_2_04=jQuery('#TotalSoft_GV_TV_43').val();
    var TotalSoft_GV_2_05=jQuery('#TotalSoft_GV_TV_44').val();
    var TotalSoft_GV_2_06=jQuery('#TotalSoft_GV_TV_45').val();
    var TotalSoft_GV_2_07=jQuery('#TotalSoft_GV_TV_46').val();
    var TotalSoft_GV_2_08=jQuery('#TotalSoft_GV_TV_47').val();
    var TotalSoft_GV_2_09=jQuery('#TotalSoft_GV_TV_48').val();
    var TotalSoft_GV_2_10=jQuery('#TotalSoft_GV_TV_49').val();
    var TotalSoft_GV_2_11=jQuery('#TotalSoft_GV_TV_50').val();
    var TotalSoft_GV_2_12=jQuery('#TotalSoft_GV_TV_51').val();
    var TotalSoft_GV_2_13=jQuery('#TotalSoft_GV_TV_52').val();
    var TotalSoft_GV_2_14=jQuery('#TotalSoft_GV_TV_53').val();
    var TotalSoft_GV_2_15=jQuery('#TotalSoft_GV_TV_54').val();
    var TotalSoft_GV_2_16=jQuery('#TotalSoft_GV_TV_55').val();
    var TotalSoft_GV_2_17=jQuery('#TotalSoft_GV_TV_56').val();
    var TotalSoft_GV_2_18='';
    var TotalSoft_GV_2_19='';
    var TotalSoft_GV_2_20='';
    var TotalSoft_GV_2_21='';
    var TotalSoft_GV_2_22='';
    var TotalSoft_GV_2_23='';
    var TotalSoft_GV_2_24='';
    var TotalSoft_GV_2_25='';
    var TotalSoft_GV_2_26='';
    var TotalSoft_GV_2_27='';
    var TotalSoft_GV_2_28='';
    var TotalSoft_GV_2_29='';
    var TotalSoft_GV_2_30='';
    var TotalSoft_GV_2_31='';
    var TotalSoft_GV_2_32='';
    var TotalSoft_GV_2_33='';
    var TotalSoft_GV_2_34='';
    var TotalSoft_GV_2_35='';
    var TotalSoft_GV_2_36='';
    var TotalSoft_GV_2_37='';
    var TotalSoft_GV_2_38='';
    var TotalSoft_GV_2_39='';

    if(TotalSoft_GV_1_20=='checked') {
      TotalSoft_GV_1_20='true';
    }
    else {
      TotalSoft_GV_1_20='false';
    }
    if(TotalSoft_GV_1_24=='checked') {
      TotalSoft_GV_1_24='true';
    }
    else {
      TotalSoft_GV_1_24='false';
    }
  }
  else if(TotalSoftGalleryV_SetType=='Content Popup') {
    var TotalSoft_GV_1_01=jQuery('#TotalSoft_GV_CP_01').val();
    var TotalSoft_GV_1_02=jQuery('#TotalSoft_GV_CP_02').val();
    var TotalSoft_GV_1_03=jQuery('#TotalSoft_GV_CP_03').val();
    var TotalSoft_GV_1_04=jQuery('#TotalSoft_GV_CP_04').val();
    var TotalSoft_GV_1_05=jQuery('#TotalSoft_GV_CP_05').val();
    var TotalSoft_GV_1_06=jQuery('#TotalSoft_GV_CP_06').attr('checked');
    var TotalSoft_GV_1_07=jQuery('#TotalSoft_GV_CP_07').val();
    var TotalSoft_GV_1_08=jQuery('#TotalSoft_GV_CP_08').val();
    var TotalSoft_GV_1_09=jQuery('#TotalSoft_GV_CP_09').val();
    var TotalSoft_GV_1_10=jQuery('#TotalSoft_GV_CP_10').val();
    var TotalSoft_GV_1_11=jQuery('#TotalSoft_GV_CP_11').attr('checked');
    var TotalSoft_GV_1_12=jQuery('#TotalSoft_GV_CP_12').val();
    var TotalSoft_GV_1_13=jQuery('#TotalSoft_GV_CP_13').val();
    var TotalSoft_GV_1_14=jQuery('#TotalSoft_GV_CP_14').val();
    var TotalSoft_GV_1_15=jQuery('#TotalSoft_GV_CP_15').val();
    var TotalSoft_GV_1_16=jQuery('#TotalSoft_GV_CP_16').attr('checked');
    var TotalSoft_GV_1_17=jQuery('#TotalSoft_GV_CP_17').val();
    var TotalSoft_GV_1_18=jQuery('#TotalSoft_GV_CP_18').val();
    var TotalSoft_GV_1_19=jQuery('#TotalSoft_GV_CP_19').val();
    var TotalSoft_GV_1_20=jQuery('#TotalSoft_GV_CP_20').val();
    var TotalSoft_GV_1_21=jQuery('#TotalSoft_GV_CP_21').val();
    var TotalSoft_GV_1_22=jQuery('#TotalSoft_GV_CP_22').val();
    var TotalSoft_GV_1_23=jQuery('#TotalSoft_GV_CP_23').val();
    var TotalSoft_GV_1_24=jQuery('#TotalSoft_GV_CP_24').val();
    var TotalSoft_GV_1_25=jQuery('#TotalSoft_GV_CP_25').val();
    var TotalSoft_GV_1_26=jQuery('#TotalSoft_GV_CP_26').val();
    var TotalSoft_GV_1_27=jQuery('#TotalSoft_GV_CP_27').val();
    var TotalSoft_GV_1_28=jQuery('#TotalSoft_GV_CP_28').val();
    var TotalSoft_GV_1_29=jQuery('#TotalSoft_GV_CP_29').val();
    var TotalSoft_GV_1_30=jQuery('#TotalSoft_GV_CP_30').val();
    var TotalSoft_GV_1_31=jQuery('#TotalSoft_GV_CP_31').val();
    var TotalSoft_GV_1_32=jQuery('#TotalSoft_GV_CP_32').val();
    var TotalSoft_GV_1_33=jQuery('#TotalSoft_GV_CP_33').val();
    var TotalSoft_GV_1_34=jQuery('#TotalSoft_GV_CP_34').val();
    var TotalSoft_GV_1_35=jQuery('#TotalSoft_GV_CP_35').val();
    var TotalSoft_GV_1_36=jQuery('#TotalSoft_GV_CP_36').val();
    var TotalSoft_GV_1_37=jQuery('#TotalSoft_GV_CP_37').val();
    var TotalSoft_GV_1_38=jQuery('#TotalSoft_GV_CP_38').val();
    var TotalSoft_GV_1_39=jQuery('#TotalSoft_GV_CP_39').val();
    var TotalSoft_GV_2_01=jQuery('#TotalSoft_GV_CP_40').val();
    var TotalSoft_GV_2_02=jQuery('#TotalSoft_GV_CP_41').val();
    var TotalSoft_GV_2_03=jQuery('#TotalSoft_GV_CP_42').val();
    var TotalSoft_GV_2_04=jQuery('#TotalSoft_GV_CP_43').val();
    var TotalSoft_GV_2_05=jQuery('#TotalSoft_GV_CP_44').val();
    var TotalSoft_GV_2_06=jQuery('#TotalSoft_GV_CP_45').val();
    var TotalSoft_GV_2_07=jQuery('#TotalSoft_GV_CP_46').val();
    var TotalSoft_GV_2_08=jQuery('#TotalSoft_GV_CP_47').val();
    var TotalSoft_GV_2_09=jQuery('#TotalSoft_GV_CP_48').val();
    var TotalSoft_GV_2_10=jQuery('#TotalSoft_GV_CP_49').val();
    var TotalSoft_GV_2_11=jQuery('#TotalSoft_GV_CP_50').val();
    var TotalSoft_GV_2_12=jQuery('#TotalSoft_GV_CP_51').val();
    var TotalSoft_GV_2_13=jQuery('#TotalSoft_GV_CP_52').val();
    var TotalSoft_GV_2_14=jQuery('#TotalSoft_GV_CP_53').val();
    var TotalSoft_GV_2_15=jQuery('#TotalSoft_GV_CP_54').val();
    var TotalSoft_GV_2_16=jQuery('#TotalSoft_GV_CP_55').val();
    var TotalSoft_GV_2_17=jQuery('#TotalSoft_GV_CP_56').val();
    var TotalSoft_GV_2_18=jQuery('#TotalSoft_GV_CP_57').val();
    var TotalSoft_GV_2_19=jQuery('#TotalSoft_GV_CP_58').val();
    var TotalSoft_GV_2_20=jQuery('#TotalSoft_GV_CP_59').val();
    var TotalSoft_GV_2_21=jQuery('#TotalSoft_GV_CP_60').val();
    var TotalSoft_GV_2_22=jQuery('#TotalSoft_GV_CP_61').val();
    var TotalSoft_GV_2_23=jQuery('#TotalSoft_GV_CP_62').val();
    var TotalSoft_GV_2_24=jQuery('#TotalSoft_GV_CP_63').val();
    var TotalSoft_GV_2_25=jQuery('#TotalSoft_GV_CP_64').val();
    var TotalSoft_GV_2_27=jQuery('#TotalSoft_GV_CP_66').val();
    var TotalSoft_GV_2_28=jQuery('#TotalSoft_GV_CP_67').val();
    var TotalSoft_GV_2_29=jQuery('#TotalSoft_GV_CP_68').val();
    var TotalSoft_GV_2_32=jQuery('#TotalSoft_GV_CP_71').attr('checked');
    var TotalSoft_GV_2_33=jQuery('#TotalSoft_GV_CP_72').val();
    var TotalSoft_GV_2_34=jQuery('#TotalSoft_GV_CP_73').val();
    var TotalSoft_GV_2_35=jQuery('#TotalSoft_GV_CP_74').val();
    var TotalSoft_GV_2_36=jQuery('#TotalSoft_GV_CP_75').val();
    var TotalSoft_GV_2_37='';
    var TotalSoft_GV_2_38='';
    var TotalSoft_GV_2_39='';

    if(TotalSoft_GV_1_06=='checked') {
      TotalSoft_GV_1_06='true';
    }
    else {
      TotalSoft_GV_1_06='false';
    }
    if(TotalSoft_GV_1_11=='checked') {
      TotalSoft_GV_1_11='true';
    }
    else {
      TotalSoft_GV_1_11='false';
    }
    if(TotalSoft_GV_1_16=='checked') {
      TotalSoft_GV_1_16='true';
    }
    else {
      TotalSoft_GV_1_16='false';
    }
    if(TotalSoft_GV_2_32=='checked') {
      TotalSoft_GV_2_32='true';
    }
    else {
      TotalSoft_GV_2_32='false';
    }
    if(TotalSoft_GV_2_25=='1') {
      var TotalSoft_GV_2_26='totalsoft totalsoft-times';
    }
    else if(TotalSoft_GV_2_25=='2') {
      var TotalSoft_GV_2_26='totalsoft totalsoft-times-circle-o';
    }
    else if(TotalSoft_GV_2_25=='3') {
      var TotalSoft_GV_2_26='totalsoft totalsoft-times-circle';
    }
    if(TotalSoft_GV_2_29=='1') {
      var TotalSoft_GV_2_30='totalsoft totalsoft-angle-double-left';
      var TotalSoft_GV_2_31='totalsoft totalsoft-angle-double-right';
    }
    else if(TotalSoft_GV_2_29=='2') {
      var TotalSoft_GV_2_30='totalsoft totalsoft-angle-left';
      var TotalSoft_GV_2_31='totalsoft totalsoft-angle-right';
    }
    else if(TotalSoft_GV_2_29=='3') {
      var TotalSoft_GV_2_30='totalsoft totalsoft-arrow-circle-left';
      var TotalSoft_GV_2_31='totalsoft totalsoft-arrow-circle-right';
    }
    else if(TotalSoft_GV_2_29=='4') {
      var TotalSoft_GV_2_30='totalsoft totalsoft-arrow-circle-o-left';
      var TotalSoft_GV_2_31='totalsoft totalsoft-arrow-circle-o-right';
    }
    else if(TotalSoft_GV_2_29=='5') {
      var TotalSoft_GV_2_30='totalsoft totalsoft-arrow-left';
      var TotalSoft_GV_2_31='totalsoft totalsoft-arrow-right';
    }
    else if(TotalSoft_GV_2_29=='6') {
      var TotalSoft_GV_2_30='totalsoft totalsoft-caret-left';
      var TotalSoft_GV_2_31='totalsoft totalsoft-caret-right';
    }
    else if(TotalSoft_GV_2_29=='7') {
      var TotalSoft_GV_2_30='totalsoft totalsoft-caret-square-o-left';
      var TotalSoft_GV_2_31='totalsoft totalsoft-caret-square-o-right';
    }
    else if(TotalSoft_GV_2_29=='8') {
      var TotalSoft_GV_2_30='totalsoft totalsoft-chevron-circle-left';
      var TotalSoft_GV_2_31='totalsoft totalsoft-chevron-circle-right';
    }
    else if(TotalSoft_GV_2_29=='9') {
      var TotalSoft_GV_2_30='totalsoft totalsoft-chevron-left';
      var TotalSoft_GV_2_31='totalsoft totalsoft-chevron-right';
    }
    else if(TotalSoft_GV_2_29=='10') {
      var TotalSoft_GV_2_30='totalsoft totalsoft-hand-o-left';
      var TotalSoft_GV_2_31='totalsoft totalsoft-hand-o-right';
    }
    else if(TotalSoft_GV_2_29=='11') {
      var TotalSoft_GV_2_30='totalsoft totalsoft-long-arrow-left';
      var TotalSoft_GV_2_31='totalsoft totalsoft-long-arrow-right';
    }
  }
  else if(TotalSoftGalleryV_SetType=='Elastic Gallery') {
    var TotalSoft_GV_1_01=jQuery('#TotalSoft_GV_EG_01').val();
    var TotalSoft_GV_1_02=jQuery('#TotalSoft_GV_EG_02').val();
    var TotalSoft_GV_1_03=jQuery('#TotalSoft_GV_EG_03').val();
    var TotalSoft_GV_1_04=jQuery('#TotalSoft_GV_EG_04').val();
    var TotalSoft_GV_1_05=jQuery('#TotalSoft_GV_EG_05').val();
    var TotalSoft_GV_1_06=jQuery('#TotalSoft_GV_EG_06').val();
    var TotalSoft_GV_1_07=jQuery('#TotalSoft_GV_EG_07').val();
    var TotalSoft_GV_1_08=jQuery('#TotalSoft_GV_EG_08').val();
    var TotalSoft_GV_1_09=jQuery('#TotalSoft_GV_EG_09').val();
    var TotalSoft_GV_1_10=jQuery('#TotalSoft_GV_EG_10').val();
    var TotalSoft_GV_1_11=jQuery('#TotalSoft_GV_EG_11').val();
    var TotalSoft_GV_1_12=jQuery('#TotalSoft_GV_EG_12').val();
    var TotalSoft_GV_1_13=jQuery('#TotalSoft_GV_EG_13').val();
    var TotalSoft_GV_1_14=jQuery('#TotalSoft_GV_EG_14').val();
    var TotalSoft_GV_1_15=jQuery('#TotalSoft_GV_EG_15').val();
    var TotalSoft_GV_1_16=jQuery('#TotalSoft_GV_EG_16').attr('checked');
    var TotalSoft_GV_1_17=jQuery('#TotalSoft_GV_EG_17').val();
    var TotalSoft_GV_1_18=jQuery('#TotalSoft_GV_EG_18').val();
    var TotalSoft_GV_1_19=jQuery('#TotalSoft_GV_EG_19').val();
    var TotalSoft_GV_1_20=jQuery('#TotalSoft_GV_EG_20').val();
    var TotalSoft_GV_1_21=jQuery('#TotalSoft_GV_EG_21').val();
    var TotalSoft_GV_1_22=jQuery('#TotalSoft_GV_EG_22').val();
    var TotalSoft_GV_1_23=jQuery('#TotalSoft_GV_EG_23').val();
    var TotalSoft_GV_1_24=jQuery('#TotalSoft_GV_EG_24').val();
    var TotalSoft_GV_1_25=jQuery('#TotalSoft_GV_EG_25').val();
    var TotalSoft_GV_1_26=jQuery('#TotalSoft_GV_EG_26').val();
    var TotalSoft_GV_1_27=jQuery('#TotalSoft_GV_EG_27').val();
    var TotalSoft_GV_1_28=jQuery('#TotalSoft_GV_EG_28').val();
    var TotalSoft_GV_1_29=jQuery('#TotalSoft_GV_EG_29').val();
    var TotalSoft_GV_1_30=jQuery('#TotalSoft_GV_EG_30').val();
    var TotalSoft_GV_1_31=jQuery('#TotalSoft_GV_EG_31').val();
    var TotalSoft_GV_1_32=jQuery('#TotalSoft_GV_EG_32').val();
    var TotalSoft_GV_1_33=jQuery('#TotalSoft_GV_EG_33').val();
    var TotalSoft_GV_1_34=jQuery('#TotalSoft_GV_EG_34').val();
    var TotalSoft_GV_1_35=jQuery('#TotalSoft_GV_EG_35').val();
    var TotalSoft_GV_1_36=jQuery('#TotalSoft_GV_EG_36').val();
    var TotalSoft_GV_1_37=jQuery('#TotalSoft_GV_EG_37').attr('checked');
    var TotalSoft_GV_1_38=jQuery('#TotalSoft_GV_EG_38').attr('checked');
    var TotalSoft_GV_1_39=jQuery('#TotalSoft_GV_EG_39').val();
    var TotalSoft_GV_2_01=jQuery('#TotalSoft_GV_EG_40').val();
    var TotalSoft_GV_2_02=jQuery('#TotalSoft_GV_EG_41').val();
    var TotalSoft_GV_2_03=jQuery('#TotalSoft_GV_EG_42').val();
    var TotalSoft_GV_2_04=jQuery('#TotalSoft_GV_EG_43').val();
    var TotalSoft_GV_2_05=jQuery('#TotalSoft_GV_EG_44').val();
    var TotalSoft_GV_2_06=jQuery('#TotalSoft_GV_EG_45').val();
    var TotalSoft_GV_2_07=jQuery('#TotalSoft_GV_EG_46').val();
    var TotalSoft_GV_2_08=jQuery('#TotalSoft_GV_EG_47').val();
    var TotalSoft_GV_2_09=jQuery('#TotalSoft_GV_EG_48').val();
    var TotalSoft_GV_2_10=jQuery('#TotalSoft_GV_EG_49').val();
    var TotalSoft_GV_2_11=jQuery('#TotalSoft_GV_EG_50').val();
    var TotalSoft_GV_2_12=jQuery('#TotalSoft_GV_EG_51').val();
    var TotalSoft_GV_2_13=jQuery('#TotalSoft_GV_EG_52').val();
    var TotalSoft_GV_2_14=jQuery('#TotalSoft_GV_EG_53').val();
    var TotalSoft_GV_2_15=jQuery('#TotalSoft_GV_EG_54').val();
    var TotalSoft_GV_2_16=jQuery('#TotalSoft_GV_EG_55').val();
    var TotalSoft_GV_2_17=jQuery('#TotalSoft_GV_EG_56').val();
    var TotalSoft_GV_2_18=jQuery('#TotalSoft_GV_EG_57').val();
    var TotalSoft_GV_2_19=jQuery('#TotalSoft_GV_EG_58').val();
    var TotalSoft_GV_2_20='';
    var TotalSoft_GV_2_21='';
    var TotalSoft_GV_2_22='';
    var TotalSoft_GV_2_23='';
    var TotalSoft_GV_2_24='';
    var TotalSoft_GV_2_25='';
    var TotalSoft_GV_2_26='';
    var TotalSoft_GV_2_27='';
    var TotalSoft_GV_2_28='';
    var TotalSoft_GV_2_29='';
    var TotalSoft_GV_2_30='';
    var TotalSoft_GV_2_31='';
    var TotalSoft_GV_2_32='';
    var TotalSoft_GV_2_33='';
    var TotalSoft_GV_2_34='';
    var TotalSoft_GV_2_35='';
    var TotalSoft_GV_2_36='';
    var TotalSoft_GV_2_37='';
    var TotalSoft_GV_2_38='';
    var TotalSoft_GV_2_39='';

    if(TotalSoft_GV_1_16=='checked') {
      TotalSoft_GV_1_16='true';
    }
    else {
      TotalSoft_GV_1_16='false';
    }
    if(TotalSoft_GV_1_37=='checked') {
      TotalSoft_GV_1_37='true';
    }
    else {
      TotalSoft_GV_1_37='false';
    }
    if(TotalSoft_GV_1_38=='checked') {
      TotalSoft_GV_1_38='true';
    }
    else {
      TotalSoft_GV_1_38='false';
    }
  }
  else if(TotalSoftGalleryV_SetType=='Fancy Gallery') {
    var TotalSoft_GV_1_01=jQuery('#TotalSoft_GV_FG_01').val();
    var TotalSoft_GV_1_02=jQuery('#TotalSoft_GV_FG_02').val();
    var TotalSoft_GV_1_03=jQuery('#TotalSoft_GV_FG_03').val();
    var TotalSoft_GV_1_04=jQuery('#TotalSoft_GV_FG_04').val();
    var TotalSoft_GV_1_05=jQuery('#TotalSoft_GV_FG_05').val();
    var TotalSoft_GV_1_06=jQuery('#TotalSoft_GV_FG_06').val();
    var TotalSoft_GV_1_07=jQuery('#TotalSoft_GV_FG_07').val();
    var TotalSoft_GV_1_08=jQuery('#TotalSoft_GV_FG_08').val();
    var TotalSoft_GV_1_09=jQuery('#TotalSoft_GV_FG_09').val();
    var TotalSoft_GV_1_10=jQuery('#TotalSoft_GV_FG_10').val();
    var TotalSoft_GV_1_11=jQuery('#TotalSoft_GV_FG_11').val();
    var TotalSoft_GV_1_12=jQuery('#TotalSoft_GV_FG_12').val();
    var TotalSoft_GV_1_13=jQuery('#TotalSoft_GV_FG_13').val();
    var TotalSoft_GV_1_14=jQuery('#TotalSoft_GV_FG_14').val();
    var TotalSoft_GV_1_15=jQuery('#TotalSoft_GV_FG_15').val();
    var TotalSoft_GV_1_16=jQuery('#TotalSoft_GV_FG_16').val();
    var TotalSoft_GV_1_17=jQuery('#TotalSoft_GV_FG_17').val();
    var TotalSoft_GV_1_18=jQuery('#TotalSoft_GV_FG_18').val();
    var TotalSoft_GV_1_19=jQuery('#TotalSoft_GV_FG_19').val();
    var TotalSoft_GV_1_20=jQuery('#TotalSoft_GV_FG_20').val();
    var TotalSoft_GV_1_21=jQuery('#TotalSoft_GV_FG_21').val();
    var TotalSoft_GV_1_22=jQuery('#TotalSoft_GV_FG_22').val();
    var TotalSoft_GV_1_23=jQuery('#TotalSoft_GV_FG_23').val();
    var TotalSoft_GV_1_24=jQuery('#TotalSoft_GV_FG_24').val();
    var TotalSoft_GV_1_25=jQuery('#TotalSoft_GV_FG_25').val();
    var TotalSoft_GV_1_26=jQuery('#TotalSoft_GV_FG_26').val();
    var TotalSoft_GV_1_27=jQuery('#TotalSoft_GV_FG_27').val();
    var TotalSoft_GV_1_28=jQuery('#TotalSoft_GV_FG_28').val();
    var TotalSoft_GV_1_29=jQuery('#TotalSoft_GV_FG_29').val();
    var TotalSoft_GV_1_30=jQuery('#TotalSoft_GV_FG_30').val();
    var TotalSoft_GV_1_31=jQuery('#TotalSoft_GV_FG_31').val();
    var TotalSoft_GV_1_32=jQuery('#TotalSoft_GV_FG_32').val();
    var TotalSoft_GV_1_33=jQuery('#TotalSoft_GV_FG_33').val();
    var TotalSoft_GV_1_34=jQuery('#TotalSoft_GV_FG_34').val();
    var TotalSoft_GV_1_35=jQuery('#TotalSoft_GV_FG_35').val();
    var TotalSoft_GV_1_36=jQuery('#TotalSoft_GV_FG_36').val();
    var TotalSoft_GV_1_37=jQuery('#TotalSoft_GV_FG_37').val();
    var TotalSoft_GV_1_38=jQuery('#TotalSoft_GV_FG_38').val();
    var TotalSoft_GV_1_39=jQuery('#TotalSoft_GV_FG_39').val();
    var TotalSoft_GV_2_01=jQuery('#TotalSoft_GV_FG_40').val();
    var TotalSoft_GV_2_02=jQuery('#TotalSoft_GV_FG_41').val();
    var TotalSoft_GV_2_03=jQuery('#TotalSoft_GV_FG_42').val();
    var TotalSoft_GV_2_04=jQuery('#TotalSoft_GV_FG_43').val();
    var TotalSoft_GV_2_05=jQuery('#TotalSoft_GV_FG_44').val();
    var TotalSoft_GV_2_06=jQuery('#TotalSoft_GV_FG_45').val();
    var TotalSoft_GV_2_07=jQuery('#TotalSoft_GV_FG_46').val();
    var TotalSoft_GV_2_08=jQuery('#TotalSoft_GV_FG_47').val();
    var TotalSoft_GV_2_09=jQuery('#TotalSoft_GV_FG_48').attr('checked');
    var TotalSoft_GV_2_10=jQuery('#TotalSoft_GV_FG_49').attr('checked');
    var TotalSoft_GV_2_11=jQuery('#TotalSoft_GV_FG_50').attr('checked');
    var TotalSoft_GV_2_12=jQuery('#TotalSoft_GV_FG_51').attr('checked');
    var TotalSoft_GV_2_13=jQuery('#TotalSoft_GV_FG_52').val();
    var TotalSoft_GV_2_14=jQuery('#TotalSoft_GV_FG_53').val();
    var TotalSoft_GV_2_15=jQuery('#TotalSoft_GV_FG_54').val();
    var TotalSoft_GV_2_16=jQuery('#TotalSoft_GV_FG_55').val();
    var TotalSoft_GV_2_17=jQuery('#TotalSoft_GV_FG_56').val();
    var TotalSoft_GV_2_18=jQuery('#TotalSoft_GV_FG_57').val();
    var TotalSoft_GV_2_19=jQuery('#TotalSoft_GV_FG_58').val();
    var TotalSoft_GV_2_20=jQuery('#TotalSoft_GV_FG_59').val();
    var TotalSoft_GV_2_21=jQuery('#TotalSoft_GV_FG_60').val();
    var TotalSoft_GV_2_22=jQuery('#TotalSoft_GV_FG_61').val();
    var TotalSoft_GV_2_23=jQuery('#TotalSoft_GV_FG_62').val();
    var TotalSoft_GV_2_24=jQuery('#TotalSoft_GV_FG_63').val();
    var TotalSoft_GV_2_25=jQuery('#TotalSoft_GV_FG_64').val();
    var TotalSoft_GV_2_26=jQuery('#TotalSoft_GV_FG_65').val();
    var TotalSoft_GV_2_27=jQuery('#TotalSoft_GV_FG_66').val();
    var TotalSoft_GV_2_28=jQuery('#TotalSoft_GV_FG_67').val();
    var TotalSoft_GV_2_29='';
    var TotalSoft_GV_2_30='';
    var TotalSoft_GV_2_31='';
    var TotalSoft_GV_2_32='';
    var TotalSoft_GV_2_33='';
    var TotalSoft_GV_2_34='';
    var TotalSoft_GV_2_35='';
    var TotalSoft_GV_2_36='';
    var TotalSoft_GV_2_37='';
    var TotalSoft_GV_2_38='';
    var TotalSoft_GV_2_39='';


    if(TotalSoft_GV_2_09=='checked') {
      TotalSoft_GV_2_09='true';
    }
    else {
      TotalSoft_GV_2_09='false';
    }
    if(TotalSoft_GV_2_10=='checked') {
      TotalSoft_GV_2_10='true';
    }
    else {
      TotalSoft_GV_2_10='false';
    }
    if(TotalSoft_GV_2_11=='checked') {
      TotalSoft_GV_2_11='true';
    }
    else {
      TotalSoft_GV_2_11='false';
    }
    if(TotalSoft_GV_2_12=='checked') {
      TotalSoft_GV_2_12='true';
    }
    else {
      TotalSoft_GV_2_12='false';
    }
  }
  else if(TotalSoftGalleryV_SetType=='Parallax Engine') {
    var TotalSoft_GV_1_01=jQuery('#TotalSoft_GV_PE_01').val();
    var TotalSoft_GV_1_02=jQuery('#TotalSoft_GV_PE_02').val();
    var TotalSoft_GV_1_03=jQuery('#TotalSoft_GV_PE_03').val();
    var TotalSoft_GV_1_04=jQuery('#TotalSoft_GV_PE_04').val();
    var TotalSoft_GV_1_05=jQuery('#TotalSoft_GV_PE_05').val();
    var TotalSoft_GV_1_06=jQuery('#TotalSoft_GV_PE_06').val();
    var TotalSoft_GV_1_07=jQuery('#TotalSoft_GV_PE_07').val();
    var TotalSoft_GV_1_08=jQuery('#TotalSoft_GV_PE_08').val();
    var TotalSoft_GV_1_09=jQuery('#TotalSoft_GV_PE_09').val();
    var TotalSoft_GV_1_10=jQuery('#TotalSoft_GV_PE_10').val();
    var TotalSoft_GV_1_11=jQuery('#TotalSoft_GV_PE_11').val();
    var TotalSoft_GV_1_12=jQuery('#TotalSoft_GV_PE_12').val();
    var TotalSoft_GV_1_13=jQuery('#TotalSoft_GV_PE_13').val();
    var TotalSoft_GV_1_14=jQuery('#TotalSoft_GV_PE_14').val();
    var TotalSoft_GV_1_15=jQuery('#TotalSoft_GV_PE_15').attr('checked');
    var TotalSoft_GV_1_16=jQuery('#TotalSoft_GV_PE_16').val();
    var TotalSoft_GV_1_17=jQuery('#TotalSoft_GV_PE_17').val();
    var TotalSoft_GV_1_18=jQuery('#TotalSoft_GV_PE_18').val();
    var TotalSoft_GV_1_19=jQuery('#TotalSoft_GV_PE_19').val();
    var TotalSoft_GV_1_20=jQuery('#TotalSoft_GV_PE_20').attr('checked');
    var TotalSoft_GV_1_21=jQuery('#TotalSoft_GV_PE_21').val();
    var TotalSoft_GV_1_22=jQuery('#TotalSoft_GV_PE_22').val();
    var TotalSoft_GV_1_23=jQuery('#TotalSoft_GV_PE_23').val();
    var TotalSoft_GV_1_24=jQuery('#TotalSoft_GV_PE_24').val();
    var TotalSoft_GV_1_25=jQuery('#TotalSoft_GV_PE_25').val();
    var TotalSoft_GV_1_26=jQuery('#TotalSoft_GV_PE_26').val();
    var TotalSoft_GV_1_27=jQuery('#TotalSoft_GV_PE_27').attr('checked');
    var TotalSoft_GV_1_28=jQuery('#TotalSoft_GV_PE_28').val();
    var TotalSoft_GV_1_29=jQuery('#TotalSoft_GV_PE_29').val();
    var TotalSoft_GV_1_30=jQuery('#TotalSoft_GV_PE_30').val();
    var TotalSoft_GV_1_31=jQuery('#TotalSoft_GV_PE_31').val();
    var TotalSoft_GV_1_32=jQuery('#TotalSoft_GV_PE_32').val();
    var TotalSoft_GV_1_33=jQuery('#TotalSoft_GV_PE_33').val();
    var TotalSoft_GV_1_34=jQuery('#TotalSoft_GV_PE_34').val();
    var TotalSoft_GV_1_35=jQuery('#TotalSoft_GV_PE_35').val();
    var TotalSoft_GV_1_36=jQuery('#TotalSoft_GV_PE_36').val();
    var TotalSoft_GV_1_37=jQuery('#TotalSoft_GV_PE_37').val();
    var TotalSoft_GV_1_38=jQuery('#TotalSoft_GV_PE_38').val();
    var TotalSoft_GV_1_39=jQuery('#TotalSoft_GV_PE_39').val();
    var TotalSoft_GV_2_01=jQuery('#TotalSoft_GV_PE_40').val();
    var TotalSoft_GV_2_02=jQuery('#TotalSoft_GV_PE_41').val();
    var TotalSoft_GV_2_03=jQuery('#TotalSoft_GV_PE_42').val();
    var TotalSoft_GV_2_04=jQuery('#TotalSoft_GV_PE_43').val();
    var TotalSoft_GV_2_05=jQuery('#TotalSoft_GV_PE_44').val();
    var TotalSoft_GV_2_06=jQuery('#TotalSoft_GV_PE_45').val();
    var TotalSoft_GV_2_07=jQuery('#TotalSoft_GV_PE_46').val();
    var TotalSoft_GV_2_08=jQuery('#TotalSoft_GV_PE_47').val();
    var TotalSoft_GV_2_09=jQuery('#TotalSoft_GV_PE_48').val();
    var TotalSoft_GV_2_10=jQuery('#TotalSoft_GV_PE_49').val();
    var TotalSoft_GV_2_11=jQuery('#TotalSoft_GV_PE_50').val();
    var TotalSoft_GV_2_12=jQuery('#TotalSoft_GV_PE_51').val();
    var TotalSoft_GV_2_13=jQuery('#TotalSoft_GV_PE_52').val();
    var TotalSoft_GV_2_14=jQuery('#TotalSoft_GV_PE_53').val();
    var TotalSoft_GV_2_15=jQuery('#TotalSoft_GV_PE_54').val();
    var TotalSoft_GV_2_16=jQuery('#TotalSoft_GV_PE_55').val();
    var TotalSoft_GV_2_17=jQuery('#TotalSoft_GV_PE_56').val();
    var TotalSoft_GV_2_18=jQuery('#TotalSoft_GV_PE_57').val();
    var TotalSoft_GV_2_19=jQuery('#TotalSoft_GV_PE_58').val();
    var TotalSoft_GV_2_20=jQuery('#TotalSoft_GV_PE_59').val();
    var TotalSoft_GV_2_21='';
    var TotalSoft_GV_2_22='';
    var TotalSoft_GV_2_23='';
    var TotalSoft_GV_2_24='';
    var TotalSoft_GV_2_25='';
    var TotalSoft_GV_2_26='';
    var TotalSoft_GV_2_27='';
    var TotalSoft_GV_2_28='';
    var TotalSoft_GV_2_29='';
    var TotalSoft_GV_2_30='';
    var TotalSoft_GV_2_31='';
    var TotalSoft_GV_2_32='';
    var TotalSoft_GV_2_33='';
    var TotalSoft_GV_2_34='';
    var TotalSoft_GV_2_35='';
    var TotalSoft_GV_2_36='';
    var TotalSoft_GV_2_37='';
    var TotalSoft_GV_2_38='';
    var TotalSoft_GV_2_39='';

    if(TotalSoft_GV_1_15=='checked') {
      TotalSoft_GV_1_15='true';
    }
    else {
      TotalSoft_GV_1_15='false';
    }
    if(TotalSoft_GV_1_20=='checked') {
      TotalSoft_GV_1_20='true';
    }
    else {
      TotalSoft_GV_1_20='false';
    }
    if(TotalSoft_GV_1_27=='checked') {
      TotalSoft_GV_1_27='true';
    }
    else {
      TotalSoft_GV_1_27='false';
    }
  }
  else if(TotalSoftGalleryV_SetType=='Classic Gallery') {
    var TotalSoft_GV_1_01=jQuery('#TotalSoft_GV_CG_01').val();
    var TotalSoft_GV_1_02=jQuery('#TotalSoft_GV_CG_02').val();
    var TotalSoft_GV_1_03=jQuery('#TotalSoft_GV_CG_03').val();
    var TotalSoft_GV_1_04=jQuery('#TotalSoft_GV_CG_04').val();
    var TotalSoft_GV_1_05=jQuery('#TotalSoft_GV_CG_05').val();
    var TotalSoft_GV_1_06=jQuery('#TotalSoft_GV_CG_06').val();
    var TotalSoft_GV_1_07=jQuery('#TotalSoft_GV_CG_07').val();
    var TotalSoft_GV_1_08=jQuery('#TotalSoft_GV_CG_08').val();
    var TotalSoft_GV_1_09=jQuery('#TotalSoft_GV_CG_09').val();
    var TotalSoft_GV_1_10=jQuery('#TotalSoft_GV_CG_10').val();
    var TotalSoft_GV_1_11=jQuery('#TotalSoft_GV_CG_11').val();
    var TotalSoft_GV_1_12=jQuery('#TotalSoft_GV_CG_12').val();
    var TotalSoft_GV_1_13=jQuery('#TotalSoft_GV_CG_13').val();
    var TotalSoft_GV_1_14=jQuery('#TotalSoft_GV_CG_14').val();
    var TotalSoft_GV_1_15=jQuery('#TotalSoft_GV_CG_15').val();
    var TotalSoft_GV_1_16=jQuery('#TotalSoft_GV_CG_16').val();
    var TotalSoft_GV_1_17=jQuery('#TotalSoft_GV_CG_17').val();
    var TotalSoft_GV_1_18=jQuery('#TotalSoft_GV_CG_18').val();
    var TotalSoft_GV_1_19=jQuery('#TotalSoft_GV_CG_19').attr('checked');
    var TotalSoft_GV_1_20=jQuery('#TotalSoft_GV_CG_20').val();
    var TotalSoft_GV_1_21=jQuery('#TotalSoft_GV_CG_21').val();
    var TotalSoft_GV_1_22=jQuery('#TotalSoft_GV_CG_22').val();
    var TotalSoft_GV_1_23=jQuery('#TotalSoft_GV_CG_23').val();
    var TotalSoft_GV_1_24=jQuery('#TotalSoft_GV_CG_24').attr('checked');
    var TotalSoft_GV_1_25=jQuery('#TotalSoft_GV_CG_25').val();
    var TotalSoft_GV_1_26=jQuery('#TotalSoft_GV_CG_26').val();
    var TotalSoft_GV_1_27=jQuery('#TotalSoft_GV_CG_27').val();
    var TotalSoft_GV_1_28=jQuery('#TotalSoft_GV_CG_28').val();
    var TotalSoft_GV_1_29=jQuery('#TotalSoft_GV_CG_29').val();
    var TotalSoft_GV_1_30=jQuery('#TotalSoft_GV_CG_30').val();
    var TotalSoft_GV_1_31=jQuery('#TotalSoft_GV_CG_31').val();
    var TotalSoft_GV_1_32=jQuery('#TotalSoft_GV_CG_32').val();
    var TotalSoft_GV_1_33=jQuery('#TotalSoft_GV_CG_33').val();
    var TotalSoft_GV_1_34=jQuery('#TotalSoft_GV_CG_34').val();
    var TotalSoft_GV_1_35=jQuery('#TotalSoft_GV_CG_35').val();
    var TotalSoft_GV_1_36=jQuery('#TotalSoft_GV_CG_36').val();
    var TotalSoft_GV_1_37=jQuery('#TotalSoft_GV_CG_37').val();
    var TotalSoft_GV_1_38=jQuery('#TotalSoft_GV_CG_38').val();
    var TotalSoft_GV_1_39=jQuery('#TotalSoft_GV_CG_39').val();
    var TotalSoft_GV_2_01=jQuery('#TotalSoft_GV_CG_40').val();
    var TotalSoft_GV_2_02=jQuery('#TotalSoft_GV_CG_41').val();
    var TotalSoft_GV_2_03=jQuery('#TotalSoft_GV_CG_42').val();
    var TotalSoft_GV_2_04=jQuery('#TotalSoft_GV_CG_43').val();
    var TotalSoft_GV_2_05=jQuery('#TotalSoft_GV_CG_44').val();
    var TotalSoft_GV_2_06=jQuery('#TotalSoft_GV_CG_45').val();
    var TotalSoft_GV_2_07=jQuery('#TotalSoft_GV_CG_46').val();
    var TotalSoft_GV_2_08=jQuery('#TotalSoft_GV_CG_47').val();
    var TotalSoft_GV_2_09=jQuery('#TotalSoft_GV_CG_48').val();
    var TotalSoft_GV_2_10=jQuery('#TotalSoft_GV_CG_49').val();
    var TotalSoft_GV_2_11=jQuery('#TotalSoft_GV_CG_50').val();
    var TotalSoft_GV_2_12=jQuery('#TotalSoft_GV_CG_51').val();
    var TotalSoft_GV_2_13=jQuery('#TotalSoft_GV_CG_52').val();
    var TotalSoft_GV_2_14=jQuery('#TotalSoft_GV_CG_53').val();
    var TotalSoft_GV_2_15=jQuery('#TotalSoft_GV_CG_54').val();
    var TotalSoft_GV_2_16=jQuery('#TotalSoft_GV_CG_55').val();
    var TotalSoft_GV_2_17=jQuery('#TotalSoft_GV_CG_56').val();
    var TotalSoft_GV_2_18=jQuery('#TotalSoft_GV_CG_57').val();
    var TotalSoft_GV_2_19=jQuery('#TotalSoft_GV_CG_58').val();
    var TotalSoft_GV_2_20=jQuery('#TotalSoft_GV_CG_59').val();
    var TotalSoft_GV_2_21=jQuery('#TotalSoft_GV_CG_60').val();
    var TotalSoft_GV_2_22='';
    var TotalSoft_GV_2_23='';
    var TotalSoft_GV_2_24='';
    var TotalSoft_GV_2_25='';
    var TotalSoft_GV_2_26='';
    var TotalSoft_GV_2_27='';
    var TotalSoft_GV_2_28='';
    var TotalSoft_GV_2_29='';
    var TotalSoft_GV_2_30='';
    var TotalSoft_GV_2_31='';
    var TotalSoft_GV_2_32='';
    var TotalSoft_GV_2_33='';
    var TotalSoft_GV_2_34='';
    var TotalSoft_GV_2_35='';
    var TotalSoft_GV_2_36='';
    var TotalSoft_GV_2_37='';
    var TotalSoft_GV_2_38='';
    var TotalSoft_GV_2_39='';

    if(TotalSoft_GV_1_19=='checked') {
      TotalSoft_GV_1_19='true';
    }
    else {
      TotalSoft_GV_1_19='false';
    }
    if(TotalSoft_GV_1_24=='checked') {
      TotalSoft_GV_1_24='true';
    }
    else {
      TotalSoft_GV_1_24='false';
    }
  }
  else if(TotalSoftGalleryV_SetType=='Space Gallery') {
    var TotalSoft_GV_1_01=jQuery('#TotalSoft_GV_SG_01').val();
    var TotalSoft_GV_1_02=jQuery('#TotalSoft_GV_SG_02').val();
    var TotalSoft_GV_1_03=jQuery('#TotalSoft_GV_SG_03').val();
    var TotalSoft_GV_1_04=jQuery('#TotalSoft_GV_SG_04').val();
    var TotalSoft_GV_1_05=jQuery('#TotalSoft_GV_SG_05').val();
    var TotalSoft_GV_1_06=jQuery('#TotalSoft_GV_SG_06').val();
    var TotalSoft_GV_1_07=jQuery('#TotalSoft_GV_SG_07').val();
    var TotalSoft_GV_1_08=jQuery('#TotalSoft_GV_SG_08').val();
    var TotalSoft_GV_1_09=jQuery('#TotalSoft_GV_SG_09').val();
    var TotalSoft_GV_1_10=jQuery('#TotalSoft_GV_SG_10').val();
    var TotalSoft_GV_1_11='';
    var TotalSoft_GV_1_12=jQuery('#TotalSoft_GV_SG_12').val();
    var TotalSoft_GV_1_13='';
    var TotalSoft_GV_1_14=jQuery('#TotalSoft_GV_SG_14').val();
    var TotalSoft_GV_1_15=jQuery('#TotalSoft_GV_SG_15').val();
    var TotalSoft_GV_1_16=jQuery('#TotalSoft_GV_SG_16').val();
    var TotalSoft_GV_1_17=jQuery('#TotalSoft_GV_SG_17').val();
    var TotalSoft_GV_1_18=jQuery('#TotalSoft_GV_SG_18').val();
    var TotalSoft_GV_1_19=jQuery('#TotalSoft_GV_SG_19').val();
    var TotalSoft_GV_1_20=jQuery('#TotalSoft_GV_SG_20').val();
    var TotalSoft_GV_1_21=jQuery('#TotalSoft_GV_SG_21').val();
    var TotalSoft_GV_1_22=jQuery('#TotalSoft_GV_SG_22').val();
    var TotalSoft_GV_1_23=jQuery('#TotalSoft_GV_SG_23').val();
    var TotalSoft_GV_1_24=jQuery('#TotalSoft_GV_SG_24').val();
    var TotalSoft_GV_1_25=jQuery('#TotalSoft_GV_SG_25').val();
    var TotalSoft_GV_1_26=jQuery('#TotalSoft_GV_SG_26').val();
    var TotalSoft_GV_1_27=jQuery('#TotalSoft_GV_SG_27').val();
    var TotalSoft_GV_1_28=jQuery('#TotalSoft_GV_SG_28').val();
    var TotalSoft_GV_1_29=jQuery('#TotalSoft_GV_SG_29').val();
    var TotalSoft_GV_1_30=jQuery('#TotalSoft_GV_SG_30').val();
    var TotalSoft_GV_1_31=jQuery('#TotalSoft_GV_SG_31').val();
    var TotalSoft_GV_1_32=jQuery('#TotalSoft_GV_SG_32').val();
    var TotalSoft_GV_1_33=jQuery('#TotalSoft_GV_SG_33').val();
    var TotalSoft_GV_1_34='';
    var TotalSoft_GV_1_35='';
    var TotalSoft_GV_1_36='';
    var TotalSoft_GV_1_37='';
    var TotalSoft_GV_1_38='';
    var TotalSoft_GV_1_39='';
    var TotalSoft_GV_2_01=jQuery('#TotalSoft_GV_SG_40').val();
    var TotalSoft_GV_2_02=jQuery('#TotalSoft_GV_SG_41').val();
    var TotalSoft_GV_2_03=jQuery('#TotalSoft_GV_SG_42').val();
    var TotalSoft_GV_2_04=jQuery('#TotalSoft_GV_SG_43').val();
    var TotalSoft_GV_2_05=jQuery('#TotalSoft_GV_SG_44').val();
    var TotalSoft_GV_2_06=jQuery('#TotalSoft_GV_SG_45').val();
    var TotalSoft_GV_2_07=jQuery('#TotalSoft_GV_SG_46').val();
    var TotalSoft_GV_2_08=jQuery('#TotalSoft_GV_SG_47').val();
    var TotalSoft_GV_2_09=jQuery('#TotalSoft_GV_SG_48').val();
    var TotalSoft_GV_2_10=jQuery('#TotalSoft_GV_SG_49').val();
    var TotalSoft_GV_2_11=jQuery('#TotalSoft_GV_SG_50').val();
    var TotalSoft_GV_2_12=jQuery('#TotalSoft_GV_SG_51').val();
    var TotalSoft_GV_2_13=jQuery('#TotalSoft_GV_SG_52').val();
    var TotalSoft_GV_2_14=jQuery('#TotalSoft_GV_SG_53').val();
    var TotalSoft_GV_2_15=jQuery('#TotalSoft_GV_SG_54').val();
    var TotalSoft_GV_2_16=jQuery('#TotalSoft_GV_SG_55').val();
    var TotalSoft_GV_2_17=jQuery('#TotalSoft_GV_SG_56').val();
    var TotalSoft_GV_2_18=jQuery('#TotalSoft_GV_SG_57').val();
    var TotalSoft_GV_2_19=jQuery('#TotalSoft_GV_SG_58').val();
    var TotalSoft_GV_2_20=jQuery('#TotalSoft_GV_SG_59').val();
    var TotalSoft_GV_2_21=jQuery('#TotalSoft_GV_SG_60').val();
    var TotalSoft_GV_2_22=jQuery('#TotalSoft_GV_SG_61').val();
    var TotalSoft_GV_2_23=jQuery('#TotalSoft_GV_SG_62').val();
    var TotalSoft_GV_2_24=jQuery('#TotalSoft_GV_SG_63').val();
    var TotalSoft_GV_2_25=jQuery('#TotalSoft_GV_SG_64').val();
    var TotalSoft_GV_2_26=jQuery('#TotalSoft_GV_SG_65').val();
    var TotalSoft_GV_2_27=jQuery('#TotalSoft_GV_SG_66').val();
    var TotalSoft_GV_2_28=jQuery('#TotalSoft_GV_SG_67').val();
    var TotalSoft_GV_2_29=jQuery('#TotalSoft_GV_SG_68').val();
    var TotalSoft_GV_2_30=jQuery('#TotalSoft_GV_SG_69').val();
    var TotalSoft_GV_2_31=jQuery('#TotalSoft_GV_SG_70').val();
    var TotalSoft_GV_2_32=jQuery('#TotalSoft_GV_SG_71').val();
    var TotalSoft_GV_2_33=jQuery('#TotalSoft_GV_SG_72').val();
    var TotalSoft_GV_2_34=jQuery('#TotalSoft_GV_SG_73').val();
    var TotalSoft_GV_2_35=jQuery('#TotalSoft_GV_SG_74').val();
    var TotalSoft_GV_2_36='';
    var TotalSoft_GV_2_37='';
    var TotalSoft_GV_2_38='';
    var TotalSoft_GV_2_39='';
  }
  else if(TotalSoftGalleryV_SetType=='Effective Gallery') {
    var TotalSoft_GV_1_01=jQuery('#TotalSoft_GV_XG_01').val();
    var TotalSoft_GV_1_02=jQuery('#TotalSoft_GV_XG_02').val();
    var TotalSoft_GV_1_03=jQuery('#TotalSoft_GV_XG_03').val();
    var TotalSoft_GV_1_04=jQuery('#TotalSoft_GV_XG_04').val();
    var TotalSoft_GV_1_05=jQuery('#TotalSoft_GV_XG_05').val();
    var TotalSoft_GV_1_06=jQuery('#TotalSoft_GV_XG_06').val();
    var TotalSoft_GV_1_07=jQuery('#TotalSoft_GV_XG_07').val();
    var TotalSoft_GV_1_08=jQuery('#TotalSoft_GV_XG_08').attr('checked');
    var TotalSoft_GV_1_09=jQuery('#TotalSoft_GV_XG_09').val();
    var TotalSoft_GV_1_10=jQuery('#TotalSoft_GV_XG_10').val();
    var TotalSoft_GV_1_11=jQuery('#TotalSoft_GV_XG_11').attr('checked');
    var TotalSoft_GV_1_12=jQuery('#TotalSoft_GV_XG_12').val();
    var TotalSoft_GV_1_13=jQuery('#TotalSoft_GV_XG_13').val();
    var TotalSoft_GV_1_14=jQuery('#TotalSoft_GV_XG_14').val();
    var TotalSoft_GV_1_15=jQuery('#TotalSoft_GV_XG_15').val();
    var TotalSoft_GV_1_16=jQuery('#TotalSoft_GV_XG_16').val();
    var TotalSoft_GV_1_17=jQuery('#TotalSoft_GV_XG_17').val();
    var TotalSoft_GV_1_18=jQuery('#TotalSoft_GV_XG_18').val();
    var TotalSoft_GV_1_19=jQuery('#TotalSoft_GV_XG_19').val();
    var TotalSoft_GV_1_20=jQuery('#TotalSoft_GV_XG_20').val();
    var TotalSoft_GV_1_21=jQuery('#TotalSoft_GV_XG_21').val();
    var TotalSoft_GV_1_22=jQuery('#TotalSoft_GV_XG_22').val();
    var TotalSoft_GV_1_23=jQuery('#TotalSoft_GV_XG_23').val();
    var TotalSoft_GV_1_24=jQuery('#TotalSoft_GV_XG_24').val();
    var TotalSoft_GV_1_25=jQuery('#TotalSoft_GV_XG_25').attr('checked');
    var TotalSoft_GV_1_26=jQuery('#TotalSoft_GV_XG_26').val();
    var TotalSoft_GV_1_27=jQuery('#TotalSoft_GV_XG_27').val();
    var TotalSoft_GV_1_28=jQuery('#TotalSoft_GV_XG_28').val();
    var TotalSoft_GV_1_29=jQuery('#TotalSoft_GV_XG_29').val();
    var TotalSoft_GV_1_30=jQuery('#TotalSoft_GV_XG_30').val();
    var TotalSoft_GV_1_31=jQuery('#TotalSoft_GV_XG_31').val();
    var TotalSoft_GV_1_32=jQuery('#TotalSoft_GV_XG_32').val();
    var TotalSoft_GV_1_33=jQuery('#TotalSoft_GV_XG_33').val();
    var TotalSoft_GV_1_34=jQuery('#TotalSoft_GV_XG_34').val();
    var TotalSoft_GV_1_35=jQuery('#TotalSoft_GV_XG_35').val();
    var TotalSoft_GV_1_36=jQuery('#TotalSoft_GV_XG_36').val();
    var TotalSoft_GV_1_37=jQuery('#TotalSoft_GV_XG_37').val();
    var TotalSoft_GV_1_38=jQuery('#TotalSoft_GV_XG_38').val();
    var TotalSoft_GV_1_39=jQuery('#TotalSoft_GV_XG_39').val();
    var TotalSoft_GV_2_01=jQuery('#TotalSoft_GV_XG_40').val();
    var TotalSoft_GV_2_02=jQuery('#TotalSoft_GV_XG_41').val();
    var TotalSoft_GV_2_03=jQuery('#TotalSoft_GV_XG_42').val();
    var TotalSoft_GV_2_04=jQuery('#TotalSoft_GV_XG_43').val();
    var TotalSoft_GV_2_05=jQuery('#TotalSoft_GV_XG_44').val();
    var TotalSoft_GV_2_06=jQuery('#TotalSoft_GV_XG_45').val();
    var TotalSoft_GV_2_07=jQuery('#TotalSoft_GV_XG_46').val();
    var TotalSoft_GV_2_08=jQuery('#TotalSoft_GV_XG_47').val();
    var TotalSoft_GV_2_09=jQuery('#TotalSoft_GV_XG_48').val();
    var TotalSoft_GV_2_10=jQuery('#TotalSoft_GV_XG_49').val();
    var TotalSoft_GV_2_11=jQuery('#TotalSoft_GV_XG_50').val();
    var TotalSoft_GV_2_12=jQuery('#TotalSoft_GV_XG_51').val();
    var TotalSoft_GV_2_13=jQuery('#TotalSoft_GV_XG_52').val();
    var TotalSoft_GV_2_14=jQuery('#TotalSoft_GV_XG_53').val();
    var TotalSoft_GV_2_15=jQuery('#TotalSoft_GV_XG_54').val();
    var TotalSoft_GV_2_16=jQuery('#TotalSoft_GV_XG_55').val();
    var TotalSoft_GV_2_17=jQuery('#TotalSoft_GV_XG_56').val();
    var TotalSoft_GV_2_18=jQuery('#TotalSoft_GV_XG_57').val();
    var TotalSoft_GV_2_19=jQuery('#TotalSoft_GV_XG_58').val();
    var TotalSoft_GV_2_20=jQuery('#TotalSoft_GV_XG_59').val();
    var TotalSoft_GV_2_21='';
    var TotalSoft_GV_2_22='';
    var TotalSoft_GV_2_23='';
    var TotalSoft_GV_2_24='';
    var TotalSoft_GV_2_25='';
    var TotalSoft_GV_2_26='';
    var TotalSoft_GV_2_27='';
    var TotalSoft_GV_2_28='';
    var TotalSoft_GV_2_29='';
    var TotalSoft_GV_2_30='';
    var TotalSoft_GV_2_31='';
    var TotalSoft_GV_2_32='';
    var TotalSoft_GV_2_33='';
    var TotalSoft_GV_2_34='';
    var TotalSoft_GV_2_35='';
    var TotalSoft_GV_2_36='';
    var TotalSoft_GV_2_37='';
    var TotalSoft_GV_2_38='';
    var TotalSoft_GV_2_39='';

    if(TotalSoft_GV_1_08=='checked') {
      TotalSoft_GV_1_08='true';
    }
    else {
      TotalSoft_GV_1_08='false';
    }
    if(TotalSoft_GV_1_11=='checked') {
      TotalSoft_GV_1_11='true';
    }
    else {
      TotalSoft_GV_1_11='false';
    }
    if(TotalSoft_GV_1_25=='checked') {
      TotalSoft_GV_1_25='true';
    }
    else {
      TotalSoft_GV_1_25='false';
    }
  }
  else if(TotalSoftGalleryV_SetType=='Gallery Album') {
    var TotalSoft_GV_1_01=jQuery('#TotalSoft_GV_GA_01').val();
    var TotalSoft_GV_1_02=jQuery('#TotalSoft_GV_GA_02').val();
    var TotalSoft_GV_1_03=jQuery('#TotalSoft_GV_GA_03').val();
    var TotalSoft_GV_1_04=jQuery('#TotalSoft_GV_GA_04').val();
    var TotalSoft_GV_1_05=jQuery('#TotalSoft_GV_GA_05').val();
    var TotalSoft_GV_1_06=jQuery('#TotalSoft_GV_GA_06').val();
    var TotalSoft_GV_1_07=jQuery('#TotalSoft_GV_GA_07').val();
    var TotalSoft_GV_1_08=jQuery('#TotalSoft_GV_GA_08').val();
    var TotalSoft_GV_1_09=jQuery('#TotalSoft_GV_GA_09').val();
    var TotalSoft_GV_1_10=jQuery('#TotalSoft_GV_GA_10').val();
    var TotalSoft_GV_1_11=jQuery('#TotalSoft_GV_GA_11').val();
    var TotalSoft_GV_1_12=jQuery('#TotalSoft_GV_GA_12').attr('checked');
    var TotalSoft_GV_1_13=jQuery('#TotalSoft_GV_GA_13').val();
    var TotalSoft_GV_1_14=jQuery('#TotalSoft_GV_GA_14').val();
    var TotalSoft_GV_1_15=jQuery('#TotalSoft_GV_GA_15').val();
    var TotalSoft_GV_1_16=jQuery('#TotalSoft_GV_GA_16').val();
    var TotalSoft_GV_1_17=jQuery('#TotalSoft_GV_GA_17').val();
    var TotalSoft_GV_1_18=jQuery('#TotalSoft_GV_GA_18').val();
    var TotalSoft_GV_1_19=jQuery('#TotalSoft_GV_GA_19').val();
    var TotalSoft_GV_1_20=jQuery('#TotalSoft_GV_GA_20').val();
    var TotalSoft_GV_1_21=jQuery('#TotalSoft_GV_GA_21').val();
    var TotalSoft_GV_1_22='';
    var TotalSoft_GV_1_23='';
    var TotalSoft_GV_1_24='';
    var TotalSoft_GV_1_25=jQuery('#TotalSoft_GV_GA_25').val();
    var TotalSoft_GV_1_26=jQuery('#TotalSoft_GV_GA_26').val();
    var TotalSoft_GV_1_27=jQuery('#TotalSoft_GV_GA_27').val();
    var TotalSoft_GV_1_28=jQuery('#TotalSoft_GV_GA_28').val();
    var TotalSoft_GV_1_29=jQuery('#TotalSoft_GV_GA_29').val();
    var TotalSoft_GV_1_30=jQuery('#TotalSoft_GV_GA_30').val();
    var TotalSoft_GV_1_31=jQuery('#TotalSoft_GV_GA_31').val();
    var TotalSoft_GV_1_32=jQuery('#TotalSoft_GV_GA_32').val();
    var TotalSoft_GV_1_33=jQuery('#TotalSoft_GV_GA_33').val();
    var TotalSoft_GV_1_34=jQuery('#TotalSoft_GV_GA_34').val();
    var TotalSoft_GV_1_35=jQuery('#TotalSoft_GV_GA_35').val();
    var TotalSoft_GV_1_36=jQuery('#TotalSoft_GV_GA_36').val();
    var TotalSoft_GV_1_37=jQuery('#TotalSoft_GV_GA_37').val();
    var TotalSoft_GV_1_38=jQuery('#TotalSoft_GV_GA_38').val();
    var TotalSoft_GV_1_39=jQuery('#TotalSoft_GV_GA_39').val();
    var TotalSoft_GV_2_01=jQuery('#TotalSoft_GV_GA_40').val();
    var TotalSoft_GV_2_02=jQuery('#TotalSoft_GV_GA_41').val();
    var TotalSoft_GV_2_03=jQuery('#TotalSoft_GV_GA_42').val();
    var TotalSoft_GV_2_04=jQuery('#TotalSoft_GV_GA_43').val();
    var TotalSoft_GV_2_05=jQuery('#TotalSoft_GV_GA_44').val();
    var TotalSoft_GV_2_06=jQuery('#TotalSoft_GV_GA_45').val();
    var TotalSoft_GV_2_07=jQuery('#TotalSoft_GV_GA_46').val();
    var TotalSoft_GV_2_08=jQuery('#TotalSoft_GV_GA_47').val();
    var TotalSoft_GV_2_09=jQuery('#TotalSoft_GV_GA_48').val();
    var TotalSoft_GV_2_10=jQuery('#TotalSoft_GV_GA_49').val();
    var TotalSoft_GV_2_11=jQuery('#TotalSoft_GV_GA_50').val();
    var TotalSoft_GV_2_12=jQuery('#TotalSoft_GV_GA_51').val();
    var TotalSoft_GV_2_13=jQuery('#TotalSoft_GV_GA_52').val();
    var TotalSoft_GV_2_14='';
    var TotalSoft_GV_2_15='';
    var TotalSoft_GV_2_16='';
    var TotalSoft_GV_2_17='';
    var TotalSoft_GV_2_18='';
    var TotalSoft_GV_2_19='';
    var TotalSoft_GV_2_20='';
    var TotalSoft_GV_2_21='';
    var TotalSoft_GV_2_22='';
    var TotalSoft_GV_2_23='';
    var TotalSoft_GV_2_24='';
    var TotalSoft_GV_2_25='';
    var TotalSoft_GV_2_26='';
    var TotalSoft_GV_2_27='';
    var TotalSoft_GV_2_28='';
    var TotalSoft_GV_2_29='';
    var TotalSoft_GV_2_30='';
    var TotalSoft_GV_2_31='';
    var TotalSoft_GV_2_32='';
    var TotalSoft_GV_2_33='';
    var TotalSoft_GV_2_34='';
    var TotalSoft_GV_2_35='';
    var TotalSoft_GV_2_36='';
    var TotalSoft_GV_2_37='';
    var TotalSoft_GV_2_38='';
    var TotalSoft_GV_2_39='';

    if(TotalSoft_GV_1_12=='checked') {
      TotalSoft_GV_1_12='true';
    }
    else {
      TotalSoft_GV_1_12='false';
    }
  }
  var obj=new Array(TotalSoftGalleryV_SetName, TotalSoftGalleryV_SetType, TotalSoft_GV_1_01, TotalSoft_GV_1_02, TotalSoft_GV_1_03, TotalSoft_GV_1_04, TotalSoft_GV_1_05, TotalSoft_GV_1_06, TotalSoft_GV_1_07, TotalSoft_GV_1_08, TotalSoft_GV_1_09, TotalSoft_GV_1_10, TotalSoft_GV_1_11, TotalSoft_GV_1_12, TotalSoft_GV_1_13, TotalSoft_GV_1_14, TotalSoft_GV_1_15, TotalSoft_GV_1_16, TotalSoft_GV_1_17, TotalSoft_GV_1_18, TotalSoft_GV_1_19, TotalSoft_GV_1_20, TotalSoft_GV_1_21, TotalSoft_GV_1_22, TotalSoft_GV_1_23, TotalSoft_GV_1_24, TotalSoft_GV_1_25, TotalSoft_GV_1_26, TotalSoft_GV_1_27, TotalSoft_GV_1_28, TotalSoft_GV_1_29, TotalSoft_GV_1_30, TotalSoft_GV_1_31, TotalSoft_GV_1_32, TotalSoft_GV_1_33, TotalSoft_GV_1_34, TotalSoft_GV_1_35, TotalSoft_GV_1_36, TotalSoft_GV_1_37, TotalSoft_GV_1_38, TotalSoft_GV_1_39, TotalSoft_GV_2_01, TotalSoft_GV_2_02, TotalSoft_GV_2_03, TotalSoft_GV_2_04, TotalSoft_GV_2_05, TotalSoft_GV_2_06, TotalSoft_GV_2_07, TotalSoft_GV_2_08, TotalSoft_GV_2_09, TotalSoft_GV_2_10, TotalSoft_GV_2_11, TotalSoft_GV_2_12, TotalSoft_GV_2_13, TotalSoft_GV_2_14, TotalSoft_GV_2_15, TotalSoft_GV_2_16, TotalSoft_GV_2_17, TotalSoft_GV_2_18, TotalSoft_GV_2_19, TotalSoft_GV_2_20, TotalSoft_GV_2_21, TotalSoft_GV_2_22, TotalSoft_GV_2_23, TotalSoft_GV_2_24, TotalSoft_GV_2_25, TotalSoft_GV_2_26, TotalSoft_GV_2_27, TotalSoft_GV_2_28, TotalSoft_GV_2_29, TotalSoft_GV_2_30, TotalSoft_GV_2_31, TotalSoft_GV_2_32, TotalSoft_GV_2_33, TotalSoft_GV_2_34, TotalSoft_GV_2_35, TotalSoft_GV_2_36, TotalSoft_GV_2_37, TotalSoft_GV_2_38, TotalSoft_GV_2_39);
  var myJSON=JSON.stringify(obj);

  jQuery.ajax({
    type: 'POST', url: object.ajaxurl, data: {
      action: 'Total_Soft_GV_Prev', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
      foobar: myJSON, // translates into $_POST['foobar'] in PHP
    }, beforeSend: function() {
      jQuery('.Total_Soft_GV_Loading').css('display', 'block');
    }, success: function(response) {
      jQuery('.Total_Soft_GV_Loading').css('display', 'none');
      window.open(Total_Soft_GV_Theme_Prev, "_blank");
    }
  });
}