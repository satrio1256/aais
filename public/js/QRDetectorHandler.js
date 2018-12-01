class QRDetectorHandler {
  constructor(canvasElementId, loadingMessageId, outputContainerId, outputMessageId, outputDataId) {
    var video;
    var canvasElement;
    var context;
    var loadingMessage;
    var outputContainer;
    var outputMessage;
    var outputData;
    var stream;
    var getParentVariable = this; // HACK: https://stackoverflow.com/questions/34930771/why-is-this-undefined-inside-class-method-when-using-promises
    var playVideo = false;
    var cameras;
    var QRData;
    this.video = document.createElement("video");
    this.canvasElement = document.getElementById(canvasElementId);
    this.context = this.canvasElement.getContext("2d");
    this.loadingMessage = document.getElementById(loadingMessageId);
    this.outputContainer = document.getElementById(outputContainerId);
    this.outputMessage = document.getElementById(outputMessageId);
    this.outputData = document.getElementById(outputDataId);
    this.stream = null;

    QRDetectorHandler.prototype.drawLine = function (begin, end, color) {
      getParentVariable.context.beginPath();
      getParentVariable.context.moveTo(begin.x, begin.y);
      getParentVariable.context.lineTo(end.x, end.y);
      getParentVariable.context.lineWidth =
      getParentVariable.context.strokeStyle = color;
      getParentVariable.context.stroke();
    }

    QRDetectorHandler.prototype.tick = function () {
      if (getParentVariable.playVideo == true) {
        getParentVariable.loadingMessage.innerText = "Memuat Video...";
        if (getParentVariable.video.readyState === getParentVariable.video.HAVE_ENOUGH_DATA) {
          getParentVariable.loadingMessage.hidden = true;
          getParentVariable.canvasElement.hidden = false;
          getParentVariable.outputContainer.hidden = false;
          getParentVariable.canvasElement.height = getParentVariable.video.videoHeight;
          getParentVariable.canvasElement.width = getParentVariable.video.videoWidth;
          getParentVariable.context.drawImage(getParentVariable.video, 0, 0, getParentVariable.canvasElement.width, getParentVariable.canvasElement.height);
          var imageData = getParentVariable.context.getImageData(0, 0, getParentVariable.canvasElement.width, getParentVariable.canvasElement.height);
          var code = jsQR(imageData.data, imageData.width, imageData.height);
          if (code) {
            getParentVariable.drawLine(code.location.topLeftCorner, code.location.topRightCorner, "#FF3B58");
            getParentVariable.drawLine(code.location.topRightCorner, code.location.bottomRightCorner, "#FF3B58");
            getParentVariable.drawLine(code.location.bottomRightCorner, code.location.bottomLeftCorner, "#FF3B58");
            getParentVariable.drawLine(code.location.bottomLeftCorner, code.location.topLeftCorner, "#FF3B58");
            if (code.data != "" && code.data != null && code.data != undefined) {
              // getParentVariable.outputMessage.hidden = true;
              // getParentVariable.outputData.parentElement.hidden = false;
              getParentVariable.outputData.innerText = code.data;
              getParentVariable.QRData = code.data;
              getParentVariable.stopDetecting();
            }
          } else {
            // getParentVariable.outputMessage.hidden = false;
            // getParentVariable.outputData.parentElement.hidden = true;
          }
        }
        requestAnimationFrame(getParentVariable.tick);
      }
    }

    QRDetectorHandler.prototype.getData = function () {
      return this.QRData;
    };

    QRDetectorHandler.prototype.getCameras = function () {
      var notEqualEmptyString = function(element) {
        return element != ""
      }
      getParentVariable.cameras = [];
      navigator.mediaDevices.enumerateDevices().then(function(devices) {
        devices.forEach(function(device) {
          getParentVariable.cameras.push(device.label);
        });
      });
      return getParentVariable.cameras.some(notEqualEmptyString);
    };

    QRDetectorHandler.prototype.startDetecting = function () {
      this.stream = navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } });
      this.stream.then(function(stream) {
        getParentVariable.video.srcObject = stream;
        getParentVariable.video.setAttribute("autoplay", true);
        getParentVariable.video.setAttribute("playsinline", true); // HACK: Required to tell iOS Safari to don't use fullscreen
        getParentVariable.video.play();
        getParentVariable.playVideo = true;
        requestAnimationFrame(getParentVariable.tick);
      });

      this.stream.catch(function(error) {
        getParentVariable.loadingMessage.innerText = "Gagal terhubung dengan kamera."
      });
    }

    QRDetectorHandler.prototype.getStream = function() {
      return this.stream;
    }

    QRDetectorHandler.prototype.stopDetecting = function () {
      this.stream.then(function(stream) {
        stream.getTracks()[0].stop();
        getParentVariable.playVideo = false;
        getParentVariable.video.srcObject = null;
      });
    };

    QRDetectorHandler.prototype.clearCanvas = function () {
      this.context.clearRect(0, 0, canvas.width, canvas.height);
    };
  }
}
