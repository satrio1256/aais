var myDropzone = [];
var comicUploads = [];
var multipleUploadTemp = [];
var globalJson = [];
var globalUpload = {};

function removeAllDropzone() {
  if (myDropzone != null) {
    $.each(myDropzone, function(index, e) {
      e.destroy();
    });
    myDropzone.length = 0;
  }
}

function modalOpen(e = null) {
    if (e != null) {
        e.preventDefault();
    }
    $(".modal-overlay").show();
    $(".modal-body").slideDown("slow");
}

function modalClose(e = null) {
    if (e != null) {
        e.preventDefault();
    }
    $(".modal-overlay").hide();
    $(".modal-body").hide();
    removeAllDropzone();
}

function changeHeader(header) {
    $('.modal-header .pull-left').empty();
    $('.modal-header .pull-left').html(header);
}

function notify(icon, message, type, posX = "top", posY = "right") {
  $.notify({
    //messages
    icon: icon,
    message: message
  },{
    //settings
      type: type, //success, info, warning, danger
      placement: {
        from: posX, //top, bottom
        align: posY //left, center, right
      },
      timer: 1000,
      delay: 2000,
      z_index: 9999,
      animate: {
      enter: 'animated fadeInRight',
      exit: 'animated fadeOutRight',
      },
      template: `
        <div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">
          <button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>
          <span data-notify="icon" style="display: inline-block; margin-right: 10px; font-size: 20px;"></span>
          <span data-notify="title">{1}</span>
          <span data-notify="message">{2}</span>
          <div class="progress" data-notify="progressbar">
          <div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
          </div>
          <a href="{3}" target="{4}" data-notify="url"></a>
        </div>
      `,
    }
  );
}

function getContent(contentName, getAuth) {
    removeAllDropzone();
    $(".loading").css("animation", "loadingBarColor 1.5s infinite");
    $(".loading").show();
    $.ajax({
      type: "GET",
      url: "getContent",
      data: {name: encodeURIComponent(contentName), auth: encodeURIComponent(getAuth)},
      dataType: "html",
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      statusCode: {
        403: function() {
          window.location.replace('/login');
        }
      }
    }).always(function(response) {
      $(".loading").hide();
    }).done(function(response) {
      if (contentName == "dashboard") {
        var header = "Beranda";
      } else if (contentName == "a_creations") {
        var header = "Moderasi Karya Anggota"
      } else if (contentName == "a_story") {
        var header = "Cerita"
      } else if (contentName == "a_illust") {
        var header = "Ilustrasi"
      } else if (contentName == "a_comics") {
        var header = "Komik"
      } else if (contentName == "news") {
        var header = "Publikasi Artikel"
      } else if (contentName == "sells") {
        var header = "Hasil Penjualan"
      } else if (contentName == "presence") {
        var header = "Presensi"
      } else if (contentName == "class_create") {
        var header = "Buat Sesi Pertemuan Baru"
      } else if (contentName == "lecturer") {
        var header = "Mentor"
      } else if (contentName == "submission") {
        var header = "Submisi Tugas"
      } else if (contentName == "auth") {
        var header = "Authentifikasi";
      } else if (contentName == "page_mgr") {
        var header = "Pengaturan Halaman Komik";
      } else if (contentName == "settings") {
        var header = "Pengaturan Akun";
      } else if (contentName == "analytics") {
        var header = "Analitik"
      } else if (contentName == "permission") {
        var header = "Manajemen Kepengurusan - Pengaturan Kewenangan"
      } else if (contentName == "role_holder") {
        var header = "Manajemen Kepengurusan - Pengaturan Pemegang Jabatan"
      } else if (contentName == "members") {
        var header = "Manajemen Anggota"
      }
      $('#content-header h1').empty();
      $('#content-header h1').html(header);
      $('#content-wrapper').empty();
      $('#content-wrapper').html(response);
      $("#authentication-code").html(getAuth);
      $(".loading").css("animation", "loadingBarColor 2s ease-out");
      $(".loading").hide();
      $(".loading").css("animation", "loadingBarColor 1.5s infinite");
    }).fail(function(response) {
      window.location.replace('/login');
    });
};

$(function() {
    Dropzone.autoDiscover = false;
    // getContent('dashboard');

    // $('.clickable').on("click", function (e) {
    //     e.preventDefault();
    //     getContent($(this).attr("href"));
    // });
    //
    $('#settings_button').on("click", function(e) {
      e.preventDefault();
      getContent('settings')
    });
});

function noError(errorCode, message = null) {
  if (errorCode == 0) {
    if (message != null) {
      notify("far fa-smile", message, "success");
    }
    return true;
  } else {
    if (errorCode == 1) {
      notify("far fa-frown", "Tidak semua form terisi<br />Mohon isi semua form", "danger");
    } else if (errorCode == 2) {
      notify("far fa-frown", "Terjadi kegagalan saat mengupload gambar", "danger");
    } else if (errorCode == 3) {
      notify("far fa-frown", "Anda harus menyetujui syarat dan ketentuan penggunaan kami", "danger");
    } else if (errorCode == 4) {
      notify("far fa-frown", "Anda sudah melakukan presensi untuk kelas ini", "warning");
    } else if (errorCode == 5) {
      notify("far fa-frown", "Kode authentifikasi yang anda masukkan salah", "danger");
    } else if (errorCode == 6) {
      notify("far fa-frown", "File yang dimasukkan terlalu besar. <br /> Mohon kurangi ukuran file yang diupload", "warning");
    } else if (errorCode == 7) {
      notify("far fa-frown", "Password yang Anda masukkan salah", "danger");
    } else if (errorCode == 8) {
      notify("far fa-frown", "Nama lengkap pemilik akun yang dihapus tidak sesuai", "danger");
    } else if (errorCode == 9) {
      notify("far fa-frown", "Kolom berwarna merah tidak boleh kosong", "danger");
    } else if (errorCode == 10) {
      notify("far fa-frown", "Whoops! Anda wajib mengupload gambar untuk mensubmit", "danger");
    } else if (errorCode == 998) {
      notify("far fa-frown", "Terjadi kesalahan saat melakukan proses submisi data. <br /> Silakan coba lagi nanti", "danger");
    } else if (errorCode == 999) {
      notify("far fa-frown", "Terjadi kesalahan yang tidak diketahui,<br />silakan coba lagi nanti.", "danger");
    }
    return false;
  }
}

function saveToTemp(uri) {
  comicUploads.push(uri);
}

function saveUploadUri(uri) {
  multipleUploadTemp.push(uri);
}

function saveEpisodesToDatabase(titleId, episodeCounter) {
  comicUploads = concatData(comicUploads);
  console.log(comicUploads);
  var form = $("#newEpisode").serializeArray();
  form.push({name: "titleId", value: encodeURIComponent(titleId)}, {name: "episode", value: encodeURIComponent(episodeCounter)}, {name: "pages", value: JSON.stringify(comicUploads)});
  comicUploads = [];
  $.ajax({
    type: "POST",
    url: "/post/new-episode",
    data: $.param(form),
    dataType: "json",
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  }).always(function(response) {
    if (noError(response.Error, "Berhasil Mengupload Episode Baru")) {
      modalClose();
      setGlobalJson("PageManager", response);
      getContent("page_mgr");
    }
  });
}

function setGlobalJson(identifier, arrayOfData) {
  globalJson[identifier] = arrayOfData;
}

function getGlobalJson() {
  return globalJson;
}

function nullifyJson() {
  globalJson = [];
}

function concatData(unConcated){
  return [].concat.apply([], unConcated);
}

function saveFormToDatabase(formIdentifier, type) {
  $.ajax({
    type: "POST",
    url: "/submit/"+type,
    data: $(formIdentifier).serialize(),
    dataType: "json",
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  }).done(function(response) {
    $(".overlay-uploading").remove();
    if (noError(response.Error, response.Message)) {
      if (type == "class-session") {
        getContent("auth", response.Auth);
      } else if (type == "pict-illust") {
        getContent("a_illust");
      } else if (type == "settings") {
        $("body").append(`
    			<div class="modal-overlay" style="display: block; z-index: 10000;">
    	      <div class="modal-body" style="display: block;">
    	        <div class="modal-content">
    	          <div style="top: 50%; left: 50%; transform: translate(-50%, -50%); position: absolute; text-align: center; font-size: 20px;">
    	            <div class="loading"></div> <br />
    	            Profil Mengalami Perubahan, <br>
    	            Memuat ulang laman.
    	          </div>
    	        </div>
    	      </div>
    	    </div>
    		`);
        location.reload();
      }
    }
  });
}

function updateCover(title) {
  $.ajax({
    type: "POST",
    url: "changeTitle",
    data: {title: encodeURIComponent(title)},
    dataType: "json",
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  }).done(function(response) {
    if (noError(response.Error)) {
      modalNewSerial("New Serial");
    }
  });
}

function createComicPageUploader(targetContainer, titleId, episodeCounter) {
  myDropzone.push(
    new Dropzone(targetContainer, {
      paramName: "comicPage",
      params: {transferName: "comicPage"},
      url: "/post/comic-page",
      uploadMultiple: true,
      autoProcessQueue: false,
      method: "POST",
      maxFilesize: 1,
      init: function() {
        this.on("addedfile", function(file) {
          if (file.size > 1024*1024*1) {
            this.removeFile(file);
            noError(6);
          }
        });
      },
      previewTemplate: `
        <div class="dz-preview dz-processing dz-image-preview dz-success dz-complete">
          <div class="dz-image"><img alt="" data-dz-thumbnail="" src=""></div>
          <div class="dz-details">
            <div class="dz-size">
              <span data-dz-size=""></span>
            </div>
            <div class="dz-filename">
              <span data-dz-name=""></span>
            </div>
            <a class="dz-remove" data-dz-remove="" href="javascript:undefined;" style="margin-top: 5px;">Remove file</a>
          </div>
          <div class="dz-progress">
            <span class="dz-upload" data-dz-uploadprogress="" style="width: 100%;"></span>
          </div>
          <div class="dz-error-message">
            <span data-dz-errormessage=""></span>
          </div>
          <div class="dz-success-mark"></div>
          <div class="dz-error-mark"></div>
        </div>
      `,
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      uploadprogress: function (file, progress, bytesSent) {
        // $(".progress").css("width", (progress)+"%");
        $(".progress-decimal").html(Math.floor(progress)+"%");
        $(".progress-bar").css("width", (progress)+"%");
      },
      processing: function() {
        this.options.autoProcessQueue = true;
      },
      successmultiple: function (file, response) {
        saveToTemp(response.Page.Url);
      },
      queuecomplete: function (file, response) {
        if (this.files[0].status == Dropzone.SUCCESS) {
          saveEpisodesToDatabase(titleId, episodeCounter);
        }
      },
      error: function(file) {
        // FIXME: Add Error Message if Unknown Error Happen, but check if previous error already called
      },
    })
  );
}

function createSingleImageUploader(targetContainer, type, maxFileSize, callSaveToDatabase, data = undefined) {
  myDropzone.push(new Dropzone(targetContainer, {
    paramName: type,
		params: {transferName: type},
		url: "/upload/"+type,
		type: "POST",
		maxFiles: 1,
		parallelUpload: 1,
		maxFilesize: maxFileSize,
		addRemoveLinks: true,
		previewsContainer: false,
		autoProcessQueue: false,
		uploadMultiple: false,
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
    init: function() {
			this.on("addedfile", function(file) {
        //if file size more than 2 MB >> refer maxFilesize above
        if (file.size > 1024*1024*maxFileSize) {
          this.removeFile(file);
          noError(6);
        } else {
          if (this.files[1] != null) {
            this.removeFile(this.files[0]);
          }
          var temp = file.previewTemplate;
          var FR = new FileReader();
          FR.onload = function(e) {
            $(targetContainer).find(".dz-message").html(`
              <img src="`+e.target.result+`">
            `);
            $(targetContainer).css("background-image", "url('"+e.target.result+"')");
            $(targetContainer).find("dz-preview").hide();
          };
          FR.readAsDataURL(file);
        }
      });
		},
		success: function (file, response) {
      if (this.files[0].status == Dropzone.SUCCESS) {
				globalUpload[type] = response.image.imageUrl;
        // Check related page for function
        if (callSaveToDatabase) {
          if (data == undefined) {
            saveToDatabase($(targetContainer).closest("form"), type);
          } else {
            saveToDatabase($(targetContainer).closest("form"), type, data);
          }
        }
      }
    },
    error: function(file, response) {
      noError(response);
    }
  }));
}

function createMultipleUploader(targetContainer, type, maxFileSize, callSaveToDatabase, data = undefined) {
  myDropzone.push(new Dropzone(targetContainer, {
    paramName: type,
		params: {transferName: type},
		url: "/upload/"+type,
		type: "POST",
		// maxFiles: null,
		// parallelUpload: 1,
		maxFilesize: maxFileSize,
		addRemoveLinks: false,
    previewTemplate: `
      <div class="dz-preview dz-processing dz-image-preview dz-success dz-complete">
        <div class="dz-image"><img alt="" data-dz-thumbnail="" src=""></div>
        <div class="dz-details">
          <div class="dz-size">
            <span data-dz-size=""></span>
          </div>
          <div class="dz-filename">
            <span data-dz-name=""></span>
          </div>
          <a class="dz-remove" data-dz-remove="" href="javascript:undefined;" style="margin-top: 5px;">Remove file</a>
        </div>
        <div class="dz-progress">
          <span class="dz-upload" data-dz-uploadprogress="" style="width: 100%;"></span>
        </div>
        <div class="dz-error-message">
          <span data-dz-errormessage=""></span>
        </div>
        <div class="dz-success-mark"></div>
        <div class="dz-error-mark"></div>
      </div>
    `,
		autoProcessQueue: false,
		uploadMultiple: true,
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
    init: function() {
			this.on("addedfile", function(file) {
        //if file size more than 2 MB >> refer maxFilesize above
        if (file.size > 1024*1024*maxFileSize) {
          this.removeFile(file);
          noError(6);
        }
      });
      if (data != undefined) {
        this.on("sending", function(file, xhr, formData) {
          formData.append("extraData", JSON.stringify(data));
        });
      }
		},
    uploadprogress: function (file, progress, bytesSent) {
      $(".progress").css("width", (progress)+"%");
    },
    processing: function() {
      this.options.autoProcessQueue = true;
    },
    success: function (file, response) {
      saveUploadUri(response.image.imageUrl);
    },
    queuecomplete: function (file, response) {
      if (this.files[0].status == Dropzone.SUCCESS) {
        globalUpload[type] = multipleUploadTemp;
        multipleUploadTemp = [];
      }
      if (callSaveToDatabase) {
        if (data == undefined) {
          saveToDatabase($(targetContainer).closest("form"), type);
        } else {
          globalUpload[type] = concatData(globalUpload[type]);
          saveToDatabase($(targetContainer).closest("form"), type, JSON.stringify(data));
        }
      }
    },
    error: function(file, response) {

    }
  }));
}

function createUploader(targetContainer, maxFiles, thumbnails, type, titleBinding = null) {
  myDropzone.push(
    new Dropzone(targetContainer, {
      paramName: type,
      params: {transferName: type},
      url: "/upload/"+type,
      type: "POST",
      maxFiles: null,
      parallelUpload: maxFiles,
      maxFilesize: 2,
      addRemoveLinks: true,
      previewsContainer: false,
      // createImageThumbnails: thumbnails,
      uploadMultiple: false,
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      init: function() {
        this.on("addedfile", function(file) {
          //if file size more than 2 MB >> refer maxFilesize above
          if (file.size > 1024*1024*1) {
            this.removeFile(file);
            noError(6);
          } else {
            var temp = file.previewTemplate;
            var FR = new FileReader();
            FR.onload = function(e) {
              $(targetContainer).find(".dz-message").html(`
                <img src="`+e.target.result+`">
              `);
              $(targetContainer).css("background-image", "url('"+e.target.result+"')");
              $(targetContainer).find("dz-preview").hide();
            };
            FR.readAsDataURL(file);
          }
        });
      },
      success: function (file, response) {
        if (this.files[0].status == Dropzone.SUCCESS) {
          if (titleBinding != null) {
            updateCover(titleBinding);
          }
          if ($(targetContainer).children(".uri")) {
            $(".uri").remove();
          }
          // $(targetContainer).find(".uri").val(response.image.imageUrl);
          $(targetContainer).parent().append(`<input class="uri" style='display: none;' name='uploadURI' value='`+response.image.imageUrl+`' readonly/>`);
        }
      },
      error: function(file, response) {
        noError(response);
      }
    })
  );
}

function addCommas(nStr)
{
  nStr += '';
  x = nStr.split('.');
  x1 = x[0];
  x2 = x.length > 1 ? '.' + x[1] : '';
  var rgx = /(\d+)(\d{3})/;
  while (rgx.test(x1)) {
    x1 = x1.replace(rgx, '$1' + ',' + '$2');
  }
  return x1 + x2;
}
