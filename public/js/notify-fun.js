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
