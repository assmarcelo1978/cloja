  var latromi = latromi || {};

  latromi.myForm = function () {

  function onFormCreatedPrivate(arguments) {
    setupInstascan();
  }
  
  function setupInstascan() {
      let scanner = new Instascan.Scanner({
              video: document.getElementById("preview"),
              mirror: false // evita que o video fique espelhado
          }
      );
  
      scanner.addListener("scan", onScannerScan);
      
      Instascan.Camera.getCameras().then(function (cameras) {
          let selectedCamera;

          // Tratamento para pegar a camera traseira do smartphone
          if (cameras.length > 0) {
            for (let c = 0; c < cameras.length; c++) {
                if (cameras[c].name.indexOf('back') != -1) {
                    selectedCamera = cameras[c];
                }
            }
            
            if (!selectedCamera) selectedCamera = cameras[0];
          }
          
          if (selectedCamera) {
              scanner.start(selectedCamera);
          } else {
              console.error("No cameras found.");
          }
      });
  }
  
  function onScannerScan(value) {
    let form = latromi.formManager.getFormInstance();
    form.setFieldValue('txtQrCodeValue', value);
  }

  return {
    onFormCreated: onFormCreatedPrivate,
    onEventFiring: function(arguments) {  },
    onFieldValueChanged: function(arguments) { }
  }
  };

  // Declara o formulário
  var myForm = new latromi.myForm();

  // Adiciona Callbacks no Formulário
  latromi.formManager.setOnFormCreatedCallback( myForm.onFormCreated );
  latromi.formManager.setOnEventFiringCallback( myForm.onEventFiring );
  latromi.formManager.setOnFieldValueChangedCallback( myForm.onFieldValueChanged );